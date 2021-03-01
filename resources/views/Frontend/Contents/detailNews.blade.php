@extends('Frontend.Layouts.index')
@section('content')
<section class="blog-posts grid-system">
  <div class="container">
    <div class="row">
      <div class="col-lg-8" style="padding-top: 15px;">
        <div class="all-blog-posts">
          <div class="row">
            <div class="col-lg-6">
              <div class="blog-post" style="width: 700px;">
                <div class="blog-thumb">
                  <img src='{{asset("uploads/news/details/$detail->image")}}' width="700px" height="340px" alt="">
                </div>
                <div class="down-content">
                  <span><h12>{{ $detail->category->name }}</h12></span>
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
                          @foreach($tagsDetail as $td)
                          <li><a>{{ $td->name }}</a>,</li>
                          @endforeach
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
    <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12" style="padding-top: -10px;">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h2>Related News</h2>
                </div>
                <div>
                    @foreach($relatedDetail as $news)
                    <div class="blog-post row">
                      <div class="blog-thumb col-lg-6">
                        <img src='{{asset("uploads/news/details/$news->image")}}' width="150px" height="100px" style="float: left;" alt="">
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
</section>
@endsection

@section('js')
<script>
 $(document).ready(function() {
      $('#form-submit').click(function() {
          $.ajax({
              url: "{{route('post-comment')}}",
              type: 'POST',
              data: {
                'name' : $('#name').val(),
                'detail_id' : $('#detail_id').val(),
                'comment' : $('#message').val(),
                '_token': "{{csrf_token()}}"
                    },
          }).done(function(ketqua) {
            if (ketqua.status == true) {
              $("#form-comment ul li").before('<li><div class="author-thumb"><img src="/Frontends/assets/images/comment-author-02.jpg" alt=""></div><div class="right-content"><h4>' + ketqua.name + '<span>' + ketqua.date + '</span></h4><p>' + ketqua.description + '</p></div></li>');
            } else if (ketqua.status == false) {
              alert('null');
            }
            
          });
          
      });
  });
</script>
@endsection