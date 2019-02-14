<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
{
    if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css')) {
        $uri = get_template_directory_uri() . '/rtl.css';
    }

    return $uri;
}
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')) :
    function chld_thm_cfg_parent_css()
{
    wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array('wp-bootstrap-starter-bootstrap-css'));
}
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

// END ENQUEUE PARENT ACTION

function enque_roboto_slab()
{
    wp_enqueue_style('roboto-slab-stylesheet', get_stylesheet_directory_uri() . '/fonts/roboto-slab/stylesheet.css');
}

add_action('wp_enqueue_scripts', 'enque_roboto_slab');

function enque_custom_js()
{
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js');
}

add_action('wp_enqueue_scripts', 'enque_custom_js');

/**
 * Craeting custom post type for testimonials
 */
function create_testimonials()
{

    register_post_type(
        'testimonials',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Testimonials'),
                'singular_name' => __('Testimonial'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonials'),
        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_testimonials');

/**
 * Creating shortcode for fetching testimonials with custom design
 */

function fetching_custom_testimonials()
{

    $posts = get_posts(array(
        'post_type' => 'testimonials',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ));

    include_once 'template-parts/testimonials.php';

}

add_shortcode('custom_testimonials', 'fetching_custom_testimonials');

/**
 * Adding footer controls in wp-admin
 */

function add_contact_details($wp_customize)
{
    //adding section in wordpress customizer
    $wp_customize->add_section('contact', array(
        'title' => 'Contact',
    ));

    //adding setting for copyright text
    $wp_customize->add_setting('address', array(
        'default' => '',
    ));

    $wp_customize->add_control('address', array(
        'label' => 'Address',
        'section' => 'contact',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Enter address here...'),
        ),
    ));

    //adding setting for copyright text
    $wp_customize->add_setting('phone', array(
        'default' => '',
    ));

    $wp_customize->add_control('phone', array(
        'label' => 'Phone Number',
        'section' => 'contact',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Enter phone here...'),
        ),
    ));

    //adding setting for copyright text
    $wp_customize->add_setting('mobile', array(
        'default' => '',
    ));

    $wp_customize->add_control('mobile', array(
        'label' => 'Mobile Number',
        'section' => 'contact',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Enter mobile here...'),
        ),
    ));

    //adding setting for copyright text
    $wp_customize->add_setting('email', array(
        'default' => '',
    ));

    $wp_customize->add_control('email', array(
        'label' => 'Email Address',
        'section' => 'contact',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Enter email here...'),
        ),
    ));

    $wp_customize->add_setting('about', array(
        'default' => '',
    ));

    $wp_customize->add_control('about', array(
        'label' => 'About Us',
        'section' => 'contact',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Enter about us text here...'),
        ),
    ));

    $wp_customize->add_setting('opening-hours', array(
        'default' => '',
    ));

    $wp_customize->add_control('opening-hours', array(
        'label' => 'Opening Hour',
        'section' => 'contact',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Opeing Hour'),
        ),
    ));

    $wp_customize->add_setting('closing-hours', array(
        'default' => '',
    ));

    $wp_customize->add_control('closing-hours', array(
        'label' => 'Closing Hour',
        'section' => 'contact',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Closing Hour'),
        ),
    ));

    $wp_customize->add_setting('facebook-link', array(
        'default' => '',
    ));

    $wp_customize->add_control('facebook-link', array(
        'label' => 'Facebook Link',
        'section' => 'contact',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Facebook Link'),
        ),
    ));

    $wp_customize->add_setting('twitter-link', array(
        'default' => '',
    ));

    $wp_customize->add_control('twitter-link', array(
        'label' => 'Twitter Link',
        'section' => 'contact',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Twitter Link'),
        ),
    ));

    $wp_customize->add_setting('google-link', array(
        'default' => '',
    ));

    $wp_customize->add_control('google-link', array(
        'label' => 'Google Link',
        'section' => 'contact',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Google Link'),
        ),
    ));

    $wp_customize->add_setting('pinterest-link', array(
        'default' => '',
    ));

    $wp_customize->add_control('pinterest-link', array(
        'label' => 'Pinterest Link',
        'section' => 'contact',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Pinterest Link'),
        ),
    ));

    $wp_customize->add_setting('copyrights-text', array(
        'default' => '',
    ));

    $wp_customize->add_control('copyrights-text', array(
        'label' => 'Copyright Text',
        'section' => 'contact',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Copyrights text ..'),
        ),
    ));

}

