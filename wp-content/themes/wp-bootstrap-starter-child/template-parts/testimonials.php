<div class="row">

<?php
//loop over each post
foreach ($posts as $post) {
    ?>
 
        <div class="col-md-4">
            <div class="testimonial-content">
                <i class="fas fa-quote-left"></i>
                <h4><?php echo $post->post_title; ?></h4>
                <p><?php echo $post->post_content; ?>
            </div>
        </div>
 
<?php 
}
?>

</div>
