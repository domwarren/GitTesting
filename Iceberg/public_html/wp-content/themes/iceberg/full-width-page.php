<?php 
/*
Template Name: Full Width Page
*/
get_header(); if (have_posts()) : the_post(); ?>	
	<div class="container">		
		<?php # print_breadcrumbs('<div id="pagination">', ' / ', '</div>'); ?>
		<div class="default-page">
			<h3 class="cufon-plain"><?php the_title(); ?></h3>
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php endif; get_footer(); ?>	
