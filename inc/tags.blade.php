<ul class="tags">
  @foreach ($post->tags as $item)
    @if ($item->tag != "")
      <li><a class="label label-info" href="{{ url('/tag/'.$item->tag) }}">{{ $item->tag }}</a></li>
    @endif
  @endforeach
</ul>