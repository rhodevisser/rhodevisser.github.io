@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<style>
    .blog-main {
        max-width: 800px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .banner_text {
        text-align: center;
        margin-bottom: 40px;
    }

    .banner_text h1 {
        font-family: 'Pacifico', cursive;
        font-size: 48px;
        color: rgb(17, 240, 50);
    }

    .blog-post-card {
        background-color: #1a1a1a;
        border: 1px solid rgb(190, 17, 240);
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        transition: border-color 0.3s;
    }

    .blog-post-card:hover {
        border-color: rgb(17, 240, 50);
    }

    .blog-post-card h2 {
        font-family: 'Raleway', sans-serif;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .blog-post-card h2 a {
        color: rgb(17, 240, 50);
        text-decoration: none;
    }

    .blog-post-card h2 a:hover {
        color: #f011c5;
    }

    .blog-post-meta {
        font-size: 14px;
        color: #888;
        margin-bottom: 10px;
    }

    .blog-post-excerpt {
        color: #b789ef;
        font-family: 'Lato', sans-serif;
        line-height: 1.6;
    }

    .no-posts {
        text-align: center;
        color: #b789ef;
        font-size: 18px;
        padding: 40px;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }

    @media (max-width: 768px) {
        .banner_text h1 {
            font-size: 36px;
        }
    }
</style>

<div class="blog-main">
    <div class="banner_text">
        <h1>Blog</h1>
    </div>

    @if($posts->count() > 0)
        @foreach($posts as $post)
            <article class="blog-post-card">
                <h2><a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a></h2>
                <div class="blog-post-meta">
                    {{ $post->published_at->format('d M Y') }}
                </div>
                <p class="blog-post-excerpt">
                    {{ $post->excerpt ?? strip_tags($post->content) }}
                </p>
            </article>
        @endforeach

        <div class="pagination">
            {{ $posts->links() }}
        </div>
    @else
        <p class="no-posts">Er zijn nog geen blog artikelen.</p>
    @endif
</div>
@endsection
