<?php  get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="banner_wrapper_inner">
			<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  the_post_thumbnail();
} 
?>
		</div>
		<img src="<?php bloginfo('template_directory'); ?>/images/banner_bottomglow.png" width="939" height="19" alt="" title="" />

		<div id="leftcolumn_inner">
			<div class="yellowbox_wrapper">
				<div class="yellow_header">
					<div class="yellow_header_left"></div>
					<div class="yellow_header_bg">Resource Person</div>
					<div class="yellow_header_right"></div>
                 </div>   
                 <?php  $autor_id = $post->post_author;?>
				 <div class="yellowbody">
						<p><img src="<?php echo get_site_url(); ?>/wp-content/uploads/userphoto/<?php $autor_name = the_author_meta('userphoto_thumb_file', $autor_id); ?>" width="62" height="62" alt="<?php $autor_name = the_author_meta('user_nicename', $autor_id); ?>" title="<?php $autor_name = the_author_meta('user_nicename', $autor_id); ?>" class="reso_pers_photo" /> </p>
						<p><strong><?php $autor_name = the_author_meta('user_nicename', $autor_id); ?></strong></p>
						<p><?php $currntposition = the_author_meta('currntposition', $autor_id); ?></p>
						<p><?php $companyinfo = the_author_meta('companyinfo', $autor_id); ?></p>
						<p><a href="<?php echo get_author_posts_url( $post->post_author ); ?>"><strong>View Profile</strong></a></p>
						<div class="bdr1"></div>
                        
                        
					<?php  $ttttt=get_post_meta($post->ID, 'trainingperson', true);
					 
					 $array1 = explode(",", $ttttt);
					
				//	 print_r($array1);
					//  echo count($array1);
				 $length = count($array1);
				for ($i = 0; $i < $length; $i++) {
					//   $array1[$i];
					?>
                    <p><img src="<?php echo get_site_url(); ?>/wp-content/uploads/userphoto/<?php $autor_name = the_author_meta('userphoto_thumb_file', $array1[$i]); ?>" width="62" height="62" alt="<?php $autor_name = the_author_meta('user_nicename', $array1[$i]); ?>" title="<?php $autor_name = the_author_meta('user_nicename', $array1[$i]); ?>" class="reso_pers_photo" /> </p>
						<p><strong><?php $autor_name = the_author_meta('user_nicename', $array1[$i]); ?></strong></p>
						<p><?php $currntposition = the_author_meta('currntposition', $array1[$i]); ?></p>
						<p><?php $companyinfo = the_author_meta('companyinfo', $array1[$i]); ?></p>
						<p><a href="<?php echo get_site_url(); ?>/?author=<?=$array1[$i]?>"><strong>View Profile</strong></a></p>
                        <div class="bdr1"></div>
					<?php
                    }
					?>
                   
					</div>
				 <div class="yellow_footer">
						<div class="yellow_footer_left"></div>
						<div class="yellow_footer_bg"></div>
						<div class="yellow_footer_right"></div>
					</div>
			</div>
            <?php if(get_post_meta($post->ID, 'methodology', true)): ?>
			<div class="smlwhitebox_inner">
				<div class="smlwhitebox_header">
					<div class="smlwhitebox_headerleft"></div>
					<div class="smlwhitebox_headerbg">Training Methodology</div>
					<div class="smlwhitebox_headerright"></div>
				</div>
				<div class="smlwhitebox_body">
					<?php echo $methodology = get_post_meta($post->ID, 'methodology', true); ?>
				</div>
				<div class="smlwhitebox_footer">
					<div class="smlwhitebox_footerleft"></div>
					<div class="smlwhitebox_footerbg"></div>
					<div class="smlwhitebox_footerright"></div>
				</div>
			</div>
            <?php endif;?>
             <?php if(get_post_meta($post->ID, 'whoattend', true)): ?>
			<div class="smlwhitebox_inner">
				<div class="smlwhitebox_header">
					<div class="smlwhitebox_headerleft"></div>
					<div class="smlwhitebox_headerbg">Who Should Attend</div>
					<div class="smlwhitebox_headerright"></div>
				</div>
				<div class="smlwhitebox_body">
					<?php echo $whoattend = get_post_meta($post->ID, 'whoattend', true); ?>

					<!--<a href="#"><strong>Read more...</strong></a>-->
				</div>
				<div class="smlwhitebox_footer">
					<div class="smlwhitebox_footerleft"></div>
					<div class="smlwhitebox_footerbg"></div>
					<div class="smlwhitebox_footerright"></div>
				</div>
			</div>
              <?php endif;?>

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
					<div class="topbg">Training Overview</div>
					<div class="topright"></div>
				</div>
				<div class="boxbody">
