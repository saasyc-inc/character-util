<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 8/12/19
 * Time: 11:43 AM
 */

namespace CharacterUtil;

class UnVisibleCharacterFilter
{
    public static function main($info)
    {
        //只返回　utf-8 当中的可见字符
        return preg_replace('/[\x00-\x1F\x7F]/u', '', $info);
    }
}