add_action('customize_register', 'add_contact_details');

/**
 * Random posts for Isotope Layout
 */

function wpb_rand_posts_one()
{
    $args = array(
        'post_type' => 'post',
        'orderby' => 'rand',
        'posts_per_page' => 1,
    );
    $posts = new WP_Query($args);

    ?>
     <div class="box-one">
        <div class="block-div clearfix">
            <div class="left-image relatives">

            <?php
            if ($posts->have_posts()) :

                while ($posts->have_posts()) :
                $posts->the_post();
            $content_post = get_post($posts->ID);
            $content = $content_post->post_content;
            $content_title = $content_post->post_title;
            ?>
				                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="image-box" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
				                        </div>

				            <div class="box-right relatives">
				                <div class="text-box">
				                    <div class="arrow-left d-none d-md-block"></div>
				                    <div class="arrow-up d-sm-none"></div>
				                    <h2 class="mt0"><?php echo $content_title; ?>
				                    </h2>
				                    <p>
				                    <?php echo $content; ?>
				                    </p>
				                </div>
				            </div>
				        <?php
            endwhile;
            endif;
            ?>


        </div>
    </div>

<?php
wp_reset_postdata();

}

add_shortcode('wpb-random-posts-one', 'wpb_rand_posts_one');

/**
 * Getting Layout for isotope 2
 */

function wpb_rand_posts_two()
{
    $args = array(
        'post_type' => 'post',
        'orderby' => 'rand',
        'posts_per_page' => 1,
    );
    $posts = new WP_Query($args);

    ?>
     <div class="box-two red-box">
        <div class="block-div clearfix">
            <div class="image-on-top">

            <?php
            if ($posts->have_posts()) :

                while ($posts->have_posts()) :
                $posts->the_post();
            $content_post = get_post($posts->ID);
            $content = $content_post->post_content;
            $content_title = $content_post->post_title;
            ?>
				                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="image-box" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
				                        </div>


				                <div class="text-box vertical-box">
				                <div class="arrow-up"></div>
				                    <h2 class="mt0"><?php echo $content_title; ?>
				                    </h2>
				                    <p>
				                    <?php echo $content; ?>
				                    </p>
				                </div>

				        <?php
            endwhile;
            endif;
            ?>


        </div>
    </div>

<?php
wp_reset_postdata();

}

add_shortcode('wpb-random-posts-two', 'wpb_rand_posts_two');

/**
 * Getting Layout for isotope 3
 */

function wpb_rand_posts_three()
{

    ob_start();
    $args = array(
        'post_type' => 'post',
        'orderby' => 'rand',
        'posts_per_page' => 1,
    );
    $posts = new WP_Query($args);

    ?>
     <div class="box-three">
        <div class="block-div clearfix">
        <div class="box-right relatives">

            <?php

            if ($posts->have_posts()) :

                while ($posts->have_posts()) :
                $posts->the_post();
            $content_post = get_post($posts->ID);
            $content = $content_post->post_content;
            $content_title = $content_post->post_title;

            ?>



						                <div class="text-box vertical-box">
				                        <div class="arrow-right d-none d-md-block"></div>
				                        <div class="arrow-up d-sm-none"></div>
						                    <h2 class="mt0"><?php echo $content_title; ?>
						                    </h2>
						                    <p>
						                    <?php echo $content; ?>
						                    </p>
						                </div>
						</div>
						                <div class="left-image relatives">
						                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
						</div>

						        <?php
                endwhile;
                endif;
                ?>


        </div>
    </div>

<?php
wp_reset_postdata();

}

