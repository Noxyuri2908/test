<div class="col-lg-12">
  <div class="sidebar-item comments">
    <div class="sidebar-heading">
      <h2><i class="fa fa-comments"></i>  Comments</h2>
    </div>
    <div class="content" id="form-comment">
      <ul>
        @foreach($commentsDetail as $cd)
        <li>
          <div class="author-thumb">
            <img src='{{asset("Frontends/assets/images/comment-author-02.jpg")}}' alt="">
          </div>
          <div class="right-content">
            <h4>{{ $cd->name }}<span>{{ $cd->created_at }}</span></h4>
            <p>{{ $cd->description }}</p>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
<div class="col-lg-12">
  <div class="sidebar-item submit-comment">
    <div class="sidebar-heading">
      <h2>Your comment</h2>
    </div>
    <div class="content">
     
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <fieldset>
              <input name="name" type="text" id="name" placeholder="Your name" required="">
            </fieldset>
          </div>
          <input type="hidden" name="detail_id" id="detail_id" value="{{ $detail->id }}" />
          <div class="col-lg-12">
            <fieldset>
              <textarea name="comment" rows="6" id="message" placeholder="Enter your comment" required=""></textarea>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <button type="button" id="form-submit" class="main-button">Post</button>
            </fieldset>
          </div>
        </div>
    </div>
  </div>
</div>
