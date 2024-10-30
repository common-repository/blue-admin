<?php
	$ba_lp_opts=array_filter(ba_get_option('ba_lp_attr'),'trim');
	$ba_lp_d_opts=get_ba_options('settings');
	$ba_lp_d_opts=$ba_lp_d_opts['ba_lp_attr']['default'];
	$ba_lp_opts=wp_parse_args($ba_lp_opts,$ba_lp_d_opts);
?>
<script>
	jQuery(document).ready(function(e) {
		// single image  selecting -------->
		jQuery('#wpbody').on('click', 'a.add_lp_bg_image', function(e) 
		{
			e.preventDefault();
			var frame;
			var elem=jQuery(this);
			
			// If the media frame already exists, reopen it.
			if ( frame ) {
			  frame.open();
			  return;
			}
			
			// Create a new media frame
			frame = wp.media({
				title: '<?php echo __('Select or Upload Media',get_ba_options('slug') );?>',
				button: {
					text: '<?php echo __('Use this media',get_ba_options('slug') );?>'
				},
				multiple: false  // Set to true to allow multiple files to be selected
			});
			
			// When an image is selected in the media frame...
			frame.on( 'select', function() {
				var attachment = frame.state().get('selection').first().toJSON();// Get media attachment details from the frame state
				elem.parents('td').find('input.bg_img_id').val( attachment.url );// Send the attachment id to our hidden input
			});
			frame.open();
		});
		jQuery('#wpbody').on('click', 'a.remove_lp_bg_image', function(e) 
		{
			e.preventDefault();
			var elem=jQuery(this);
			elem.parents('td').find('input.bg_img_id').val( ' ' );// Send the attachment id to our hidden input
			return false;
		});
		jQuery('#wpbody').on('click', 'a.reset_color', function(e) 
		{
			var target=jQuery(this).parents('td').find('input');
			var d_col=target.attr('data-default-color');
			target.val(d_col).css('background',d_col).attr('data-current-color',d_col);
			return false;
		});
		
	});
</script>
<style>
.ba-lp-d fieldset {
	background: #F9F9F9;
	padding: 20px;
	margin: 25px 0;
	border: 1px solid #ddd;
}
.ba-lp-d fieldset legend {
	background: #ddd;
	padding: 8px 15px;
	border-radius: 0px !important;
	font-size: 14px;
	font-weight: bold;
	color: #000;
}
.ba-lp-d fieldset p {
	font-size: 13px;
	font-style: italic;
}
.ba-lp-d fieldset .button {
	padding: 2px 10px 2px !important;
}
</style>