add_shortcode('wpb-random-posts-three', 'wpb_rand_posts_three');

/**
 * Custom About Us Slider
 */

function get_custom_slider_slick($atts, $content = null)
{

    extract(shortcode_atts(array(
        "limit" => '-1',
        "category" => '',
        "design" => 'design-1',
        "show_content" => 'true',
        "dots" => 'true',
        "arrows" => 'true',
        "autoplay" => 'true',
        "autoplay_interval" => '3000',
        "speed" => '300',
        "fade" => 'false',
        "sliderheight" => '',
        "rtl" => '',
    ), $atts));

    $shortcode_designs = wpsisac_slider_designs();
    $limit = !empty($limit) ? $limit : '-1';
    $cat = (!empty($category)) ? explode(',', $category) : '';
    $design = ($design && (array_key_exists(trim($design), $shortcode_designs))) ? trim($design) : 'design-1';
    $show_content = ($show_content == 'false') ? false : true;
    $dots = ($dots == 'false') ? 'false' : 'true';
    $arrows = ($arrows == 'false') ? 'false' : 'true';
    $autoplay = ($autoplay == 'false') ? 'false' : 'true';
    $autoplay_interval = (!empty($autoplay_interval)) ? $autoplay_interval : 3000;
    $speed = (!empty($speed)) ? $speed : 300;
    $fade = ($fade == 'true') ? 'true' : 'false';
    $sliderheight = (!empty($sliderheight)) ? $sliderheight : '';
    $slider_height_css = (!empty($sliderheight)) ? "style='height:{$sliderheight}px;'" : '';

    // For RTL
    if (empty($rtl) && is_rtl()) {
        $rtl = 'true';
    } elseif ($rtl == 'true') {
        $rtl = 'true';
    } else {
        $rtl = 'false';
    }

    // Shortcode file
    $design_file_path = WPSISAC_VERSION_DIR . '/templates/' . $design . '.php';
    $design_file = (file_exists($design_file_path)) ? $design_file_path : '';

    // Enqueus required script
    wp_enqueue_script('wpos-slick-jquery');
    wp_enqueue_script('wpsisac-public-script');

    // Slider configuration
    $slider_conf = compact('dots', 'arrows', 'autoplay', 'autoplay_interval', 'fade', 'speed', 'rtl');

    ob_start();

    global $post;
    $unique = wpsisac_get_unique();
    $post_type = 'slick_slider';
    $orderby = 'post_date';
    $order = 'DESC';

    $args = array(
        'post_type' => $post_type,
        'orderby' => $orderby,
        'order' => $order,
        'posts_per_page' => $limit,
    );

    if ($cat != "") {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'wpsisac_slider-category',
                'field' => 'id',
                'terms' => $cat
            )
        );
    }
    $query = new WP_Query($args);
    $post_count = $query->post_count;
    if ($query->have_posts()) :
    ?>
	<div class="wpsisac-slick-slider-wrp wpsisac-clearfix">
		<div id="wpsisac-slick-slider-<?php echo $unique; ?>" class="wpsisac-slick-slider <?php echo $design; ?>">
			<?php while ($query->have_posts()) : $query->the_post();
    $slider_img = wpsisac_get_post_featured_image($post->ID, 'full', true);
        // Include shortcode html file
    ?>

		        <div class="slick-image-slide ">
	        <div class="slide-wrap" <?php echo $slider_height_css; ?>>

	            <div class="row">
	                <div class="col-md-6">
	                 <div class="image-wrapper"><img src="<?php echo esc_url($slider_img); ?>" alt="<?php the_title(); ?>" /></div>
	                </div>
	                <div class="col-md-6">

	                <h4 class="custom-slick-title"><?php the_title(); ?></h4>
	                <h2 class="custom-slick-content"><?php the_content(); ?></h2>
	                </div>
	            </div>



			</div>
		    </div>

		                        <?php
                            endwhile; ?>
		</div>
		<div class="wpsisac-slider-conf wpsisac-hide" data-conf="<?php echo htmlspecialchars(json_encode($slider_conf)); ?>"></div>
	</div>
	<?php
