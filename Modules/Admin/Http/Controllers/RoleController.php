<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RoleRequest;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Spatie\Permission\Models\Role;




class RoleController extends Controller
{
 
   
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
     
      
     
        // $menus=$this->getMenus();
        $roles=Role::get();
        
        return view('admin::role.index',compact('roles'));
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
    public function store(RoleRequest $request)
    {
        Role::create(['name'=>$request->name,'title'=>$request->title]);
        session()->flash('success','角色创建成功');
        return back();
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
    public function update(RoleRequest $request,  $id)
    {
        $role=Role::findById($id);
        $role->update(['title'=>$request['title'],'name'=>$request['name']]);
        session()->flash('success','角色修改成功');
        return back();
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

    public function permission(Role $role)
    {
        
    // dd($role->attributesToArray());
       $modules=app()->make(AdminController::class)->getAllPermissions();
        return view('admin::role.permission',compact('role','modules'));
    }

    public function permissionStore(Request $request,Role $role){
       
        $role->syncPermissions($request->name);
        session()->flash('success','权限设置成功');
        return back();
    }
}
