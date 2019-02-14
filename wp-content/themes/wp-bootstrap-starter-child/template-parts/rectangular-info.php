<?php
?>
<div class="redhot-box auto-height">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">

				<div class="sidebar-widget-head">
					<h2 class="bevan-light white "><?php echo get_bloginfo('name'); ?> </h2>
			</div>
					<div class="sidebar-info-widget">
						<?php
						if (esc_attr(get_theme_mod('address'))) {
							?><p><i class="fa fa-map-marker"></i> <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><?php echo esc_attr(get_theme_mod('address')); ?></span></p>			<?php 
						}
						
						if (esc_attr(get_theme_mod('phone'))) {
						?> <p><i class="fa fa-phone"></i> <span itemprop="telephone" dir="ltr"><?php echo esc_attr(get_theme_mod('phone')); ?></span></p>
													<?php

												} ?>

						<?php 
						if (esc_attr(get_theme_mod('mobile'))) {
						?> <p><i class="fa fa-mobile"></i> <span itemprop="mobile" dir="ltr"><?php echo esc_attr(get_theme_mod('mobile')); ?></span></p>
													<?php
						  } ?>

					<?php if (esc_attr(get_theme_mod('email'))) {
						?> <p><i class="fa fa-envelope"></i> <a itemprop="email" dir="ltr" href="<?php echo esc_attr(get_theme_mod('email')); ?>"><?php echo esc_attr(get_theme_mod('email')); ?></a></p>
													<?php

							 }

												?>
					</div>
				</div>
            <div class="col-md-6 col-12">

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
			
			
            </div>
			
			
        </div>
    </div>
</div>



    