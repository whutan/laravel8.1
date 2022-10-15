{{--  @extends('admin::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('admin.name') !!}
    </p>
@endsection  --}}
@extends('admin::layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<style>
    .table{
        font-size: 14px;
    }
    .mybtn {
        background: #4285f4 !important;
    }

</style>
@endsection
@section('content')
<div class="card card-table">
    <div class="card-header card-header-divider">用户管理
        <div class="mt-3">
            <button class="btn btn-space btn-primary" data-toggle="modal" data-target="#form-bp1">添加用户</button>
            <button class="btn btn-space btn-secondary">用户列表</button>
            <x-modal title='角色添加' id='form-bp1' url="/admin/role">
                <div class="text-muted">
                    <div class="form-group pt-2">
                        <label for="inputEmail">用户名称</label>
                        <input class="form-control" id="inputEmail" type="text" name="title"
                            placeholder="请输入中文角色名称" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">所属角色</label>
                        <input class="form-control" id="inputPassword" type="text" name="name"
                            placeholder="请输入英文角色标识" value="{{ old('name') }}">
                    </div>
                </div>
            </x-modal>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:10%;">编号</th>
                        <th style="width:10%;">用户名称</th>
                        <th class="">所属角色</th>
                        <th class="">创建时间</th>
                        <th class="">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td class="">{{$user->roleName}}</td>
                            <td class="">{{ $user->created_at }}</td>
                            <td class="text-left">
                                <div class="btn-group btn-space">
                                    <button class="btn  btn-secondary" data-toggle="modal"
                                        data-target="#editRoles{{ $user->id }}">编辑</button>
                                    <button class="btn  btn-secondary" data-toggle="modal"
                                        data-target="#RoleAssign{{ $user->id }}">分配角色</button>
                                    {{--  <a href="/admin/roleAssign/{{ $user->id }}" class="btn btn-secondary"
                                        type="button">分配角色</a>  --}}
                                    <button class="btn btn-secondary" type="button" onclick="del({{$user->id}},this)">删除</button>
                                    <form action="/admin/role/{role}" method="post">

                                    </form>
                                </div>
                                <x-modal title='分配角色' id="RoleAssign{{ $user->id }}"
                                    url="/admin/roleAssign/{{ $user->id }}" >
                                    <div class="text-muted">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputPassword3">用户名称</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input class="form-control"   name="title" disabled
                                                 value="{{ $user->name }}">
                                            </div>
                                          </div>
                                       
                                          <div class="form-group row pt-1">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">分配角色</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                              <select class="form-control" name="name">
                                                  @foreach($roles as $role)
                                                <option value="{{$role['name']}}" selected="">{{$role['title']}}</option>
                                               @endforeach
                                              </select>
                                            </div>
                                          </div>
                                    </div>
                                </x-modal>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$users->links()}}
        </div>
    </div>
</div>

   
@endsection
@section('js')
<script>
    function del(id,btn){
        console.log(btn)
    }
</script>
@endsection