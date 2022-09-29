@extends('admin::layouts.app')
@section('css')
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <style>
        .mybtn {
            background: #4285f4 !important;
        }

        a.icon i:hover {
            color: #4285f4;

        }

        a.icon i {
            font-size: 2rem;

        }
        .table{
            font-size: 14px;
        }
    </style>
@endsection
@section('content')
    {{-- <div class="page-head text-2xl font-bold">
    <h1>角色列表</h1>
</div> --}}

    <div class="card card-table">
        <div class="card-header card-header-divider">角色管理
            <div class="mt-3">
                <button class="btn btn-space btn-primary" data-toggle="modal" data-target="#form-bp1">添加角色</button>
                <button class="btn btn-space btn-secondary">角色列表</button>
                <x-modal title='角色添加' id='form-bp1' url="/admin/role">
                    <div class="text-muted">
                        <div class="form-group pt-2">
                            <label for="inputEmail">角色名称</label>
                            <input class="form-control" id="inputEmail" type="text" name="title"
                                placeholder="请输入中文角色名称" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">角色标识</label>
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
                            <th style="width:10%;">角色名称</th>
                            <th class="">角色标识</th>
                            <th class="">创建时间</th>
                            <th class="">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->title }}</td>
                                <td class="">{{ $role->name }}</td>
                                <td class="">{{ $role->created_at }}</td>
                                <td class="text-left">
                                    <div class="btn-group btn-space">
                                        <button class="btn  btn-secondary" data-toggle="modal"
                                            data-target="#editRoles{{ $role->id }}">编辑</button>
                                        <a href="/admin/role/permission/{{ $role->id }}" class="btn btn-secondary"
                                            type="button">分配权限</a>
                                        <button class="btn btn-secondary" type="button">删除</button>
                                    </div>
                                    <x-modal title='角色编辑' id="editRoles{{ $role->id }}"
                                        url="/admin/role/{{ $role->id }}" method='put'>
                                        <div class="text-muted">
                                            <div class="form-group pt-2">
                                                <label for="inputEmail">角色名称</label>
                                                <input class="form-control" id="inputEmail" type="text" name="title"
                                                    placeholder="请输入中文角色名称" value="{{ $role->title }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">角色标识</label>
                                                <input class="form-control" id="inputPassword" type="text" name="name"
                                                    placeholder="请输入英文角色标识" value="{{ $role->name }}">
                                            </div>
                                        </div>
                                    </x-modal>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
