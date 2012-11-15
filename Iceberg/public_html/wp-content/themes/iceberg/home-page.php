<?php  
/*
Template Name: Home Page
*/
get_header();

	$slides = get_posts('orderby=menu_order&post_type=slide&order=ASC&numberposts=-1');
	$loopID = 0;
	?>
	<?php if ( get_option('slideshow_view_mode') == 'slider' ): ?>		
	<div class="homepage-cols theme-default">				<div class="col col-first" id="home-slideShow">			<img src="/wp-content/themes/iceberg/images/SlideShowImages/SlideShow1.jpg" alt="Construction worker with plant equipment" />			<img src="/wp-content/themes/iceberg/images/SlideShowImages/SlideShow2.jpg" style="display:none;" alt="Open cast mining operation" />			<img src="/wp-content/themes/iceberg/images/SlideShowImages/SlideShow3.jpg" style="display:none;" alt="Workers resurfacing a road" />			<img src="/wp-content/themes/iceberg/images/SlideShowImages/SlideShow4.jpg" style="display:none;" alt="Workers greating on construction site" />			<img src="/wp-content/themes/iceberg/images/SlideShowImages/SlideShow5.jpg" style="display:none;" alt="Concrete being poured" />			<img src="/wp-content/themes/iceberg/images/SlideShowImages/SlideShow6.jpg" style="display:none;" alt="Open cast mining operation at night" />			<img src="/wp-content/themes/iceberg/images/SlideShowImages/SlideShow7.jpg" style="display:none;" alt="Mineral" />		</div>				<div class="col">		<div class="job-search-widget">		<h3 class="cufon-plain">Job Search</h3>		<div class="home-job-search">										<div class="fml">Category</div>					<div>						<select id="dllType">            							<option value="">All Categories</option>          							<option value="226665">Construction</option>							<option value="226666">Design &amp; Architecture</option>							<option value="226667">Engineering</option>							<option value="226668">Mining, Resources &amp; Energy</option>							<option value="226669">Real Estate &amp; Property</option>						</select>					</div>					<div class="fml">Location</div>					<div>						<select id="ddlArea">            							<option value="">All Locations</option>							<option value="226572">Australian Capital Territory</option>							<option value="226573">New South Wales</option>							<option value="226574">Northern Territories</option>							<option value="226575">Queensland</option>							<option value="226576">South Australia</option>							<option value="226577">Tasmania</option>							<option value="226578">Victoria</option>							<option value="226579">Western Australia</option>							<option value="226580">New Zealand</option>						</select>					</div>					<div class="fml">Keyword(s)</div>					<div><input type="text" id="al_keywords" name="al_keywords" class="text"></div>					<div class=""><a title="Show Results" href="/index.php/job-seekers/job-search-2/" id="lnkJobSearch" class="yellowButton button">Show Results</a></div>				</div>		</div>		</div>	</div>
	<?php else: ?>
	<div id="gallery-slider" class="slider">
		<div class="slides">
			<?php foreach ($slides as $slide): $loopID++; 
				$link_url = get_post_meta($slide->ID, '_slide_link', true);
			?>
				<div class="slide" <?php echo ($loopID == 1) ? 'style="display: block"' : ''; ?>>
					<?php if ( empty($link_url) ): ?>
						<img src="<?php echo get_upload_url() . '/' . get_post_meta($slide->ID, '_slide_big_image', 1); ?>" width="940" height="350" alt="<?php echo $slide->post_title; ?>" />
					<?php else: ?>
						<a href="<?php echo $link_url ?>"><img src="<?php echo get_upload_url() . '/' . get_post_meta($slide->ID, '_slide_big_image', 1); ?>" width="940" height="350" alt="<?php echo $slide->post_title; ?>" /></a>
					<?php endif ?>
					<h1><?php echo get_post_meta($slide->ID, '_slide_title', true); ?></h1>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="slide-navigation">
			<span class="left-mask"></span>
			<span class="right-mask"></span>		
			<div class="slide-thumbs">
				<div class="slide-thumbs-inner">
					<?php foreach ($slides as $slide): ?>
						<a href="#"><img src="<?php echo get_upload_url() . '/' . get_post_meta($slide->ID, '_slide_small_image', 1); ?>" alt="" /></a>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="slide-control">
				<a href="#" class="prev">&nbsp;</a>
				<a href="#" class="next">&nbsp;</a>
			</div>								
		</div>
	</div>
	<?php endif ?>
	
	<div class="container">
	
