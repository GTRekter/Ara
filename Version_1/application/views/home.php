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
	<img src="<?php echo $resources_img; ?>/home/slide7.jpg" alt="" />
</section>

<?php if ($products) : ?>
<!-- Section Title -->
<section>
	<div class="grid-container">
		<div class="grid-100">
			<div class="section-title">
				<h3 class="ct-dark"><span class="ct-contrast">.</span> <?php echo $this->lang->line("home_new"); ?> <span class="ct-contrast">.</span></h3>
			</div>
		</div>
	</div>
</section>
<!-- End Section Title -->

<!-- New Products -->
<section>
	<div class="grid-container">
		<?php foreach ($products as $product) : ?>
			<div class="grid-25 tablet-grid-50 mobile-grid-100">
				<div class="product-card">
					<?php if ($product->percentage) : ?>
					<!-- Discount -->
					<div class="discount">
						<div class="body">
							<span></span><br />-<?php echo $product->percentage; ?>%
						</div>
						<div class="right"></div>
						<div class="left"></div>
					</div>
					<!-- End Discount -->
					<?php endif; ?>
					
					<!-- Image -->
					<div class="grid-100">
						<img src="<?php echo $resources_img; ?>/product/<?php echo $product->cover; ?>" alt="" />
					</div>
					<!-- End Image -->
					
					<!-- Details -->
					<div class="grid-100">
						<p>€ <?php echo number_format($product->price, 2); ?></p>
						<h4 class="ct-dark"><?php echo $product->name; ?></h4>
						<h5 class="ct-light"><?php echo substr($product->description, 0, 72) . '...'; ?></h5>
					</div>
					<!-- End Details -->
					
					<!-- Buttons -->
					<div class="grid-100">
						<!-- Add to Cart -->
						<div class="grid-100">
							<a href="<?php echo site_url('front/product' . '/' . $product->idProduct); ?>" class="ct-main"><i class="icon icon-plus"></i> <?php echo $this->lang->line("more_info"); ?></a>
						</div>
						<!-- End Add to Cart -->
					</div>
					<!-- End Buttons -->
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
<!-- End New Products -->

<section>
	<div class="grid-container">
		<div class="grid-100">
			<div class="sc-link">
				<a href="<?php echo site_url('front/products'); ?>" class="ct-middle"><i class="icon icon-chevron-right"></i> <?php echo $this->lang->line("home_all_outlet"); ?></a>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<!-- Full Split -->
<section>
	<div class="grid-100 grid-parent">
		<?php for ($i = 0; $i < 2; $i++) : ?>
		<div class="grid-50 tablet-grid-50 mobile-grid-100 grid-parent">
			<div class="split">
				<img src="<?php echo $resources_img; ?>/home/split<?php echo $i; ?>.jpg" alt="" />
				
				<!-- Content -->
				<div class="content">
					<div class="c-main"></div>
					<p class="ct-dark"><?php
						switch ($this->session->userdata('site_lang')) {
							case 'italian':
								echo $categories[$i]->nameCategory;
							    break;
							case 'english':
							    echo $categories[$i]->nameCategory_en;
							    break;
							case 'espanol':
							    echo $categories[$i]->nameCategory_es;
							    break;
							case 'french':
							    echo $categories[$i]->nameCategory_fr;
							    break;
							case 'russian':
							    echo $categories[$i]->nameCategory_ru;
							    break;
					} ?><br />
					<span class="ct-contrast">
					<? $listSubCategories = array(); foreach ($subcategories as $subcategory) {if ($subcategory->idCategoryS == $categories[$i]->idCategory) {array_push($listSubCategories, $subcategory);}} 
						switch ($this->session->userdata('site_lang')) {
							case 'italian':
								echo $listSubCategories[$i]->nameSubcategory;
							    break;
							case 'english':
							    echo $listSubCategories[$i]->nameSubcategory_en;
							    break;
							case 'espanol':
							    echo $listSubCategories[$i]->nameSubcategory_es;
							    break;
							case 'french':
							    echo $listSubCategories[$i]->nameSubcategory_fr;
							    break;
							case 'russian':
							    echo $listSubCategories[$i]->nameSubcategory_ru;
							    break;
					}?>
					</span></p>
					<a href="<?php echo site_url('front/products' . '?' . 'cat=' . $categories[$i]->idCategory . '&' . 'subcat=' . $listSubCategories[$i]->idSubcategory); ?>" class="ct-light"><i class="icon icon-chevron-right"></i> 
					<?php echo $this->lang->line("home_split_all"); ?>!</a>	
				</div>
				<!-- End Content -->
				
			</div>
		</div>
		<?php endfor; ?>
	</div>
</section>
<!-- End Full Split -->


<?php if ($news) : ?>
<!-- Section Title -->
<section>
	<div class="grid-container">
		<div class="grid-100">
			<div class="section-title">
				<h3 class="ct-dark"><span class="ct-contrast">.</span> <?php echo $this->lang->line("home_news"); ?> <span class="ct-contrast">.</span></h3>
			</div>
		</div>
	</div>
</section>
<!-- End Section Title -->

<!-- News -->
<section>
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
	</div>
</section>
<!-- End News -->

<section>
	<div class="grid-container">
		<div class="grid-100">
			<div class="sc-link">
				<a href="<?php echo site_url('front/blog'); ?>" class="ct-middle"><i class="icon icon-chevron-right"></i> <?php echo $this->lang->line("home_news_all_news"); ?></a>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>