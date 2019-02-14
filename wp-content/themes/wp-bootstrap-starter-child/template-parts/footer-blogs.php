<?php

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'footer-blogs',
    'posts_per_page' => 9,
);
$arr_posts = new WP_Query( $args );

?> 
<ul class="small-images">
<?php
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
   
        <li>
        <a href="<?php the_permalink(); ?>" target="_blank">
            <?php
            if ( has_post_thumbnail() ) :
               ?><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"><?php
            endif;
            ?>
            </a>
        </li>
    
        <?php
    endwhile;
endif;
?>

</ul>