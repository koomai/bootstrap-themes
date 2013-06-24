<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <link href="{{ url(theme_path('css/cyborg/bootstrap.min.css')) }}" rel="stylesheet" media="screen">
    <link href="{{ url(theme_path('css/style.css')) }}" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <header>
        <h1 class="well"><a href="{{ url('/') }}">{{ site_title() }}</a></h1>
      </header>
      <div class="row-fluid">
        <div class="content span9">
          @yield('content')
        </div>
        <div class="span3">
          @include(theme_path('inc.sidebar'))
        </div>
      </div>
    </div>
  </body>
</html>
