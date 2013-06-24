<div class="well sidebar">
    <!-- Section: About -->
    <h3>About</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis hoc dicit? Quod dicit Epicurus etiam de voluptate, quae minime sint voluptates, eas obscurari saepe et obrui.</p>
    <p>
        <iframe allowtransparency="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=wardrobecms" style="width:300px; height:20px;"></iframe>
    </p>
    <!-- Section: Archive -->
    <h3>Previous Posts</h3>
    <ul>
        @foreach (Wardrobe::posts() as $item)
          <li><a href="{{ url('/post/'.$item['slug']) }}">{{ $item['title'] }}</a></li>
        @endforeach
    </ul>
    <p><small><a href="{{ url('archive') }}" class="pull-right">Archive</a></small></p>
    <!-- Section: Tags -->
    <h3>Tags</h3>
    <ul class="tags clearfix">
        @foreach (Wardrobe::tags() as $item)
          @if ($item['tag'] != "")
            <li><a class="label label-info" href="{{ url('/tag/'.$item['tag']) }}">{{ $item['tag'] }}</a></li>
          @endif
        @endforeach        
    </ul>
    <!-- Section: RSS -->
    <h3>RSS</h3>
    <a href="{{ url('rss') }}">RSS Feed</a>
    <!-- Section: Credits -->
    <p class="credits"><small>Powered by <a href="http://wardrobecms.com/" target="_blank">Wardrobe</a></small></p>
</div>