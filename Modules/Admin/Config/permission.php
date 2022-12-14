<?php
/** .-------------------------------------------------------------------
 * |      Site: www.hdcms.com  www.houdunren.com
 * |      Date: 2018/7/2 上午12:54
 * |    Author: 向军大叔 <2300071698@qq.com>
 * '-------------------------------------------------------------------*/
/**
 * 权限配置
 * 为了避免其他模块有同名的权限，权限标识要以 '控制器@方法' 开始
 */
return [
    [
        'group' => '系统管理',
        'permissions' => [
            ['title' => '网站配置', 'name' => 'Admin::config-site', 'guard' => 'admins'],
            ['title' => '微信配置', 'name' => 'Admin::config-wechat', 'guard' => 'admins'],
            ['title' => '邮件配置', 'name' => 'Admin::config-email', 'guard' => 'admins'],
            ['title' => '权限管理', 'name' => 'Admin::permission-manager', 'guard' => 'admins'],
            ['title' => '用户管理', 'name' => 'Admin::role-manager', 'guard' => 'admins'],
        ],
    ],
        [
            'group' => '文章管理',
            'permissions' => [
                ['title' => '栏目管理', 'name' => 'Artical::category-manager', 'guard' => 'admins'],
                ['title' => '文章管理', 'name' => 'Artical::artical-manager', 'guard' => 'admins'],
                
            ]
            
                
            ]
    
];
