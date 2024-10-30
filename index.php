<?php
/*
	Plugin Name: Blue Admin
	Version: 21.06.01
	Plugin URI: https://linesh.com/projects/blue-admin/
	Description: This is a simple admin design that makes your WordPress administration section more clear and relaxed.
	Author: Linesh Jose
	Author URI: https://linesh.com/
	License: GPL2
	Text Domain: blue-admin
*/

//  Blue Admin options ------------------->
function get_ba_options($option)
{
	$slug="blue-admin";
	$options= array(
					'name'=>"Blue Admin",
					'slug'=>$slug, 
					'version'=>'21.06.01', 
					'url'=> plugin_dir_url(__FILE__),
					'path'=> plugin_dir_path(__FILE__),
					'settings_page_url'=> admin_url('admin.php?page='.$slug),
					'donate'=>'https://linesh.com/make-a-donation/',
					'support'=> 'https://linesh.com/forums/forum/plugins/blue-admin/',
					'settings'=>array (	
	
							 		'blue_admin_adminbar'=>array(  
										  "name" => __("Custom Adminbar Menus",$slug),
										  "desc" => __("Enable or disable custom Adminbar menus. You can add your own links to WordPress adminbar or toolbar",$slug),
										  "default" => false, 	
										  "input_type" => "button",
										  "settings_type"=>'common',
										  "settings_page"=>false,  
										  "learn_more"=>'https://bit.ly/1rCaAzf'
									  ),
									'blue_admin_login_page'=> array(  
										  "name" => __('Login Page',$slug),
										  "desc" =>__("You can costomize WordPress login page style here.",$slug),
										  "default" => false, 	
										  "input_type" => "button",
										  "settings_type"=>'common', 
										  "settings_page"=>true, 
										  "learn_more"=>'https://bit.ly/1Wi8iC0'
									  ),
									 'blue_admin_color_scheme'=>array(  
										  "name" =>__('Color Schemes',$slug),
										  "desc" => __("Enable or disable Blue Admin color schemes.",$slug),
										  "default" => false, 	
										  "input_type" => "button",
										  "settings_type"=>'common',
										  "settings_page"=>true,  
										  "learn_more"=>''
									  ),
									  
									   'blue_admin_color_scheme_val'=>array(  
										   	"default"=>'',
											"settings_type"=>'',
											"settings_page"=>false,  
										  ),
									  	  
									 'ba_lp_attr'=>  array(  
										  "default" => array(	'bg_img'=>'', 
										  						'bg_color'=>'#eee', 
																'text_color'=>'#222', 
																'bg_img_pos'=>'',
																'bg_img_rep'=>'',
																'fm_bg_color'=>'#fff',
																'fm_color'=>'#777',
																'fm_no_bg_color'=>'', 
																'no_logo'=>'',
																'logo_img'=>'', 
																'logo_url'=>get_bloginfo('url'), 
																'logo_text'=>get_bloginfo('name')
															), 	
										  "settings_type"=>'', 
										  "settings_page"=>false, 
									  ),
							  )
					);
	if($option=trim($option)){
		return $options[$option];
	}
}

// Loading funtions and settings ------------->
require_once(get_ba_options('path').'./inc/inc.php');

// Loading color scheme settings ------------->
require_once(get_ba_options('path').'./inc/color-scheme.php');

// Loading Custom Adminbar menus settings ------------->
require_once(get_ba_options('path').'./inc/cam.php');

// Loading login page customization settings ------------->
require_once(get_ba_options('path').'./inc/lp.php');
?>