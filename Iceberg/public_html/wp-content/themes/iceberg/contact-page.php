<?php 
/*
Template Name: Contact Page
*/

$errors = false;
if ( isset($_POST['submit']) && isset($_POST['is_contact']) ) {
	$errors = f_handle_contact_submit();
}

$validator = new SimpleValidator(f_get_contact_rules());

get_header(); if (have_posts()) : the_post(); ?>	
	<div class="container default-page">
		<div id="top-text-section">
			
		</div>
		<div id="contact">
			
			<div class="contact-form">
				<h3 class="cufon-plain"><?php the_title(); ?></h3>
				<div class="entry">
					<?php the_content(); ?>
				</div>
				<form action="" method="post" id="contact-form">
					<div id="cf">
						<div class="top">
							<div class="bottom">
								<?php if ( $errors != false): ?>
									<ul class="errors-list">
									<?php foreach ($errors as $error): ?>
										<li><?php echo $error ?></li>
									<?php endforeach ?>
									</ul>
								<?php elseif(isset($_POST['submit'])): ?>
									<h3 class="success-msg">Thank you for contacting us!</h3>
								<?php endif ?>
								<?php $always_default = ($errors == false && isset($_POST['submit']) ) ?>
								<div>
									<input type="text" class="tfield blink" title="Name"  value="<?php from_post('ctc-name', 'Name(required)', $always_default) ?>" name="ctc-name"/>
									<input type="text" class="tfield blink" title="Email" name="ctc-email" value="<?php from_post('ctc-email', 'Email(not published, required)', $always_default) ?>"/>
									<input type="text" class="tfield blink" title="Phone"  value="<?php from_post('ctc-website', 'Website', $always_default) ?>" name="ctc-website"/>
									<textarea name="ctc-comment" class="field" id="cf-comment" rows="" cols=""><?php from_post('ctc-comment', $always_default) ?></textarea>
								</div>
							</div>
						</div>
					</div>
					<input type="hidden" name="is_contact" value="true">
					<input type="submit" class="btn-submit" title=""  value="Submit" name="submit"/>
				</form>
				<?php echo $validator->buildJS('#contact-form', true, true) ?>
				<div class="cl">&nbsp;</div>
			</div>
			<div class="contact-map">
                <h3 style="padding-top: 20px; font-size: 22px;">Our Location</h3>
                <div class="col2 floatleft">
					<span class="label"><strong>ADDRESS:</strong></span><address class="detail">Grafton Bond Building, Suite 4, Level 4,<br /> 201 Kent Street,<br /> Sydney, 2000</address>

                      <span class="label"><strong>PHONE:</strong></span><span class="detail">02 8246 9030</span>
					</div>
                    <div class="map-holder">
					<iframe width="410" height="310" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=201+Kent+Street,+Sydney+2000&amp;sll=37.0625,-95.677068&amp;sspn=42.224734,92.724609&amp;ie=UTF8&amp;hq=&amp;hnear=201+Kent+St,+Sydney+New+South+Wales+2000,+Australia&amp;ll=-33.863716,151.204662&amp;spn=0.012365,0.018239&amp;z=15&amp;output=embed&amp;iwloc=B"></iframe><br /><small>
				</div>
				<h3 style="padding-top: 20px; font-size: 22px;">Finding us</h3>
				<p>201 Kent Street consists of 2 buildings. Grafton Bond Building is behind 201 Kent Street. The Foyer Cafe is on the street level, to the right of the main 201 Kent Street, to the right of that is a set of glass doors leading downstairs to some escalators. Go through the doors and down the escalators and through the 2nd set of doors at the bottom. In front of you are some brick steps, and a brick building (Grafton Bond) go up the steps and round to the left to the lifts. Travel down to Level 4, and follow the signs to Iceberg Recruitment</p>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
<?php endif; get_footer(); ?>	
