<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/engine1/style.css" media="screen" />
<style type="text/css">a#vlb{display:none}</style>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/engine1/jquery.js"></script>
	<div class="whitebox_wrapper_three">
			<div class="whitebox_top_three">
				<div class="topleft"></div>
				<div class="topbg"></div>
				<div class="topright"></div>
			</div>
			<div class="whitebox_body_three">
				<!--Footer Content Starts-->
				<div class="footer_left">
					<img src="<?php bloginfo('template_directory'); ?>/images/footer_cpdlogo.jpg" width="120" height="42" alt="" title="" class="logo" />
				</div>
				<div class="footer_mid">
					<p>Alliance</p>
					<ul>
						<li><img src="<?php bloginfo('template_directory'); ?>/images/drik_tv_logo.jpg" width="123" height="42" alt="" title="" /></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/images/pathshala_logo.gif" width="123" height="42" alt="" title="" /></li>
						<li><img src="<?php bloginfo('template_directory'); ?>/images/PMIBDLogo.png" width="123" height="42" alt="" title="" /></li>
					</ul>
				</div>
				<div class="footer_right">
					<p>Design &amp; Developed by</p>
					<a href="http://drikict.net" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/images/drik_ict_footerlogo.jpg" width="114" height="33" alt="" title="" class="logo" />
					</a>
				</div>
				<!--Footer Content Ends-->
			</div>
			<div class="whitebox_bottom_three">
				<div class="bottomleft"></div>
				<div class="bottombg"></div>
				<div class="bottomright"></div>
			</div>
		</div>
		<!--Footer Wrapper Ends-->		
	</div>
	<!--Main Container Ends-->
</div>
<?php
wp_footer();
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
		var bar = $('#top_menuheader');
		var top = bar.css('top');
		$(window).scroll(function() {
			if($(this).scrollTop() > 160) {
				bar.stop().animate({'top' : '0px'}, 800);

			} else {
				bar.stop().animate({'top' : top}, 800);
			}
		});
	});
</script>
<!--Wide Body Container Ends-->
</body>
</html>