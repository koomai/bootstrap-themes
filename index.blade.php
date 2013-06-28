@extends(theme_path('layout-'. Config::get('theme.columns') . '-column'))

@section('content')
	<section class="home">
		@foreach ($posts as $post)
      @include(theme_path('inc.post'))
    @endforeach

    {{ $posts->links() }}
	</section>
@stop
