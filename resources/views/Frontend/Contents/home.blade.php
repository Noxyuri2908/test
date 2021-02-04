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
                  <span>Lifestyle</span>
                  <a href="{{route('get-detail-news', ['id' => $news->id])}}"><h4>{{ $news->title }}</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">{{ $news->updated_at }}</a></li>
                    <li><a href="#">{{ $news->view }} Views</a></li>
                  </ul>
                  <p>{{ $news->description }}</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">creative</a>,</li>
                          <li><a href="#">ideas</a></li>
                        </ul>
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
      <div class="col-lg-4"style="background-color: #FBFBEF;">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h2>Recent News</h2>
                </div>
                <div class="content">
                  <ul>
                    @foreach($detail as $news)
                    <li><a href="">
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