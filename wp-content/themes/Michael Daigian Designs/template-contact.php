<?php
/*
Template Name: Contact
*/
?>      

<?php get_header(); ?>

	<div id="top">
        <div class="content"> 
               <div id="flagnav">
               		<div id="toggle"></div>
			        <?php wp_nav_menu( array('menu' => 'Main Nav' )); ?>
                   <div id="close"></div>
               </div>
               
               <h1><?php echo get_post_meta($post->ID, "_mdd_header", true); ?></h1>
               <h2><span><?php echo get_post_meta($post->ID, "_mdd_subheader", true); ?></span></h2>

        </div>	    
	</div>
    <div id="main" style="background-image:none;">
        <div class="content">
        	<div class="prose" style="padding:45px 5px 20px 5px;">
				<div id="left-col">
					<?php echo wpautop(get_post_meta($post->ID, "_sidebararea", true)); ?>                    
        		</div>
 				<div id="right-col">
			             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			          	<?php the_content(); ?>
				         <?php endwhile; ?>
				         <?php endif; ?>
        		</div>
  					<div class="clear"></div>
        	</div>
        	
	
		</div>
	</div>

	<div id="map">
		<div id="map-inner"></div>
		
    </div>

    <div id="footer">
                <?php get_sidebar(); ?>





<?php get_footer(); ?>
