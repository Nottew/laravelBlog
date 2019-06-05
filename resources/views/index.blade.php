@extends('layouts.app')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/blog/img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>My-Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($articles as $article)
                    <div class="post-preview">
                        <a href="{!! route('blog.show', [
                       'id'   => $article->id,
                       'slug' => Str::slug($article->title)
                    ]) !!}">
                            <h2 class="post-title">
                                {!! $article->title !!}
                            </h2>
                            <h4 class="post-subtitle">
                                {!! $article->short_text !!}
                            </h4>
                        </a>
                        <p class="post-meta">Опубликоал
                            <a href="#">{{$article->author}}</a>
                            в {!! $article->created_at->format('H:i - d/m/Y') !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@stop