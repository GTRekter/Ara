<?php
$resources_path = $this->config->item('resources_url');
$resources_css = $resources_path . "/css";
$resources_js = $resources_path . "/js";
$resources_img = $resources_path . "/img";
?>

<?php 
	$split = array('Uomo', 'Donna');
?>

<section class="hero">
	<img src="<?php echo $resources_img; ?>/news/<?php echo $news->cover; ?>" alt="" />
</section>

<!-- Section Title -->
<section>
	<div class="grid-container">
		<div class="grid-100">
			<div class="section-title">
				<h3 class="ct-dark"><span class="ct-contrast">.</span> <?php echo $news->title; ?> <span class="ct-contrast">.</span></h3>
			</div>
		</div>
	</div>
</section>
<!-- End Section Title -->

<section>
	<div class="grid-container">
		<div class="grid-80 push-10">
			<ul style="text-align: center; margin-bottom: 31px; margin-top: -31px;">
				<li class="ct-light">
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" target="_blank" class="sh"><i class="social-facebook"></i></a>
					<a href="<?php echo str_replace(' ', '%20', 'http://twitter.com/share?text=' . ucwords($news->title) . '&amp;url=' . current_url() . '&amp;hashtags=moda,fashion,ragss'); ?>" target="_blank" class="sh"><i class="social-twitter"></i></a>
					<a ><i class="fa fa-twitter"></i></a>
				</li>
			</ul>
		</div>
		<div class="grid-80 push-10">
			<div class="news">
				<p class="ct-light"><?php echo nl2br($news->text); ?></p>
			</div>
		</div>
	</div>
</section>