<?php
/**
 * Created by PhpStorm.
 * User: luyan
 * Date: 2019/3/4
 * Time: 16:12
 */

class Hook
{
    private static $data;

    public static function import($hooks)
    {
        self::$data=$hooks;
    }

    public static function add($tag,HookAction $hookAction)
    {
        self::$data[$tag]=$hookAction;
    }

    public static function delete($tag){
        unset(self::$data[tag]);
    }

    public static function merge($hooks){
        array_merge(self::$data,$hooks);
    }
    public static function deleteAll(){
        self::$data=[];
    }

    public static function exec($key,...$params){

    }


}