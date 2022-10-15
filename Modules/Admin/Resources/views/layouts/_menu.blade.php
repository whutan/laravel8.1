<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper">
        <a class="left-sidebar-toggle" href="#">Form Elements</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        
                        @foreach (app()->make(Modules\Admin\Http\Controllers\AdminController::class)->getMenus() as $moduleName=>$groups)
                        <li class="divider">{{$moduleName}}</li>
                        @foreach ($groups as $group )
                        <li class="parent"><a href="#"><i class="{{$group['icon']}} mr-2"></i><span>{{$group['title']}}</span></a>
                            <ul class="sub-menu">
                                @foreach ($group['menus'] as $menu)
                                @can($menu['permission'])
                                   <li><a href="{{$menu['url']}}">{{$menu['title']}}</a>
                                </li>  
                                @endcan
                               
                                @endforeach  
                            </ul>
                        </li>
                        @endforeach

                        @endforeach


                        {{--  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>UI Elements</span></a>
                           
                        </li>

                        <li class="divider">Features</li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>会员管理</span></a>
                            <ul class="sub-menu">
                                <li><a href="/admin/member">会员列表</a>
                                </li>
                                <li><a href="email-read.html">Email Detail</a>
                                </li>
                                <li><a href="email-compose.html">Email Compose</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                           
                        </li>  --}}

                    </ul>
                </div>
            </div>
        </div>
        <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
            <div class="progress">
                <div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
            </div>
        </div>
    </div>
</div>