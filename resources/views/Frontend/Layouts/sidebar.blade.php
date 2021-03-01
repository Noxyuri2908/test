<div class="col-lg-12">
  <div class="sidebar-item categories">
    <div class="sidebar-heading">
      <h2>Categories</h2>
      <hr>
        <div class="content">
          @foreach($categories as $cate)
          <ul>
            <li style="line-height: 2;"><a href="{{route('get-details-category', ['id' => $cate->id])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>  {{ $cate->name }}</a></li>
          </ul>
          @endforeach
        </div>
    </div>
  </div>
</div>
<div class="col-lg-12">
  <div class="sidebar-item tags">
    <div class="sidebar-heading">
      <h2>Tag Clouds</h2>
      <hr>
        <div class="content">
          <ul>
            @foreach($tags as $tg)
            <li><a href="{{route('get-detail-tag', ['id' => $tg->id])}}">{{ $tg->name }}</a></li>
            @endforeach
        </div>
    </div>
  </div>
</div>