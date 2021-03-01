@extends('Frontend.Layouts.index')
@section('content')
<section class="blog-posts grid-system">
  <div class="container">
    <div class="row">
      <div class="col-lg-8"style="padding-top: 15px;">
        <div class="all-blog-posts">
          <div class="row">
            @foreach($test as $news)
            <div class="col-lg-6">
              <div class="blog-post" >
                <div class="blog-thumb">
                  <img src='{{asset("uploads/news/details/$news->image")}}'height="340px" alt="">
                </div>
                <div class="down-content down-content-category">
                  <a href="{{route('get-detail-news', ['id' => $news->id])}}"><h4>{{ $news->title }}</h4></a>
                  <ul class="post-info">
                    <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">Admin</a></li>
                    <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->updated_at }}</a></li>
                    <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->view }} Views</a></li>
                  </ul>
                  <p>{{ $news->description }}<a href="{{route('get-detail-news', ['id' => $news->id])}}">...read more</a></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <span><h6>#{{ $news->category->name }}</h6></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12" style="padding-top: -10px;">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h2>Recent News</h2>
                </div>
                <div>
                    @foreach($lastestDetail as $news)
                    <div class="blog-post row">
                      <div class="blog-thumb col-lg-6">
                        <img src='{{asset("uploads/news/details/$news->image")}}' width="150px" height="120px" style="float: left;" alt="">
                      </div>
                      <div class="down-content-left col-lg-6">
                        <a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->title }}</a>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @include('Frontend.Layouts.sidebar')
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection