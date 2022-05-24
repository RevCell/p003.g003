@extends("admin_panel.layout.master")
@section("dashboard")
    <div class="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">

                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>Create a new Category</h1>
                        </div>
                        <form action="/admin_panel/category/store" method="post">
                            @csrf
                            <div class="panel-body">
                                <h4>Category Title</h4>
                                <input type="text" name="title" id="cat_title" class="form-control" >
                            </div>
                            <div class="panel-body">
                                <h4>Category Lead</h4>
                                <select name="category_id" id="" class="form-control" >
                                    <option value="" selected disabled>select category lead</option>
                                    @foreach($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                    @endforeach
                                </select>
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
