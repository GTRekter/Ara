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
            Nuovo Sottocategoria
            <small>Sottocategoria</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('back/subcategories'); ?>">Sottocategorie</a></li>
            <li class="active">Nuova Sottocategoria</li>
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
                  <h3 class="box-title">Inserisci Nuova Sottocategoria</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?php echo site_url('back/c_subcategory'); ?>">
                  <input type="hidden" name="currentURL" value="<?php echo current_url(); ?>"  id="currentURL" />
                  <div class="box-body">
                  	<div class="form-group">
                  		<label>Categoria *</label>
                  	    <select class="form-control" id="idCategoryS" name="idCategoryS">
                  	    	<?php foreach ($categories as $category) : ?>
                  	    	<option value="<?php echo $category->idCategory; ?>"><?php echo ucwords($category->nameCategory); ?></option>
                  	    	<?php endforeach; ?>
                  	    </select>
                  	</div>
                  
                  	<div class="form-group">
                  	  <label for="name">Nome Sottocategoria Italiano*</label>
                  	  <input type="text" class="form-control" id="nameSubcategory" name="nameSubcategory" value="">
                  	</div>
                 
                 	<div class="form-group">
                 	  <label for="name">Nome Sottocategoria Inglese*</label>
                 	  <input type="text" class="form-control" id="nameSubcategory_en" name="nameSubcategory_en" value="">
                 	</div>
                 	<div class="form-group">
                 	  <label for="name">Nome Sottocategoria Spagnolo*</label>
                 	  <input type="text" class="form-control" id="nameSubcategory_es" name="nameSubcategory_es" value="">
                 	</div>
                 	<div class="form-group">
                 	  <label for="name">Nome Sottocategoria Francese*</label>
                 	  <input type="text" class="form-control" id="nameSubcategory_fr" name="nameSubcategory_fr" value="">
                 	</div>
                 	<div class="form-group">
                 	  <label for="name">Nome Sottocategoria Russo*</label>
                 	  <input type="text" class="form-control" id="nameSubcategory_ru" name="nameSubcategory_ru" value="">
                 	</div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Inserisci Sottocategoria</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->