@extends('Frontend.Layouts.index')
@section('content')
<section class="blog-posts grid-system">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4 style="padding-bottom: 20px;"><i class="fa fa-bookmark" aria-hidden="true"></i> EDITOR NEWS</h4>
      </div>
      <hr>
      <div class="col-lg-12">
        <div class="row">
        @foreach($fourLastestDetail as $news)
          <div class="col-lg-3">
            <div class="all-blog-posts">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <img src='{{asset("uploads/news/details/$news->image")}}' height="170px" alt="">
                  </div>
                  <div class="down-content">
                    <a href="{{route('get-detail-news', ['id' => $news->id])}}"><h4>{{ $news->title }}</h4></a>
                    <ul class="post-info">
                      <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">Admin</a></li>
                      <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->updated_at }}</a></li>
                      <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->view }} Views</a></li>
                    </ul>
                  </div>
                </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
      <div class="col-lg-12">
        <h4 style="padding-bottom: 20px;"><i class="fa fa-bookmark" aria-hidden="true"></i> LASTEST NEWS</h4>
      </div>
      <hr>
    </div>
    <div class="row" style="height: 540px; overflow: hidden; ">
      <div class="col-lg-6">
        @foreach($lastestDetail as $news)
        <div class="blog-post">
          <div class="blog-thumb">
            <img src='{{asset("uploads/news/details/$news->image")}}' height="340px" alt="">
          </div>
          <div class="down-content">
            <a href="{{route('get-detail-news', ['id' => $news->id])}}"><h4>{{ $news->title }}</h4></a>
            <ul class="post-info">
              <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">Admin</a></li>
              <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->updated_at }}</a></li>
              <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->view }} Views</a></li>
            </ul>
            <p>{{ $news->description }}<a href="{{route('get-detail-news', ['id' => $news->id])}}">...read more</a></p>
          </div>
        </div>
        @endforeach
      </div>
      <div class="col-lg-6">
        <div class="all-blog-posts">
          <div>
            @foreach($fiveDetail as $news)
            <div class="blog-post row">
              <div class="blog-thumb col-lg-4" style="padding-left: -10px;">
                <img src='{{asset("uploads/news/details/$news->image")}}' width="150px" height="100px" style="float: left;" alt="">
              </div>
              <div class="down-content down-content-left col-lg-8">
                <a href="{{route('get-detail-news', ['id' => $news->id])}}"><h4>{{ $news->title }}</a>
                <ul class="post-info">
                <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">Admin</a></li>
                <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->updated_at }}</a></li>
                <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->view }} Views</a></li>
              </ul>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row" style=" padding-top: -30px;">
      <div class="col-lg-8">
        <div class="col-lg-12">
          <h4 style="padding-bottom: 20px;"><i class="fa fa-bookmark" aria-hidden="true"></i> TRENDING</h4>
        </div>
        @foreach($fourLastestDetail as $news)
          <div class="blog-post row">
            <div class="blog-thumb col-lg-4">
              <img src='{{asset("uploads/news/details/$news->image")}}'height="150px" style="float: left;" alt="">
            </div>
            <div class="down-content col-lg-8">
              <a href="{{route('get-detail-news', ['id' => $news->id])}}"><h4>{{ $news->title }}</h4></a>
              <ul class="post-info">
                <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">Admin</a></li>
                <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->updated_at }}</a></li>
                <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->view }} Views</a></li>
              </ul>
              <p>{{ $news->description }}<a href="{{route('get-detail-news', ['id' => $news->id])}}">...read more</a></p>
            </div>
          </div>
        @endforeach
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">
            @include('Frontend.Layouts.sidebar')
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <h4><i class="fa fa-bookmark" aria-hidden="true"></i> MORE TOP READ</h4>
      </div>
      <div class="col-lg-12"> 
        <div class="row">
          @foreach($fourLastestDetail as $news)
          <div class="blog-post col-lg-6 row">
            <div class="blog-thumb col-lg-4">
              <img src='{{asset("uploads/news/details/$news->image")}}'height="150px" style="float: left;" alt="">
            </div>
            <div class="down-content col-lg-8">
              <a href="{{route('get-detail-news', ['id' => $news->id])}}"><h4>{{ $news->title }}</h4></a>
              <ul class="post-info">
                <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">Admin</a></li>
                <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->updated_at }}</a></li>
                <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $news->view }} Views</a></li>
              </ul>
              <p>{{ $news->description }}<a href="{{route('get-detail-news', ['id' => $news->id])}}">...read more</a></p>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <h4><i class="fa fa-bookmark" aria-hidden="true"></i> SOTLIGHT</h4>
      </div>
      <div class="col-lg-12">
      <div class="col-lg-12"></div> 
        @include('Frontend.Layouts.slide')
      </div>
    </div>
  </div>
</section>
@endsection