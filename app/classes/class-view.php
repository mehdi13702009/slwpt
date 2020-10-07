<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 10/5/2020
 * Time: 10:27 PM
 */

class view{


    /**
     * @param $name
     * @param $arguments
     */
    public static function __callStatic ($name, $arguments){

        if ($name == 'render') {

            self::render_view($arguments[0]);

        }
    }

        private static function render_view($view_name){

            get_template_part('views/'.$view_name);

        }


}