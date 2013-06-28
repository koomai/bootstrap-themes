@extends(theme_path('layout-'. Config::get('theme.columns') . '-column'))

@section('title')
  404
@stop

@section('content')
  <section>
    <h2 class="title">404 Error</h2>
    <p>Sorry this page can not be found.</p>
</section>
@stop

