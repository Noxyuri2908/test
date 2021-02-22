<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="T">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>newsHome</title>
    <base href="{{asset('/')}}">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('Frontends/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('Frontends/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('Frontends/assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('Frontends/assets/css/owl.css')}}">
  </head>

  <!-- header -->
  <header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#"><h2>Truthful News<em>.</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('index')}}">Home 1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('index')}}">Home 1 <span class="sr-only">(current)</span></a>
            </li>
            @foreach($categories as $cate)
            <li class="nav-item">
              <a class="nav-link" href="">{{ $cate->name }}</a>
            </li>
            @endforeach
          </ul>
        </div>
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
             <div class="col-11">
                 <div class="row ">
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                     </div>
                     <div class="col-xl-4 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                         <h3 class="text-muted mb-md-0 mb-5 bold-text">BkitSoftware.</h3>
                     </div>
                     <div class="col-xl-3 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6>
                         <ul class="list-unstyled">
                             <li>Home</li>
                             <li>News</li>
                             <li>About us</li>
                             <li>Portfolio</li>
                         </ul>
                     </div>
                     <div class="col-xl-3 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>ADDRESS</b></h6>
                         <p class="mb-1">488, BackMai</p>
                         <p>Newspaper vector</p>
                     </div>
                 </div>
                 <div class="row ">
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                     </div>
                     <div class="col-xl-4 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                         <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small class="rights"><span>&#174;</span> Bkit Software All Rights Reserved.</small>
                     </div>
                     <div class="col-xl-3 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                         <h6 class="mt-55 mt-2 text-muted bold-text"><b>Company Email</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> BkitSoftware@gmail.com</small>
                     </div>
                     <div class="col-xl-3 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                         <h6 class="text-muted bold-text"><b>Personal Email</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> Yuri@gmail.com</small>
                     </div>
                 </div>
             </div>
         </div>
    </div> 
  </footer>





  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('Frontends/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('Frontends/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Additional Scripts -->
  <script src="{{asset('Frontends/assets/js/custom.js')}}"></script>
  <script src="{{asset('Frontends/assets/js/owl.js')}}"></script>
  <script src="{{asset('Frontends/assets/js/slick.js')}}"></script>
  <script src="{{asset('Frontends/assets/js/isotope.js')}}"></script>
  <script src="{{asset('Frontends/assets/js/accordions.js')}}"></script>

  <script language = "text/Javascript"> 
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }
  </script>
  @yield('js')
  
</html>