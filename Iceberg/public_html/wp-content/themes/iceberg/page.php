<?php get_header(); ?>
	<div class="container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="top-text-section">
				<div class="doubleborder">
					<?php 
					$_title = get_post_meta(get_the_id(), '_custom_teaser_text', true);
					if ( empty($_title) ) {
						$_title = get_option('default_teaser_text');
					}
				 	?>
					<!--<h2 class="cufon-plain"><?php echo htmlize($_title); ?></h2>	-->	
				</div>	
			</div>

			<div id="content">
				<div class="default-page">
					<h3 class="cufon-plain"><?php the_title(); ?></h3>
					<div class="entry">
						<?php the_content() ?>
					</div>
				</div>
			</div>
			
		<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php get_sidebar(); ?>
		<?php endif; ?>
		<div class="cl">&nbsp;</div>
	</div>
<?php get_footer(); ?>