@extends('admin::layouts.app')
@section('content')
<form action="/admin/role/permission/{{$role['id']}}" method="post">
    @csrf
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            [{{$role['title']}}]权限设置
        </div>
        @foreach ($modules as $k=>$group)
        @foreach ($group as $k1=>$group1 )
            
       
        <div class="card-body">
            <div class="card card-flat">
                <div class="card-header">{{$group1['group']}}</div>
                <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                    @foreach($group[$k1]['permissions'] as $i=>$per)
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input class="custom-control-input" type="checkbox" 
                      {{$role->hasPermissionTo($per['name'])?'checked':''}}
                      name="name[]" id="{{$k}}{{$k1}}{{$i}}" value="{{$per['name']}}">
                      <label class="custom-control-label" for="{{$k}}{{$k1}}{{$i}}">{{$per['title']}}</label>
                    </div>
                   @endforeach
                  </div>
              </div>
        </div>
        @endforeach
        @endforeach
      </div>
      <button class="btn btn-primary">保存</button>
</form>
  
@endsection
