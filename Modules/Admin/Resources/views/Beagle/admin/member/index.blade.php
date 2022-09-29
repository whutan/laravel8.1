@extends('beagle.app')
@section('content')
    <div class="page-head">
        <h2 class="page-head-title">会员管理</h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">首页</a></li>
                <li class="breadcrumb-item"><a href="#">会员管理</a></li>
                <li class="breadcrumb-item active">会员列表</li>
            </ol>
        </nav>
    </div>

    <div class="card card-table">
        <div class="card-header">
            <div class="tools dropdown">
                <span class="icon mdi mdi-download"></span><a class="dropdown-toggle" href="#" role="button"
                                                              data-toggle="dropdown"><span
                            class="icon mdi mdi-more-vert"></span></a>
                <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <button class="btn btn-space btn-success md-trigger" data-modal="form-success">添加会员</button>
             
            <div id="table1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row be-datatable-body">
                    <div class="col-sm-12">
                        <table class="table table-striped table-hover table-fw-widget dataTable no-footer" id="table1"
                               role="grid" aria-describedby="table1_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending"
                                    style="width: 88.219px;">ID
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending" style="width: 100.047px;">
                                    会员名称
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending"
                                    style="width: 29.984px;">性别
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending"
                                    style="width: 80.469px;">手机号
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 189.281px;">
                                   邮箱
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 89.281px;">
                                   头像
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 89.281px;">
                                    类型
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 89.281px;">
                                    状态
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                            <tr class="gradeA odd" role="row">
                                <td class="sorting_1">{{$item->id}}</td>
                                <td>{{$item->username}}</td>
                                <td>@if($item->gender=='1')男@elseif($item->gender=='2')女@else保密@endif</td>
                                <td class="center">{{$item->mobile}}</td>
                                <td class="center">{{$item->email}}</td>
                                <td class="center">
                                    <img src="{{$item->avatar}}" alt="">
                                </td>
                                <td class="center">{{$item->type}}</td>
                                <td class="center">{{$item->status}}</td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="/theme/beagle/lib/datatables/dataTables.min.js"></script>
    <script src="/theme/beagle/lib/niftymodals/jquery.niftymodals.js" type="text/javascript"></script>
    <script src="/js/imageUploader.js"></script>
    <script>
        if($('.wfalert').length>0){
             setTimeout(function(){
               $('.wfalert').hide(1000)
             },3000)
        }
       
        //给省份下拉框添加change事件
        $('select[name=country_id]').change(function () {
            var _id=$(this).val()
          $.get('/admin/membergetArea',{id:_id},function (data) {
              //循环返回的数据
              var str='';
              $.each(data,function(index,el){
                str+="<option value='"+el.area_code+"'>"+el.name+"</option>"
              })
              //追加之前清除数据
              $('select[name=province_id]').find('option:gt(0)').remove()
             $('select[name=province_id]').append(str);
          },'json')
        });
        //城市下拉框添加change事件
        $('select[name=province_id]').change(function () {
            var _id=$(this).val()
          $.get('/admin/membergetArea',{id:_id},function (data) {
              //循环返回的数据
              var str='';
              $.each(data,function(index,el){
                str+="<option value='"+el.area_code+"'>"+el.name+"</option>"
              })
              //追加之前清除数据
              $('select[name=city_id]').find('option:gt(0)').remove()
             $('select[name=city_id').append(str);
          },'json')
        });
        //县区添加change事件
        $('select[name=city_id]').change(function () {
            var _id=$(this).val()
          $.get('/admin/membergetArea',{id:_id},function (data) {
              //循环返回的数据
              var str='';
              $.each(data,function(index,el){
                str+="<option value='"+el.area_code+"'>"+el.name+"</option>"
              })
              //追加之前清除数据
              $('select[name=county_id]').find('option:gt(0)').remove()
             $('select[name=county_id').append(str);
          },'json')
        });
       
        $(document).ready(function(){
            
            $('table').DataTable({
                "aaSorting":[[1,"desc"]],
               

            });
          
        });
        $.fn.niftyModal('setDefaults',{
            overlaySelector: '.modal-overlay',
            contentSelector: '.modal-content',
            closeSelector: '.modal-close',
            classAddAfterOpen: 'modal-show'
        });
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
        .red{color:red;}
        table img{width:25px;}
        .linkage> div{
            padding-right:0px;
        }
        .form-group.row{
            padding:5px 0;
        }
        .alert{
            position:absolute;
            z-index: 99;
            width: 100%;
        }
    </style>
   @endsection