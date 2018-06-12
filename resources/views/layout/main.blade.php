<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        @yield('style')
    </style>
</head>
<body>

<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{route('home')}}">
            <span class="icon">
              <i class="fas fa-home"></i>
            </span>
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            @yield('navbar_start')
            @each('components.projects.navbarprojectmenu', App\Category::allPublished()->where('parent_id', null), 'root')
        </div>

        <div class="navbar-end">
            @yield('navbar_end')
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    About me
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        Curriculum Vitae
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                @yield('title')
            </h1>
            <h2 class="subtitle">
                @yield('subtitle')
            </h2>
        </div>
    </div>
    <div class="hero-footer">
        @yield('hero-footer')
    </div>
</section>
@yield('content')

@include('layout.partials.footer')
</body>
</html>
