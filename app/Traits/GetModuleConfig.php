<?php
namespace App\Traits;

use Illuminate\Support\Arr;

trait GetModuleConfig{
    public function getModuleConfig($name){
        
        $exts=explode('.',$name);
        $file = config('modules.paths.modules').'/'.ucfirst(array_shift($exts)).'/Config/'.array_shift($exts).'.php';
        if (is_file($file)) {
            $config = include $file;
           
            return $exts ? Arr::get($config, implode('.', $exts)) : $config;
        }
    }
}