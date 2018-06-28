<?php
$resources_path = $this->config->item('resources_url');
$resources_css = $resources_path . "/css";
$resources_js = $resources_path . "/js";
$resources_img = $resources_path . "/img";
?>
<!DOCTYPE html>
<!--[if IE 7]><html lang="it" class="ie7"><![endif]-->
<!--[if IE 8]><html lang="it" class="ie8"><![endif]-->
<!--[if IE 9]><html lang="it" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><html lang="en"><![endif]-->
<!--[if !IE]><html lang="it-IT"><![endif]-->
<head>
	<title>Ragss</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="author" content="Ragss" />
	<meta
	  name="viewport"
	  content="
	    width=device-width,
	    initial-scale=1,
	    minimum-scale=1,
	    maximum-scale=1
	  "
	/>
	
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Link to GoogleFonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<!-- End Link to GoogleFonts -->
	
	
	<!-- CSS BLOCK -->
	<!-- Dripicons Font -->
	<link href="<?php echo $resources_css; ?>/webfont.css" type="text/css" rel="stylesheet">
	<!-- End Dripicons Font -->
	<!-- Dripicons Font -->
	<link href="<?php echo $resources_css; ?>/simple-line-icons.css" type="text/css" rel="stylesheet">
	<!-- End Dripicons Font -->
	
	<!-- General CSS -->
	<link href="<?php echo $resources_css; ?>/reset-min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $resources_css; ?>/unsemantic-grid-responsive-tablet.css" type="text/css" rel="stylesheet">
	<!-- End General CSS -->
	
	<!-- General Style -->
	<link href="<?php echo $resources_css; ?>/general.css" type="text/css" rel="stylesheet">
	<!-- End General Style -->
	<!-- END CSS BLOCK -->
	
	
	<!-- JS BLOCK -->
	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<!-- End jQuery -->
	
	<!-- Mobile Menu -->
	<script src="<?php echo $resources_js; ?>/menu.js"></script>
	<!-- End Mobile Menu -->
	
	<!-- Placeholders JS for IE -->
	<script src="<?php echo $resources_js; ?>/jquery.placeholder.min.js"></script>
	<!-- End Placeholders JS for IE -->
	
	<!-- Scroll To -->
	<script src="<?php echo $resources_js; ?>/jquery.scrollTo-1.4.3.1-min.js"></script>
	<!-- End Scroll To -->
	<!-- END JS BLOCK -->
	
	
	<!-- Cool Timeline -->
	<link href="<?php echo $resources_css; ?>/timeline.css" rel="stylesheet" > <!-- Resource style -->
	<script src="<?php echo $resources_js; ?>/timeline.js"></script> <!-- Resource jQuery -->
	<script src="<?php echo $resources_js; ?>/modernizr.js"></script>
	<!-- End Cool Timeline -->
	
	
	<?php if ($page == 'product') : ?>
	<!-- Facebook Open Graph -->
		<meta property="og:site_name" content="Ragss Outlet Fashion Store"/>
		<meta property="og:title" content="<?php echo $product->name; ?>" />
		<meta property="og:description" content="<?php echo $product->description; ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="<?php echo site_url('front/product/' . $product->idProduct); ?>" />
		<meta property="og:image" content="<?php echo $resources_img; ?>/product/<?php echo rawurlencode($product->cover); ?>" />
	<!-- End Facebook Open Graph -->
	<?php elseif ($page == 'post') : ?>
	<!-- Facebook Open Graph -->
		<meta property="og:site_name" content="Ragss Outlet Fashion Store"/>
		<meta property="og:title" content="<?php echo $news->title; ?>" />
		<meta property="og:description" content="<?php echo $news->text; ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="<?php echo site_url('front/post/' . $news->idNews); ?>" />
		<meta property="og:image" content="<?php echo $resources_img; ?>/news/<?php echo rawurlencode($news->cover); ?>" />
	<!-- End Facebook Open Graph -->
	<?php else : ?>
	<!-- Facebook Open Graph -->
		<meta property="og:site_name" content="Ragss Outlet Fashion Store"/>
		<meta property="og:title" content="Ragss Outlet - Fashion Store" />
		<meta property="og:description" content="Ragss Outlet: catena di negozi di abbigliamento ed alta moda" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="<?php echo current_full_url(); ?>" />
		<meta property="og:image" content="<?php echo $resources_img; ?>" />
	<!-- End Facebook Open Graph -->
	<?php endif; ?>
	
</head>
<body>