<?php
/*
Template Name: Weddings
*/
?>      

<?php get_header(); ?>

	<div id="top" class="wedding-bg" style="height:70px;">
        <div class="content"> 
               <div id="flagnav">
               		<div id="toggle"></div>
			        <?php wp_nav_menu( array('menu' => 'Main Nav' )); ?>
                   <div id="close"></div>
               </div>
        </div>	    
	</div>

    <div id="main" style="background-image: none;">
        <div class="content">
            <div id="gallery">
            	
            		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div id="gallery-nav">
                    <?php if(is_post_type('wedding')) { ?>
                    	        <div class="next"><?php next_post_link('%link', 'Next Wedding'); ?></div>
			<div class="prev"><?php previous_post_link('%link', 'Prev Wedding'); ?> </div>
                    <?php } elseif(is_post_type('event')) { ?>
                    	        <div class="next"><?php next_post_link('%link', 'Next Event'); ?></div>
			<div class="prev"><?php previous_post_link('%link', 'Prev Event'); ?> </div>
                    <?php } ?>

                        <div class="clear"></div>
                </div>
                
                <div id="gallery-hero">
					<?php the_post_thumbnail('wide'); ?>
                    <div>
                        		<?php echo wpautop(get_post_meta($post->ID, "_sidebararea", true)); ?>                    

                    </div>
                </div>
                
                <div id="gallery-main">
<?php // helper function to return first regex match
function get_match( $regex, $content ) {
    preg_match($regex, $content, $matches);
    return $matches[1];
} 

// Extract the shortcode arguments from the $page or $post
$shortcode_args = shortcode_parse_atts(get_match('/\[gallery\s(.*)\]/isU', $post->post_content));

// get the ids specified in the shortcode call
$ids = $shortcode_args["ids"];

// get the attachments specified in the "ids" shortcode argument
    $args = array(
        'include' => $ids, 
        'post_status' => 'inherit', 
        'post_type' => 'attachment', 
        'post_mime_type' => 'image', 
        'order' => 'menu_order ID', 
        'orderby' => 'post__in' //required to order results based on order specified the "include" param
); 
$images = get_posts( $args );
									foreach($images as $image):
										echo wp_get_attachment_image($image->ID, 'wedding');
									endforeach; ?>
									
						<?php /*		<?php $args = array(
									'post_type' => 'attachment',
									'post_mime_type' => 'image',
									'post_parent' => $post->ID,
									'order' => 'asc',
									'orderby' => 'title',
									'posts_per_page' => -1
								);
								$images = get_posts( $args );
									foreach($images as $image):
										echo wp_get_attachment_image($image->ID, 'wedding');
									endforeach; ?>   */ ?>
									                    
 				         <?php endwhile; ?>
				         <?php endif; ?> 

                       <div class="clear"></div>
                </div>
            
            </div>
        </div>     
    </div>

    <div id="footer" class="top-edge">
        <?php get_sidebar(); ?>
		

<?php get_footer(); ?>
