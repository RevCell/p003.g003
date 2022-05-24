<li class="mega-menu dropdown"><a>دسته ها</a>
    <div class="dropdown-menu">

        @foreach($categories as $cat01)

            <div class="column col-lg-2 col-md-3"><a href="category.html">{{$cat01->title}}</a>

                <div>
                    <ul>
                        @foreach($cat01->sub_cat as $cat02)
                            <li><a href="category.html">{{$cat02->title}}
                                    @if($cat02->sub_cat->count()>0)
                                        <span>&rsaquo;</span></a>
                                @endif
                                @if($cat02->sub_cat->count()>0)
                                    <div class="dropdown-menu">
                                        <ul>
                                            @foreach($cat02->sub_cat as $cat03)
                                                <li><a href="category.html">{{$cat03->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

        @endforeach

    </div>
</li>
