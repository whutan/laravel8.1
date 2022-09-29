@extends('beagle.app')
@section('content')
    <div class="page-head">
        <h2 class="page-head-title">权限管理</h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">首页</a></li>
                <li class="breadcrumb-item"><a href="#">管理员管理</a></li>
                <li class="breadcrumb-item active">权限管理</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-header">
            <button class="btn btn-space btn-primary btn-lg" data-toggle="modal" data-target="#form-bp1" type="button"><i class="icon icon-left mdi mdi-plus"></i>添加权限</button>
        </div>
        <div class="card-body">
            <table class="table table-sm table-hover table-bordered table-striped">
                <thead>
                <tr>
                    <th class="sorting_asc" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                        aria-sort="ascending"
                        aria-label="Rendering engine: activate to sort column descending">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">权限名称</th>
                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">控制器名称</th>
                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">方法名称</th>
                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">父级权限</th>
                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">作为导航</th>
                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)

                <tr>
                    <td class="sorting_1">{{$item->id}}</td>
                    <td class="number">{{$item->auth_name}}</td>
                    <td class="number">{{$item->controller}}</td>
                    <td class="number">{{$item->action}}</td>
                    <td class="number">
                        @if($item->parent)
                            {{$item->parent->auth_name}}
                        @endif
                    </td>
                    <td class="number">{{$item->is_nav}}</td>
                    <td class="number"></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade colored-header colored-header-primary" id="form-bp1" tabindex="-1" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-colored">
                    <h3 class="modal-title">添加权限</h3>
                    <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close">       </span></button>
                </div>
                <div class="modal-body">
                    <form id="authForm" >
                        @csrf
                   <div class="form-group row">
                        <label class="col-3 label-center text-right ">权限名称: </label>
                       <input class="col-8 form-control" type="text" name="auth_name">
                    </div>
                    <div class="form-group row">
                        <label class="col-3 label-center text-right">控制器名：</label>
                        <input class="col-8 form-control" type="text" name="controller" id="controller">
                    </div>
                    <div class="form-group row">
                        <label class="col-3 label-center text-right">方法名：</label>
                        <input class="col-8 form-control" type="text" name="action" id="action">
                    </div>
                    <div class="form-group row">
                        <label class="col-3 label-center text-right">父级权限：</label>
                        <select class="col-8 form-control" name="pid">
                            <option value="0" selected="">顶级权限</option>
                            @foreach($data as $item)
                                @if($item->pid==0)
                            <option value={{$item->id}}>{{$item->auth_name}}</option>
                                @endif
                           @endforeach
                        </select>
                    </div>
                    <div class="form-group row pt-1 pb-1">
                        <label class="col-3 col-sm-3 col-form-label text-sm-right">是否导航：</label>
                        <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="radio-inline" checked="" value="1"><span class="custom-control-label">是</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="radio-inline" value="2"><span class="custom-control-label">否</span>
                            </label>

                        </div>
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary md-close" type="button" data-dismiss="modal">取消</button>
                    <button class="btn btn-primary md-close" type="button" onclick="getFormData()">提交</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="/theme/beagle/lib/niftymodals/jquery.niftymodals.js" type="text/javascript"></script>
            <script src="/theme/beagle/lib/datatables/dataTables.min.js"></script>
        <script type="text/javascript">
            $(function () {
               $('table').DataTable({

               });
            });
            $.fn.niftyModal('setDefaults',{
                overlaySelector: '.modal-overlay',
                contentSelector: '.modal-content',
                closeSelector: '.modal-close',
                classAddAfterOpen: 'modal-show'
            });

        $(document).ready(function(){
            //-initialize the javascript
            App.init();
        });

        function getFormData() {
           $.ajax({
               url:'/admin/auth',
               type:'post',
               data:$('#authForm').serialize(),
               success:function(res){
                  layer.msg('添加成功',{icon:1});
                      $('#form-bp1').removeClass('show');
                      $('.modal-backdrop').removeClass('show');
                      $('#authForm')[0].reset();//清空表单里面的数据
                   history.go(0)
               }
           })
        }
        //控制“控制器”和“方法”输入框动态显示
            $('#controller,#action').parents('.row').hide();
        //给下拉框绑定change事件
            $('select').change(function () {
                var _val=$(this).val();
                if(_val!='0'){
                    $('#controller,#action').parents('.row').show();
                }else{
                    $('#controller,#action').val('');
                    $('#controller,#action').parents('.row').hide();
                }
            })
    </script>

    @endsection
@section('css')
            <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
            <style>
                .label-center{
                    display:flex;
                    align-items: center;
                    justify-content: end;
                    margin-bottom: 0;
                }
            </style>
    @endsection