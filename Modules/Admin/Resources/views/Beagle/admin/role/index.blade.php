@extends('beagle.app')
@section('content')

    <div class="page-head">
        <h2 class="page-head-title">角色管理</h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">首页</a></li>
                <li class="breadcrumb-item"><a href="#">管理员管理</a></li>
                <li class="breadcrumb-item active">角色管理</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-header">Bordered Table
            <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
                <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm table-hover table-bordered table-striped text-center">
                <thead>
                <tr>
                    <th class="">编号</th>
                    <th >角色名称</th>
                    <th>权限id集合</th>
                    <th>权限ac集合</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td >{{$item->role_name}}</td>
                    <td >{{$item->auth_ids}}</td>
                    <td >{{$item->auth_ac}}</td>
                    <td >
                        <button class="btn btn-space btn-success md-trigger" data-modal="modal{{$item->id}}">分配权限</button>
                    </td>
                    <div class="modal-container colored-header colored-header-success custom-width modal-effect-9" id="modal{{$item->id}}">
                        <div class="modal-content">
                                <div class="card card-border-color card-border-color-primary">
                                    <div class="card-header card-header-divider">【{{$item->role_name}}】权限设置</div>
                                        <form action="/admin/role/{{$item->id}}" method="post">
                                            @csrf
                                            @method('put')
                                            @foreach($auths as $k1=>$val)
                                                <div class="card-body">
                                            <div class="card-header">{{$val->auth_name}}</div>
                                            <div class="col-12 col-sm-8  form-check mt-1">
                                                @foreach($sub_auths as $k=> $sub_val)
                                                    @if($sub_val->pid==$val->id)
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input class="custom-control-input"
                                                           type="checkbox"
                                                           id="{{$k1.$item->role_name.$k}}"
                                                           name="auth_id[]"
                                                           {{$item->auth_ids}}
                                                                   {{$sub_val->id}}
                                                                   {{strpos($item->auth_ids,(String)$sub_val->id)}}
                                                           {{strpos($item->auth_ids,(String)$sub_val->id)===false?'':'checked'}}
                                                           value="{{$sub_val->id}}">
                                                    <label class="custom-control-label" for="{{$k1.$item->role_name.$k}}">{{$sub_val->auth_name}}</label>
                                                </div>
                                                    @endif
                                                @endforeach
                                            </div>


                                    </div>
                                   @endforeach
                                            <div class="modal-footer">
                                                <button class="btn btn-success" type="submit" >提交</button>
                                            </div>

                                        </form>
                                </div>

                        </div>
                    </div>
                </tr>
               @endforeach
                </tbody>
            </table>

        </div>


    @endsection
@section('css')
    <style>
        .icon-container{padding:0;background: none;}
        .icon-container a{
            color:#9a9a9a;
        }
        .icon-container .mdi{
            font-size: 20px;
        }
        .card-body{
            padding-bottom: 0;
        }

    </style>
    @endsection
@section('js')
    <script src="/theme/beagle/lib/niftymodals/jquery.niftymodals.js" type="text/javascript"></script>
    <script>
        $.fn.niftyModal('setDefaults',{
            overlaySelector: '.modal-overlay',
            contentSelector: '.modal-content',
            closeSelector: '.modal-close',
            classAddAfterOpen: 'modal-show'
        });
$(':checkbox').click(function () {
    console.log(this)
})

    </script>
    @endsection
