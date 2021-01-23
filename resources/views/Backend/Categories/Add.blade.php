<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add category</h1>
    </div> 
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Add a new category</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" action="{{route('StoreCategory')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Category name</label>
                            <input class="form-control" type="text" required="" name="ten_dm">
                        </div>																					
                        <button type="submit" class="btn btn-primary" name="submit">Add</button>
                        <button type="reset" class="btn btn-default">Reset</button>

                </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->



