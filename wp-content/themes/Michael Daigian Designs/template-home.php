<?php
/*
Template Name: Home
*/
?>      


<?php get_header(); ?>


<div id="page">        
        <div id="sidebar"> 

            <div id="supernav">
                <ul>
                    <li id="facebook"><a target="_blank" href="https://www.facebook.com/MichaelDaigianDesign"></a></li>
                    <li id="blogger"><a target="_blank" href="http://michaeldaigian.blogspot.com/"></a></li>
                    <li id="instagram"><a target="_blank" href="http://instagram.com/michaeldaigiandesign"></a></li>
                    <li id="pin"><a target="_blank" href="http://pinterest.com/mdaigian/"></a></li>
                </ul>
            </div>

            <div id="logo"><a href="">Michael Daigian Design</a></div>
            

            <div id="nav">
			        <?php wp_nav_menu( array('menu' => 'Home Nav' )); ?>
            </div>
            
            <div id="ribbon">
                    <div id="left-corner"></div>
                    <div id="right-corner"></div>

                    <div id="left-arrow"></div>
                    <div id="right-arrow"></div>
            </div>
            
            <p class="est">est. 1975</p>
            
        </div> <!-- end sidebar -->
        
</div>






<?php get_footer(); ?>
