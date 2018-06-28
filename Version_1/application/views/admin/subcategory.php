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
            <?php echo ucwords($subcategory->nameSubcategory); ?>
            <small>Sottocategoria</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('back/subcategories'); ?>">Sottocategorie</a></li>
            <li class="active"><?php echo ucwords($subcategory->nameSubcategory); ?></li>
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
                  <h3 class="box-title">Modifica Sottocategoria</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?php echo site_url('back/u_subcategory'); ?>">
                  <input type="hidden" name="idSubcategory" value="<?php echo $subcategory->idSubcategory; ?>" id="idCategory" />
                  <input type="hidden" name="currentURL" value="<?php echo current_url(); ?>"  id="currentURL" />
                  <div class="box-body">
                  	
                  	<div class="form-group">
                  		<label>Categoria *</label>
                  	    <select class="form-control" id="idCategoryS" name="idCategoryS">
                  	    	<?php foreach ($categories as $category) : ?>
                  	    	<option value="<?php echo $category->idCategory; ?>" <?php if ($subcategory->idCategoryS == $category->idCategory) { echo "selected='selected'"; } ?>><?php echo ucwords($category->nameCategory); ?></option>
                  	    	<?php endforeach; ?>
                  	    </select>
                  	</div>

                  	<div class="form-group">
                  	  <label for="nameCategory">Nome Sottocategoria *</label>
                  	  <input type="text" class="form-control" id="nameSubcategory" name="nameSubcategory" value="<?php echo $subcategory->nameSubcategory; ?>">
                  	</div>
                  
                  	<div class="form-group">
                  	  <label for="name">Nome Sottocategoria Inglese*</label>
                  	  <input type="text" class="form-control" id="nameSubcategory_en" name="nameSubcategory_en" value="<?php echo $subcategory->nameSubcategory_en; ?>">
                  	</div>
                  	<div class="form-group">
                  	  <label for="name">Nome Sottocategoria Spagnolo*</label>
                  	  <input type="text" class="form-control" id="nameSubcategory_es" name="nameSubcategory_es" value="<?php echo $subcategory->nameSubcategory_es; ?>">
                  	</div>
                  	<div class="form-group">
                  	  <label for="name">Nome Sottocategoria Francese*</label>
                  	  <input type="text" class="form-control" id="nameSubcategory_fr" name="nameSubcategory_fr" value="<?php echo $subcategory->nameSubcategory_fr; ?>">
                  	</div>
                  	<div class="form-group">
                  	  <label for="name">Nome Sottocategoria Russo*</label>
                  	  <input type="text" class="form-control" id="nameSubcategory_ru" name="nameSubcategory_ru" value="<?php echo $subcategory->nameSubcategory_ru; ?>">
                  	</div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Salva Sottocategoria</button>
                    <a href="<?php echo site_url('back/d_subcategory'. '/' . $subcategory->idSubcategory); ?>" class="btn btn-primary confirm-delete-subcategory">Cancella Sottocategoria</a>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->