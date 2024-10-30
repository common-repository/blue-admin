<div class="ba-info"> <img src="<?php  echo  get_ba_options('url'); ?>assets/images/icon-big.png" alt="<?php echo get_ba_options('name'); ?>" title="<?php echo get_ba_options('name'); ?>" width="128" height="128" class="alignleft" />
    <p>
        <?php echo __('Thanks for downloading',get_ba_options('slug') );?> <strong>
            <?php echo get_ba_options('name'); ?> </strong>(ver.
        <?php echo get_ba_options('version'); ?>).
        <?php echo __('This is a simple and clear admin design that makes your WordPress administration section more clear and relaxed. Hope you enjoy using it!. There are a bunch of cool features that will surely help you get your admin panel looking and working it\'s best.',get_ba_options('slug') );?>
    </p>
    <p>
        <?php echo __('A lot of hard work went in to programming and designing this plugin. If you like to support please use the danate link below. If you have any questions, comments, or if you encounter a bug, please contact us. Answer a short survey to let us know how we\'re doing and what to add in the future.',get_ba_options('slug') );?>
    </p>
    <p><a href="https://linesh.com/make-a-donation/">
            <?php echo __('Donate',get_ba_options('slug') );?></a>,
        <a href="https://linesh.com/forums/forum/plugins/blue-admin/">
            <?php echo __('Support',get_ba_options('slug') );?></a>,
        <a target="_blank" href="https://lineshjose.polldaddy.com/s/blue-admin/">
            <?php echo __('Take Survey',get_ba_options('slug') );?></a>
    </p>
</div>
<div class="clear"></div>
<div class="addons">
    <h3>
        <?php echo __('Add-ons',get_ba_options('slug') );?>:</h3>
    <form method="post" action="" name="ba_settings_form">
        <div class="ba_boxes">
            <?php foreach (get_ba_options('settings') as $index=>$value)
			{
		if($value['settings_type']=='common') {?>
            <div class="ba_box alignleft dime postbox">
                <h3 class="hndle ui-sortable-handle">
                    <?php echo $value['name']; ?>
                </h3>
                <div class="inside">
                    <p class="description">
                        <?php echo $value['desc']; ?>
                    </p>
                    <p>
                        <?php
					if($value['input_type']=='button' && is_enabled($index,$value)){?>
                        <input type="submit" name="<?php echo $index; ?>_disable" id="ID_<?php echo $index; ?>" value="<?php echo __('Disable',get_ba_options('slug') );?>" class="button-primary disable" />
                        <?php } else if(($value['input_type']=='button') && (ba_get_option($index)=='')){?>
                        <input type="submit" name="<?php echo $index; ?>_enable" id="ID_<?php echo $index; ?>" value="<?php echo __('Enable',get_ba_options('slug') );?>" class="button-primary enable" />
                        <?php } ?>
                        <?php if(isset($value['settings_page']) && $value['settings_page']==true && is_enabled($index,$value) ) { ?>
                        <a href="./admin.php?page=<?php echo get_ba_options('slug');?>&tab=<?php echo $index; ?>" class="button-secondary">
                            <?php echo __('Settings',get_ba_options('slug') );?></a>
                        <?php }?>
                        <?php if($value['learn_more']) { ?>
                        <a href="<?php echo $value['learn_more'];?>" target="_blank" class="button-secondary">
                            <?php echo __('Learn More',get_ba_options('slug') );?></a>
                        <?php }?>
                    </p>
                </div>
            </div>
            <?php } } ?>
            <div class="ba_box alignleft disable dime postbox">
                <h3>
                    <?php echo __('Coming soon',get_ba_options('slug') );?>
                </h3>
            </div>
        </div>
        <div class="reset-box">
            <a href="<?php echo get_ba_options('settings_page_url');?>&ba_reset=1" class="button-primary disable">
                <?php echo __('Reset All Blue Admin Settings',get_ba_options('slug'));?></a>
            <div class="clear"></div>
        </div>
    </form>
</div>
<!-- General settings page Ends -->
<div class="clear"></div>
<div class="ba-footer">
    <p class="logo">
        <a href="https://linesh.com/" target="_blank"> <img src="<?php  echo  get_ba_options('url'); ?>assets/images/lin_logo.png" alt="Linesh.com" title="A Linesh Magic" width="32" height="32" class="" /> </a> </p>
    <p class="links">
        <a target="_blank" href="https://wordpress.org/extend/plugins/blue-admin/changelog/" title="<?php echo __('Version',get_ba_options('slug') );?>">Ver.
            <?php echo get_ba_options('version'); ?></a>
        <a target="_blank" href="https://wordpress.org/extend/plugins/blue-admin/" title="Visit plugin site"><span class="dashicons dashicons-admin-external"></span>
            <?php echo __('Visit plugin site',get_ba_options('slug') );?></a>
        <a target="_blank" href="<?php echo get_ba_options('donate');?>"><span class="dashicons dashicons-admin-heart"></span>
            <?php echo __('Donate',get_ba_options('slug') );?></a>
        <a target="_blank" href="<?php echo get_ba_options('support');?>"><span class="dashicons dashicons-admin-sos"></span>
            <?php echo __('Support',get_ba_options('slug') );?></a> </p>
    <div class="clear"></div>
</div>