<?php
$resources_path = $this->config->item('resources_url');
$resources_css = $resources_path . "/css";
$resources_js = $resources_path . "/js";
$resources_img = $resources_path . "/img";
?>

<div class="mobile-navigation">
	
	<div class="mobile-grid-65 mobile-push-30 grid-parent">
		<header>
			<a href="<?php echo site_url(); ?>">
				<!--<p>Rag<span class="ct-contrast">ss</span><br /><span>Outlet Store</span></p>-->
				<p>
					<img style="width: 120px; padding-top: 6px;padding-bottom: 12px;" src="<?php echo $resources_img ?>/logowhite.png">
				</p>
				
			</a>
		</header>
	</div>
	<div class="mobile-grid-75 mobile-push-25 grid-parent">
		<ul class="menu" id="menu-mobile">
			<?php foreach ($categories as $category) : ?>
			<li class="<?php if ($category->idCategory == $this->input->get('cat')) { echo 'ct-contrast'; } else { echo 'ct-light'; } ?>">
				<a href="<?php echo site_url('front/products' . '?' . 'cat=' . $category->idCategory); ?>">
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
			<!--<li class="<?php if ($page == 'showroom') { echo 'selected'; } ?>">
				<a href="<?php echo site_url('piaggiomilano/showroom'); ?>"><i class="fa fa-motorcycle"></i> Showroom</a>
			</li>-->
		</ul>
	</div>
</div>



<!-- OPEN SITE WRAPPER -->
<div class="site-wrap">



