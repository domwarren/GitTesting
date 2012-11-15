<?php /*Template Name: About Page*/get_header(); if (have_posts()) : the_post(); ?>				<?php  			$image = get_post_meta(get_the_id(), '_about_page_image', true);			if ( !empty($image) ) :			?>			<div class="image">				<a href="#"><img src="<?php echo get_upload_url() ?>/<?php echo $image ?>" alt="" /></a>			</div>						<?php endif; ?>	<div class="container">		<div id="top-text-section">		</div>							<div id="content">				<div class="default-page">					<h3 class="cufon-plain"><?php the_title(); ?></h3>					<div class="entry">						<?php the_content() ?>					</div>				</div>			</div>									<div id="from-the-blog" class="content-version">							<h3 class="cufon-plain">News and Knowledge</h3>								<div class="blog-posts">												<?php query_posts('post_type=post&showposts=3'); ?>				<?php if (have_posts()): ?>					<?php while(have_posts()): the_post(); ?>						<div class="blog-post">							<a href="<?php the_permalink(); ?>" class="thumb"><img src="<?php echo get_upload_url() . '/' . get_post_meta(get_the_id(), '_custom_post_image_thumb', 1); ?>" alt="" /></a>							<h4 class="cufon-plain"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>							<p><?php echo shortalize(get_the_content(), 15); ?></p>							<div class="cl">&nbsp;</div>						</div>						<?php endwhile; ?>				<?php endif; ?>								<?php wp_reset_query() ?>							</div>			</div>	</div><?php endif; get_footer(); ?>	