@extends('Frontend.Layouts.index')
@section('content')
@include('Frontend.Layouts.slide')
<section class="blog-posts grid-system">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            <div class="col-lg-6">
              @foreach($detail as $news)
              <div class="blog-post" style="width: 700px;">
                <div class="blog-thumb">
                  <img src='{{asset("uploads/news/details/$news->image")}}' width="700px" height="340px" alt="">
                </div>
                <div class="down-content">
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
              @endforeach
            </div>
            <div class="col-lg-12">
              <ul class="page-numbers">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12">
              <div class="sidebar-item search">
                <form id="search_form" name="gs" method="GET" action="#">
                  <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                </form>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h2>Recent News</h2>
                </div>
                <div class="content">
                  <ul>
                    @foreach($lastestDetail as $news)
                    <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">
                      <h5>{{ $news->title }}</h5>
                      <span>{{ $news->updated_at }}</span>
                    </a></li>
                    @endforeach
                  </ul>
                </div>
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