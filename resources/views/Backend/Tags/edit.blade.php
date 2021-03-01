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
        <h1 class="page-header">Edit tag</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Edit here!</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form action="{{route('post-edit-tag', ['id' => $tags->id])}}" role="form" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Tag name</label>
                            <input class="form-control" type="text" name="name" value="{{ $tags->name}}" required="">
                        </div>
						<div class="form-group">
                            <label>Detail</label>
                            <select name="detail_id" class="form-control">
                                <option value="unselect" selected>Checking details</option>
                                @foreach($details as $dt)
                                <option value="{{ $dt->id }}">{{ $dt->id }}-{{ $dt->title }}</option>
                                @endforeach
                            </select>
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


