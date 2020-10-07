<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 10/7/2020
 * Time: 10:54 PM
 */

class postTypes{

    public static function make_product_post_type(){

        $labels = array(
        		'name'               => _x( 'محصولات', 'post type general name', 'your-plugin-textdomain' ),
        		'singular_name'      => _x( 'محصول', 'post type singular name', 'your-plugin-textdomain' ),
        		'menu_name'          => _x( 'محصولات', 'admin menu', 'your-plugin-textdomain' ),
        		'name_admin_bar'     => _x( 'محصول', 'add new on admin bar', 'your-plugin-textdomain' ),
        		'add_new'            => _x( 'اضافه کردن', 'محصول', 'your-plugin-textdomain' ),
        		'add_new_item'       => __( 'اضافه کردن محصول', 'your-plugin-textdomain' ),
        		'new_item'           => __( 'جدید محصول', 'your-plugin-textdomain' ),
        		'edit_item'          => __( 'ویرایش محصول', 'your-plugin-textdomain' ),
        		'view_item'          => __( 'نمایش محصول', 'your-plugin-textdomain' ),
        		'all_items'          => __( 'همه محصولات', 'your-plugin-textdomain' ),
        		'search_items'       => __( 'جستجوی محصولات', 'your-plugin-textdomain' ),
        		'parent_item_colon'  => __( 'والد محصولات:', 'your-plugin-textdomain' ),
        		'not_found'          => __( 'یافت نشد محصولی .', 'your-plugin-textdomain' ),
        		'not_found_in_trash' => __( 'در زباله دان محصولات یافت نشد.', 'your-plugin-textdomain' )
        	);
        $args = array(
        		'labels'             => $labels,
        		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        		'public'             => true,
        		'publicly_queryable' => true,
        		'show_ui'            => true,
        		'show_in_menu'       => true,
        		'query_var'          => true,
        		'rewrite'            => array( 'slug' => 'product' ),
        		'capability_type'    => 'post',
        		'has_archive'        => true,
        		'hierarchical'       => false,
        		'menu_position'      => null,
        		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        	);

        	register_post_type( 'product', $args );

        
    }
    

}