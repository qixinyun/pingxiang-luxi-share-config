<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/pingxiang-luxi-share-config/src/SmartyConfig/PxLx',
            S_ROOT.'vendor/qixinyun/pingxiang-luxi-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/pingxiang-luxi-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
