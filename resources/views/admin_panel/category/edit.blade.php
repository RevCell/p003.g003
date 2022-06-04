@extends("admin_panel.layout.master")
@section("dashboard")
    <div class="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">

                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>edit -{{$default->title}}- category</h1>
                        </div>
                        <form action="{{Route("cat.update",$default)}}" method="post">
                            @csrf
                            @method("patch")
                            <div class="panel-body">
                                <h4>Category Title</h4>
                                <input type="text" name="title" id="cat_title" class="form-control" value="{{$default->title}}" >
                            </div>
                            <div class="panel-body">
                                <h4>Category Lead</h4>
                                <select name="category_id" id="" class="form-control" >
                                    <option value="" selected disabled>select category lead</option>
                                    @foreach($parent as $cat)
                                        <option value="{{$cat->id}}"
                                        @if($cat->id == $default->category_id)
                                            selected
                                        @endif
                                        >{{$cat->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-warning">Update</button>
                            </div>
                        </form>
                    </div>
                    @include("admin_panel.layout.error")
                </div>
            </div>
        </div>
    </div>

@endsection
