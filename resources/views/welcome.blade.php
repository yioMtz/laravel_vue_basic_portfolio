<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-black">
  <div id="app">
    <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-black fixed-top">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <li class="navbar-item" >
                                   <router-link to="/" class="nav-link" data-toggle="collapse" data-target=".navbar-collapse.show">Home</router-link>
                            </li>
                            <li class="navbar-item" >
                                <router-link to="/projects" class="nav-link" data-toggle="collapse" data-target=".navbar-collapse.show">Projects</router-link>
                            </li>
                            <li class="navbar-item" >
                                   <router-link to="/about" class="nav-link" data-toggle="collapse" data-target=".navbar-collapse.show">About</router-link>
                            </li>
                            
                        <div class="navbar-item">
                            <router-link to="/contact" class="btn btn-success" data-toggle="collapse" data-target=".navbar-collapse.show">
                               Contact
                            </router-link>
                        </div>
                    </ul>
                </div>
        </nav>
    </header>
<div id="page-container">
    <div id="content-wrap" class="container">
      <transition name="router-anim" enter-active-class="animated fadeIn" leave-active-class="animated fadeOut">
        <router-view v-on:show-project="projectModal"></router-view>
      </transition>
    </div>
    <div id="footer">
        <div class="text-center text-white">
            <a href="https://vuejs.org/" style="text-decoration: none;color:white;" target="_blank">
                Made with <i class="fab fa-vuejs text-mint"></i>
            </a>
            <p>Copyright © 2019&nbsp;footer&nbsp;•&nbsp;text</p>
        </div>
    </div>
</div>
 <modal-component :title="title"></modal-component>
  </div>
</body>
</html>
