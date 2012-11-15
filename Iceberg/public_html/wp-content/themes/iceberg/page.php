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
			</div>			<div id="from-the-blog" class="content-version">							<h3 class="cufon-plain">Knowledge Centre</h3>							<div class="blog-posts">				<?php query_posts('post_type=post&showposts=2'); ?>				<?php if (have_posts()): ?>					<?php while(have_posts()): the_post(); ?>						<div class="blog-post">							<a href="<?php the_permalink(); ?>" class="thumb"><img src="<?php echo get_upload_url() . '/' . get_post_meta(get_the_id(), '_custom_post_image_thumb', 1); ?>" alt="" /></a>							<h4 class="cufon-plain"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>							<p><?php echo shortalize(get_the_content(), 15); ?></p>							<div class="cl">&nbsp;</div>						</div>						<?php endwhile; ?>				<?php endif; ?>				<?php wp_reset_query() ?>			</div>		</div>
			
		<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php get_sidebar(); ?>
		<?php endif; ?>
		<div class="cl">&nbsp;</div>
	</div>
<?php get_footer(); ?>