<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\brand_store_rules;
use App\Http\Requests\brand_update_rules;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class BrandController extends Controller
{
    /********************************************************************

     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view("admin_panel.brand.index",
        [
            "brand_list"=>Brand::all()
        ]
        );
    }

    /********************************************************************

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view("admin_panel.brand.create");
    }

    /********************************************************************
 * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(brand_store_rules $data)
    {
        $img=$data->file('img')
            ->storeAs("public/Brand_Images",
                $data->get("title").
                "_".
                $data->file("img")
                ->getClientOriginalName());
        Brand::query()
            ->create(
                [
                    'title'=>$data->get("title"),
                    'img_address'=>$img
                ]
            );

        return redirect(Route("brand.index"));
    }

    /********************************************************************
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /********************************************************************
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Brand $brand_id)
    {
        return view("admin_panel.brand.edit",
        [
            "brand"=>$brand_id
        ]
        );
    }

    /********************************************************************
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(brand_update_rules $data, Brand $brand_id)
    {
        $brand_img=$brand_id->img_address;
        if ($data->hasFile("img"))
        {
            $brand_img=$data->file("img")->storeAs(
                "public/Brand_Images","e_"
                .$data->file("img")->getClientOriginalName()
            );
        }
        $brand_id->update(
            [
                'title'=>$data->get("title"),
                "img_address"=>$brand_img
            ]
        );
        return redirect(Route("brand.index"));
    }
    /********************************************************************
 *
* /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Brand $brand_id)
    {
        $brand_id->delete();
        return redirect(Route("brand.index"));
    }
}
