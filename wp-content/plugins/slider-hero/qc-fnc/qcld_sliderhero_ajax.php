<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
function qcld_show_arrow_items_fnc(){
$elem = sanitize_text_field($_POST['elem']);
$btn = sanitize_text_field($_POST['btnval']);
if($btn!=''){
	$btn = json_decode(wp_unslash(htmlspecialchars_decode($btn)));
}
?>
	<div id="sm-modal" class="slidermodal">

		<!-- Modal content -->
		<div class="modal-content" data-elem="<?php echo esc_attr($elem); ?>" style="width: 60%;">
			<span class="close"><?php _e( "X", 'Slider X' ); ?></span>
			<h3><?php _e( "Create A Button", 'Slider X' ); ?></h3>
			<hr/>

        <div class="qc-Slider-Hero-item_btn">
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Button's Text</label><input style="width: 225px;" type="text" id="hero_button_text" value="<?php echo (isset($btn->button_text)?esc_attr($btn->button_text):''); ?>" placeholder="Enter button text" />
			</div>
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Button URL</label><input style="width: 225px;" type="text" id="hero_button_url" placeholder="http://www.expample.com" value="<?php echo (isset($btn->button_url)?esc_url($btn->button_url):''); ?>" />
			</div>
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Button Target</label><select id="hero_button_target">
					<option <?php echo (@$btn->button_target=='_self'?'selected="selected"':''); ?> value="_self">_Self</option>
					<option <?php echo (@$btn->button_target=='_blank'?'selected="selected"':''); ?> value="_blank">_Blank</option>
				</select>
			</div>

		
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Button Border</label>
				Square <input type="radio" checked <?php echo (@$btn->button_border=='square'?'checked':''); ?> name="hero_button_border" value="square" />
				Rounded <input type="radio" <?php echo (@$btn->button_border=='rounded'?'checked':''); ?> name="hero_button_border" value="rounded" />
				
			</div>
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Button Style</label>
				Full Background <input type="radio" <?php echo (@$btn->button_style=='full_background'?'checked':''); ?> name="hero_button_style" value="full_background" />
				Border <input type="radio" <?php echo (@$btn->button_style=='border'?'checked':''); ?> name="hero_button_style" value="border" />
				
			</div>
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Font Weight</label><select id="hero_button_font_weight">
					<option <?php echo (@$btn->button_font_weight=='normal'?'selected="selected"':''); ?> value="normal">Normal</option>
					<option <?php echo (@$btn->button_font_weight=='bold'?'selected="selected"':''); ?> value="bold">Bold</option>
				</select>
			</div>
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Font Size</label><input style="width: 225px;" type="text" id="hero_button_font_size" value="<?php echo (isset($btn->button_font_size)?esc_attr($btn->button_font_size):''); ?>" placeholder="Ex: 20px" />
			</div>
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Letter Spacing</label><input style="width: 225px;" type="text" id="hero_button_letter_spacing" value="<?php echo (isset($btn->button_letter_spacing)?esc_attr($btn->button_letter_spacing):''); ?>" placeholder="Ex: 0.5px" />
			</div>
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Button Text Color</label>
				
				<input type="text" name="hero_button_text_color" id="hero_button_text_color" class="color-field" value="<?php echo (isset($btn->button_color)?esc_attr($btn->button_color):''); ?>" />
				
			</div>
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Button Text Hover Color</label>
				
				<input type="text" name="hero_button_text_hover_color" id="hero_button_text_hover_color" class="color-field" value="<?php echo (isset($btn->button_hover_color)?esc_attr($btn->button_hover_color):''); ?>" />
				
			</div>
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Button Background /Border Color</label>
				
				<input type="text" name="hero_button_bg_color" id="hero_button_bg_color" class="color-field" value="<?php echo (isset($btn->button_background_color)?esc_attr($btn->button_background_color):''); ?>" />

			</div>
			
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Button Background /Border Hover Color</label>
				
				<input type="text" name="hero_button_bg_hover_color" id="hero_button_bg_hover_color" class="color-field" value="<?php echo (isset($btn->button_background_hover_color)?esc_attr($btn->button_background_hover_color):''); ?>" />
				
			</div>

			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;"></label><input style="background: #4191EF; border: none;color: #fff; padding: 7px 15px; margin-right: 10px;cursor:pointer;margin-left: 3px;" type="button" id="add_the_button" value="<?php echo (isset($btn->button_text)?'Update':'Add Button'); ?>" />
		<input style="    background: #FE8D2E; border: none;color: #fff;padding: 7px 15px;margin-right: 10px;cursor:pointer; font-size: 14px; float: none;  font-weight: normal;" type="button" class="botmclose" value="Cancel" />
		<input style="    background: #E91E63; border: none;color: #fff;padding: 7px 15px;margin-right: 10px;cursor:pointer;" type="button" id="cancel_the_button" value="Reset" />
			</div>

        </div>
</div>
</div>
<?php
exit;
}
add_action( 'wp_ajax_qcld_show_arrow_items', 'qcld_show_arrow_items_fnc');
?>
<?php
function qcld_show_stomp_config_fnc(){
$elem = sanitize_text_field($_POST['elem']);
$slidid = sanitize_text_field($_POST['slidid']);
$selfelem = sanitize_text_field($_POST['selfelem']);
$btn = sanitize_text_field($_POST['btnval']);
$ordering = sanitize_text_field($_POST['ordering']);
if($btn!=''){
	$btn = json_decode(wp_unslash(htmlspecialchars_decode($btn)));
}
?>
	<div id="sm-modal" class="slider_hero_modal">

		<!-- Modal content -->
		<div class="modal-content" data-elem="<?php echo esc_attr($elem); ?>" data-self="<?php echo $selfelem; ?>" data-sid="<?php echo $slidid; ?>" style="width: 60%;">
			<span class="close"><?php _e( "X", 'Slider Hero' ); ?></span>
			<h3 style="font-size: 20px;"><?php _e( "Slide Configuration -> ", 'Slider Hero' ); echo $ordering; ?></h3>
			<hr/>

        <div class="qc-Slider-Hero-item_btn">

		<?php 
		$animations = array('none','bounce', 'flash', 'pulse', 'rubberBand', 'shake', 'swing', 'tada', 'wobble', 'jello', 'ceIn', 'bounceIn', 'bounceInDown', 'bounceInLeft', 'bounceInRight', 'bounceInUp', 'fadeIn', 'fadeInDown', 'fadeInDownBig', 'fadeInLeft', 'fadeInLeftBig', 'fadeInRight', 'fadeInRightBig', 'fadeInUp', 'fadeInUpBig', 'flip', 'flipInX', 'flipInY', 'lightSpeedIn', 'rotateIn', 'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInUpRight', 'slideInUp', 'slideInDown', 'slideInLeft', 'slideInRight', 'zoomIn', 'zoomInDown', 'zoomInLeft', 'zoomInRight', 'zoomInUp', 'hinge', 'rollIn' );
		?>
		
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Select Animation</label>
				
				<select id="hero_stomp_animation">
				
					<?php foreach($animations as $animation): ?>
						<option <?php echo (@$btn->hero_stomp_animation==$animation?'selected="selected"':''); ?> value="<?php echo $animation ?>"><?php echo $animation ?></option>
					<?php endforeach; ?>
					
					
				</select>
				<p id="hero_text_preview_animation" style="display: inline-block;margin-left: 10px;font-size: 16px;">Hero Text</p>
			</div>

			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Delay Time</label><input style="width: 225px;" type="text" id="hero_stomp_delay" value="<?php echo (isset($btn->hero_stomp_delay)?esc_attr($btn->hero_stomp_delay):''); ?>" placeholder="1200" />
			</div>
			
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Font Size</label><input style="width: 225px;" type="text" id="hero_stomp_fontsize" value="<?php echo (isset($btn->hero_stomp_fontsize)?esc_attr($btn->hero_stomp_fontsize):''); ?>" placeholder="50px" />
			</div>
			
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Font Weight</label><select id="hero_stomp_font_weight">
					<option <?php echo (@$btn->hero_stomp_font_weight=='normal'?'selected="selected"':''); ?> value="normal">Normal</option>
					<option <?php echo (@$btn->hero_stomp_font_weight=='bold'?'selected="selected"':''); ?> value="bold">Bold</option>
				</select>
			</div>
			
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Letter Spacing</label><input style="width: 225px;" type="text" id="hero_stomp_letter_spacing" value="<?php echo (isset($btn->hero_stomp_letter_spacing)?esc_attr($btn->hero_stomp_letter_spacing):''); ?>" placeholder="Ex: 0.5px" />
			</div>
			
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Text Color</label>
				
				<input type="text" name="hero_stomp_text_color" id="hero_stomp_text_color" class="color-field" value="<?php echo (isset($btn->hero_stomp_text_color)?esc_attr($btn->hero_stomp_text_color):''); ?>" />
				
			</div>
			<div class="hero_single_field_btn">
				<label style="width: 250px;display: inline-block;">Background Color</label>
				
				<input type="text" name="hero_stomp_background_color" id="hero_stomp_background_color" class="color-field" value="<?php echo (isset($btn->hero_stomp_background_color)?esc_attr($btn->hero_stomp_background_color):''); ?>" />
				
			</div>

        </div>
	
	
        
	
	<div class="hero_single_field_btn">
		<label style="width: 250px;display: inline-block;"></label><input style="background: #4191EF; border: none;color: #fff; padding: 7px 15px; margin-right: 10px;cursor:pointer;" type="button" id="add_configuration" value="<?php echo (isset($btn->button_text)?'Update Configuration':'Add Configuration'); ?>" />
		<input style="    background: #FE8D2E; border: none;color: #fff;padding: 7px 15px;margin-right: 10px;cursor:pointer; font-size: 14px; float: none;  font-weight: normal;" type="button" class="botmclose" value="Cancel" />
		<input style="    background: #E91E63; border: none;color: #fff;padding: 7px 15px;margin-right: 10px;cursor:pointer;" type="button" id="cancel_the_button" value="Reset" />

	</div>

</div>
</div>

<?php
exit;
}
add_action( 'wp_ajax_qcld_show_stomp_config', 'qcld_show_stomp_config_fnc');
?>
<?php 
function qcld_hero_show_arrow_items_fnc(){

?>
	<div id="sm-modal" class="slider_hero_modal">

		<!-- Modal content -->
		<div class="modal-content" style="width: 800px;">
			<span class="close"><?php _e( "X", 'Slider X' ); ?></span>
			<h3><?php _e( "Choose an Arrow Style", 'Slider X' ); ?></h3>
			<hr/>
        <div class="qc-slider-x-item_arrow">
<?php 
	$path = QCLD_sliderhero_IMAGES.'/arrows/';
	
?>
			<div class="arrow_style" data="arrow-circle">
				<i class="fa fa-arrow-circle-left" aria-hidden="true"></i><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
			</div>
			<div class="arrow_style" data="arrow">
				<i class="fa fa-arrow-left" aria-hidden="true"></i><i class="fa fa-arrow-right" aria-hidden="true"></i>
			</div>
			
			<div class="arrow_style" data="caret">
				<i class="fa fa-caret-left" aria-hidden="true"></i><i class="fa fa-caret-right" aria-hidden="true"></i>
			</div>
			<div class="arrow_style" data="arrow-circle-o">
				<i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
			</div>
			<div class="arrow_style" data="chevron-circle">
				<i class="fa fa-chevron-circle-left" aria-hidden="true"></i><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
			</div>
			<div class="arrow_style" data="chevron">
				<i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i>
			</div>
			<div class="arrow_style" data="long-arrow">
				<i class="fa fa-long-arrow-left" aria-hidden="true"></i><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</div>
			<div class="arrow_style" data="angle-double">
				<i class="fa fa-angle-double-left" aria-hidden="true"></i><i class="fa fa-angle-double-right" aria-hidden="true"></i>
			</div>
			<div class="arrow_style" data="angle">
				<i class="fa fa-angle-left" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i>
			</div>
			<!--<div class="arrow_style" data="arrow_style_2">
				<img src="<?php echo $path.'arrow2.png' ?>" />
			</div>
			<div class="arrow_style" data="arrow_style_3">
				<img src="<?php echo $path.'arrow3.png' ?>" />
			</div>
			<div class="arrow_style" data="arrow_style_4">
				<img src="<?php echo $path.'arrow4.png' ?>" />
			</div>
			<div class="arrow_style" data="arrow_style_5">
				<img style="width: 88px;" src="<?php echo $path.'arrow5.png' ?>" />
			</div>
			<div class="arrow_style" data="arrow_style_6">
				<img src="<?php echo $path.'arrow6.png' ?>" />
			</div>
			<div class="arrow_style" data="arrow_style_7">
				<img src="<?php echo $path.'arrow7.png' ?>" />
			</div>
			<div class="arrow_style" data="arrow_style_8">
				<img src="<?php echo $path.'arrow8.png' ?>" />-->
			</div>

        </div>
</div>
</div>
<?php
exit;
}
add_action( 'wp_ajax_qcld_hero_show_arrow_items', 'qcld_hero_show_arrow_items_fnc');
?>