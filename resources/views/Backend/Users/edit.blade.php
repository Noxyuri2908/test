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
        <h1 class="page-header">Edit User</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Edit User here!</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form action="{{route('post-edit-user', ['id' => $users->id])}}" role="form" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="{{ $users->name}}" required="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" value="{{ $users->email}}" required="">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="text" name="password" value="{{ $users->password}}" required="">
                        </div>														
                        <button type="submit" class="btn btn-primary" name="submit">Edit</button>
                        <button type="reset" class="btn btn-default">Reset</button>

                </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
@endsection


