<?php
$resources_path = $this->config->item('resources_url');
$resources_css = $resources_path . "/css";
$resources_js = $resources_path . "/js";
$resources_img = $resources_path . "/img";
?> 

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo ucwords($category->nameCategory); ?>
            <small>Categoria</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('back/categories'); ?>">Categorie</a></li>
            <li class="active"><?php echo ucwords($category->nameCategory); ?></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Modifica Categoria</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?php echo site_url('back/u_category'); ?>">
                  <input type="hidden" name="idCategory" value="<?php echo $category->idCategory; ?>" id="idCategory" />
                  <input type="hidden" name="currentURL" value="<?php echo current_url(); ?>"  id="currentURL" />
                  <div class="box-body">

	<div class="form-group">
	  <label for="name">Nome Categoria Italiano*</label>
	  <input type="text" class="form-control" id="nameCategory" name="nameCategory" value="<?php echo $category->nameCategory; ?>">
	</div>
	<div class="form-group">
	  <label for="nameCategory">Nome Categoria Inglese*</label>
	  <input type="text" class="form-control" id="nameCategory_en" name="nameCategory_en" value="<?php echo $category->nameCategory_en; ?>">
	</div>
	<div class="form-group">
	  <label for="nameCategory">Nome Categoria Spagnolo*</label>
	  <input type="text" class="form-control" id="nameCategory_es" name="nameCategory_es" value="<?php echo $category->nameCategory_es; ?>">
	</div>
	<div class="form-group">
	  <label for="nameCategory">Nome Categoria Francese*</label>
	  <input type="text" class="form-control" id="nameCategory_fr" name="nameCategory_fr" value="<?php echo $category->nameCategory_fr; ?>">
	</div>
	<div class="form-group">
	  <label for="nameCategory">Nome Categoria Russo*</label>
	  <input type="text" class="form-control" id="nameCategory_ru" name="nameCategory_ru" value="<?php echo $category->nameCategory_ru; ?>">
	</div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Salva Categoria</button>
                    <a href="<?php echo site_url('back/d_category'. '/' . $category->idCategory); ?>" class="btn btn-primary confirm-delete-category">Cancella Categoria</a>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->