<?php  
//Loads Post Thumbnail
add_theme_support( 'post-thumbnails' );
add_image_size( 'wide', 940, 260, true );
add_image_size( 'bio', 300, 300, true );
add_image_size( 'event-thumb', 298, 206, true );
add_image_size( 'wedding', 218, 300, true );

//Loads Custom Menu
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
	register_nav_menu( 'main_nav', __( 'Main Nav' ) );
	register_nav_menu( 'home_nav', __( 'Home Nav' ) );
}
function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) return true;
    return false;
}

update_option('image_default_link_type','none');

?>
<?php
//Adds meta boxes for sidebar content
 
add_action('admin_init','my_meta_init');
function my_meta_init()
{
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	// checks for post/page ID
	if ($post_id == '8' || $post_id == '7'  || $post_id == '10' || $post_id == '11' || $post_id == '9')
	{
		add_meta_box('mdd_title_bars', 'Header Content', 'mdd_title_bars', 'page', 'normal', 'high');
	}
		if ( $post_id == '10' )
	{
		add_meta_box('mdd_sidebararea', 'Left Column', 'mdd_sidebararea', 'page', 'normal', 'high');
	}
	
}
function mdd_title_bars() {
    global $post;
 
    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="meta_noncename" id="meta_noncename" value="' .
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
 
    // Get the location data if its already been entered
    $mdd_header = get_post_meta($post->ID, '_mdd_header', true);
    $mdd_subheader = get_post_meta($post->ID, '_mdd_subheader', true);
    
    // Echo out the field
	echo '<table cellspacing="10" cellpadding="10">';
    echo '<tr>
			<td width="130"><label name="_mdd_header">Header (First Line)</label></td>
			<td><input type="text" class="widefat" name="_mdd_header" value="' . $mdd_header  . '" size="100" /></td>
		  </tr>';
    echo '<tr>
			<td width="130"><label name="_mdd_subheader">Header (Second Line)</label></td>
			<td><input type="text" class="widefat" name="_mdd_subheader" value="' . $mdd_subheader  . '" size="100" /></td>
		  </tr>';
	echo '</table>';
}

function mdd_sidebararea() {
    global $post;
 
    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="meta_noncename" id="meta_noncename" value="' .
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
 
    // Get the location data if its already been entered
    $sidebararea = get_post_meta($post->ID, '_sidebararea', true);

		wp_editor($sidebararea, '_sidebararea');
} 
?>
<?php 
// Creates Bio Post Type
add_action( 'init', 'mdd_bio_posttype' );
function mdd_bio_posttype() {
  $labels = array(
    'name' => _x('Bios', 'post type general name'),
    'singular_name' => _x('Bio', 'post type singular name'),
    'add_new' => _x('Add New', 'Bio'),
    'add_new_item' => __('Add New Bios'),
    'edit_item' => __('Edit Bio'),
    'new_item' => __('New Bio'),
    'view_item' => __('View Bio'),
    'search_items' => __('Search Bios'),
    'not_found' =>  __('No Bios found'),
    'not_found_in_trash' => __('No Bios found in Trash'),
    'parent_item_colon' => ''
  );
  $supports = array('title', 'editor', 'thumbnail', 'page-attributes', 'excerpt');
  register_post_type( 'bio',
    array(
	  'hierarchical' => true,
      'labels' => $labels,
      'public' => true,
      'supports' => $supports,
	  'menu_position' => 10,
	  'register_meta_box_cb' => 'add_bio_metaboxes'
	   )
  );
}
?>
<?php 
function add_bio_metaboxes() {
    add_meta_box('mdd_bio_options', 'Bio Detail', 'mdd_bio_options', 'bio', 'normal', 'default');
}
function mdd_bio_options() {
    global $post;
 
    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="meta_noncename" id="meta_noncename" value="' .
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
 
    // Get the location data if its already been entered
    $bio_title = get_post_meta($post->ID, '_bio_title', true);
    $bio_fb = get_post_meta($post->ID, '_bio_fb', true);
    $bio_linked = get_post_meta($post->ID, '_bio_linked', true);
    
    // Echo out the field
	echo '<table cellspacing="10" cellpadding="10">';
    echo '<tr>
			<td width="130"><label name="_bio_title">Title/Position:</label></td>
			<td><input type="text" class="widefat" name="_bio_title" value="' . $bio_title  . '" size="100" /></td>
		  </tr>';
    echo '<tr>
			<td width="130"><label name="_bio_fb">Facebook URL:</label></td>
			<td><input type="text" class="widefat" name="_bio_fb" value="' . $bio_fb  . '" size="100" /></td>
		  </tr>';
    echo '<tr>
			<td width="130"><label name="_bio_linked">LinkedIn URL:</label></td>
			<td><input type="text" class="widefat" name="_bio_linked" value="' . $bio_linked  . '" size="100" /></td>
		  </tr>';
	echo '</table>';
}

