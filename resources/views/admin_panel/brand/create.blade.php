@extends("admin_panel.layout.master")
@section("dashboard")
    <div class="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">

                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>Create a new Brand</h1>
                        </div>
                        <form action="{{Route("brand.store")}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="panel-body">
                                <h4>Brand Title</h4>
                                <input type="text" name="title" id="cat_title" class="form-control" >
                            </div>
                            <div class="panel-body">
                                <h4>Brand Image</h4>
                                <input type="file" name="img" id="cat_title" class="form-control" >
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-success">ADD</button>
                            </div>
                        </form>
                    </div>
                    @include("admin_panel.layout.error")
                </div>
            </div>
        </div>
    </div>

@endsection

