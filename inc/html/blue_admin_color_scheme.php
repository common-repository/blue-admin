<div class="ba-lp-d">
    <form method="post" action="">
        <?php if( ($scheme=ba_get_option('blue_admin_color_scheme_val')) && ($c_scheme=@unserialize(@base64_decode($scheme)))) { ?>
        <fieldset>
            <legend>Current Scheme</legend>
            <div class="palettes">
                <div class="palette wide">
                    <input type="radio" name="blue_admin_color_scheme_val" value="<?php echo $scheme;?>" checked id="ba-c-scheme-current">
                    <table>
                        <tr>
                            <td style="background:<?php echo ba_add_hash($c_scheme['palette'][0]);?>;">&nbsp;</td>
                            <td style="background:<?php echo ba_add_hash($c_scheme['palette'][1]);?>;">&nbsp;</td>
                            <td style="background:<?php echo ba_add_hash($c_scheme['palette'][2]);?>;">&nbsp;</td>
                        </tr>
                    </table>
                    <label><span>
                            <?php echo $c_scheme['name'];?></span><a href="<?php echo $c_scheme['author_url'];?>" target="_blank">
                            <?php echo $c_scheme['author'];?></a> </label>
                </div>
                <div class="clear"></div>
            </div>
        </fieldset>
        <?php 
	 	} 
  ?>
        <?php if( ($schemes=get_ba_color_schemes()) && !isset($schemes->errors) ){ ?>
        <fieldset>
            <legend>Select a color scheme</legend>
            <div class="palettes">
                <div class="loaded-palettes">
                    <?php
            $err='';
			foreach($schemes as $index=>$scheme)
			{
				if($index=='div'){
					echo'<hr>';

				}else if(is_object($scheme) )
				{
					echo '<div class="palette-'.$index.'">';
					echo '<h3>'.$scheme->name.' '.__('Color Schemes',get_ba_options('slug') ).'</h3><div class="clear"></div>';
					if( isset($scheme->author)){ 
						echo '<p style="margin:0px;"><strong>By <a href="'.$scheme->author_url.'">'.$scheme->author.'</strong></a>'; 
					}
					if( isset($scheme->desc)){
						echo '<p  style="margin:2px 0 15px; font-size:13px;">'.$scheme->desc.'</a>'; 
					}
					
					if(isset($scheme->palettes))
					{
						foreach($scheme->palettes as $ind=>$val)
						{
							$array=(array)$val;
							$array['author_url']=$scheme->author_url;
							$array['author']=$scheme->author;
							$new_val=base64_encode(serialize($array));
							if(isset($val->palette)){
								echo'<div class="palette"><table><tr>';
									foreach($val->palette as $color){ echo '<td style="background:'.ba_add_hash($color).';">&nbsp;</td>'; }
								echo'</tr></table>';
							}
							if(ba_get_option('blue_admin_color_scheme_val') ==$new_val ){
								echo '<input type="radio" name="blue_admin_color_scheme_val" value="'.sanitize_text_field($new_val).'" checked id="ba-c-scheme-'.$ind.'">';
							}else{
								echo '<input type="radio" name="blue_admin_color_scheme_val" value="'.sanitize_text_field($new_val).'" id="ba-c-scheme-'.$ind.'">';
							}
							echo' <label for="ba-c-scheme-'.$ind.'" ><span>'.$val->name.'</span></label></div>';
						}
					}
					echo '<div class="clear"></div> </div>';
				}else{
					$err= '<p style="color: red;"><strong>'.__('Oops..',get_ba_options('slug') ).'</strong>'.__('Could not generate data..',get_ba_options('slug') ).'<a href="'.admin_url('admin.php?page='.get_ba_options('slug')).'&clear_cache=1" class="" style="margin-left:3px;">'.__('Clear Cache',get_ba_options('slug') ).'</a></p>';
				}
			}
			echo $err;
		?>
                </div>
                <div class="clear"></div>
            </div>
            <br>
            <hr>
            <br>
            <p>
                <?php echo __('More colors are coming soon... Stay tuned on',get_ba_options('slug') );?> <a href="https://linesh.com/" target="_blank">Linesh.Com</a></p>
        </fieldset>
        <div id="major-publishing-actions" class="submit" style="background:none; border:none; padding:0">
            <input name="ba_cs_options_save" type="submit" id="submit" value="<?php echo __('Save changes',get_ba_options('slug') );?>" class="button button-primary button-hero" />
        </div>
        <?php 
		}else{?>
        <fieldset>
            <div style="background:#ff5c5c;color:#fff;padding:10px 20px;">
                <p style="color: red;"><strong>
                        <?php echo __('Oops..',get_ba_options('slug') );?></strong>
                    <?php echo __('We could not fetch color schemes from our server.',get_ba_options('slug') );?>
                </p>
                <?php if(isset($schemes->errors)){ 
				 foreach($schemes->errors as $_in=>$val){
					echo '<p><strong>'.ucwords(str_replace('_',' ',$_in)).':</strong> '.$val[0].'.</p>';	 
				 }
			 }?>
            </div>
        </fieldset>
        <?php }	?>
    </form>
</div>