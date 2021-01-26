<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><span>THE BEST NEWS </span>Admin</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><span style="color: white;">HI, Adam</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Information</a></li>
                        <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg>Setting</a></li>
                        <li><a href=""><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tìm kiếm">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active">
            <a><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Management Home
            </a>
        </li>
        <li class="parent ">
            <a href="{{ route('user-list') }}">
                <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> User Management
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a href="{{ route('add-user')}}">
                        <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>
                        Add Users
                    </a>
                </li>
            </ul>           
        </li>
        <li class="parent ">
            <a href="{{ route('category-list') }}">
                <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Category Management
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li>
                    <a class="" href="{{ route('add-category')}}">
                        <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Category
                    </a>
                </li>

            </ul>           
        </li>
        <li class="parent ">
            <a href="{{ route('news-list') }}">
                <span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> News Management
            </a>
            <ul class="children collapse" id="sub-item-3">
                <li>
                    <a class="" href="{{ route('add-news')}}">
                        <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add News
                    </a>
                </li>

            </ul>               
        </li>
        <li class="parent ">
            <a href="#">
                <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg></span> Comment Management
            </a>

        </li>
        <li role="presentation" class="divider"></li>
        <li><a href="dangxuat.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Log out</a></li>
    </ul>

</div><!--/.sidebar-->




