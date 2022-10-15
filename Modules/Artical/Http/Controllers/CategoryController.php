<?php

namespace Modules\Artical\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Artical\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Category $category)
    {
       
        $categories=$category->all()->toArray();
      $res= $category->tree($categories);
      
        return view('admin::category.index',compact('res','categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('artical::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CategoryRequest $request,Category $category)
    {
        $category->fill($request->all());
        $category->save();
        return redirect('/artical/category')->with('success','栏目添加成功');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('artical::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('artical::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Category $category)
    {
      
        $category->update($request->all());
        return redirect('/artical/category')->with('success','栏目修改成功');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
       if(Category::isHasCategory($id)){
           return back()->with('danger','请先删除子栏目');
       }
       Category::find($id)->delete();
       return redirect('/artical/category')->with('success','栏目删除成功');
    }
}
