<?php
/*
Template Name: Events
*/
?>      

<?php get_header(); ?>

	<div id="top" class="event-bg">
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

    <div id="main" class="boxes">
        <div class="content">
            <div id="events">                
 
 					<?php $recentPosts = new WP_Query();
					$recentPosts->query('post_type=event&posts_per_page=-1&orderby=menu_order&order=asc'); ?>
					<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
 
                <div class="event-box" style="margin-bottom:0;">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('event-thumb'); ?></a>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          				<?php 
global $post;
$postContentStr = apply_filters('the_content', strip_shortcodes($post->post_content));
echo $postContentStr;          				
          				 ?>
                </div>

					<?php endwhile; ?>
                
                			<div class="clear"></div>
            
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
					<h4>2. Custom Proposal</h4>
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
