@extends("admin_panel.layout.master")
@section("dashboard")
    <div class="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">

                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>Add new Product</h1>
                        </div>
                        <form action="{{Route("product.store")}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="panel-body">
                                <h4>Product title</h4>
                                <input type="text" name="title" class="form-control" >
                            </div>
                            <div class="panel-body">
                                <h4>Select Product Category</h4>
                                <select name="category_id" id="" class="form-control">
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="panel-body">
                                <h4>Select Product Brand</h4>
                                <select name="brand_id" id="" class="form-control">
                                    @foreach($brands as $br)
                                        <option value="{{$br->id}}">{{$br->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="panel-body">
                                <h4>Assign Price</h4>
                                <input type="number" name="price" id="cat_title" class="form-control" >
                            </div>
                            <div class="panel-body">
                                <h4>Write a Slug for the product</h4>
                                <input type="text" name="slug" id="cat_title" class="form-control" >
                            </div>
                            <div class="panel-body">
                                <h4>Choose Primary Image</h4>
                                <input type="file" name="img01" id="cat_title" class="form-control" >
                            </div>
                            <div class="panel-body">
                                <h4>Choose secondary Image</h4>
                                <input type="file" name="img02" id="cat_title" class="form-control" >
                            </div>
                            <div class="panel-body">
                                <h4>Enter product description</h4>
                                <textarea name="description" id="" cols="90" rows="5" class="form-control"></textarea>
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

