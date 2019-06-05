@extends('layouts.admin')
@section('content')
    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Редактировать Статью</h1>
        <br>
        <form method="post">
            {!! csrf_field() !!}
            <p>Выбор категории (ий):<br><select name="categories[]" class="form-control" multiple>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                                @if(in_array($category->id, $arrCategories))  selected @endif>{{$category->title}}</option>
                    @endforeach
                </select> </p>
            <p>Название статьи: <span style="color: red;">*</span><br><input value="{{ $article->title }}" type="text" name="title" class="form-control" required placeholder="мин.3, макс.100"></p>
            <p>Автор: <span style="color: red;">*</span><br><input value="{{ $article->author }}" type="text" name="author" class="form-control" required placeholder="мин.1, макс.50"></p>
            <p>Короткий текст: <span style="color: red;">*</span><br><textarea name="short_text" class="form-control" required>{!! $article->short_text !!}</textarea></p>
            <p>Полный текст:<br><textarea name="full_text" class="form-control">{!! $article->full_text !!}</textarea></p>
            <button type="submit" class="btn btn-success" style="cursor: pointer;">Редактировать</button>
        </form>
    </main>
@stop