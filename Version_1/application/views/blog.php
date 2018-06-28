<?php
$resources_path = $this->config->item('resources_url');
$resources_css = $resources_path . "/css";
$resources_js = $resources_path . "/js";
$resources_img = $resources_path . "/img";
?>

<!-- Section Title -->
<section class="first">
	<div class="grid-container">
		<div class="grid-80 push-20">
			<div class="section-title">
				<h3 class="ct-dark"><span class="ct-contrast">.</span> <?php echo $this->lang->line("blog_title"); ?> <span class="ct-contrast">.</span></h3>
			</div>
		</div>
	</div>
</section>
<!-- End Section Title -->

<div class="grid-container">

<!-- Side Menu -->
<div class="grid-20 tablet-grid-30">
		<div class="grid-100">
			<div class="sidebar">
				<!-- Sidebar Title -->
				<div class="grid-100 grid-parent">
					<h2 class="ct-dark"><?php echo $this->lang->line("blog_side_first"); ?></h2>
				</div>
				
				<!-- Shopping Options -->
				<!--<div class="grid-100 grid-parent">
					<h3 class="ct-middle">Opzioni Shopping</h3>
				</div>-->
				<?php if ($years) : ?>
				<!-- Years -->
				<div class="grid-100 grid-parent">
					<h4 class="ct-middle"><?php echo $this->lang->line("blog_side_second"); ?></h4>
					<ul>
						<?php foreach ($years as $year) : ?>
						<li class="ct-light">
							<a href="<?php echo site_url('front/blog' . '?' . 'y=' . $year->year) ?>"><?php echo $year->year; ?></a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<?php endif; ?>
				
			</div>
		</div>
</div>
<!-- End Side Menu -->

<!-- Products -->
<div class="grid-80 tablet-grid-70 grid-parent">
	<?php if ($news) : ?>
<div class="results">
	<!-- News -->
	<div class="grid-container">
			<div class="grid-100">
				
				<section id="cd-timeline" class="cd-container">
					<?php foreach ($news as $single_news) : ?>
						<div class="cd-timeline-block">
							<div class="cd-timeline-img cd-picture">
								
							</div> <!-- cd-timeline-img -->
				
							<div class="cd-timeline-content">
								<div class="grid-100 grid-parent">
									<img src="<?php echo $resources_img; ?>/news/<?php echo $single_news->cover; ?>" alt="" style="margin-bottom: 18px;"/>
								</div>
								<h2 class="ct-dark"><?php echo $single_news->title; ?></h2>
								<p class="ct-light"><?php echo substr($single_news->text, 0, 150) . '...'; ?></p>
								<a href="<?php echo site_url('front/post' . '/' . $single_news->idNews); ?>" class="ct-main cd-read-more"><i class="icon icon-plus"></i> <?php echo $this->lang->line("read_more"); ?></a>
								<span class="ct-light cd-date"><?php echo date("M j Y", strtotime($single_news->createdOn)); ?></span>
							</div> <!-- cd-timeline-content -->
						</div> <!-- cd-timeline-block -->
					<?php endforeach; ?>
				</section> <!-- cd-timeline -->
			
			</div>
			
			<?php if ($pagination) : ?>
			<!-- Pagination -->
			<div class="grid-100">
				<div class="grid-100 mobile-grid-parent">
					<div class="grid-100 mobile-grid-parent">
						<div id="pagination" class="ct-middle">
							<p class="ct-dark"><?php echo $this->lang->line("navigate"); ?></p>
							<br />
							<?php echo $this->pagination->create_links(); ?>
						</div>
					</div>
				</div>
			</div>
			<!-- End Pagination -->
			<?php endif; ?>
	</div>
	<!-- End News -->
</div>
	<?php endif; ?>
</div>
<!-- End Products -->

</div>