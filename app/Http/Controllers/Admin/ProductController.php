<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\product_store_rules;
use App\Http\Requests\update_product_rules;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view("admin_panel.product.index",
        [
            'product_list'=>Product::all()
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
        return view("admin_panel.product.create",
        [
            "categories"=>Category::all(),
            "brands"=>Brand::all()
        ]);
    }

    /********************************************************************
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(product_store_rules $data)
    {
        $img01=$data->file("img01")->
        storeAs("public/product_img",
            $data->get("title")."01_".$data->file("img01")
            ->getClientOriginalName());

        $img02="";
        if ($data->file("img02"))
        {
            $img02=$data->file("img02")
                ->storeAs("public/product_img",
                    $data->get("title")."02_".$data->file("img02")
                        ->getClientOriginalName());
        }


        Product::query()->create(
            [
                "title"=>$data->get("title"),
                "category_id"=>$data->get("category_id"),
                "brand_id"=>$data->get("brand_id"),
                "price"=>$data->get("price"),
                "slug"=>$data->get("slug"),
                "img01_address"=>$img01,
                "img02_address"=>$img02,
                "description"=>$data->get("description")
            ]
        );
        return redirect(Route("product.index"));
    }

    /********************************************************************
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /********************************************************************
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Product $pro_id)
    {
        return view("admin_panel.product.edit",
        [
           "product" => $pro_id,
           "categories"=>Category::all(),
           "brands"=>Brand::all()
        ]
        );
    }

    /********************************************************************
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(update_product_rules $data, Product $pro_id)
    {
        $slug_chk=Product::query()->where("slug",$data->get("slug"))
            ->where("id","!=",$pro_id->id)
            ->exists();
        if ($slug_chk)
        {
            return back()->withErrors(['slug'=>'the slug you entered;
             has already been used for another product']);
        }

        $img01= $pro_id->img01_address;
        if ($data->hasFile("img01"))
        {
            $img01=$data->file("img01")
                ->storeAs("public/product_img",
                $data->get("title")."epro01_".$data->file("img01")
                ->getClientOriginalName());
        }

        $img02= $pro_id->img02_address;
        if ($data->hasFile("img02"))
        {
            $img02=$data->file("img02")
                ->storeAs("public/product_img",
                    $data->get("title")."epro02_".$data->file("img02")
                        ->getClientOriginalName());
        }

        $pro_id->update(
            [
                "title"=>$data->get("title"),
                "category_id"=>$data->get("category_id"),
                "brand_id"=>$data->get("brand_id"),
                "price"=>$data->get("price"),
                "slug"=>$data->get("slug"),
                "img01_address"=>$img01,
                "img02_address"=>$img02,
                "description"=>$data->get("description")
            ]
        );

        return redirect(Route("product.index"));
    }

    /********************************************************************
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Product $pro_id)
    {
        $pro_id->delete();
        return redirect(Route("product.index"));
    }
        /*******************************************************************/

}
