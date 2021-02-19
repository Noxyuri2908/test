<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
      @foreach($detail as $news)
      <div class="item">
        <a href="{{route('get-detail-news', ['id' => $news->id])}}"><img src='{{asset("uploads/news/details/$news->image")}}' width="420" height="420" alt=""></a>
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
            </div>
            <a href="{{route('get-detail-news', ['id' => $news->id])}}"><h4>{{ $news->title }} </h4></a>
            <ul class="post-info">
              <li><a >Admin</a></li>
              <li><a >{{ $news->updated_at }}</a></li>
              <li><a >{{ $news->view }} Views</a></li>
            </ul>
          </div>
        </div>
      </div>
      @endforeach
      </div>
    </div>
  </div>
</div>