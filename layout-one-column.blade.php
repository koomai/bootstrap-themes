<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <link href="{{ url(theme_path('css/'. Config::get('theme.bootstrap-theme') .'/bootstrap.min.css')) }}" 
      rel="stylesheet" media="screen">
    <link href="{{ url(theme_path('css/style.one-column.css')) }}" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <header>
        <h1><a href="{{ url('/') }}">{{ site_title() }}</a></h1>
        <div class="navbar">
          <div class="navbar-inner">
            <ul class="nav clearfix">
              <li><a href="{{ url('/archive') }}">Posts</a></li>
              <li><a href="{{ url('/about') }}">About</a></li>
              <li><a href="{{ url('/rss') }}">RSS</a></li>
            </ul>             
          </div>
        </div>
      </header>
      <div class="content">
        @yield('content')
      </div>
      <footer>
      <p>Powered by <a href="http://wardrobe.ericlbarnes.com">Wardrobe</a></p>
      </footer>
    </div>
  </body>
</html>
