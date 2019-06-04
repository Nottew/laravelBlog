@extends('layouts.admin')
@section('content')
    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Категории</h1>
        <br>
        <a href="{!! route('categories.add') !!}" class="btn btn-outline-success">Добавить</a>
        <br>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Наименование</th>
                <th>Описание</th>
                <th>Дата добавления</th>
                <th>Действия</th>
            </tr>

            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{!! $category->description !!}</td>
                    <td>{{ $category->created_at->format('d-m-Y H:i') }}</td>
                    <td><a href="{!! route('categories.edit', ['id' => $category->id]) !!}">Редактировать</a> ||
                        <a href="javascript:;" class="delete" rel="{{ $category->id }}">Удалить</a></td>

                </tr>
            @endforeach
        </table>
    </main>
@stop
@section('js')
    <script>
        $(function () {
            $(".delete").on('click', function () {
                if(confirm("Вы действительно хотите удалить запись?")){
                    let id = $(this).attr("rel");
                    $.ajax({
                        type: "DELETE",
                        url: "{!! route('categories.delete') !!}",
                        data: {_token:"{{ csrf_token() }}", id:id},
                        complete: function(){
                            alert("Категория была удалена!");
                            location.reload();
                        }
                    });
                }else{
                    alertify.error("Действие было отменено пользователем");
                }
            });
        });
    </script>
@stop