endif;
wp_reset_query();
return ob_get_clean();
}
add_shortcode('slick-slider', 'get_custom_slider_slick');

/**
 * Custom Shortcode For location
 */

function get_contact_info()
{


    ?>
<div class="redhot-box">
    <div class="sidebar-widget-head">
        <h2 class="bevan-light white "><?php echo get_bloginfo('name'); ?> </h2>
    </div>
    <div class="sidebar-info-widget">
    <?php
    if (esc_attr(get_theme_mod('address'))) {
        ?>
    <p><i class="fa fa-map-marker"></i> <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><?php echo esc_attr(get_theme_mod('address')); ?></span></p>
    


    <?php 
}
if (esc_attr(get_theme_mod('phone'))) {
    ?> <p><i class="fa fa-phone"></i> <span itemprop="telephone" dir="ltr"><?php echo esc_attr(get_theme_mod('phone')); ?></span></p>
                                    <?php

                                } ?>

    <?php if (esc_attr(get_theme_mod('mobile'))) {
        ?> <p><i class="fa fa-mobile"></i> <span itemprop="mobile" dir="ltr"><?php echo esc_attr(get_theme_mod('mobile')); ?></span></p>
                                    <?php

                                } ?>

    <?php if (esc_attr(get_theme_mod('email'))) {
        ?> <p><i class="fa fa-envelope"></i> <a itemprop="email" dir="ltr" href="<?php echo esc_attr(get_theme_mod('email')); ?>"><?php echo esc_attr(get_theme_mod('email')); ?></a></p>
                                    <?php

                                }

                                ?>
    </div>

    <div class="opening-hours">
    <h6 class="small-lines-around bevan-light white f-18">Opening Hours</h6>
     
      <div class="row">
          <div class="col-sm-6 col-6 opening-hours-time">
              <p><strong>Mon - fri</strong></p>
          <?php if (esc_attr(get_theme_mod('opening-hours'))) {
                ?> <p><?php echo esc_attr(get_theme_mod('opening-hours')); ?> - <?php echo esc_attr(get_theme_mod('closing-hours')); ?></p>
																<?php

            }
            ?>
          </div>
          <div class="col-sm-6 col-6 opening-hours-time">
          <p><strong>Sat - Sun</strong></p>
          <?php if (esc_attr(get_theme_mod('opening-hours'))) {
                ?> <p><?php echo esc_attr(get_theme_mod('opening-hours')); ?> - <?php echo esc_attr(get_theme_mod('closing-hours')); ?></p>
																<?php

            }
            ?>
          </div>
    </div>
        </div>
    <?php

}

add_shortcode('contact-info', 'get_contact_info');


/**
 * Custom booking Hook
 */

function rtb_booking_form_shortcode_custom($args = array())
{

    $args = shortcode_atts(
        array(
            'location' => 0,
        ),
        $args,
        'booking-form'
    );

    return rtb_print_booking_form_custom($args);
}


