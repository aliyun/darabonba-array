<?php

// This file is auto-generated, don't edit it. Thanks.
// namespace AlibabaCloud\Darabonba\Array;

// use \Exception;

namespace AlibabaCloud\Darabonba\ArrayUtil;

/**
 * This is a array module.
 */
class ArrayUtil
{
    public static function split($raw, $index, $limit)
    {
        if (!isset($raw) || empty($raw) || $index < 0 || $limit > \count($raw)) {
            throw new \InvalidArgumentException('not a valid value for parameter');
        }

        return \array_slice($raw, $index, $limit);
    }

    /**
     * @param string[] $raw
     * @param string   $str
     *
     * @return bool
     */
    public static function contains($raw, $str)
    {
        return \in_array($str, $raw);
    }

    /**
     * @param string[] $raw
     * @param string   $str
     *
     * @return int
     */
    public static function index($raw, $str)
    {
        if (!isset($raw) || !isset($str)) {
            throw new \InvalidArgumentException('not a valid value for parameter');
        }

        $ret = array_search($str, $raw);
        if($ret === false) {
            return -1;
        }
        return $ret;
    }

    /**
     * @param string[] $raw
     *
     * @return int
     */
    public static function size($raw)
    {
        if (isset($ram)) {
            throw new \InvalidArgumentException('not a valid value for parameter');
        }

        return \count($raw);
    }

    /**
     * @param string[] $raw
     * @param int      $index
     *
     * @return string
     */
    public static function get($raw, $index)
    {
        if (!isset($raw) || $index < 0 || $index >= count($raw)) {
            throw new \InvalidArgumentException('not a valid value for parameter');
        }

        return $raw[$index];
    }

    /**
     * @param string[] $raw
     * @param string   $sep
     *
     * @return string
     */
    public static function join($raw, $sep)
    {
        if (!isset($raw) || empty($sep)) {
            throw new \InvalidArgumentException('not a valid value for parameter');
        }

        return implode($sep, $raw);
    }

    /**
     * @param string[] $raw
     * @param string[] $sep
     *
     * @return array
     */
    public static function concat($raw, $sep)
    {
        if (!isset($raw) || !isset($sep)) {
            throw new \InvalidArgumentException('not a valid value for parameter');
        }

        return array_merge($raw, $sep);
    }

    /**
     * @param string[] $raw
     *
     * @return array
     */
    public static function ascSort($raw)
    {
        if (!isset($raw)) {
            throw new \InvalidArgumentException('not a valid value for parameter');
        }
        sort($raw);
        return $raw;
    }

    /**
     * @param string[] $raw
     *
     * @return array
     */
    public static function descSort($raw)
    {
        if (!isset($raw)) {
            throw new \InvalidArgumentException('not a valid value for parameter');
        }

        rsort($raw);
        return $raw;
    }

    /**
     * append any array item
     * @param mixed $array
     * @param mixed $item
     */
    public static function append(&$array, $item){
        if (isset($array) && \is_array($array)) {
            array_push($array, $item);
        }
    }
}
