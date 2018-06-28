<?php
$resources_path = $this->config->item('resources_url');
$resources_css = $resources_path . "/css";
$resources_js = $resources_path . "/js";
$resources_img = $resources_path . "/img";
?>

<!-- Section Title -->
<section class="first">
	<div class="grid-container">
		<div class="grid-100">
			<div class="section-title">
				<h3 class="ct-dark"><span class="ct-contrast">.</span> <?php echo $this->lang->line("products_title"); ?> <span class="ct-contrast">.</span></h3>
			</div>
		</div>
	</div>
</section>
<!-- End Section Title -->


<div class="grid-container">

<!-- Side Menu -->
<div class="grid-25 tablet-grid-30">
	<section>
		<div class="grid-100">
			<div class="sidebar">
				<!-- Sidebar Title -->
				<div class="grid-100 grid-parent">
					<h2 class="ct-dark"><?php echo $this->lang->line("products_side_first"); ?></h2>
				</div>
				
				<!-- Shopping Options -->
				<!--<div class="grid-100 grid-parent">
					<h3 class="ct-middle">Opzioni Shopping</h3>
				</div>-->
				
				
				<!-- Price -->
				<!--<div class="grid-100 grid-parent">
					<h4 class="ct-middle"><?php echo $this->lang->line("products_side_second"); ?></h4>
					<ul>
						<li class="ct-light">&euro;100.00 - &euro;109.99 <span class="ct-contrast">(4)</span></li>
						<li class="ct-light">&euro;120.00 in su <span class="ct-contrast">(2)</span></li>
					</ul>
				</div>-->
				
				<?php if ($brands) : ?>
				<!-- Manufacturer -->
				<div class="grid-100 grid-parent">
					<h4 class="ct-middle"><?php echo $this->lang->line("products_side_third"); ?></h4>
					<ul>
						<?php foreach ($brands as $brand) : ?>
						<li class="ct-light">
							<a href="<?php echo site_url('front/products' . '?' . 'brand=' .rawurlencode($brand->brand)); ?>"><?php echo ucwords($brand->brand); ?> 
							<span class="ct-contrast">(<?php for ($i = 0; $i < count($brand_products); $i++) {if ($brand_products[$i]->brand == $brand->brand ) {echo($brand_products[$i]->count);}}?>)</span></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<?php endif; ?>
				
				<div class="grid-100 grid-parent">
					<h2 class="ct-dark"><?php echo $this->lang->line("products_side_fourth"); ?></h2>
				</div>
				
				<?php if ($categories) : ?>
				<!-- Categories -->
				<div class="grid-100 grid-parent">
					<h4 class="ct-middle"><?php echo $this->lang->line("products_side_fifth"); ?></h4>
					<ul>
						<?php foreach ($categories as $category) : ?>
						<li class="ct-light category">
							<a href="#"><i class="icon icon-chevron-right ct-contrast"></i> 
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
							} ?>
							</a>
						</li>
						<ul class="subcategory">
							<?php foreach ($subcategories as $subcategory) : ?>
								<?php if ($subcategory->idCategoryS == $category->idCategory) : ?>
								<li class="ct-light">
									<a href="<?php echo site_url('front/products' . '?' . 'cat=' . $category->idCategory . '&' . 'subcat=' . $subcategory->idSubcategory); ?>">
									<?php
										switch ($this->session->userdata('site_lang')) {
											case 'italian':
												echo $subcategory->nameSubcategory;
											    break;
											case 'english':
											    echo $subcategory->nameSubcategory_en;
											    break;
											case 'espanol':
											    echo $subcategory->nameSubcategory_es;
											    break;
											case 'french':
											    echo $subcategory->nameSubcategory_fr;
											    break;
											case 'russian':
											    echo $subcategory->nameSubcategory_ru;
											    break;
									} ?>
									</a>
								</li>
								<?php endif; ?>
							<?php endforeach; ?>
						</ul>
						<?php endforeach; ?>
					</ul>
				</div>
				<?php endif; ?>
				
			</div>
		</div>
	</section>
</div>
<!-- End Side Menu -->

<!-- Products -->
<div class="grid-75 tablet-grid-70 grid-parent">
	<?php if ($products) : ?>
	<section>
		<div class="results">
				<!-- Products -->
				<div class="grid-95 push-5 tablet-grid-95 tablet-push-5">
					<?php foreach ($products as $product) : ?>
					<div class="grid-33 tablet-grid-50 mobile-grid-100">
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
				<!-- End Products -->
				
				<?php if ($pagination) : ?>
				<!-- Pagination -->
				<div class="grid-95 push-5 tablet-grid-100">
					<div class="grid-100 mobile-grid-parent tablet-grid-100">
						<div class="grid-100 mobile-grid-parent tablet-grid-100">
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
	</section>
	<?php else : ?>
	<section>
	<div class="results">
		<div class="grid-95 push-5 tablet-grid-95 tablet-push-5">
			<div class="ct-light news">
				<h3 class="ct-dark"><?php echo $this->lang->line("products_empty_title1"); ?></h3>
				<p><?php echo $this->lang->line("products_empty_text1"); ?></p>
					
				<h3 class="ct-dark"><?php echo $this->lang->line("products_empty_title2"); ?></h3>
				<p><?php echo $this->lang->line("products_empty_text2"); ?></p>
			</div>
		</div>
	</div>
	</section>
	<?php endif; ?>
</div>
<!-- End Products -->

</div>

<script type="text/javascript">
$(document).ready(function() {
    
    $('.sidebar ul li.category').click(function(event) {
    	event.preventDefault();
    	// remove active class from all
    	$('.sidebar .subcategory').removeClass('active');
    	// adding active to current
    	$(this).next().addClass('active');
    	
    	
    	// removing the classes
    	$('.sidebar ul li.category a i').removeClass('icon-chevron-right');
    	$('.sidebar ul li.category a i').removeClass('icon-chevron-down');
    	// adding the right to all others
    	$('.sidebar ul li.category a i').not(this).addClass('icon-chevron-right');
    	// adding the down to this
    	$(this).find('a i').addClass('icon-chevron-down');
    });
});
</script>