<?php
include "constants.php";
include "app/autoloader.php";
//include "C:\\wamp64\www\wordpress\wp-content\themes\slwpt\app\classes\autoloader.php";
//include __DIR__ . DIRECTORY_SEPARATOR . "app" . __DIR__ . "class-asset";
//echo __DIR__;

//die();
//new Asset();


function sl_after_setup_theme(){



 //   current_theme_supports('my_theme_is_active');
}

add_action('after_setup_theme','initializer::setup');



/*
/*function sl_new_user_register($new_user_id,$data){


    echo "new_user_id :$new_user_id,$data ";
}

function sl_new_user_register2($new_user_id,$data){

    echo "email sent";
}
function sl_new_user_register3($new_user_id,$data){

    echo "sms sent";
}

class user{

    public function login(){

    }

    public function logout(){

    }

    public static function register(){

    }
}
$new_user_object=new user();

add_action('new_user_register','sl_new_user_register',1,2);
add_action('new_user_register','sl_new_user_register2',2,2);
add_action('new_user_register','sl_new_user_register3',3,2);
add_action('new_user_register',array($new_user_object,'login'),3,2);
add_action('new_user_register','user::register',3,2);

$wp_action=array('new_user_register'=>array(


    'sl_new_user_register',
    'sl_new_user_register2',
    'sl_new_user_register3'


    ));
//call_user_func(sl_new_user_register);

do_action('new_user_register',10,20);*/

/*function sl_check_user_id(){

    if(isset($_GET['aff_id']) && intval($_GET['aff_id'])>0){

            echo $_GET['aff_id'];
    }

}

add_action('init','sl_check_user_id');*/

/*
$black_list=array(1,2,3,10,56);

function sl_add_user_blacklist($users){

    $users[]=23;


    return $users;


}*/

/*$content='سیستم محتوای وردپرس یک سیستم  سایت قوی است وردپرس';

function sl_check_word_word($content){

   $content= preg_replace('/وردپرس/','<a href="category/wordpress">وردپرس</a>',$content);

   return $content;
}

add_filter('check_wordpress_word','sl_check_word_word');

$content=apply_filters('check_wordpress_word',$content);

echo $content;*/

