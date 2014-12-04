<?php
/*
Template Name: Accounts
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
    <div id="main">
        <div class="content">
        	<div class="prose">

             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          	<?php the_content(); ?>
	         <?php endwhile; ?>
	         <?php endif; ?>
        		
        	</div>
	
		</div>
	</div>

<div id="process">
        <div class="content">
			<div class="process-inner">
				<div class="process-header">
					<h3>Our Process</h3>
					<div class="bar"></div>
				</div>
				<div class="box first">
					<h4>1. Free Consultation</h4>
					<img src="<?php bloginfo('template_directory'); ?>/images/consult-icon.png" />
				</div>
				<div class="box wide">
					<h4>2. Statement of Work</h4>
					<img src="<?php bloginfo('template_directory'); ?>/images/sow-icon.png" />
				</div>
				<div class="box last">
					<h4>3. Project Management</h4>
					<img src="<?php bloginfo('template_directory'); ?>/images/pm-icon.png" />
				</div>
				
			</div>
		</div>     
    </div>

    <div id="footer">
        <?php get_sidebar(); ?>
		




<?php get_footer(); ?>