?>
<?php 
// Creates Event Post Type
add_action( 'init', 'mdd_event_posttype' );
function mdd_event_posttype() {
  $labels = array(
    'name' => _x('Events', 'post type general name'),
    'singular_name' => _x('Event', 'post type singular name'),
    'add_new' => _x('Add New', 'Event'),
    'add_new_item' => __('Add New Events'),
    'edit_item' => __('Edit Event'),
    'new_item' => __('New Event'),
    'view_item' => __('View Event'),
    'search_items' => __('Search Events'),
    'not_found' =>  __('No Events found'),
    'not_found_in_trash' => __('No Events found in Trash'),
    'parent_item_colon' => ''
  );
  $supports = array('title', 'editor', 'thumbnail', 'page-attributes', 'excerpt');
  register_post_type( 'event',
    array(
	  'hierarchical' => true,
      'labels' => $labels,
      'public' => true,
      'supports' => $supports,
	  'menu_position' => 10,
	  'register_meta_box_cb' => 'add_event_metaboxes'
	   )
  );
}
?>
<?php 
// Creates Wedding Post Type
add_action( 'init', 'mdd_wedding_posttype' );
function mdd_wedding_posttype() {
  $labels = array(
    'name' => _x('Weddings', 'post type general name'),
    'singular_name' => _x('Wedding', 'post type singular name'),
    'add_new' => _x('Add New', 'Wedding'),
    'add_new_item' => __('Add New Weddings'),
    'edit_item' => __('Edit Wedding'),
    'new_item' => __('New Wedding'),
    'view_item' => __('View Wedding'),
    'search_items' => __('Search Weddings'),
    'not_found' =>  __('No Weddings found'),
    'not_found_in_trash' => __('No Weddings found in Trash'),
    'parent_item_colon' => ''
  );
  $supports = array('title', 'editor', 'thumbnail', 'page-attributes', 'excerpt');
  register_post_type( 'wedding',
    array(
	  'hierarchical' => true,
      'labels' => $labels,
      'public' => true,
      'supports' => $supports,
	  'menu_position' => 10,
	  'register_meta_box_cb' => 'add_wedding_metaboxes'
	   )
  );
}
?>
<?php 
function add_wedding_metaboxes() {
    add_meta_box('wedding_detail', 'Gallery Overlay Header', 'wedding_detail', 'wedding', 'normal', 'default');
}
function add_event_metaboxes() {
    add_meta_box('wedding_detail', 'Gallery Overlay Header', 'wedding_detail', 'event', 'normal', 'default');
}
function wedding_detail() {
    global $post;
 
    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="meta_noncename" id="meta_noncename" value="' .
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
 
    // Get the location data if its already been entered
    $sidebararea = get_post_meta($post->ID, '_sidebararea', true);

		wp_editor($sidebararea, '_sidebararea');
} 
?>
<?php
// Save the Metabox Data
 
function mdd_save_meta($post_id, $post) {
 
    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if ( !wp_verify_nonce( $_POST['meta_noncename'], plugin_basename(__FILE__) )) {
    return $post->ID;
    }
 
    // Is the user allowed to edit the post or page?
    if ( !current_user_can( 'edit_post', $post->ID ))
        return $post->ID;
 
    // OK, we're authenticated: we need to find and save the data
    // We'll put it into an array to make it easier to loop though.
 
    $meta['_sidebararea'] = $_POST['_sidebararea'];
    $meta['_bio_title'] = $_POST['_bio_title']; 
    $meta['_bio_fb'] = $_POST['_bio_fb']; 
    $meta['_bio_linked'] = $_POST['_bio_linked']; 
    $meta['_mdd_header'] = $_POST['_mdd_header']; 
    $meta['_mdd_subheader'] = $_POST['_mdd_subheader']; 
			  
 
 
    // Add values of $scheduleds_meta as custom fields
 
    foreach ($meta as $key => $value) { // Cycle through the $scheduleds_meta array!
        if( $post->post_type == 'revision' ) return; // Don't store custom data twice
        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
            update_post_meta($post->ID, $key, $value);
        } else { // If the custom field doesn't have a value
            add_post_meta($post->ID, $key, $value);
        }
        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
    }
 
}
 
add_action('save_post', 'mdd_save_meta', 1, 2); // save the custom fields
?>