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
        <h1 class="page-header">Comment Management</h1>
    </div>
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body" style="position: relative;">
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">ID</th>
                            <th data-sortable="true">Name</th>
                            <th data-sortable="true">Description</th>
                            <th data-sortable="true">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($comments as $cm)
	                        <tr>
                                <td data-checkbox="true">{{ $cm->id }}</td>
	                            <td data-checkbox="true">{{ $cm->name }}</td>
                                <td data-checkbox="true">{{ $cm->description }}</a></td>
	                            <td>
	                                <a onclick="" href="{{route('delete-comment', ['id' => $cm->id])}}"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
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