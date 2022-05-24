@extends("admin_panel.layout.master")
@section("dashboard")
    <div class="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="col-md-12">
                    <h1>Category List</h1>
                </div>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr class="info">
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->title}}</td>
                        <td>{{optional($cat->parent)->title}}</td>
                        <td>
                            <a href="/admin_panel/category/edit/{{$cat->id}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="/admin_panel/category/delete/{{$cat->id}}" method="post">
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
