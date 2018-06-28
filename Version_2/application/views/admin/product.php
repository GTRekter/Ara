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
            <?php echo $product->name; ?>
            <small>Prodotto</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('back/products'); ?>">Prodotti</a></li>
            <li class="active"><?php echo $product->name; ?></li>
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
                  <h3 class="box-title">Modifica Prodotto</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url('back/u_product'); ?>">
                  <input type="hidden" name="idProduct" value="<?php echo $product->idProduct; ?>" id="idProduct" />
                  <input type="hidden" name="currentURL" value="<?php echo current_url(); ?>"  id="currentURL" />
                  <div class="box-body">
                  	<div class="form-group">
                  	  <label for="name">Immagine Cover Attuale</label>
                  	  <div class="col-md-12" style="margin-bottom: 16px;">
                  	  <img src="<?php echo $resources_img; ?>/product/<?php echo $product->cover; ?>" alt="" width="100px"/>
                  	  </div>
                  	</div>
                  	<div class="form-group">
                  	  <label for="name">Marca *</label>
                  	  <input type="text" class="form-control" id="brand" name="brand" value="<?php echo $product->brand; ?>">
                  	</div>
                    <div class="form-group">
                      <label for="name">Nome *</label>
                      <input type="text" class="form-control" id="name" name="name" value="<?php echo $product->name; ?>">
                    </div>
                    
                    <div class="form-group">
                    	<label>Categoria *</label>
                        <select class="form-control" id="idSubcategoryP" name="idSubcategoryP">
                        	<?php foreach ($categories as $category) : ?>
                        	<optgroup label="<?php echo ucwords($category->nameCategory); ?>">
                        		<?php foreach ($subcategories as $subcategory) : ?>
                        			<?php if ($subcategory->idCategoryS == $category->idCategory) : ?>
                        			<option value="<?php echo $subcategory->idSubcategory; ?>" <?php if ($product->idSubcategoryP == $subcategory->idSubcategory) { echo 'selected="selected"'; } ?>><?php echo ucwords($subcategory->nameSubcategory); ?></option>
                        			<?php endif; ?>
                        		<?php endforeach; ?>
                        	</optgroup>
                        	<?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                      <label for="price">Prezzo *</label>
                      <input type="text" class="form-control" id="price" name="price" value="<?php echo $product->price; ?>">
                    </div>
                    <div class="form-group">
                      <label for="description">Descrizione *</label>
                      <textarea id="description" name="description" class="form-control"><?php echo $product->description; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="cover">Cambia Immagine Cover</label>
                      <input type="file" id="cover" name="cover">
                      <p class="help-block">Formato richiesto JPEG</p>
                    </div>
                    <div class="form-group">
                      <label>Sospendi Prodotto</label><br />
                      <input type="checkbox" <?php if ($product->suspended == 1) { echo "checked='checked'"; } ?> id="suspended" name="suspended" value="1"> <label for="suspended" style="font-weight: normal;"> Sospeso</label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Salva Prodotto</button>
                    <a href="<?php echo site_url('back/d_product'. '/' . $product->idProduct); ?>" class="btn btn-primary confirm-delete-product">Cancella Prodotto</a>
                  </div>
                </form>
              </div><!-- /.box -->
            </div>
            
			<!-- Offerta -->
			 <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Offerta / Sconto</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="<?php if ($product->percentage == 0 || $product->percentage == '') { echo site_url('back/c_discount'); } else { echo site_url('back/u_discount'); } ; ?>">
                  <input type="hidden" name="currentURL" id="currentURL" value="<?php echo current_url(); ?>" />
                  <input type="hidden" name="idProduct" id="idProduct" value="<?php echo $product->idProduct; ?>" />
                  <div class="box-body">
                    
                    <div class="form-group">
                      <label for="description">Sconto (%) *</label>
                      <input type="text" class="form-control" id="percentage" name="percentage" value="<?php echo $product->percentage; ?>">
                    </div>
 
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><?php if ($product->percentage == 0 || $product->percentage == '') { echo 'Crea Offerta'; } else { echo 'Aggiorna Offerta'; } ; ?></button>
                    <?php if ($product->percentage != 0 || $product->percentage != '') : ?>
                    <a href="<?php echo site_url('back/d_discount'. '/' . $product->idDiscount . '/' . $product->idProduct); ?>" class="btn btn-primary">Cancella Offerta</a>
                    <?php endif; ?>
                  </div>
                </form>
              </div><!-- /.box -->
              
              <?php if ($photos) : ?>
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Gallery</h3>
                </div><!-- /.box-header -->
                
                  <div class="box-body">
                  
                    <div class="row">
                    	<?php foreach ($photos as $photo) : ?>
                    	<div class="col-xs-6 col-lg-4">
                    		<img style="margin-top: 10px;"src="<?php echo $resources_img ?>/product/<?php echo $photo->file; ?>" class="img-responsive">
                    		
                    		<div style="text-align: center; padding: 20px 0;">
                    			<a href="<?php echo site_url('back/d_photo' . '/' . $photo->idPhoto . '/' . $product->idProduct); ?>"><i class="fa fa-remove"></i> Cancella</a>
                    		</div>
                    	</div>
                    	<?php endforeach; ?>
                    </div>
 
                  </div><!-- /.box-body -->

                  <!--<div class="box-footer"></div>-->
              </div><!-- /.box -->
              <?php endif; ?>

            </div><!--/.col (right) -->
            <!-- Gallery -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Inserisci Gallery</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url('back/c_photo'); ?>">
                  <input type="hidden" name="currentURL" id="currentURL" value="<?php echo current_url(); ?>" />
                  <input type="hidden" name="idProduct" id="idProduct" value="<?php echo $product->idProduct; ?>" />
                  <div class="box-body">
                    
                    <div class="form-group">
                      <label for="cover">Immagine Gallery *</label>
                      <input type="file" name="files[]" value="" multiple />
                      <p class="help-block">Formato richiesto JPEG</p>
                    </div>
 
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Inserisci Foto</button>
                  </div>
                </form>
              </div><!-- /.box -->
             

            </div><!--/.col (right) -->
            
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->