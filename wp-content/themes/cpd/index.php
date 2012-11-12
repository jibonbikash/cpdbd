<?php
/*


*/
get_header();
?>
		<div id="banner_wrapper">
			<img src="<?php bloginfo('template_directory'); ?>/images/banner1.png" width="939" height="296" alt="" title="" />
		</div>
		<img src="<?php bloginfo('template_directory'); ?>/images/banner_bottomglow.png" width="939" height="19" alt="" title="" />
		<!--Banner Wrapper Ends-->
		<!--Gray Box Wrapper Starts-->
		<div class="graybox_wrapper">
			<div class="graybox_top">
				<div class="topleft"></div>
				<div class="topbg">Upcoming Training</div>
				<div class="topright"></div>
			</div>
			<div class="graybox_body">
				<!--White Box Wrapper Starts-->
                
                <?php
				$todaysDate = date( 'd-m-Y' ); 
				 $args = array(
			   'post_type' => 'training',
			   'meta_key' => 'training_date',
			   'orderby' => 'training_date',
			   'order' => 'ASC',
			  'meta_query' => array(
			  array(
				'key' => 'training_date',
				'value' => $todaysDate,
				'compare' => '>=',
			  ))
   
 );
 $query = new WP_Query($args);
 while ( $query->have_posts() ) : $query->the_post();
				?>
				<div class="whitebox_wrapper">
					<div class="date_tag">
                    <?php
					$training_date = get_post_meta($post->ID, 'training_date', true);
					$timestamp = strtotime($training_date); 
					 $new_date = date('d M Y', $timestamp);
					 $arr = explode(' ', $new_date);
				//	 echo $arr[0];
					?>
							<p><?=$arr[0]?></p>
							<p><?=$arr[1]?></p>
				  </div>
					<div class="whitebox_top">
						<div class="topleft"></div>
						<div class="topbg"></div>
						<div class="topright"></div>
					</div>
					<div class="whitebox_body">
						<div class="course_des">
							<p>
							<strong>
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_self">
							<?php the_title(); ?>
							</a>
							</strong>
							</p>
							<p>
							<span><?php echo $traingfee = get_post_meta($post->ID, 'training_time', true); ?> |</span>
							<span><?php echo $totaltime = get_post_meta($post->ID, 'training_totaltime', true); ?></span>
							</p>
						</div>
						<div class="course_fee">
							<div class="blank_div2"></div>
							<p style="text-align:center;"><strong>Fee</strong></p>
							<p style="text-align:center;">BDT.<?php echo $traingfee = get_post_meta($post->ID, 'traingfee', true); ?></p>
						</div>
						<div class="course_icons">
							<span>
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>/images/connect_icon.jpg" width="40" height="40" alt="Registration" title="Registration" />
								</a>
							</span>
							<span>
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>/images/share_icon.jpg" width="40" height="40" alt="Share" title="Share" />
								</a>
							</span>
							<span>
								<a href="#">
									<img src="<?php bloginfo('template_directory'); ?>/images/win_icon.jpg" width="40" height="40" alt="Win" title="Win" />
								</a>
							</span>
						</div>
                        <?php  $autor_id = $post->post_author;?>
						<div class="course_cordinator_photo">
							<img src="<?php echo get_site_url(); ?>/wp-content/uploads/userphoto/<?php $autor_name = the_author_meta('userphoto_thumb_file', $autor_id); ?>" width="52" height="52" alt="<?php $autor_name = the_author_meta('user_nicename', $autor_id); ?>" title="<?php $autor_name = the_author_meta('user_nicename', $autor_id); ?>" />
						</div>
						<div class="course_cordinator_desc">
							<p>
							<strong class="font_color1">
							<?php //the_author_link(); ?> <?php //the_author(); ?> 
                            
                            <a href="<?php echo get_author_posts_url( $post->post_author ); ?>"><?php $autor_name = the_author_meta('user_nicename', $autor_id); ?></a>
                            
							</strong>
							</p>
							<p><?php $currntposition = the_author_meta('currntposition', $autor_id); ?></p>
                            <p><?php $companyinfo = the_author_meta('companyinfo', $autor_id); ?></p>
						</div>
					</div>
					<div class="whitebox_bottom">
						<div class="bottomleft"></div>
						<div class="bottombg"></div>
						<div class="bottomright"></div>
					</div>
				</div>
