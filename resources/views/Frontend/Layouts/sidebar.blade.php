<div class="col-lg-12">
  <div class="sidebar-item categories">
    <div class="sidebar-heading">
      <h2>Categories</h2>
        <div class="content">
          @foreach($categories as $cate)
          <ul>
            <li style="line-height: 2;"><a href="#">- {{ $cate->name }}</a></li>
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
            <li><a href="#">Awesome </a></li>
            <li><a href="#">Creative </a></li>
            <li><a href="#">Ideas</a></li>
            <li><a href="#">Creative</a></li>
            <li><a href="#">Ideas</a></li>
          </ul>
        </div>
    </div>
  </div>
</div>