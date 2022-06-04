@extends("admin_panel.layout.master")
@section("dashboard")
    <div class="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">

                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>edit product: {{$product->title}}</h1>
                        </div>
                        <form action="{{Route("product.update",$product->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("patch")
                            <div class="panel-body">
                                <h4>Product title</h4>
                                <input type="text" name="title" class="form-control" value="{{$product->title}}" >
                            </div>
                            <div class="panel-body">
                                <h4>Select Product Category</h4>
                                <select name="category_id" id="" class="form-control">
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}"
                                        @if($cat->id == $product->category->id)
                                             selected
                                        @endif
                                        >{{$cat->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="panel-body">
                                <h4>Select Product Brand</h4>
                                <select name="brand_id" id="" class="form-control">
                                    @foreach($brands as $br)
                                        <option value="{{$br->id}}"
                                            @if($br->id == $product->brand->id)
                                                selected
                                            @endif
                                        >{{$br->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="panel-body">
                                <h4>Assign Price</h4>
                                <input type="number" name="price" value="{{$product->price}}" class="form-control" >
                            </div>
                            <div class="panel-body">
                                <h4>Write a Slug for the product</h4>
                                <input type="text" name="slug" value="{{$product->slug}}" class="form-control" >
                            </div>
                            <div class="panel-body">
                                <h4>Choose Primary Image</h4>
                                <input type="file" name="img01" id="cat_title" class="form-control" >
                                <h4>Current Primary Image:</h4>
                                <img src="{{str_replace("public","/storage",$product->img01_address)}}"
                                     alt="" height="125px">
                            </div>
                            <div class="panel-body">
                                <h4>Choose secondary Image</h4>
                                <input type="file" name="img02" id="cat_title" class="form-control" >
                                <h4>Current Secondary Image:</h4>
                                <img src="{{str_replace("public","/storage",$product->img02_address)}}"
                                     alt="" height="125px">
                            </div>
                            <div class="panel-body">
                                <h4>Enter product description</h4>
                                <textarea name="description" id=""
                                          cols="90" rows="5" class="form-control">{{$product->description}}</textarea>
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

