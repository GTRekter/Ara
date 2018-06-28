<?php
$resources_path = $this->config->item('resources_url');
$resources_css = $resources_path . "/css";
$resources_js = $resources_path . "/js";
$resources_img = $resources_path . "/img";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ragss | Amministrazione</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo $resources_path ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="<?php echo $resources_path ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo $resources_path ?>/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo $resources_path ?>/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo $resources_path ?>/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo $resources_path ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo $resources_path ?>/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo $resources_path ?>/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo $resources_path ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">