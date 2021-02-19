<div class="col-lg-12">
  <div class="sidebar-item comments">
    <div class="sidebar-heading">
      <h2>4 comments</h2>
    </div>
    <div class="content">
      <ul>
        <li>
          <div class="author-thumb">
            <img src="assets/images/comment-author-01.jpg" alt="">
          </div>
          <div class="right-content">
            <h4>Kate<span>May 16, 2021</span></h4>
            <p>i like this page because it provided a lot of various knowledge.</p>
          </div>
        </li>
        <li class="replied">
          <div class="author-thumb">
            <img src="assets/images/comment-author-02.jpg" alt="">
          </div>
          <div class="right-content">
            <h4>Man<span>May 20, 2021</span></h4>
            <p>i like this page because it provided a lot of various knowledge.</p>
          </div>
        </li>
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
        <form id="contact" action="{{route('post-comment',['id' => $detail->id])}}" method="post">
        	@csrf
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <fieldset>
              <input name="name" type="text" id="name" placeholder="Your name" required="">
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <textarea name="message" rows="6" id="message" placeholder="Your Message" required=""></textarea>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <button type="submit" id="form-submit" class="main-button">Send Message</button>
            </fieldset>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