<?php
endwhile;
wp_reset_query(); 
?>		
				<!--White Box Wrapper Ends-->
			</div>
			<div class="graybox_bottom">
				<div class="bottomleft"></div>
				<div class="bottombg"></div>
				<div class="bottomright"></div>
			</div>
		</div>
		<!--Gray Box Wrapper Ends-->
		<!--Left Column Starts-->
		<div id="left_column">
			<!--Featured Video Wrapper Starts-->
			<div class="graybox_smlwrapper">
				<div class="graybox_smltop">
					<div class="topleft"></div>
					<div class="topbg">Featured Video</div>
					<div class="topright"></div>
				</div>
				<div class="graybox_smlbody">
					<p><strong>Bill Gates Speech at Harvard</strong></p>
					<div style="">
					<iframe width="307" height="186" src="http://www.youtube.com/embed/AP5VIhbJwFs?wmode=transparent" frameborder="0" wmode="Opaque" class="featured_videos"></iframe>
					<!--<iframe width="480" height="390" src="http://www.youtube.com/embed/lzQgAR_J1PI?wmode=transparent" frameborder="0" wmode="Opaque">-->
					</div>
				</div>
				<div class="graybox_smlbottom">
					<div class="bottomleft"></div>
					<div class="bottombg"></div>
					<div class="bottomright"></div>
				</div>
			</div>
			<!--Featured Video Wrapper Ends-->
			<!--Virtual Library Wrapper Starts-->
			<div class="graybox_smlwrapper">
				<div class="graybox_smltop">
					<div class="topleft"></div>
					<div class="topbg">Virtual Library</div>
					<div class="topright"></div>
				</div>
				<div class="graybox_smlbody">
					<div class="virtual_icon">
						<ul>
							<li>
								<a href="#">
									<p><strong class="font1">99</strong></p>
									<div class="blank_div1"></div>
									<p><strong>eBooks</strong></p>
								</a>
							</li>
							<li>
								<a href="#">
									<p><strong class="font1">104</strong></p>
									<div class="blank_div1"></div>
									<p><strong>Videos</strong></p>
								</a>
							</li>
							<li>
								<a href="#">
									<p><strong class="font1">34</strong></p>
									<div class="blank_div1"></div>
									<p><strong>Webinars</strong></p>
								</a>
							</li>
							<li>
								<a href="#">
									<p><strong class="font1">301</strong></p>
									<div class="blank_div1"></div>
									<p><strong>Presentations</strong></p>
								</a>
							</li>
							<li>
								<a href="#">
									<p><strong class="font1">45</strong></p>
									<div class="blank_div1"></div>
									<p><strong>PDF's</strong></p>
								</a>
							</li>
							<li>
								<a href="#">
									<p><strong class="font1">12</strong></p>
									<div class="blank_div1"></div>
									<p><strong>Magazines</strong></p>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="graybox_smlbottom">
					<div class="bottomleft"></div>
					<div class="bottombg"></div>
					<div class="bottomright"></div>
				</div>
			</div>
			<!--Virtual Library Wrapper Ends-->			
			<!--Artical Wrapper Starts-->
			<div class="graybox_wrapper_two">
				<div class="graybox_top_two">
					<div class="topleft"></div>
					<div class="topbg">Article</div>
					<div class="topright"></div>
				</div>
				<div class="graybox_body_two">
					<!--White Box Wrapper Two Starts-->
						<div class="whitebox_wrapper_two">
							<div class="whitebox_top_two">
								<div class="topleft"></div>
								<div class="topbg"></div>
								<div class="topright"></div>
								
								<div class="whitebox_body_two">
									<div class="artical_pic"><img src="<?php bloginfo('template_directory'); ?>/images/blog_img1.jpg" width="44" height="48" alt="Six Sigma" title="Six Sigma" /></div>
									<div class="artical_picname">
										<p><strong>i Six Sigma</strong></p>
									</div>
									<div class="artical_desc">
										<p><strong><a href="#">Black Belt Return on Investment</a></strong></p>
										<p>In 2005 iSixSigma published its first original research on Black Belt return on investment.</p>
									</div>
								</div>
								<div class="whitebox_bottom_two">
									<div class="bottomleft"></div>
									<div class="bottombg"></div>
									<div class="bottomright"></div>
								</div>
							</div>
						</div>
						
						<div class="whitebox_wrapper_two">
							<div class="whitebox_top_two">
								<div class="topleft"></div>
								<div class="topbg"></div>
								<div class="topright"></div>
								
								<div class="whitebox_body_two">
									<div class="artical_pic"><img src="<?php bloginfo('template_directory'); ?>/images/blog_img2.jpg" width="44" height="48" alt="ITIL" title="ITIL" /></div>
									<div class="artical_picname">
										<p><strong>IT Infrastructure Library</strong></p>
									</div>
									<div class="artical_desc">
										<p><strong><a href="#">Something better than ITIL?</a></strong></p>
										<p>In the world of Best Practice, resting on one's laurels is not an option.</p>
									</div>
								</div>
								<div class="whitebox_bottom_two">
									<div class="bottomleft"></div>
									<div class="bottombg"></div>
									<div class="bottomright"></div>
								</div>
							</div>
						</div>
						
						<div class="whitebox_wrapper_two">
							<div class="whitebox_top_two">
								<div class="topleft"></div>
								<div class="topbg"></div>
								<div class="topright"></div>
								
								<div class="whitebox_body_two">
									<div class="artical_pic"><img src="<?php bloginfo('template_directory'); ?>/images/blog_img3.jpg" width="44" height="48" alt="PMI" title="PMI" /></div>
									<div class="artical_picname">
										<p><strong>Project Management Institute</strong></p>
									</div>
									<div class="artical_desc">
										<p><strong><a href="#">Tracking Project Management Trends</a></strong></p>
										<p>Faced with sluggish growth and shifting market priorities, organizations are often tempted to latch on to whatever's being heralded as the next big thing.</p>
									</div>
								</div>
								<div class="whitebox_bottom_two">
									<div class="bottomleft"></div>
									<div class="bottombg"></div>
									<div class="bottomright"></div>
								</div>
							</div>
						</div>						
					<!--White Box Wrapper Two Ends-->
				</div>
				<div class="graybox_bottom_two">
					<div class="bottomleft"></div>
					<div class="bottombg"></div>
					<div class="bottomright"></div>
				</div>
			</div>
			<!--Artical Wrapper Ends-->					
		</div>
		<!--Left Column Ends-->	
		<!--Right Column Starts-->
		<div id="right_column">
			<!--Ad Image Starts-->
			<div class="ad_img">
				<img src="<?php bloginfo('template_directory'); ?>/images/ad_img.png" width="235" height="275" alt="" title="" />
			</div>
			<!--Ad Image Ends-->
			<!--Gallery Wrapper Starts-->
			<div class="graybox_smlwrapper_two">
				<div class="graybox_smltop_two">
					<div class="topleft"></div>
					<div class="topbg">Photo Gallery</div>
					<div class="topright"></div>
				</div>
				<div class="graybox_smlbody_two">
					<!-- Start WOWSlider.com BODY section -->
					<div id="wowslider-container1">
					<div class="ws_images">
						<a href="#"><img src="<?php bloginfo('template_directory'); ?>/data1/images/1.jpg" alt="" title="1st Training on Business Streategy complete sucessfully on 12th March" id="wows0"/></a>
						<a href="#"><img src="<?php bloginfo('template_directory'); ?>/data1/images/2.jpg" alt="" title="Trainning held on new class room" id="wows1"/></a>
						<a href="#"><img src="<?php bloginfo('template_directory'); ?>/data1/images/3.jpg" alt="" title="The communicative class room here into Drik ICT" id="wows2"/></a>
						<a href="#"><img src="<?php bloginfo('template_directory'); ?>/data1/images/4.jpg" alt="" title="Trainning held on new class room" id="wows3"/></a>
						<a href="#"><img src="<?php bloginfo('template_directory'); ?>/data1/images/5.jpg" alt="" title="1st Training on Business Streategy complete sucessfully on 12th March" id="wows4"/></a>
						<a href="#"><img src="<?php bloginfo('template_directory'); ?>/data1/images/6.jpg" alt="" title="Trainning held on new class room" id="wows5"/></a>
					  </div>
						<div class="ws_bullets"><div>
						<a href="#wows0" title="gallery_img1">1</a>
						<a href="#wows1" title="gallery_img2">2</a>
						<a href="#wows2" title="gallery_img3">3</a>
						<a href="#wows3" title="gallery_img4">4</a>
						<a href="#wows4" title="gallery_img5">5</a>
						<a href="#wows5" title="gallery_img6">6</a>
						</div></div>
						
					</div>
					<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/engine1/script.js"></script>
					<!-- End WOWSlider.com BODY section -->	
				</div>
				<div class="graybox_smlbottom_two">
					<div class="bottomleft"></div>
					<div class="bottombg"></div>
					<div class="bottomright"></div>
				</div>
			</div>
			<!--Gallery Wrapper Ends-->
		</div>
		<!--Right Column Ends-->
		<!--Footer Wrapper Starts-->
	<?php
	get_footer();
	?>