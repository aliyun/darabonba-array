<?php

// This file is auto-generated, don't edit it. Thanks.
// namespace AlibabaCloud\Darabonba\Array;

// use \Exception;

/**
 * This is a array module
 */
class ArrayUtil {
    /**
     * @param string[] $raw
     * @param int $index
     * @param int $limit
     * @return array
     */
    public static function main($args){
        $cars=array("Volvo","BMW","Toyota");
        $mons=array("hi","my","friend");
        $list = self::concat($cars,$mons);
        // $list = self::split($cars,0,2);
        foreach ($list as $value)
        {
            echo $value . PHP_EOL;
        }
        $int = self::index($mons,"my");
        $str = self::join($mons,"-");
        // echo $str;
    }
    public static function split($raw, $index, $limit){        
        if (empty($raw)) {
            return [];
        }
        return array_slice($raw,$index,$limit);
    }

    /**
     * @param string[] $raw
     * @param string $str
     * @return bool
     */
    public static function contains($raw, $str){
        return in_array($str,$raw);
    }

    /**
     * @param string[] $raw
     * @param string $str
     * @return int
     */
    public static function index($raw, $str){
        return array_search($str, $raw);
    }

    /**
     * @param string[] $raw
     * @return int
     */
    public static function size($raw){
        return count($raw);
    }

    /**
     * @param string[] $raw
     * @param int $index
     * @return string
     */
    public static function get($raw, $index){
        return $raw[$index];
    }

    /**
     * @param string[] $raw
     * @param string $sep
     * @return string
     */
    public static function join($raw, $sep){
        return join($sep,$raw);
    }

    /**
     * @param string[] $raw
     * @param string[] $sep
     * @return array
     */
    public static function concat($raw, $sep){
        return array_merge($raw,$sep);
    }
}
ArrayUtil::main(array_slice($argv, 1));
