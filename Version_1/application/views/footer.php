<footer>
	
	<!-- Color Band -->
	<div class="c-main">
		<div class="grid-container">
			<!-- Newsletter Form -->
			<div class="grid-70 tablet-grid-70 mobile-grid-100">
				<form method="post" action="<?php echo site_url('front/c_newsletter'); ?>">
					<input type="hidden" name="currentURL" value="<?php echo current_full_url(); ?>" id="currentURL" />
					
					<!-- Label -->
					<div class="grid-20 tablet-grid-20 grid-parent mobile-grid-30">
						<label for="newsletter">Newsletter</label>
					</div>
					
					<!-- Form Input -->
					<div class="grid-80 tablet-grid-80 mobile-grid-70">
						<div class="grid-70 tablet-grid-65 mobile-grid-70 grid-parent">
							<input type="email" name="newEmail" value="" id="newEmail" placeholder="<?php echo $this->lang->line("footer_input"); ?>"/>
						</div>
						
						<div class="grid-30 tablet-grid-35 mobile-grid-30 grid-parent">
							<button type="submit" class="c-dark-transparent"><span class="hide-on-mobile"><?php echo $this->lang->line("footer_button"); ?></span><span class="hide-on-desktop hide-on-tablet"><?php echo $this->lang->line("footer_button_mobile"); ?></span></button>
						</div>
					</div>
				</form>
			</div>
			<!-- End Newsletter Form -->
			
			<!-- Social Links -->
			<div class="grid-25 push-5 grid-parent tablet-grid-25 hide-on-mobile">
				<ul class="social-links">
					<li>
						<a href="#"><i class="social-facebook"></i></a>
					</li>
					<li>
						<a href="#"><i class="social-twitter"></i></a>
					</li>
					<li>
						<a href="#"><i class="camera"></i></a>
					</li>
				</ul>
			</div>
			<!-- End Social Links -->
		</div>
	</div>
	<!-- End Color Band -->
	
	<!-- Footer -->
	<div class="c-dark">
		<div class="grid-container">
			<!-- Categories -->
			<div class="grid-25 tablet-grid-33 mobile-grid-100">
				<h6><?php echo $this->lang->line("footer_title1"); ?></h6>
				
				<div class="grid-100 grid-parent">
					<ul class="footer-list">
						<?php foreach ($categories as $category) : ?>
						<li class="ct-light">
							<a href="<?php echo site_url('front/products' . '?' . 'cat=' . $category->idCategory); ?>"><i class="icon icon-chevron-right ct-contrast"></i>
								<?php
									switch ($this->session->userdata('site_lang')) {
									    case 'italian':
									        echo $category->nameCategory;
									        break;
									    case 'english':
									        echo $category->nameCategory_en;
									        break;
									    case 'espanol':
									        echo $category->nameCategory_es;
									        break;
									    case 'french':
									        echo $category->nameCategory_fr;
									        break;
									    case 'russian':
									        echo $category->nameCategory_ru;
									        break;
									}
								?>
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<!-- End Categories -->
			
			<!-- Terms -->
			<div class="grid-25 tablet-grid-33 mobile-grid-100">
				<h6><?php echo $this->lang->line("footer_title2"); ?></h6>
				
				<div class="grid-100 grid-parent">
					<ul class="footer-list">
						<li class="ct-light">
							<a href="<?php echo site_url('front/blog'); ?>"><i class="icon icon-chevron-right ct-contrast"></i> <?php echo $this->lang->line("nav_news"); ?></a>
						</li>
						<li class="ct-light">
							<a href="<?php echo site_url('front/about'); ?>"><i class="icon icon-chevron-right ct-contrast"></i> <?php echo $this->lang->line("nav_about"); ?></a>
						</li>
						<li class="ct-light">
							<a href="<?php echo site_url('front/privacy'); ?>"><i class="icon icon-chevron-right ct-contrast"></i> Privacy</a>
						</li>
						<li class="ct-light">
							<a href="<?php echo site_url('front/cookie'); ?>"><i class="icon icon-chevron-right ct-contrast"></i> Cookies</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- End Terms -->
			
			<!-- Contacts -->
			<div class="grid-25 tablet-grid-33 mobile-grid-100" id="footer-contacts">
				<h6><?php echo $this->lang->line("footer_title4"); ?></h6>
				
				<div class="grid-100 tablet-grid-100 mobile-grid-100 grid-parent">
					<p class="ct-light"><span class="ct-white">Ragss Outlet</span> <span class="ct-contrast">Treviglio</span><br />
					Via Roma, 10<br />
					(24047) Treviglio<br />
					<a href="https://goo.gl/maps/HQLBb" target="_blank" class="ct-light"><i class="icon icon-location"></i> <?php echo $this->lang->line("footer_map"); ?></a><br />
					</p>
					<br /><br /><br />
					<p class="ct-light"><span class="ct-white">Ragss Outlet</span> <span class="ct-contrast">Milano</span><br />
					Via Moncucco, 26<br />
					(20143) Milano<br />
					<a href="https://goo.gl/maps/eGX9g" target="_blank" class="ct-light"><i class="icon icon-location"></i> <?php echo $this->lang->line("footer_map"); ?></a></p>
				</div>
			</div>
			<!-- End Contacts -->
			
			<!-- Write Us -->
			<div class="grid-25 hide-on-tablet mobile-grid-100">
				<span class="hide-on-desktop hide-on-tablet"><br /><br /></span>
				<h6><?php echo $this->lang->line("footer_title3"); ?></h6>
				
				<div class="grid-100 grid-parent">
					<div class="grid-100 grid-parent">
						<p class="ct-light"><?php echo $this->lang->line("footer_form_top"); ?><br /><br /></p>
					</div>
							
					<form method="post" action="<?php echo site_url('front/send_contact_form'); ?>" class="send">
				    	<input type="hidden" name="currentURL" value="<?php echo current_full_url(); ?>" id="currentURL"/>
						<input type="text" name="name" value="" id="name" placeholder="<?php echo $this->lang->line("footer_form_name"); ?> *" required="required"/>
						<input type="email" name="email" value="" id="email" placeholder="<?php echo $this->lang->line("footer_form_email"); ?> *" required="required"/>
						<textarea id="message" name="message" placeholder="<?php echo $this->lang->line("footer_form_message"); ?> *" required="required"></textarea>
						
						<div class="grid-100 grid-parent">
						<input type="checkbox" name="privacy" id="privacy" value="1" required="required"/> 
						<label for="privacy" class="ct-light"> &nbsp; <?php echo $this->lang->line("footer_form_privacy1"); ?> <a href="<?php echo site_url('front/privacy'); ?>" class="ct-white"><?php echo $this->lang->line("footer_form_privacy2"); ?></a></label>
						</div>
							
						<button><i class="icon icon-mail"></i> <span class="ct-light"><?php echo $this->lang->line("footer_form_button"); ?></span></button>
					</form>
				</div>
			</div>
			<!-- End Write Us -->
			
			
			
		</div>
	</div>
	<!-- End Footer -->
	
	<div class="c-darker">
		<div class="grid-container">
			<div class="grid-100">
				<p class="ct-light">All Rights Reserved &reg; | Copyright: Ragss Online Shop Store</p>
			</div>
		</div>
	</div>
	
</footer>

<script type="text/javascript">
	$("#contact").click(function() {
	    $('html, body').animate({
	        scrollTop: $("footer").offset().top
	    }, 2000);
	});
</script>



</div>
<!-- CLOSE SITE WRAPPER -->



<script type="text/javascript">
$(document).ready(function() {
  	
  	// AutoScrolls on Information Pages
  	$('.scrollTo').click( function() {
  		close_mobile_menu();
  		$goTo = $(this).attr('data-goto');
  		$.scrollTo('#' + $goTo, 500, {axis:'y', offset:-120});
  	});
  	
});
</script>


<?php 
$flashdata = $this->session->flashdata('message');
if (!empty($flashdata)) : ?>
	<script>
		alert('<?php echo trim(json_encode($flashdata),'"'); ?>');
	</script>
<?php endif; ?>
	  
</body>
</html>