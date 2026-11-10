@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Home page restored to original layout -->
<style>
    .home-main {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 20px;
    }

    .name_role {
        text-align: center;
        margin-bottom: 40px;
    }

    #main_name {
        font-family: 'Pacifico', cursive;
        font-size: 48px;
        color: rgb(17, 240, 50);
        margin: 0;
    }

    #main_role {
        font-family: 'Raleway', sans-serif;
        font-size: 24px;
        color: #b789ef;
        margin-top: 10px;
    }

    .container_introduction {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 900px;
        width: 100%;
    }

    .container_portrait {
        max-width: 400px;
        width: 100%;
        margin-bottom: 30px;
    }

    .container_portrait img {
        width: 100%;
        border-radius: 10px;
    }

    .introduction_text {
        max-width: 700px;
        text-align: center;
    }

    .introduction_text p {
        font-size: 20px;
        color: #b789ef;
        text-align: left;
        font-family: 'Lato', sans-serif;
        line-height: 1.8;
    }

    .home-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
    }

    .home-buttons a {
        color: rgb(17, 240, 50);
        font-size: 24px;
        text-decoration: none;
    }

    .home-buttons a:hover {
        color: #f011c5;
    }

    @media (max-width: 768px) {
        #main_name {
            font-size: 36px;
        }

        #main_role {
            font-size: 18px;
        }
    }
</style>

<div class="home-main">
    <!-- Name and role -->
    <div class="name_role">
        <h1 id="main_name">Rhodé Visser</h1>
        <h2 id="main_role">Laravel Developer</h2>
    </div>

    <!-- Container introduction and portrait -->
    <div class="container_introduction">
        <!-- Portrait -->
        <div class="container_portrait">
            <img src="{{ asset('images/WIN_20261110_16_13_10_Pro.jpg') }}" alt="Rhodé Visser">
        </div>

        <!-- Introduction text -->
        <div class="introduction_text">
            <p>
                I build things with Laravel, and I like to collaborate with other creatives and developers.
            </p>
        </div>

    </div>
</div>
@endsection