<div class="ba-lp-d">
  <form method="post" class="jqtransform" id="myForm" enctype="multipart/form-data" action="">
    <fieldset>
      <legend><?php echo __('Login Form',get_ba_options('slug') );?></legend>
      <table class="form-table">
        <tr>
          <th scope="row"><label for="fm-bg-color"><?php echo __('Backround Color',get_ba_options('slug') );?></label></th>
          <td><input name="ba_lp_attr[fm_bg_color]" type="text" id="fm-bg-color" value="<?php echo ba_add_hash($ba_lp_opts['fm_bg_color'])?>" class="regular-text jscolor" data-default-color="#FFFFFF">
            <a href="#" class="button reset_color"><?php echo __('Reset',get_ba_options('slug') );?></a>
            <p>
              <label>
                <input name="ba_lp_attr[fm_no_bg_color]" type="checkbox" id="fm-no-bg-color" value="1" <?php if(ba_add_hash($ba_lp_opts['fm_no_bg_color'])=='1'){ echo 'checked';} ?>>
                <?php echo __('No background color?',get_ba_options('slug') );?></label>
            </p></td>
        </tr>
        <tr>
          <th scope="row"><label for="fm-color"><?php echo __('Foreground Color',get_ba_options('slug') );?></label></th>
          <td><input name="ba_lp_attr[fm_color]" type="text" id="fm-color" value="<?php echo ba_add_hash($ba_lp_opts['fm_color'])?>" class="regular-text jscolor" data-default-color="#777777">
            <a href="#" class="button reset_color"><?php echo __('Reset',get_ba_options('slug') );?></a></td>
        </tr>
        <tr>
          <th scope="row"><label for="logo-title"><?php echo __('Logo Title',get_ba_options('slug') );?></label></th>
          <td><input name="ba_lp_attr[logo_text]" type="text" id="logo-title" value="<?php echo sanitize_text_field($ba_lp_opts['logo_text'])?>" class="regular-text"></td>
        </tr>
        <tr>
          <th scope="row"><label for="logo-url"><?php echo __('Logo Url',get_ba_options('slug') );?></label></th>
          <td><input name="ba_lp_attr[logo_url]" type="url" id="logo-url" value="<?php echo sanitize_text_field($ba_lp_opts['logo_url'])?>" class="regular-text"></td>
        </tr>
        <tr>
          <th scope="row"><label for="logo-image"><?php echo __('Logo Image',get_ba_options('slug') );?></label></th>
          <td><input name="ba_lp_attr[logo_img]" type="url" id="logo-image" value="<?php echo sanitize_text_field($ba_lp_opts['logo_img'])?>" class="regular-text bg_img_id">
            <a href="#" class="button add_lp_bg_image"><?php echo __('Seleact an Image',get_ba_options('slug') );?></a> <a href="#" class="button remove_lp_bg_image"><?php echo __('Remove',get_ba_options('slug') );?></a>
            <p><?php echo __('image with size 150px X 150px',get_ba_options('slug') );?></p>
            <br>
            <p>
              <label>
                <input name="ba_lp_attr[no_logo]" type="checkbox" id="no-logo" value="1"  <?php if(sanitize_text_field($ba_lp_opts['no_logo'])=='1'){ echo 'checked';} ?>><?php echo __('Hide Logo?',get_ba_options('slug') );?></label>
            </p></td>
        </tr>
      </table>
    </fieldset>
    <fieldset>
      <legend>Backround</legend>
      <table class="form-table">
        <tr>
          <th scope="row"><label for="bg-color"><?php echo __('Background Color',get_ba_options('slug') );?></label></th>
          <td><input name="ba_lp_attr[bg_color]" type="text" id="bg-color" value="<?php echo ba_add_hash($ba_lp_opts['bg_color'])?>" class="regular-text jscolor" data-default-color="#EEEEEE">
            <a href="#" class="button reset_color"><?php echo __('Reset',get_ba_options('slug') );?></a></td>
        </tr>
        <tr>
          <th scope="row"><label for="text-color"><?php echo __('Text Color',get_ba_options('slug') );?></label></th>
          <td><input name="ba_lp_attr[text_color]" type="text" id="text-color" value="<?php echo ba_add_hash($ba_lp_opts['text_color'])?>" class="regular-text jscolor" data-default-color="#222222">
            <a href="#" class="button reset_color"><?php echo __('Reset',get_ba_options('slug') );?></a></td>
        </tr>
        <tr>
          <th scope="row"><label for="bg-image"><?php echo __('Image',get_ba_options('slug') );?></label></th>
          <td><input name="ba_lp_attr[bg_img]" type="url" id="bg-image" value="<?php echo sanitize_text_field($ba_lp_opts['bg_img'])?>" class="regular-text bg_img_id">
            <a href="#" class="button add_lp_bg_image"><?php echo __('Seleact an Image',get_ba_options('slug') );?></a> <a href="#" class="button remove_lp_bg_image"><?php echo __('Remove',get_ba_options('slug') );?></a></td>
        </tr>
        <tr>
          <th scope="row"><label for="bg-img-pos"><?php echo __('Image Position',get_ba_options('slug') );?></label></th>
          <td><select name="ba_lp_attr[bg_img_pos]">
              <option value="" ><?php echo __('Select an option',get_ba_options('slug') );?></option>
              <?php 
		  	foreach( array('left top', 'left center', 'left bottom', 'right top', 'right center', 'right bottom', 'center') as $pos){
				if( sanitize_text_field(trim($ba_lp_opts['bg_img_pos']))==$pos){
					echo '<option value="'.$pos.'" selected>'.ucwords($pos).'</option>';	
				}else{
					echo '<option value="'.$pos.'">'.ucwords($pos).'</option>';	
				}
			}
		  ?>
            </select>
        </tr>
        <tr>
          <th scope="row"><label for="bg-img-rep"><?php echo __('Tile background',get_ba_options('slug') );?></label></th>
          <td><select name="ba_lp_attr[bg_img_rep]">
              <option value="" ><?php echo __('Select an option',get_ba_options('slug') );?></option>
              <?php 
		  	foreach( array('tile', 'fixed') as $pos){
				if( sanitize_text_field(trim($ba_lp_opts['bg_img_rep']))==$pos){
					echo '<option value="'.$pos.'" selected>'.ucwords($pos).'</option>';	
				}else{
					echo '<option value="'.$pos.'">'.ucwords($pos).'</option>';	
				}
			}
		  ?>
            </select>
        </tr>
      </table>
    </fieldset>
    <div id="major-publishing-actions" class="submit" style="background:none; border:none; padding:0">
      <input name="ba_lp_options_save" type="submit" id="submit" value="<?php echo __('Save changes',get_ba_options('slug') );?>"  class="button button-primary button-hero"/>
    </div>
  </form>
</div>