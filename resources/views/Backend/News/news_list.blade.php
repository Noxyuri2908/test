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
        <h1 class="page-header">News Management</h1>
    </div>
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body" style="position: relative;">
                <a href="{{ route('add-news') }}" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Add a new News</a>
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">ID</th>
                            <th data-sortable="true">Title</th>
                            <th data-sortable="true">Slug</th>
                            <th data-sortable="true">Image</th>
                            <th data-sortable="true">View</th>
                            <th data-sortable="true">Content</th>
                            <th data-sortable="true">Descreption</th>
                            <th data-sortable="true">Edit</th>
                            <th data-sortable="true">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($details as $det)
	                        <tr style="height: 300px;">
	                            <td data-checkbox="true">{{ $det->id }}</td>
	                            <td data-checkbox="true"><a href="">{{ $det->title }}</a></td>	
                                <td data-checkbox="true">{{ $det->slug }}</td>
                                <td data-checkbox="true"><a href="">{{ $det->view }}</a></td>
                                <td data-checkbox="true">{{ $det->content }}</td>
                                <td data-sortable="true">{{ $det->Descreption }}</td>
	                            <td>
	                                <a href="Backends/News/Edit"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
	                            </td>

	                            <td>
	                                <a onclick="" href="Backends/Categories/Delete"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
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