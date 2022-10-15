<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'pid'];

    public function tree($datas, $pid = 0, $level = 0)
    {
       
        static $newArr = array();
        foreach ($datas as $data) {
            if ($data['pid'] == $pid) {
                $data['level']=$level;
                $this->tree($datas, $data['id'],$level+1);
                // if(!empty($child)){
                //     $data['children']=$child;
                // }
               // $newArr[] = $data;
                array_unshift($newArr,$data);
            }
        }
        return $newArr;
    }


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    public function isChild($arg1,$arg2){
        
        $obj2=Category::find($arg2);
        return $obj2->pid==$arg1;
    }

    static function isHasCategory($id){
        foreach(Category::all() as $item){
            if($item['pid']==$id){
                return true;
            }
        }
        return false;
    }
}
