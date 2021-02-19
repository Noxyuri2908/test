<div class="col-lg-12">
  <div class="sidebar-item categories">
    <div class="sidebar-heading">
      <h2>Categories</h2>
        <div class="content">
          @foreach($categories as $cate)
          <ul>
            <li style="line-height: 2;"><a href="#"># {{ $cate->name }}</a></li>
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
        <div class="content">
          <ul>
            @foreach($tags as $tg)
            <li><a href="#">{{ $tg->name }}</a></li>
            @endforeach
        </div>
    </div>
  </div>
</div>