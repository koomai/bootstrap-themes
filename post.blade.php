@extends(theme_path('layout-'. Config::get('theme.columns') . '-column'))

@section('title')
  {{ $post->title }}
@stop

@section('content')
  <section class="post">
    <h2 class="title">{{ $post->title }}</h2>

    {{ $post->parsed_content }}

    @include(theme_path('inc.tags'))
</section>
@stop

