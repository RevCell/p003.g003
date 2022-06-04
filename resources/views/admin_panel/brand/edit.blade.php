@extends("admin_panel.layout.master")
@section("dashboard")
    <div class="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">

                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>edit -{{$brand->title}}- Brand</h1>
                        </div>
                        <form action="{{Route("brand.update",$brand)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("patch")
                            <div class="panel-body">
                                <h4>Brand Title</h4>
                                <input type="text" name="title" id="cat_title" class="form-control" value="{{$brand->title}}">
                            </div>
                            <hr>
                            <div class="panel-body">
                                <label for="b_pic">Current Brand Image:</label>                       </div>
                            <div class="panel-body" id="b_pic">
                                <img
                                    src="{{str_replace("public","/storage",$brand->img_address)}}"
                                    alt="" height="150px">
                            </div>
                            <hr>
                            <div class="panel-body">
                                <h4>Brand Image</h4>
                                <input type="file" name="img" id="cat_title" class="form-control" >
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                    @include("admin_panel.layout.error")
                </div>
            </div>
        </div>
    </div>

@endsection

