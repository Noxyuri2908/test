<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DemoAdmin</title>

        <link href="{{asset('Backends/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('Backends/css/datepicker3.css')}}" rel="stylesheet">
        <link href="{{asset('Backends/css/styles.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./lentop.css">
        <!--Icons-->
        <script src="{{asset('Backends/js/lumino.glyphs.js')}}"></script>
        <script type="text/javascript" src="{{asset('Backends/ckeditor/ckeditor.js')}}"></script>
    </head>
    <body>
    	@include('Backend.Layouts.header')
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @yield('content')
        </div>
    </body>
    <script src="{{asset('Backends/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{asset('Backends/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('Backends/js/chart.min.js')}}"></script>
        <script src="{{asset('Backends/js/chart-data.js')}}"></script>
        <script src="{{asset('Backends/js/easypiechart.js')}}"></script>
        <script src="{{asset('Backends/js/easypiechart-data.js')}}"></script>
        <script src="{{asset('Backends/js/bootstrap-datepicker.js')}}"></script>	
        <script src="{{asset('Backends/js/bootstrap-table.js')}}"></script>
        <link rel="stylesheet" href="{{asset('Backends/css/bootstrap-table.css')}}"/>
        <script>
            $('#calendar').datepicker({
            });

            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
        </script>

</html>