function rtb_print_booking_form_custom($args = array())
{

    global $rtb_controller;

	// Only allow the form to be displayed once on a page
    if ($rtb_controller->form_rendered === true) {
        return;
    } else {
        $rtb_controller->form_rendered = true;
    }

	// Sanitize incoming arguments
    if (isset($args['location'])) {
        $args['location'] = $rtb_controller->locations->get_location_term_id($args['location']);
    } else {
        $args['location'] = 0;
    }

	// Enqueue assets for the form
    rtb_enqueue_assets();

	// Allow themes and plugins to override the booking form's HTML output.
    $output = apply_filters('rtb_booking_form_html_pre', '');
    if (!empty($output)) {
        return $output;
    }

	// Process a booking request
    if (!empty($_POST['action']) && $_POST['action'] == 'booking_request') {

        if (get_class($rtb_controller->request) === 'stdClass') {
            require_once(RTB_PLUGIN_DIR . '/includes/Booking.class.php');
            $rtb_controller->request = new rtbBooking();
        }

        $rtb_controller->request->insert_booking();
    }

	// Define the form's action parameter
    $booking_page = $rtb_controller->settings->get_setting('booking-page');
    if (!empty($booking_page)) {
        $booking_page = get_permalink($booking_page);
    }

	// Retrieve the form fields
    $fields = $rtb_controller->settings->get_booking_form_fields($rtb_controller->request, $args);

    ob_start();

    ?>

<div class="rtb-booking-form custom-reservation">
	<?php if ($rtb_controller->request->request_inserted === true) : ?>
	<div class="rtb-message">
		<p><?php echo $rtb_controller->settings->get_setting('success-message'); ?></p>
	</div>
	<?php else : ?>
	<form method="POST" action="<?php echo esc_attr($booking_page); ?>">
		<input type="hidden" name="action" value="booking_request">

		<?php if (!empty($args['location'])) : ?>
			<input type="hidden" name="rtb-location" value="<?php echo absint($args['location']); ?>">
		<?php endif; ?>

        <?php do_action('rtb_booking_form_before_fields');

    echo "<legend>" . $fields['reservation']['legend'] . "</legend>"; ?>
  
        <div class="row">
                <?php
                $reservations = $fields['reservation']['fields'];

                foreach ($reservations as $slug => $field) {
                    ?>
                    
                        <div class="col-md-6"> 
                        <?php
                        $callback_args = empty($field['callback_args']) ? array() : $field['callback_args'];

                        if (!empty($field['required'])) {
                            $callback_args = array_merge($callback_args, array('required' => $field['required']));
                        }

                        call_user_func($field['callback'], $slug, $field['title'], $field['request_input'], $callback_args,'');

                        ?>
                        </div> 
                        <?php

                    }

                    ?>
        </div>




        <?php
        $contacts = $fields['contact']['fields'];
        echo "<legend class='mt-35'>" . $fields['contact']['legend'] . "</legend>";
        foreach ($contacts as $slug => $field) {
            echo '<div class="row mt-15">';
                echo '<div class="col-md-12">';
          
                $callback_args = empty($field['callback_args']) ? array() : $field['callback_args'];

                if (!empty($field['required'])) {
                    $callback_args = array_merge($callback_args, array('required' => $field['required']));
                }

                call_user_func($field['callback'], $slug, $field['title'], $field['request_input'], $callback_args,$field['title']);

                echo '</div>';
            echo '</div>';
            }
        ?>
    

		<?php do_action('rtb_booking_form_after_fields'); ?>

		<?php
    $button = sprintf(
        '<button class="red-send" type="submit"><i class="fab fa-telegram-plane"></i> %s</button>',
        apply_filters('rtb_booking_form_submit_label', __('Send', 'restaurant-reservations'))
    );

    echo apply_filters('rtb_booking_form_submit_button', $button);
    ?>


	</form>
	<?php endif; ?>
</div>

	<?php

$output = ob_get_clean();

$output = apply_filters('rtb_booking_form_html_post', $output);

return $output;
}

add_shortcode('booking-form', 'rtb_booking_form_shortcode_custom');

/**
 * Custom Shortcode for rectangular info box
 */

function get_contact_info_rectangle()
{

    ob_start();
    get_template_part( 'template-parts/rectangular-info', 'none' );
    return ob_get_clean();
}

add_shortcode('contact-info-rectangle', 'get_contact_info_rectangle');