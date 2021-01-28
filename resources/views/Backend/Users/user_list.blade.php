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
        <h1 class="page-header">Users Management</h1>
    </div>
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body" style="position: relative;">
                <a href="{{ route('add-user') }}" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Add a new User</a>
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">ID</th>
                            <th data-sortable="true">Name</th>
                            <th data-sortable="true">Email</th>
                            <th data-sortable="true">Password</th>
                            <th data-sortable="true">Edit</th>
                            <th data-sortable="true">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($users as $us)
	                        <tr style="height: 50px;">
	                            <td data-checkbox="true">{{ $us->id }}</td>
	                            <td data-checkbox="true"><a href="">{{ $us->name }}</a></td>
                                <td data-checkbox="true"><a href="">{{ $us->email }}</a></td>
                                <td data-checkbox="true">{{ $us->password }}</td>
	                            <td>
	                                <a href="{{ route('get-edit-user', ['id'=>$us->id])}}"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
	                            </td>

	                            <td>
	                                <a onclick="" href="{{ route('delete-user', ['id'=>$us->id])}}"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
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