<!-- Top Menu Fixed White -->
<div class="top-wrapper-fixed">
	
	<!-- Top -->
	<div class="c-white-transparent">
	<div class="grid-container">
		<div class="grid-100 tablet-grid-100 mobile-grid-100">
			
			<!-- Header -->
			<div class="grid-20 tablet-grid-30 grid-parent mobile-grid-40">
			
				<div class="grid-100 grid-parent mobile-grid-90">
				<header>
					<a href="<?php echo site_url(); ?>">
						<!--<p>Rag<span class="ct-contrast">ss</span><br /><span>Outlet Store</span></p>-->
						<img style="width: 130px; padding-top: 6px;" src="<?php echo $resources_img ?>/logo.png">
					</a>
				</header>
				</div>
				
			</div>
			<!-- End Header -->
			
			<!-- Search -->
			<div class="grid-60 tablet-grid-45 mobile-grid-55 mobile-push-5 grid-parent">
				<form method="get" action="<?php echo site_url('front/products'); ?>">
					<div class="grid-90 grid-parent tablet-grid-80 mobile-grid-80">
						<input type="text" name="search" value="" id="search" placeholder="<?php echo $this->lang->line("nav_search"); ?>..." />
					</div>
					<div class="grid-10 grid-parent tablet-grid-20 mobile-grid-20">
						<button type="submit" class="c-main">
							<i class="icon icon-search"></i>
						</button>
					</div>
				</form>
			</div>
			<!-- End Search -->
			
			<!-- Language Selection -->
			<div class="grid-15 push-5 tablet-grid-20 tablet-push-5 grid-parent hide-on-mobile">
			
				<div class="grid-100 grid-parent mobile-grid-100">
					<ul id="lang_nav">
						<li class="<?php if ($this->session->userdata('site_lang') == 'italian') { echo 'ct-contrast'; } else { echo 'ct-light'; } ?>">
							<a href="<?php echo site_url('front/switchLanguage' . '/' . 'italian' . '?currentURL=' . rawurlencode(current_full_url())); ?>">IT</a>
						</li>
						<li class="<?php if ($this->session->userdata('site_lang') == 'english') { echo 'ct-contrast'; } else { echo 'ct-light'; } ?>">
							<a href="<?php echo site_url('front/switchLanguage' . '/' . 'english' . '?currentURL=' . rawurlencode(current_full_url())); ?>">EN</a>
						</li>
						<li class="<?php if ($this->session->userdata('site_lang') == 'french') { echo 'ct-contrast'; } else { echo 'ct-light'; } ?>">
							<a href="<?php echo site_url('front/switchLanguage' . '/' . 'french' . '?currentURL=' . rawurlencode(current_full_url())); ?>">FR</a>
						</li>
						<li class="<?php if ($this->session->userdata('site_lang') == 'espanol') { echo 'ct-contrast'; } else { echo 'ct-light'; } ?>">
							<a href="<?php echo site_url('front/switchLanguage' . '/' . 'espanol' . '?currentURL=' . rawurlencode(current_full_url())); ?>">ES</a>
						</li>
						<li class="<?php if ($this->session->userdata('site_lang') == 'russian') { echo 'ct-contrast'; } else { echo 'ct-light'; } ?>">
							<a href="<?php echo site_url('front/switchLanguage' . '/' . 'russian' . '?currentURL=' . rawurlencode(current_full_url())); ?>">RU</a>
						</li>
					</ul>
				</div>
				
			</div>
			<!-- End Language Selection -->
			
		</div>
	</div>
	</div>
	
	<!-- Bottom -->
	<div class="c-dark-transparent ">
		<div class="grid-container">
			<div class="grid-100 tablet-grid-100 mobile-grid-100">
				<!-- Menu -->
				<nav>
					<ul class="menu hide-on-mobile">
						<?php foreach ($categories as $category) : ?>
						<li class="<?php if ($category->idCategory == $this->input->get('cat')) { echo 'ct-contrast'; } else { echo 'ct-light'; } ?>">
							<a href="<?php echo site_url('front/products' . '?' . 'cat=' . $category->idCategory); ?>">
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
							<ul class="fallback c-dark-transparent">
								<?php foreach ($subcategories as $subcategory) : ?>
									<?php if ($subcategory->idCategoryS == $category->idCategory) : ?>
									<li class="ct-white">
										<a href="<?php echo site_url('front/products' . '?' . 'cat=' . $category->idCategory . '&' . 'subcat=' . $subcategory->idSubcategory); ?>"><i class="icon icon-chevron-right ct-contrast"></i>
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
						</li>
						<?php endforeach; ?>
						<li class="<?php if ($page == 'blog') { echo 'ct-contrast'; } else { echo 'ct-light'; } ?>">
							<a href="<?php echo site_url('front/blog'); ?>"><?php echo $this->lang->line("nav_news"); ?></a>
						</li>
						<li class="<?php if ($page == 'about') { echo 'ct-contrast'; } else { echo 'ct-light'; } ?>">
							<a href="<?php echo site_url('front/about'); ?>"><?php echo $this->lang->line("nav_about"); ?></a>
						</li>
						
						<li class="ct-light">
							<a class="scrollTo" data-goto="footer-contacts"><?php echo $this->lang->line("nav_contacts"); ?></a>
						</li>
					</ul>
					
					<ul class="menu hide-on-tablet hide-on-desktop">
						<li class="<?php if ($page == 'blog') { echo 'ct-contrast'; } else { echo 'ct-light'; } ?>">
							<a href="<?php echo site_url('front/blog'); ?>"><?php echo $this->lang->line("nav_news"); ?></a>
						</li>
						<li class="<?php if ($page == 'about') { echo 'ct-contrast'; } else { echo 'ct-light'; } ?>">
							<a href="<?php echo site_url('front/about'); ?>"><?php echo $this->lang->line("nav_about"); ?></a>
						</li>
						
						<li class="ct-light">
							<a class="scrollTo" data-goto="footer-contacts"><?php echo $this->lang->line("nav_contacts"); ?></a>
						</li>
						
						<li class="ct-light">
							<a href="#" class="mobile-menu-button"><i class="icon icon-menu"></i></a>
						</li>
					</ul>
				</nav>
				<!-- End Menu -->
			</div>
		</div>
	</div>
</div>
<!-- End Top Menu Fixed White -->
