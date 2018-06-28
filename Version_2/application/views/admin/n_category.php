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
            Nuovo Categoria
            <small>Categoria</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('back/categories'); ?>">Categorie</a></li>
            <li class="active">Nuova Categoria</li>
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
                  <h3 class="box-title">Inserisci Nuova Categoria</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?php echo site_url('back/c_category'); ?>">
                  <input type="hidden" name="currentURL" value="<?php echo current_url(); ?>"  id="currentURL" />
                  <div class="box-body">
                  	<div class="form-group">
                  	  <label for="name">Nome Categoria Italiano*</label>
                  	  <input type="text" class="form-control" id="nameCategory" name="nameCategory" value="">
                  	</div>
                  	<div class="form-group">
                  	  <label for="nameCategory">Nome Categoria Inglese*</label>
                  	  <input type="text" class="form-control" id="nameCategory_en" name="nameCategory_en" value="">
                  	</div>
                  	<div class="form-group">
                  	  <label for="nameCategory">Nome Categoria Spagnolo*</label>
                  	  <input type="text" class="form-control" id="nameCategory_es" name="nameCategory_es" value="">
                  	</div>
                  	<div class="form-group">
                  	  <label for="nameCategory">Nome Categoria Francese*</label>
                  	  <input type="text" class="form-control" id="nameCategory_fr" name="nameCategory_fr" value="">
                  	</div>
                  	<div class="form-group">
                  	  <label for="nameCategory">Nome Categoria Russo*</label>
                  	  <input type="text" class="form-control" id="nameCategory_ru" name="nameCategory_ru" value="">
                  	</div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Inserisci Categoria</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->