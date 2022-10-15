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
         .row{
            justify-content: center;
        }
    </style>
@endsection
@section('content')
  <x-tabs title="角色列表">
      @slot('title')
      角色管理
      @endslot
      @slot('nav')
      
       
        
      
            <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="tab" role="tab" aria-selected="true">角色列表</a></li>
            <li class="nav-item"><a class="nav-link " href="#profile" data-toggle="tab" role="tab" aria-selected="false">添加角色</a></li>
            <li class="nav-item"><a class="nav-link" href="#messages" data-toggle="tab" role="tab" aria-selected="false">Messages</a></li>
        
        
      {{--  <li class="nav-item"><a class="nav-link active" href="#home">角色列表</a></li>
      <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#form-bp1" href="#" >角色添加</a></li>  --}}
       
      @endslot
      @slot('body')
      <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel">
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
                                    <button class="btn btn-secondary" type="button" onclick="delRole({{$role->id}},this)">删除</button>
                                    <form action="/admin/role/{{$role->id}}" method="post">
                                        @csrf @method('delete')
                                    </form>
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
        <div class="tab-pane " id="profile" role="tabpanel">
            <form action="/admin/role" method="post" >
                @csrf
                    <div class="form-group row">
                      <label class=" col-sm-1 col-form-label text-sm-right" for="inputText3">角色名称</label>
                      <div class="col-sm-3">
                        <input class="form-control" id="inputText3" type="text" name="name" placeholder="请输入中文角色名称" value="{{old('name')}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-1 col-form-label text-sm-right" for="inputPassword3">角色标识</label>
                      <div class="col-sm-3">
                        <input class="form-control" id="inputPassword3" type="text"  name="title" placeholder="请输入中文角色名称" value="{{old('title')}}">
                      </div>
                    </div>
                  <div class="form-group row">
                       <button class="btn btn-primary" type="submit">提交</button> 
                    </div>
                   
              </form>
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
        <div class="tab-pane" id="messages" role="tabpanel">
          <p>Consectetur adipisicing elit. Ipsam ut praesentium, voluptate quidem necessitatibus quam nam officia soluta aperiam, recusandae.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.</p><a href="#">Read more  </a>
        </div>
      </div>
     
      @endslot
  </x-tabs>
  @section('js')
  <script>
    function delRole(id,btn){
        if(confirm('确定删除吗？')){
            $(btn).next('form').submit()
        }
        
    }
  </script>
  @endsection
@endsection