<div id="featured-projects">
			<h3 class="cufon-plain">Putting People First</h3>						
			
 
			<p>As one of Australia's leading specialist recruitment agencies in <strong>civil construction</strong> and related sectors, Iceberg Recruitment strives to set the industry benchmark for integrity and professionalism.</p>


			<p>Working in partnership with clients and candidates from across Australia, our specialist consultants are experts in their field. With a deep understanding of niche markets in <strong>civil construction recruitment</strong>, we supply contractors, owner/operators, EPCM and consultancies from Botany Bay to Broome and everywhere in between. </p>


			<p>Our personal approach, coupled with our extensive expertise in the <strong>civil construction sector</strong>, ensures the perfect match of civil specialist and infrastructure staff on a permanent or contract basis. </p>
			 



			
			<ul class="content-bullets side-list-home">							<li>Civil Construction</li>				<li>Civil Infrastructure</li>				<li>Mining Infrastructure</li>				<li>Camp Construction</li>				<li>Engineering</li>				<li>Subdivisions</li>				<li>Earthworks</li>			</ul>			<ul class="content-bullets side-list-home">					<li>Project Management</li>				<li>Quantity Surveying</li>				<li>Power & Energy</li>				<li>Rail and Road</li>				<li>Water & Waste water</li>				<li>Oil & Gas</li>				<li>Mining</li>			</ul>						
			<?php 
				$featured_projects = get_posts("post_type=portfolio&numberposts=100"); 
				$loopID = 0;
			?>
			<?php foreach ($featured_projects as $project): ?>				
				<?php if ( get_post_meta($project->ID, '_portfolio_featured', 1) != 'yes'): continue; endif;?>
				<?php 
					$loopID++;
					if ($loopID > 2) {
						break;
					}
				?>				
				<div class="featured-project <?php echo ($loopID % 2 == 0) ? 'right' : 'left' ?>">
					<div class="image">
						<a href="<?php echo get_permalink($project->ID); ?>"><img src="<?php echo get_upload_url() . '/' . get_post_meta($project->ID, '_portfolio_image_thumb', 1); ?>" alt="" /></a>
					</div>
					<div class="description">
						<h4 class="cufon-plain"><a href="<?php echo get_permalink($project->ID); ?>"><?php echo $project->post_title; ?></a></h4>
						<p><?php echo get_post_meta($project->ID, '_description', 1); ?></p>
						<a href="<?php echo get_permalink($project->ID); ?>" class="view-project">View Project</a>
					</div>
				</div>									
			<?php endforeach; ?>
		</div>
		<div id="from-the-blog">
			<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"><h3 class="cufon-plain">News and Knowledge</h3></a>
			<a href="<?php bloginfo('rss_url'); ?>" class="rss">Subscribe to Blog RSS</a>							
			<div class="cl">&nbsp;</div>
			<div class="blog-posts">
				<?php query_posts('post_type=post&showposts=3'); ?>
				<?php if (have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<div class="blog-post">
							<a href="<?php the_permalink(); ?>" class="thumb"><img src="<?php echo get_upload_url() . '/' . get_post_meta(get_the_id(), '_custom_post_image_thumb', 1); ?>" alt="" /></a>
							<h4 class="cufon-plain"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p><?php echo shortalize(get_the_content(), 15); ?></p>
							<div class="cl">&nbsp;</div>
						</div>	
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query() ?>
			</div>
			<!-- <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="visit-the-blog">View News and Knowledge</a> -->
		</div>
		<div class="cl">&nbsp;</div>
	</div>
   <?php get_footer(); ?>