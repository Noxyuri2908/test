@extends('Backend.Layouts.index')

@section('content')
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add user</h1>
    </div> 
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Let's complete this form!</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" action="{{route('store-user')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>User name</label>
                            <input class="form-control" type="text" required="" name="name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" required="" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="text" required="" name="password">
                        </div>				
                        <button type="submit" class="btn btn-primary" name="submit">Add</button>
                        <button type="reset" class="btn btn-default">Reset</button>

                </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
@endsection


