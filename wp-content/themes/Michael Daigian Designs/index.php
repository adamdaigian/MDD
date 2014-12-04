<?php get_header(); ?>
 	<div class="page">
    		
    		<div class="page-left">
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          	<h2><?php the_title(); ?></h2>
	         <?php endwhile; ?>
	         <?php endif; ?>

					<?php echo wpautop(get_post_meta($post->ID, "_sidebararea", true)); ?>                    
    			
    		</div> <!-- end page left-->
    		<div class="page-right" style="text-align:right;margin-bottom:-3px;">
							<?php the_post_thumbnail('wide'); ?>   
			</div>
			 			<div class="clear"></div>
    		<div class="page-left top-line">
			</div>
    		<div class="page-right">
    			<div class="page-content">
             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          	<?php the_content(); ?>
	         <?php endwhile; ?>
	         <?php endif; ?>

				
				</div>
    			
    		</div> <!-- end page right-->
    		
    				<div class="clear"></div>
    				
    	</div> <!-- end page -->


<?php get_footer(); ?>
