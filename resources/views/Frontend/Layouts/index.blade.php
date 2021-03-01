<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="T">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <title>newsHome</title>
    <link href="{{asset('Frontends/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Frontends/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('Frontends/assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('Frontends/assets/css/owl.css')}}">
  </head>

  <!-- header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#"><h2>Truthful News<em>.</em></h2></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('index')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            @foreach($categories as $cate)
            <li class="nav-item">
              <a class="nav-link" href="{{route('get-details-category', ['id' => $cate->id])}}">{{ $cate->name }}</a>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="sidebar-item search">
          <form class="dropdown" id="search_form" name="term" method="GET" action="{{ route('search') }}">
            <input name="search" onclick="Function()" class="dropbtn" type="text" id="myInput" onkeyup="myFunction()" placeholder="type to search..." autocomplete="on">    
          </form> 
          <ul class="dropdown-content" id="myUL">
            @foreach($details as $dt)
            <li><a href="{{route('get-detail-news', ['id' => $news->id])}}">{{ $dt->title }}</a></li>
            @endforeach
          </ul>  
        </div>
          <i style="padding-left: 60px" class="fa fa-search" aria-hidden="true"></i>  
      </div>
    </nav>
  </header>

  <!-- body -->
  <body>
    @yield('content')
  </body>

  <!-- footer -->
  <footer>
    <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
         <div class="row my-5 justify-content-center py-5">
             <div class="col-lg-12" style="padding-bottom: -200px;">
                 <div class="row col-lg-12" style="text-align: center;">
                     <div class="col-lg-4">
                         <h3 class="text-muted mb-md-0 mb-5 bold-text">BkitSoftware.</h3>
                     </div>
                     <div class="col-lg-4">
                         <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6>
                         <ul class="list-unstyled">
                             <li>Home</li>
                             <li>News</li>
                             <li>About us</li>
                             <li>Portfolio</li>
                         </ul>
                     </div>
                     <div class="col-lg-4">
                         <h6 class="mb-3 mb-lg-4 bold-text "><b>ADDRESS</b></h6>
                         <ul class="list-unstyled">
                             <li>BkitSoftware</li>
                             <li>488, Bach Mai street</li>
                             <li>Ha Noi, Viet Nam</li>
                         </ul>
                     </div>
                 </div>
                 <div class="row col-lg-12" style="text-align: center;">
                     <div class="col-lg-4">
                      <p style="padding-left: 160px;" class="social text-muted mb-0 pb-0 bold-text"><span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small class="rights"><span>&#174;
                      </span> Bkit Software All Rights Reserved.</small>
                     </div>
                     <div class="col-lg-4">
                      <h6 class="mt-55 mt-2 text-muted bold-text"><b>Company Email</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> BkitSoftware@gmail.com</small>  
                     </div>
                     <div class="col-lg-4">
                      <h6 class="text-muted bold-text"><b>Personal Email</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> Yuri@gmail.com</small>
                     </div>
                 </div>
             </div>
         </div>
    </div> 
  </footer>
<script type="text/javascript">
    var path = "{{ route('search') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function Function() {
  document.getElementById("myUL").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('Frontends/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('Frontends/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Additional Scripts -->
  <script src="{{asset('Frontends/assets/js/custom.js')}}"></script>
  <script src="{{asset('Frontends/assets/js/owl.js')}}"></script>
  <script src="{{asset('Frontends/assets/js/slick.js')}}"></script>
  <script src="{{asset('Frontends/assets/js/isotope.js')}}"></script>
  <script src="{{asset('Frontends/assets/js/accordions.js')}}"></script>


  @yield('js')
  
</html>