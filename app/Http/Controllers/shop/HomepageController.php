<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /*******************************************************/
    public function index()
    {
        return view("client_side.home",);
    }
    /*******************************************************/
}
