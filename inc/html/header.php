<div class="wrap">
    <h2>
        <?php echo get_ba_options('name'); ?>
    </h2>
    <?php
	if ( isset($_REQUEST['saved'])  || isset($_REQUEST['error']) )
	{ 
		if(isset($_REQUEST['error'])){
			$class="error";
			$text=__("Something went wrong please try again.",get_ba_options('slug') );
		}else{
			$class="updated";
			$text=__('Settings saved.',get_ba_options('slug') );
		}
		echo '<div id="message" class="'.$class.' fade"><p><strong>'.$text.'</strong></p></div>';	
	}
	if(isset($_GET['tab'])){ 
		$tab=trim($_GET['tab']); 
	}else{
		$tab='';
	}
?>
    <h3 class="nav-tab-wrapper"> <a href="<?php echo get_ba_options('settings_page_url');?>" class="nav-tab <?php ba_nav_tab_active(array($tab,''));?> ">
            <?php echo __('Dashboard',get_ba_options('slug') );?></a>
        <?php 
foreach (get_ba_options('settings') as $index=>$value){ 
if(is_enabled($index,$value) && isset($value['settings_page']) &&  $value['settings_page']==true) {
?>
        <a href="<?php echo get_ba_options('settings_page_url');?>&tab=<?php echo $index;?>" class="nav-tab <?php ba_nav_tab_active(array($tab,$index));?> ">
            <?php echo $value['name'];?></a>
        <?php }  
}
?>
    </h3>
    <div class="blue_admin_settings">