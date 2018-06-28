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
				<h3 class="ct-dark"><span class="ct-contrast">.</span> <?php echo $product->name; ?> <span class="ct-contrast">.</span></h3>
			</div>
		</div>
	</div>
</section>
<!-- End Section Title -->

<div class="grid-container">

<!-- Product -->
<div class="grid-75 tablet-grid-70 grid-parent">
	<!-- Product -->
	<section>
		<div class="grid-100 tablet-grid-100 mobile-grid-100">
			<div class="product">
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
				<div class="grid-40 tablet-grid-35">
					<img src="<?php echo $resources_img; ?>/product/<?php echo $product->cover; ?>" alt="" />
				</div>
				<!-- End Image -->
				
				<!-- Text -->
				<div class="grid-60 tablet-grid-65 mobile-grid-100 mobile-grid-parent">
					<!-- Details -->
					<div class="grid-95">
						<h4 class="ct-dark"><?php echo $product->name; ?></h4>
						<h5 class="ct-light"><?php echo nl2br($product->description); ?></h5>
					</div>
					<!-- End Details -->
				</div>
				<!-- End Text -->
			</div>
		</div>
		<div class="grid-100 tablet-grid-100 mobile-grid-100">
			<?php if($productImages) : ?>
			<div class="grid-40 tablet-grid-35">
				<?php foreach ($productImages as $image) : ?>
					<div class="grid-30 tablet-grid-30">
						<img src="<?php echo $resources_img; ?>/product/<?php echo $image->file; ?>" alt="" />
					</div>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>
	</section>
	<!-- End Product -->
</div>
<!-- End Product -->

<!-- Side Info -->
<div class="grid-25 tablet-grid-30">
	<section>
		<div class="grid-100">
			<div class="sidebar">
				<!-- Sidebar Title -->
				<div class="grid-100 grid-parent">
					<h2 class="ct-dark"><?php echo $this->lang->line("product_detail"); ?></h2>
				</div>
				
				<!-- Shopping Options -->
				<div class="grid-100 grid-parent">
					<h3 class="ct-middle"><?php echo $this->lang->line("product_product"); ?></h3>
				</div>
				<!-- Info -->
				<div class="grid-100 grid-parent">
					<h4 class="ct-middle"><?php echo $this->lang->line("product_info"); ?></h4>
					<ul>
						<?php if ($product->percentage) : ?>
						<li class="ct-light"><?php echo $this->lang->line("product_price"); ?>: 
							<span style="text-decoration: line-through;">&euro;<?php echo number_format($product->price, 2); ?></span> 
							<span class="ct-contrast">&euro;<?php echo number_format($product->price - (($product->price * $product->percentage)/100), 2); ?></span>
						</li>
						<?php else : ?>
						<li class="ct-light"><?php echo $this->lang->line("product_price"); ?>: <span class="ct-contrast">&euro;<?php echo number_format($product->price, 2); ?></span></li>
						<?php endif; ?>
						<li class="ct-light"><?php echo $this->lang->line("product_brand"); ?>: <span class="ct-contrast"><?php echo $product->brand; ?></span></li>
						<li class="ct-light"><?php echo $this->lang->line("product_category"); ?>:
							 <?php 
							 $categoryID = '';
							 $categoryName = '';
							 $subcategoryName = '';
							 
							 foreach ($subcategories as $subcategory) : ?>
							 	<?php if ($subcategory->idSubcategory == $product->idSubcategoryP) : ?>
							 		<?php
							 			$categoryID = $subcategory->idCategoryS;
							 		
							 			switch ($this->session->userdata('site_lang')) {
							 				case 'italian':
							 					$subcategoryName = $subcategory->nameSubcategory;
							 				    break;
							 				case 'english':
							 				    $subcategoryName = $subcategory->nameSubcategory_en;
							 				    break;
							 				case 'espanol':
							 				    $subcategoryName = $subcategory->nameSubcategory_es;
							 				    break;
							 				case 'french':
							 				    $subcategoryName = $subcategory->nameSubcategory_fr;
							 				    break;
							 				case 'russian':
							 				    $subcategoryName = $subcategory->nameSubcategory_ru;
							 				    break;
							 		} ?>
							 	<?php endif; ?>
							 <?php endforeach; ?>
							 
							 <?php foreach ($categories as $category) : ?>
							 	<?php if ($category->idCategory == $categoryID) : ?>
							 		<?php
							 			switch ($this->session->userdata('site_lang')) {
							 			    case 'italian':
							 			        $categoryName = $category->nameCategory;
							 			        break;
							 			    case 'english':
							 			        $categoryName = $category->nameCategory_en;
							 			        break;
							 			    case 'espanol':
							 			        $categoryName = $category->nameCategory_es;
							 			        break;
							 			    case 'french':
							 			        $categoryName = $category->nameCategory_fr;
							 			        break;
							 			    case 'russian':
							 			        $categoryName = $category->nameCategory_ru;
							 			        break;
							 			}
							 		?>
							 	<?php endif; ?>
							 <?php endforeach; ?>
							 
							 <span class="ct-contrast">
							 	<a href="<?php echo site_url('front/products' . '?' . 'cat=' . $categoryID); ?>"><?php echo $categoryName; ?></a>
							 </span>
							 <i class="icon icon-chevron-right"></i>
							 
							 <span class="ct-contrast">
								<a href="<?php echo site_url('front/products' . '?' . 'cat=' . $categoryID . '&' . 'subcat=' . $product->idSubcategoryP); ?>"><?php echo $subcategoryName; ?></a>
							</span>
						</li>
					</ul>
				</div>
				
				<!-- Price -->
				<div class="grid-100 grid-parent">
					<h4 class="ct-middle"><?php echo $this->lang->line("product_share"); ?></h4>
					<ul>
						<li class="ct-light">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" target="_blank" class="sh"><i class="social-facebook"></i></a>
							<a href="<?php echo str_replace(' ', '%20', 'http://twitter.com/share?text=' . ucwords($product->name) . '&amp;url=' . current_url() . '&amp;hashtags=moda,fashion,' . $categoryName . ',' . $subcategoryName . ',ragss'); ?>" target="_blank" class="sh"><i class="social-twitter"></i></a>
							<a ><i class="fa fa-twitter"></i></a>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
	</section>
</div>
<!-- End Side Info -->

</div>


<!-- Section Title -->
<section>
	<div class="grid-container">
		<div class="grid-100">
			<div class="section-title">
				<h3 class="ct-dark"><span class="ct-contrast">.</span> <?php echo $this->lang->line("product_similar"); ?> <span class="ct-contrast">.</span></h3>
			</div>
		</div>
	</div>
</section>
<!-- End Section Title -->
<!-- Related Products -->
<section>
	<div class="grid-container">
		<?php foreach ($related_products as $product) : ?>
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
<!-- End Related Products -->