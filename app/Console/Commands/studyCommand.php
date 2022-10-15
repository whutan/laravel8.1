<?php

namespace App\Console\Commands;

use App\Traits\GetMenus;
use App\Traits\GetModuleConfig;
use Illuminate\Console\Command;
use Nwidart\Modules\Facades\Module;
use Spatie\Permission\Models\Permission;
class studyCommand extends Command
{
    use GetMenus,GetModuleConfig;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wf:permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       Permission::truncate();
       
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        foreach(Module::getOrdered() as $module){
           
        $config = $this->getModuleConfig($module.'.permission');
       foreach($config as $group){
        foreach($group['permissions'] as $permission){
            if(!$this->permissionIsExists($permission)){
                Permission::create(['name'=>$permission['name'],'guard_name'=>$permission['guard']]);
            }
        }
       }
       }
    }


    protected function permissionIsExists(array $permission): bool
    {
        $where = [
            ['name', '=', $permission['name']],
            ['guard_name', '=', $permission['guard']],
        ];

        return (bool)Permission::where($where)->first();
    }
}
