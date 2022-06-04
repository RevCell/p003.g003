<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="/admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="/admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="/admin/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;TWO PAGE</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">See Website</a></li>
                    <li><a href="#">Open Ticket</a></li>
                    <li><a href="#">Report Bug</a></li>
                </ul>
            </div>

        </div>
    </div>
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center user-image-back">
                    <img src="/admin/assets/img/find_user.png" class="img-responsive" />

                </li>


                <li>
                    <a href="/admin_panel/dashboard"><i class="fa fa-desktop "></i>Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table "></i>Categories<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{Route("cat.index")}}">Categories List</a>
                        </li>
                        <li>
                            <a href="{{Route("cat.create")}}">Add</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-tablet "></i>Brands<span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{Route("brand.index")}}">Index</a>
                        </li>
                        <li>
                            <a href="{{Route("brand.create")}}">Add</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-archive"></i>Products<span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{Route("product.index")}}">Index</a>
                        </li>
                        <li>
                            <a href="{{Route("product.create")}}">Add</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#"><i class="fa fa-sitemap "></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-qrcode "></i>Tabs & Panels</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i>Mettis Charts</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit "></i>Last Link </a>
                </li>
                <li>
                    <a href="blank.html"><i class="fa fa-table "></i>Blank Page</a>
                </li>
            </ul>

        </div>

    </nav>
</div>
