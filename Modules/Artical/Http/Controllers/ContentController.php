<?php

namespace Modules\Artical\Http\Controllers;

use App\Models\Content;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
       
        $res=Content::all();
        return view('admin::content.index',compact('res'));
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
    public function store(Request $request)
    {
        dump($request->all());
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function imgUp(Request $request){
        
        $file=$request->file('file');
        $originalName=$file->getClientOriginalName();
        $filename=Str::random(10).'.'.$file->getClientOriginalExtension();
        $dir='uploads/'.date('Yd/d');
        $file->move($dir,$filename);
        $image = Image::make($dir.'/'.$filename)->resize(178, 178);
        // $img=Image::make('public/'.$dir.$filename)->resize(178,178);
         $image->save('uploads/thumb/'.$filename);
        return [
            'code'=>0,
            'name'=>$originalName,
            'file'=>url($dir.'/'.$filename),
            'thumb'=>url('uploads/thumb/'.$filename)
        ];
      
    }

    public function simditorUp(Request $request){
       
        $file=$request->file('file');
         $originalName=$file->getClientOriginalName();
         
         $filename=Str::random(10).'.'.$file->getClientOriginalExtension();
         $dir='uploads/'.date('Yd/d');
         $file->move($dir,$filename);
    //     // $image = Image::make($dir.'/'.$filename)->resize(178, 178);
    //     // // $img=Image::make('public/'.$dir.$filename)->resize(178,178);
    //     //  $image->save('uploads/thumb/'.$filename);
         return url($dir.'/'.$filename);
     }
}
