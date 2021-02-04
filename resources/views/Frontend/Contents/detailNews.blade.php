@extends('Frontend.Layouts.index')
@section('content')
<section class="blog-posts grid-system">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            <div class="col-lg-6">
              <div class="blog-post" style="width: 700px;">
                <div class="blog-thumb">
                  <img src='{{asset("uploads/news/details/$detail->image")}}' width="700px" height="340px" alt="">
                </div>
                <div class="down-content">
                  <span>Lifestyle</span>
                  <a href="{{route('get-detail-news', ['id' => $detail->id])}}"><h4>{{ $detail->title }}</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">{{ $detail->updated_at }}</a></li>
                    <li><a href="#">{{ $detail->view }} Views</a></li>
                  </ul>
                  <p>{{ $detail->content }}</p>
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
          </div>
        </div>
      </div>
          @include('Frontend.Contents.comment')
    </div>
    <div class="col-lg-4"style="background-color: #FBFBEF;">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h2>Related News</h2>
                </div>
                <div class="content">
                  <ul>
                    @foreach($details as $news)
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
</section>
@endsection