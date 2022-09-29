<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Admin;
use App\Traits\GetMenus;
use App\Traits\GetModuleConfig;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    use GetMenus,GetModuleConfig;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $menus=$this->getMenus();
        $users=Admin::paginate(5);
        $roles=Role::all();
        return view('admin::index',compact('menus','users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
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
    public function roleAssign(Request $request, Admin $admin){
       
    //    $admin->assignRole($request->name);
       $admin->syncRoles($request->name);
       $admin->roleName=$request->name;
       $admin->save();
       session()->flash('success','分配角色成功');
       return back();
    }
}
