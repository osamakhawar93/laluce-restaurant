<?php

//Setting options page
/*******************************
 * Callback function to add the menu
 *******************************/
function sh_show_settngs_page_callback_func()
{
	add_submenu_page(
		'Slider-Hero',
		'Settings',
		'Settings',
		'manage_options',
		'sh-options-page',
		'qc_sh_settings_page_callback_func'
	);
	
} //show_settings_page_callback_func
//add_action( 'admin_menu', 'sh_show_settngs_page_callback_func');
add_action( 'admin_init', 'sh_register_plugin_settings' );
function sh_register_plugin_settings() {
	//register our settings

	//custom css section
	register_setting( 'qc-sh-plugin-settings-group', 'sh_custom_style' );
	//custom js section
	register_setting( 'qc-sh-plugin-settings-group', 'sh_custom_js' );
	//help sectio
	
}

function qc_sh_settings_page_callback_func(){
	
	?>
	<div class="wrap swpm-admin-menu-wrap">
		<h1>Hero Settings Page</h1>
	
		<h2 class="nav-tab-wrapper sh_nav_container">

			<a class="nav-tab sh_click_handle nav-tab-active" href="#custom_css">Custom Css</a>
			<a class="nav-tab sh_click_handle" href="#custom_js">Custom Javascript</a>
			<a class="nav-tab sh_click_handle" href="#help">Help</a>
		</h2>
		
		<form method="post" action="options.php">
			<?php settings_fields( 'qc-sh-plugin-settings-group' ); ?>
			<?php do_settings_sections( 'qc-sh-plugin-settings-group' ); ?>

			
			<div id="custom_css">
				<table class="form-table">

					<tr valign="top">
						<th scope="row">Custom Css</th>
						<td>
							
							<textarea name="sh_custom_style" rows="10" cols="100"><?php echo esc_attr( get_option('sh_custom_style') ); ?></textarea>
							<i>Write your custom CSS here. Please do not use <b>style</b> tag in this textarea.</i>
						</td>
					</tr>

				</table>
			</div>
			<div id="custom_js" style="display:none">
				<table class="form-table">

					<tr valign="top">
						<th scope="row">Custom Javascript</th>
						<td>
							
							<textarea name="sh_custom_js" rows="10" cols="100"><?php echo esc_attr( get_option('sh_custom_js') ); ?></textarea>
							<i>Write your custom JS here. Please do not use <b>script</b> tag in this textarea.</i>
						</td>
					</tr>

				</table>
			</div>
			<div id="help" style="display:none">
				<table class="form-table">

					<tr valign="top">
						<th scope="row">Help</th>
						<td>
							<div>
							<h3>General Settings</h3>
							<p>
								<strong><u>Custom:</u></strong>
								<br>
									This option will allow you to provide custom width and height for your slider.
								<br>
								<br>
								<strong><u>Full Width:</u></strong>
								<br>
								Provide a custom height in px for your slider. Width will be automatically calculated depending on your screen size.
								<br>
								<br>
								<strong><u>Full Screen:</u></strong>
								<br>
								
								No need to provide any width & height. It will automatically fit any screen size and auto-calculate necessary width and height.
								<br>
								<br>
								<strong><u>Auto:</u></strong>
								<br>
								
								Slider size will fit according to container width. You can define custom height.
							</p>
						</div>
							
						</td>
					</tr>

				</table>
			</div>
			
			<?php submit_button(); ?>

		</form>
		
	</div>
	
	<script type="text/javascript">
		

		
		jQuery(document).ready(function($){
			$('.sh_click_handle').on('click', function(e){
				e.preventDefault();
				var obj = $(this);
				container_id = obj.attr('href');
				$('.sh_click_handle').each(function(){
					$(this).removeClass('nav-tab-active');
					$($(this).attr('href')).hide();
				})
				obj.addClass('nav-tab-active');
				$(container_id).show();
			})
			var hash = window.location.hash;
			if(hash!=''){
				$('.sh_click_handle').each(function(){
					
					$($(this).attr('href')).hide();
					if($(this).attr('href')==hash){
						$(this).removeClass('nav-tab-active').addClass('nav-tab-active');
					}else{
						$(this).removeClass('nav-tab-active');
					}
				})
				$(hash).show();
			}
			
		})
		
	</script>
	
	<?php
	
}