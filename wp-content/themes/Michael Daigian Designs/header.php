<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/fonts/stylesheet.css' type='text/css' />
<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/museo/stylesheet.css' type='text/css' />
		
<!-- include jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>


<!-- include Supersized plugin if Home page -->

<?php /* if ( is_front_page()) { ?>

		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bgstretcher.js"></script>
		<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/js/bgstretcher.css' type='text/css' />
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>

<?php } */ ?>
		<script type="text/javascript">
			$(document).ready(function() {		
				    	
				    	// if show button is clicked
				    	$('#toggle').mouseover(function () {
							$('#flagnav').animate({ top: "0px" });
							$("#toggle").fadeOut("slow");
							$("#flagnav ul").fadeIn("slow");
				    	});				
				    	// if close button is clicked
				    	$('#flagnav').mouseleave(function () {
							$('#flagnav').animate({ top: "-245px" });
							$("#toggle").fadeIn("slow");
							$("#flagnav ul").fadeOut("slow");
				    	});				
				    	
			});			    
		</script>

<?php wp_head(); ?>

<style type="text/css">
<!--

#nav li.menu-item-<?php 
if(is_post_type('project')) {echo '29';}?> a {
color: #ef4604;
     background: url('<?php bloginfo('template_directory'); ?>/images/orange-arrow.png') 15px 38px no-repeat;
}
 
-->
</style>
<!-- Start of Woopra Code -->
<script type="text/javascript">
function woopraReady(tracker) {
    tracker.setDomain('michaeldaigian.com');
    tracker.setIdleTimeout(1800000);
    tracker.track();
    return false;
}
(function() {
    var wsc = document.createElement('script');
    wsc.src = document.location.protocol+'//static.woopra.com/js/woopra.js';
    wsc.type = 'text/javascript';
    wsc.async = true;
    var ssc = document.getElementsByTagName('script')[0];
    ssc.parentNode.insertBefore(wsc, ssc);
})();
</script>
<!-- End of Woopra Code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39874724-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
