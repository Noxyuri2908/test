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
        <h1 class="page-header">Edit category</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Edit here!</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form action="{{route('post-edit-category', ['id' => $categories->id])}}" role="form" method="post">
                        @csrf
                        <div class="form-group">
                            <label>category name</label>
                            <input class="form-control" type="text" name="name" value="{{ $categories->name}}" required="">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status"
                                     id="optionsRadios1" value=1 checked="checked">active
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="optionsRadios2" value=0>inactive
                                </label>
                            </div>

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


