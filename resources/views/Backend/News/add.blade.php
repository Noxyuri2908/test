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
        <h1 class="page-header">Add News</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Let's complete this form!</div>
            <div class="panel-body">

                <form method="post" action="{{route('store-news')}}" enctype="multipart/form-data" role="form">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>title</label>
                            <input type="text" class="form-control"  name="title" required="">
                        </div>

                        <div class="form-group">
                            <label>view</label>
                            <input type="text" class="form-control" name="view" required="">
                        </div>

                        <div class="form-group">
                            <label>description</label>
                            <input type="text" class="form-control" name="description" required="">
                        </div>
                        
                        <div class="form-group">
                            <label>content</label>
                            <textarea class="form-control" rows="3" name="content"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Categories</label>
                            <select name="category_id" class="form-control">
                                <option value="unselect" selected>Checking category</option>
                                @foreach($categories as $cate)
                                <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <script type="text/javascript">
                                CKEDITOR.replace('content');
                        </script>

                        <div class="form-group">
                            <label>image</label>
                            <input type="file" name="image">
                        </div>

                    <button type="submit" class="btn btn-primary" name="submit">Add</button>
                    <button type="reset" class="btn btn-default" name="reset">Reset</button>


                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
@endsection