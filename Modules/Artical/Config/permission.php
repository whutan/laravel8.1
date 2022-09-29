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
        'group' => '文章管理1',
        'permissions' => [
            ['title' => '网站配置1', 'name' => 'Admin1::config-site', 'guard' => 'admins'],
            ['title' => '微信配置1', 'name' => 'Admin1::config-wechat', 'guard' => 'admins'],
            ['title' => '邮件配置1', 'name' => 'Admin1::config-email', 'guard' => 'admins'],
            ['title' => '权限管理1', 'name' => 'Admin1::role-manager', 'guard' => 'admins'],
        ],
    ],
];
