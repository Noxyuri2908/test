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
        <h1 class="page-header">Category Management</h1>
    </div>
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body" style="position: relative;">
                <a href="{{ route('add-category') }}" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Add a new category</a>
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">ID</th>
                            <th data-sortable="true">Name</th>
                            <th data-sortable="true">Edit</th>
                            <th data-sortable="true">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($categories as $cate)
	                        <tr>
	                            <td data-checkbox="true">{{ $cate->id }}</td>
	                            <td data-checkbox="true"><a href="">{{ $cate->name }}</a></td>						        
	                            <td>
	                                <a href="{{route('get-edit-category', ['id' => $cate->id])}}"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
	                            </td>

	                            <td>
	                                <a onclick="" href="{{route('delete-category', ['id' => $cate->id])}}"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
	                            </td>
	                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <ul class="pagination" style="float: right;">
                
                </ul>
            </div>
        </div>
    </div>
</div><!--/.row-->	
@endsection