@extends('beagle.app')
@section('content')
       
        <div class="card card-table">
            <div class="card-header">管理员列表
                <a href="/admin/export"><button class="btn btn-primary ml-4"><i class="icon icon-left mdi mdi-mail-reply"></i>导出</button></a>
                <button class="btn btn-space btn-primary md-trigger" data-modal="form-success">
                    <i class="icon icon-left mdi mdi-download"></i>导入</button>
                    <div class="modal-container colored-header colored-header-success custom-width modal-effect-9" id="form-success" style="perspective: 1300px;">
                        <div class="modal-content">
                            <div class="modal-header modal-header-colored">
                                <h3 class="modal-title">导入文件</h3>
                                <button class="close modal-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"></span></button>
                            </div>
                            <form action="/admin/importexcelsubmit" method="post">
                                @csrf
                            <div class="modal-body form">
                                <div class="form-group row ">
                                    <label class="col-3  col-form-label text-right"><span class="red">*</span>选择文件：</label>
                                    <div class="col-6">
                                    <div id="uploader-demo">
                                        <input type="hidden" name="importexcel" value="">
                                        <!--用来存放item-->
                                        <div id="fileList" class="uploader-list"></div>
                                        <div id="filePicker">选择文件</div>
                                    </div>
                                    </div>
                                </div>
                                                        
                             </div>
                            {{--<div class="modal-footer">--}}
                                {{--<button class="btn btn-secondary modal-close" type="button" data-dismiss="modal">Cancel</button>--}}
                                {{--<button class="btn btn-success modal-close" type="button" data-dismiss="modal">Proceed</button>--}}
                            {{--</div>--}}
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">提交</button>
                                </div>
        
                            </form>
                        </div>
        
                    </div> 
                <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a class="dropdown-toggle"
                                                                                          href="#" role="button"
                                                                                          data-toggle="dropdown"><span
                                class="icon mdi mdi-more-vert"></span></a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a
                                class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something
                            else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="table1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row be-datatable-body">
                        <div class="col-sm-12">

                            <table class="table table-striped table-hover table-fw-widget dataTable no-footer"
                                   id="table1" role="grid" aria-describedby="table1_info">
                                <thead>
                                <tr role="row">
                                    <th style="width:4%;">
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="check1">
                                            <label class="custom-control-label" for="check1"></label>
                                        </div>
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                        aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending"
                                        style="width: 5%;">ID
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending"
                                        style="width: 10%;">username
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 10%;">mobile
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending"
                                        style="width: 230.891px;">email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending"
                                        style="width: 230.891px;">角色
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending"
                                        style="width: 180.672px;">created_at
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending"
                                        style="width: 180.672px;">是否已停用
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending"
                                        style="width: 180.672px;">操作
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $item)
                                <tr class="gradeA odd" role="row">
                                    <td>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="check4">
                                            <label class="custom-control-label" for="check4"></label>
                                        </div>
                                    </td>
                                    <td class="sorting_1">{{$item->id}}</td>
                                    <td>{{$item->username}}</td>
                                    <td>{{$item->mobile}}</td>
                                    <td class="center">{{$item->email}}</td>
                                    <td class="center">{{$item->role->role_name}}</td>
                                    <td class="center">{{$item->created_at}}</td>
                                    <td class="center">
                                        @if($item->status=='1')
                                            <button class="btn btn-space btn-success btn-sm">已启用</button>
                                            @else
                                            <button class="btn btn-space btn-secondary btn-sm">已停用</button>
                                            @endif
                                    </td>
                                    <td class="center">
                                        @if($item->status=='1')
                                            <a class="icon" href="#"><i class="mdi mdi-minus-circle-outline"></i></a>
                                        @else
                                            <a class="icon" href="#"><i class="mdi mdi-check-circle"></i></a>
                                        @endif

                                        <a class="icon" href="#"><i class="mdi mdi-edit"></i></a>
                                        <a class="icon" href="#"><i class="mdi mdi-delete"></i></a>


                                    </td>
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
<script src="/theme/beagle/lib/niftymodals/jquery.niftymodals.js" type="text/javascript"></script>
    <script src="/theme/beagle/lib/datatables/dataTables.min.js"></script>
    <script src="/js/import.js"></script>
    <script>
        $(document).ready(function(){
            $('table').DataTable();
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
    </script>
    @endsection
@section('css')
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
        .mdi{font-size:20px;margin-right: 10px;}
        .btn-space{margin-bottom: 0;}
    </style>
    @endsection