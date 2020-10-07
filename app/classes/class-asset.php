<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 10/3/2020
 * Time: 10:34 PM
 */

class Asset{

    public static function css($file_name){

        $file_url=THEME_URL.'/assets/css/'.$file_name;

         echo $file_url;

  }

    public static function js($file_name){

        $file_url=THEME_URL.'/assets/js/'.$file_name;

                 echo $file_url;


}

    public static function image($file_name){


        $file_url=THEME_URL.'/assets/image/'.$file_name;

                 echo $file_url;


}


}