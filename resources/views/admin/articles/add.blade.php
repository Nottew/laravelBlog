@extends('layouts.admin')
@section('content')
    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Добавить Категорию</h1>
        <br>
        <form method="post">
            {!! csrf_field() !!}
            <p>Выбор категорий:<br>
                <select name="categories[]" class="form-control"  multiple>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </p>
            <p>Название статьи:<br><input type="text" name="title" class="form-control" required></p>
            <p>Автор:<br><input type="text" name="author" class="form-control" required></p>
            <p>Короткий текст:<br><textarea name="short_text" class="form-control"></textarea></p>
            <p>Полный текст:<br><textarea name="full_text" class="form-control"></textarea></p>
            <button type="submit" class="btn btn-success" style="cursor: pointer;">Добавить</button>
        </form>
    </main>
@stop