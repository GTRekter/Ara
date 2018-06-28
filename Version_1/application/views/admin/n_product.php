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
            Nuovo Prodotto
            <small>Prodotto</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('back/products'); ?>">Prodotti</a></li>
            <li class="active">Nuovo Prodotto</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Inserisci Nuovo Prodotto</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url('back/c_product'); ?>">
                  <input type="hidden" name="currentURL" value="<?php echo current_url(); ?>"  id="currentURL" />
                  <div class="box-body">
                  	<div class="form-group">
                  	  <label for="name">Marca *</label>
                  	  <input type="text" class="form-control" id="brand" name="brand" value="">
                  	</div>
                    <div class="form-group">
                      <label for="name">Nome *</label>
                      <input type="text" class="form-control" id="name" name="name" value="">
                    </div>
                    
                    <div class="form-group">
                    	<label>Categoria *</label>
                        <select class="form-control" id="idSubcategoryP" name="idSubcategoryP">
                        	<?php foreach ($categories as $category) : ?>
                        	<optgroup label="<?php echo ucwords($category->nameCategory); ?>">
                        		<?php foreach ($subcategories as $subcategory) : ?>
                        			<?php if ($subcategory->idCategoryS == $category->idCategory) : ?>
                        			<option value="<?php echo $subcategory->idSubcategory; ?>"><?php echo ucwords($subcategory->nameSubcategory); ?></option>
                        			<?php endif; ?>
                        		<?php endforeach; ?>
                        	</optgroup>
                        	<?php endforeach; ?>
                        </select>
					</div>
                    
                    <div class="form-group">
                      <label for="price">Prezzo *</label>
                      <input type="text" class="form-control" id="price" name="price" value="">
                    </div>
                    <div class="form-group">
                      <label for="description">Descrizione *</label>
                      <textarea id="description" name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="cover">Immagine Cover *</label>
                      <input type="file" id="cover" name="cover">
                      <p class="help-block">Formato richiesto JPEG</p>
                    </div>
                    <div class="form-group">
                      <label>Sospendi Prodotto</label><br />
                      <input type="checkbox" id="suspended" name="suspended"> <label for="suspended" style="font-weight: normal;"> Sospeso</label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Inserisci Prodotto</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- left column -->
            
            
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->