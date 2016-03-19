<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 19.03.2016
 * Time: 18:45
 */

namespace Common;


class Connector
{
    public static function connectAllFilesInDirectory($path){
        $files = glob($path . '/*.php');

        foreach ($files as $file) {
            require_once($file);
        }
    }
}