<?php
/*
Template Name: About
*/
?>      

<?php get_header(); ?>

	<div id="top" style="height:190px;">
        <div class="content"> 
               <div id="flagnav">
               		<div id="toggle"></div>
			        <?php wp_nav_menu( array('menu' => 'Main Nav' )); ?>
                   <div id="close"></div>
               </div>
               
               <h1><span><?php echo get_post_meta($post->ID, "_mdd_header", true); ?></span>
				<?php echo get_post_meta($post->ID, "_mdd_subheader", true); ?></h1>

        </div>	    
	</div>

    <div id="main">
        <div class="content">
            <div id="about">
             	<div style="margin-bottom:30px;">
             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          	<?php the_content(); ?>
	         <?php endwhile; ?>
	         <?php endif; ?>
                </div>
 
 					<?php $recentPosts = new WP_Query();
					$recentPosts->query('post_type=bio&posts_per_page=-1&orderby=menu_order&order=asc'); ?>
					<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
 
                <div class="bio">
                    <?php the_post_thumbnail('bio'); ?>
                    <div class="float">
                        <h4><?php the_title(); ?></h4>
                        <h5><?php echo get_post_meta($post->ID, "_bio_title", true); ?></h5>
          				<?php the_content(); ?>
                    </div>
                        <?php /* <ul>
                        	<?php $fb = get_post_meta($post->ID, "_bio_fb", true); 
                        	if ($fb) { ?>
                            <li class="fb"><a href="<?php echo $fb; ?>"></a></li>
                            <?php  } ?>
                         	<?php $linked = get_post_meta($post->ID, "_bio_linked", true); 
                        	if ($linked) { ?>
                           <li class="linked"><a href="<?php echo $linked; ?>"></a></li>
                             <?php  } ?>
                       </ul> */ ?>
                        <div class="clear"></div>
                </div>

					<?php endwhile; ?>
                
            
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
