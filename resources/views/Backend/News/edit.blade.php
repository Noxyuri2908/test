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
        <h1 class="page-header">Edit News</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Let's complete this form!</div>
            <div class="panel-body">

                <form method="post" action="{{route('post-edit-news', ['id' => $details->id])}}" enctype="multipart/form-data" role="form">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>title</label>
                            <input type="text" class="form-control"  name="title" value="{{ $details->title}}" required="">
                        </div>
                        <div class="form-group">
                            <label>content</label>
                            <input type="text" class="form-control" name="content" value="{{ $details->content}}" required="">
                        </div>

                        <div class="form-group">
                            <label>view</label>
                            <input type="text" class="form-control" name="view" value="{{ $details->view}}" required="">
                        </div>

                        <div class="form-group">
                            <label>description</label>
                            <input type="text" class="form-control" name="description" value="{{ $details->description}}" required="">
                        </div>

                        <div class="form-group">
                            <label>image</label>
                            <input type="file" name="image" value="{{ $details->image}}">
                        </div>

                    <button type="submit" class="btn btn-primary" name="submit">Add</button>
                    <button type="reset" class="btn btn-default" name="reset">Reset</button>


                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
@endsection