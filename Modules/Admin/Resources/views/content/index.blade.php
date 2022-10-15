@extends('admin::layouts.app')
@section('content')
    <x-tabs>
        @slot('title')
            文章管理
        @endslot
        @slot('nav')
            <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="tab" role="tab"
                    aria-selected="true">文章列表</a></li>
            <li class="nav-item"><a class="nav-link " href="#profile" data-toggle="tab" role="tab"
                    aria-selected="false">添加文章</a></li>
        @endslot
        @slot('body')
            <div id="app">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:10%;">编号</th>
                                    <th style="width:10%;">标题</th>
                                    <th class="">作者</th>
                                    <th class="">内容</th>
                                    <th class="">缩略图</th>
                                    <th class="">查看次数</th>
                                    <th class="">是否推荐</th>
                                    <th class="">创建时间</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($res as $item)
                                    <tr>
                                        <td>{{ $item['id'] }}</td>
                                        <td>
                                            {!! $item['title'] !!}</td>
                                        <td>{{ $item['author'] }}</td>
                                        <td>{{ $item['content'] }}</td>
                                        <td>{{ $item['thumb'] }}</td>
                                        <td>{{ $item['click'] }}</td>
                                        <td>{{ $item['iscommend'] }}</td>
                                        <td>{{ $item['updated_at'] }}</td>
                                        {{--  <td>
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
                                       @if ($v['level'] != 0)
                                           &nbsp;&nbsp;&nbsp;&nbsp;|
                                       @endif
                                      
                                       {!!str_repeat('──',$v['level']).$v['name']!!}
                                      </option>
                                   @endforeach
                               </select>
                              </div>
                      </div>
                  </x-modal>
                 </td>  --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane " id="profile" role="tabpanel">
                        <form action="/artical/content" method="post">
                            @csrf
                          
                           
                            <div class="form-group row">
                                <label class=" col-sm-1 col-form-label text-sm-right">标题</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label text-sm-right">作者</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" name="author" value="{{ old('author') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label text-sm-right">内容</label>
                                <div class="col-sm-7">
                                    <textarea id="editor" name="content" autofocus cols="50" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label text-sm-right">缩略图</label>
                                <div class="col-sm-6">
                                    <image-up name="thumb" url="/artical/imgUp"></image-up>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label text-sm-right">查看次数</label>
                                <div class="col-sm-3">
                                    <input type="text" name="click">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label text-sm-right">是否推荐</label>
                                <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                                    <label class="custom-control custom-radio custom-control-inline">
                                      <input class="custom-control-input" type="radio" name="radio-inline" checked=""><span class="custom-control-label">是</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                      <input class="custom-control-input" type="radio" name="radio-inline"><span class="custom-control-label">否</span>
                                    </label>
                                    
                                  </div>
                            </div>
                            <div class="form-group ">
                                <button class="btn btn-primary mybtn" type="submit">提交</button>
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
                                    <label class="col-sm-1 col-form-label text-sm-right">父级栏目</label>
                                    <div class="col-sm-3">
                                        <select name="pid" class="form-control">
                                            <option value="0">顶级栏目</option>
                                            @foreach ($res as $v)
                                                <option value="{{ $v['id'] }}">
                                                    @if ($v['level'] != 0)
                                                        &nbsp;&nbsp;&nbsp;&nbsp;|
                                                    @endif
                                                    {!! str_repeat('──', $v['level']) . $v['name'] !!}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                        </x-modal>
                    </div>

                </div>
            </div>
        @endslot
    </x-tabs>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="/simditor/styles/simditor.css" />
    <style>
        .card{
            border:none;
        }
        .card-header{
            border-bottom: none;
            background-color: transparent;
        }
        a{
            text-decoration: none !important;
            
        }
        .mybtn {
            background: #4285f4 !important;
        }
    </style>
@endsection
@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    {{--  <script type="text/javascript" src="/simditor/site/assets/scripts/jquery.min.js"></script>  --}}
    <script type="text/javascript" src="/simditor/site/assets/scripts/module.js"></script>
    <script type="text/javascript" src="/simditor/site/assets/scripts/hotkeys.js"></script>
    <script type="text/javascript" src="/simditor/site/assets/scripts/uploader.js"></script>
    <script type="text/javascript" src="/simditor/site/assets/scripts/simditor.js"></script>
    <script>
        var token=document.head.querySelector('meta[name="csrf-token"]').content;
        let params = {};
        params._token=token;
        var editor = new Simditor({
            textarea: $('#editor'),
            toolbar: [
                'title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale',
                'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link',
                'image', 'hr', '|', 'alignment'
            ],
            upload:{
                 url:'/artical/simditor/upload',
                params:params,
                fileKey:'file',
               
            },
            
        })
    </script>
@endsection
