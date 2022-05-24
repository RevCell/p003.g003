<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\category_store_rules;
use App\Http\Requests\category_update_rules;
use App\Models\Category;
use Illuminate\Http\Request;
use function view;

class CategoryController extends Controller
{
    /********************************************************************
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view("admin_panel.category.index",
        [
            "categories"=>Category::all()
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
        return view("admin_panel.category.store",
        [
            "category"=>Category::all()
        ]
        );
    }

    /********************************************************************
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(category_store_rules $data)
    {
        Category::query()->create(
            [
                'title'=>$data->get('title'),
                'category_id'=>$data->get("category_id")
            ]
        );
        return redirect("admin_panel/category/index");
    }

    /********************************************************************
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /********************************************************************
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Category $cat_id)
    {
        return view("admin_panel.category.edit",
        [
            'default'=>$cat_id,
            'parent'=>Category::all()
        ]
        );
    }

    /********************************************************************
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(category_update_rules $data, Category $cat_id)
    {
        $unique_title=Category::query()
            ->where("title",$data->get('title'))
            ->where('id','!=',$cat_id->id)
            ->exists();
        if ($unique_title)
        {
            return redirect()
                ->back()
                ->withErrors("you must choose an unique title");
        }
        $cat_id->update(
            [
                'title'=>$data->get('title'),
                'category_id'=>$data->get('category_id')
            ]
        );
        return redirect("admin_panel/category/index");
    }

    /********************************************************************
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Category $cat_id)
    {
        if ($cat_id->sub_cat->count()>0)
        {
            return back()->withErrors(
                "you can not remove a parent category,
                        try to remove or reassign children to
                        another parent first"
            );
        }
        $cat_id->delete();
        return redirect("admin_panel/category/index");
    }

    /*******************************************************************/

}
