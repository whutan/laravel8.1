@extends('admin::layouts.app')
@section('content')
<x-tabs title="角色列表">
    @slot('title')
    角色管理
    @endslot
    @slot('nav')
          <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="tab" role="tab" aria-selected="true">项目列表</a></li>
          <li class="nav-item"><a class="nav-link " href="#profile" data-toggle="tab" role="tab" aria-selected="false">添加栏目</a></li>
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
                      <th style="width:10%;">栏目名称</th>
                      <th class="">创建时间</th>
                      <th class="">修改时间</th>
                      <th class="">操作</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($res as $item)
                 
               <tr>
                   <td>{{$item['id']}}</td>
                   <td>
                    @if ($item['level']!=0)
                                             &nbsp;&nbsp;&nbsp;&nbsp;├
                                         @endif   
                    {!!str_repeat('──',$item['level']).$item['name']!!}</td>
                   <td>{{$item['created_at']}}</td>
                   <td>{{$item['updated_at']}}</td>
                   <td>
                    <div class="btn-group btn-space">
                        <button class="btn  btn-secondary" data-toggle="modal"
                            data-target="#editRoles{{ $item['id'] }}">编辑</button>
                        <button class="btn btn-secondary" type="button" onclick="delRole({{$item['id']}},this)">删除</button>
                        <form action="/artical/category/{{$item['id']}}" method="post">
                            @csrf @method('delete')
                        </form>
                    </div>
                    <x-modal title='栏目编辑' id="editRoles{{ $item['id']}}"
                        url="/artical/category/{{ $item['id'] }}" method='put'>
                        <div class="text-muted">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-sm-right" for="inputEmail">栏目名称</label>
                                <div class="col-sm-6">
                                <input class="form-control" id="inputEmail" type="text" name="name"
                                    value="{{ $item['name'] }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-sm-right" >父级栏目</label>
                                <div class="col-sm-6">
                                 <select name="pid" class="form-control">
                                     <option value="0">顶级栏目</option>
                                     @foreach ($res as $v)
                                     <option value="{{$v['id']}}" 
                                     {{$item['pid']==$v['id']?'selected':''}}
                                    {{$item['id']==$v['id']?'disabled':''}}
                                   {{app()->make(\App\Models\Category::class)->isChild($item['id'],$v['id'])?'disabled':''}} 
                                     >
                                         @if ($v['level']!=0)
                                             &nbsp;&nbsp;&nbsp;&nbsp;|
                                         @endif
                                        
                                         {!!str_repeat('──',$v['level']).$v['name']!!}
                                        </option>
                                     @endforeach
                                 </select>
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
          <form action="/artical/category" method="post" >
              @csrf
                  <div class="form-group row">
                    <label class=" col-sm-1 col-form-label text-sm-right" >栏目名称</label>
                    <div class="col-sm-3">
                      <input class="form-control" type="text" name="name"  value="{{old('name')}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-1 col-form-label text-sm-right" >父级栏目</label>
                    <div class="col-sm-3">
                     <select name="pid" class="form-control">
                         <option value="0">顶级栏目</option>
                         @foreach ($res as $v)
                         <option value="{{$v['id']}}">
                             @if ($v['level']!=0)
                                 &nbsp;&nbsp;&nbsp;&nbsp;|
                             @endif
                             {!!str_repeat('──',$v['level']).$v['name']!!}
                            </option>
                         @endforeach
                     </select>
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
                  <div class="form-group row">
                    <label class="col-sm-1 col-form-label text-sm-right" >父级栏目</label>
                    <div class="col-sm-3">
                     <select name="pid" class="form-control">
                         <option value="0">顶级栏目</option>
                         @foreach ($res as $v)
                         <option value="{{$v['id']}}">
                             @if ($v['level']!=0)
                                 &nbsp;&nbsp;&nbsp;&nbsp;|
                             @endif
                             {!!str_repeat('──',$v['level']).$v['name']!!}
                            </option>
                         @endforeach
                     </select>
                    </div>
              </div>
          </x-modal>
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