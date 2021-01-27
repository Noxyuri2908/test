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

        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">Admin Login Page</div>
                    <div class="panel-body">
                        <form action="{{route('post-login')}}" method="post" role="form">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter your email" name="email" type="email" autofocus="" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter your password" name="password" type="password" required="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="check" type="checkbox" value="Remember Me">Remember me
                                    </label>
                                </div>
                                <br/>
                                <input type="submit" name="submit" value="Login" class="btn btn-primary">
                                <input type="reset" name="resset" value="Reset" class="btn btn-primary" />							
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->	



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
    </body>

</html>
