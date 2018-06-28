<?php
$resources_path = $this->config->item('resources_url');
$resources_css = $resources_path . "/css";
$resources_js = $resources_path . "/js";
$resources_img = $resources_path . "/img";
?>

<?php 
	$split = array('Uomo', 'Donna');
?>


<!-- Section Title -->
<section class="first">
	<div class="grid-container">
		<div class="grid-100">
			<div class="section-title">
				<h3 class="ct-dark"><span class="ct-contrast">.</span> <?php echo $this->lang->line("privacy"); ?> <span class="ct-contrast">.</span></h3>
			</div>
		</div>
	</div>
</section>
<!-- End Section Title -->

<section>
	<div class="grid-container">
		<div class="grid-80 push-10">
			
			<div class="news">
				<div class="ct-light">
					<?php echo $this->lang->line("privacy_policy"); ?>
				</div>
			</div>
		</div>
	</div>
</section>