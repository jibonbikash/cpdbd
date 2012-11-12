<?php  get_header();?>
		<div id="banner_wrapper_inner">
<img width="939" height="200" title="" alt="" src="<?php bloginfo('template_directory'); ?>/images/resourcebanner.png">

		</div>
		<img src="<?php bloginfo('template_directory'); ?>/images/banner_bottomglow.png" width="939" height="19" alt="" title="" />

		<div id="leftcolumn_inner">
			<div class="yellowbox_wrapper">
				<div class="yellow_header">
					<div class="yellow_header_left"></div>
					<div class="yellow_header_bg">Resource Person</div>
					<div class="yellow_header_right"></div>
                 </div>   
               
				 <div class="yellowbody">
<div class="resource_pers_nav">
                    	<ul>
                  <?php
				  global $wpdb;
$wp_user_search = $wpdb->get_results("SELECT ID, display_name FROM $wpdb->users ORDER BY ID");
foreach ( $wp_user_search as $userid ) {
	$user_id       = (int) $userid->ID;
	$user_login    = stripslashes($userid->user_login);
	$display_name  = stripslashes($userid->display_name);
	$return  = '';
	$return .= "\t" . '<li><a href="?author='.$user_id.'">'. $display_name .'</a></li>' . "\n";
	print($return);
}
?>
  </ul>
                    </div>
                   
					</div>
				 <div class="yellow_footer">
						<div class="yellow_footer_left"></div>
						<div class="yellow_footer_bg"></div>
						<div class="yellow_footer_right"></div>
					</div>
			</div>
           
            

			<div class="smlwhitebox_inner">
				<div class="smlwhitebox_header">
					<div class="smlwhitebox_headerleft"></div>
					<div class="smlwhitebox_headerbg">Share</div>
					<div class="smlwhitebox_headerright"></div>
				</div>
				<div class="smlwhitebox_body">
					<span class='st_sharethis_large' displayText='ShareThis'></span>
					<span class='st_facebook_large' displayText='Facebook'></span>
					<span class='st_twitter_large' displayText='Tweet'></span>
					<span class='st_linkedin_large' displayText='LinkedIn'></span>
					<span class='st_email_large' displayText='Email'></span>
				</div>
				<div class="smlwhitebox_footer">
					<div class="smlwhitebox_footerleft"></div>
					<div class="smlwhitebox_footerbg"></div>
					<div class="smlwhitebox_footerright"></div>
				</div>
			</div>
			<div class="inner_leftad"><img src="<?php bloginfo('template_directory'); ?>/images/advertise-here.jpg" width="235" height="235" alt="" title="" /></div>
		</div>

		<div id="rightcolumn_inner">
			<!--Training Overview Wrapper Starts-->
			<div class="blackheader_whitebox">
				<div class="blackheader_whiteboxheader">
					<div class="topleft"></div>
					<div class="topbg">Brief Profile</div>
					<div class="topright"></div>
				</div>
				<div class="boxbody">
					<div class="profile">
						<div class="profile_left">
						<ul>
                        <?php
						if(isset($_GET['author_name'])) {
  $curauth = get_userdatabylogin(get_the_author_login());
} else {
  $curauth = get_userdata(intval($author));
}
//echo $curauth->ID;
						?>
                        <?php //echo $author = get_the_author(); ?> 
							<li><img width="52" height="52" title="" alt="" src="<?php echo get_site_url(); ?>/wp-content/uploads/userphoto/<?php the_author_meta('userphoto_thumb_file', $curauth->ID); ?>"></li>
							<li>
				<p><strong style="color:#46b1e5;"><?php $autor_name = the_author_meta('user_nicename', $curauth->ID); ?></strong></p>
								<p><?php $currntposition = the_author_meta('currntposition', $curauth->ID); ?></p>
								<p><?php $companyinfo = the_author_meta('companyinfo', $curauth->ID); ?></p>
                             
							</li>
						</ul>
					</div>
						<div class="profile_right"></div>
					</div>
			<p><?php $companyinfo = the_author_meta('trainerdetails', $curauth->ID); ?></p>
					
					<div class="blank_div2"></div>
				</div>
				<div class="blackheader_whiteboxfooter">
					<div class="bottomleft"></div>
					<div class="bottombg"></div>
					<div class="bottomright"></div>
				</div>
			</div>
			<!--Training Overview Wrapper Ends--> 
			<div class="blank_div2"></div>
		

		</div>

<?php
get_footer();
?>