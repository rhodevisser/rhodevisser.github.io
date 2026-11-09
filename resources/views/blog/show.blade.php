@extends('layouts.app')

@section('title', $post->title)

@section('content')
<style>
    .blog-show-main {
        max-width: 800px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .blog-show-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .blog-show-header h1 {
        font-family: 'Pacifico', cursive;
        font-size: 42px;
        color: rgb(17, 240, 50);
        margin-bottom: 10px;
    }

    .blog-show-meta {
        font-size: 14px;
        color: #888;
    }

    .blog-show-content {
        color: #b789ef;
        font-family: 'Lato', sans-serif;
        font-size: 18px;
        line-height: 1.8;
    }

    .blog-show-content p {
        margin-bottom: 20px;
        text-align: left;
    }

    .blog-show-content img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin: 20px 0;
    }

    .back-link {
        display: inline-block;
        margin-top: 30px;
        color: rgb(17, 240, 50);
        text-decoration: none;
        font-family: 'Raleway', sans-serif;
    }

    .back-link:hover {
        color: #f011c5;
    }

    @media (max-width: 768px) {
        .blog-show-header h1 {
            font-size: 32px;
        }
    }
</style>

<div class="blog-show-main">
    <div class="blog-show-header">
        <h1>{{ $post->title }}</h1>
        <div class="blog-show-meta">
            {{ $post->published_at->format('d M Y') }}
        </div>
    </div>

    @if($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
    @endif

    <div class="blog-show-content">
        {!! $post->content !!}
    </div>

    <a href="{{ route('blog.index') }}" class="back-link">← Terug naar blog</a>
</div>
@endsection
