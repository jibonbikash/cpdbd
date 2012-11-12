<?php
/*


*/
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
					<div class="panel">
						<div class="inner-tittle"><h3 class="tittle4"><?php the_title(); ?></h3><span>&nbsp;</span></div>
							<div class="panel_content" >
							
								<?php the_content(); ?>						
							</div>	
						</div>		
		<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>		
			

<?php
get_footer();
?>