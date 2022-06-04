@extends("admin_panel.layout.master")
@section("dashboard")
    <div class="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="col-md-12">
                    <h1>Products List</h1>
                </div>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr class="info">
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>slug</th>
                        <th>Image_01</th>
                        <th>Image_02</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product_list as $products)
                        <tr>
                            <td>{{$products->id}}</td>
                            <td>{{$products->title}}</td>
                            <td>{{$products->category->title}}</td>
                            <td>{{$products->brand->title}}</td>
                            <td>{{$products->price}} T</td>
                            <td>{{$products->slug}}</td>
                            <td>
                                <img src="{{str_replace("public","/storage",$products->img01_address)}}"
                                     alt="" height="55px">
                            </td>
                            <td>
                                <img src="{{str_replace("public","/storage",$products->img02_address)}}"
                                     alt="" height="55px">
                            </td>
                            <td>
                                <a href="{{Route("product.edit",$products->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <form action="{{Route("product.delete",$products->id)}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @include("admin_panel.layout.error")
            </div>
        </div>
    </div>
@endsection
