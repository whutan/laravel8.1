<?php
namespace App\Traits;

use Nwidart\Modules\Facades\Module;

Trait GetMenus{
    public function getMenus(){
        foreach(Module::getOrdered() as $module){
            $path=config('modules.paths.modules')."/{$module->getName()}/config";
            $res= include "{$path}/menus.php";
            $title=$this->getModuleConfig($module->getName().'.config.name');
            $menus[$title]=$res;
        };
        return $menus;
    }

    public function getAllPermissions(){
        foreach(Module::getOrdered() as $module){
            $path=config('modules.paths.modules')."/{$module->getName()}/config";
          
            $file=include "{$path}/permission.php";
            $permissions[]=$file;
        }
        return $permissions;
    }
}