<?php the_content(); ?>	
                    
                    <p><strong class="font_color2">Learning Outcomes</strong></p>
					<div style="margin-left:10px;">
						<p><strong>&bull;</strong> Describe the components & identify personal habits of a professional image.</p>
						<p><strong>&bull;</strong> Explain the connection between a professional image and customer service.</p>
						<p><strong>&bull;</strong> Manage telephone communication with clarity, accuracy, and courtesy.</p>
						<p><strong>&bull;</strong> Improve verbal communication with those they meet face to face.</p> 
						<p><strong>&bull;</strong> Demonstrate improvement in their listening skills.</p>
						<p><strong>&bull;</strong> Minimize interruptions caused by customers and coworkers in a tactful way.</p>
						<p><strong>&bull;</strong> Implement strategies for dealing politely and successfully with discourteous, demanding, or dissatisfied visitors.</p>
						<p><strong>&bull;</strong> Reduce stress and ward off “burnout” by practicing simple exercises they can do at home as well as at work.</p>
						<p><strong>&bull;</strong> Develop a personal action plan to improve their image and their customer service skills.</p> 
						
					</div>
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
			<!--Training Outline Wrapper Starts-->
			<div class="blackheader_whitebox">
				<div class="blackheader_whiteboxheader">
					<div class="topleft"></div>
					<div class="topbg">Training Outline</div>
					<div class="topright"></div>
				</div>
				<div class="boxbody">
					<div class="train_outline_columnwrapper">
						<div class="train_outlineleft">
			<?php echo $outlineleft = get_post_meta($post->ID, 'outlineleft', true); ?>
            </div>
						<div class="train_outlineright">
		<?php echo $outlineright = get_post_meta($post->ID, 'outlineright', true); ?>
						</div>
					</div>	
				</div>
				<div class="blackheader_whiteboxfooter">
					<div class="bottomleft"></div>
					<div class="bottombg"></div>
					<div class="bottomright"></div>
				</div>
			</div>
			
			<div class="graybox_wrapper_two" style="float:left; width:334px; margin-left:16px; clear:none;">
				<div class="graybox_top_two" style="width:334px;">
					<div class="topleft"></div>
					<div class="topbg" style="width:310px">
						<span style="float:left">Training Schedule</span>
					</div>
					<div class="topright"></div>
				</div>
				<div class="graybox_body_two" style="width:332px;">
					<div class="schedule_registration_columnwrapper">
						<div class="schedule_column">
<?php echo $trainingsechedule = get_post_meta($post->ID, 'trainingsechedule', true); ?>
					</div>
					</div>
				</div>
				<div class="graybox_bottom_two" style="width:334px;">
					<div class="bottomleft"></div>
					<div class="bottombg" style="width:310px;"></div>
					<div class="bottomright"></div>
				</div>
			</div>
			<!--Schedule Wrapper Ends-->
			<!--Registration Wrapper Starts-->
			<div class="graybox_wrapper_two" style="float:left; width:334px; margin-left:18px; clear:none;">
				<div class="graybox_top_two" style="width:334px;">
					<div class="topleft"></div>
					<div class="topbg" style="width:310px">
						<span style="float:left">Registration Details</span>
					</div>
					<div class="topright"></div>
				</div>
				<div class="graybox_body_two" style="width:332px;">
					<div class="schedule_registration_columnwrapper">
						<div class="schedule_column">
                        <p>
			<?php echo $registrationdetails = get_post_meta($post->ID, 'registrationdetails', true); ?>				
                           </p> 
						</div>
					</div>
				</div>
				<div class="graybox_bottom_two" style="width:334px;">
					<div class="bottomleft"></div>
					<div class="bottombg" style="width:310px;"></div>
					<div class="bottomright"></div>
				</div>
			</div>
			<!--Registration Wrapper Ends-->
			<!--Inner Right Ad Image Starts-->
			<!--<img src="images/innnerright_adimg.png" width="688" height="178" alt="" title="" class="innerright_adimg" />-->
			<!--Inner Right Ad Image Ends--> 
		</div>
		<!--Right Column Inner Ends-->
		<!--Footer Wrapper Starts-->
		

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>		

<?php
get_footer();
?>