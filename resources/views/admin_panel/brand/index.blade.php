@extends("admin_panel.layout.master")
@section("dashboard")
    <div class="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="col-md-12">
                    <h1>Brands List</h1>
                </div>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr class="info">
                        <th>#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Img_address</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($brand_list as $brands)
                        <tr>
                            <td>{{$brands->id}}</td>
                            <td>{{$brands->title}}</td>
                            <td><img src="{{str_replace("public","/storage",$brands->img_address)}}"
                                     alt="{{$brands->title}}" height="55px"></td>
                            <td>{{$brands->img_address}}</td>
                            <td>
                                <a href="{{Route("brand.edit",$brands->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <form action="{{Route("brand.delete",$brands)}}" method="post">
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
