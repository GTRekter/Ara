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
            Prodotti
            <small>Lista prodotti inseriti</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('back/products'); ?>">Prodotti</a></li>
            <li class="active">Lista</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista Prodotti</h3>
                  <div class="box-tools">
                    <!--<div class="input-group">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>-->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Cover</th>
                      <th>Marca</th>
                      <th>Nome</th>
                      <th>Descrizione</th>
                      <th>Inserito</th>
                      <th>Modificato</th>
                      <th>Status</th>
                    </tr>
                    
                    <?php if ($products) : ?>
	                    <?php foreach ($products as $product) : ?>
	                    <tr>
	                      <td><?php echo $product->idProduct; ?></td>
	                      <td>
	                      	<img src="<?php echo $resources_img; ?>/product/<?php echo $product->cover; ?>" alt="" width="60px"/>
	                      </td>
	                      <td><?php echo ucwords($product->brand); ?></td>
	                      <td><a href="<?php echo site_url('back/product' . '/' . $product->idProduct); ?>"><?php echo $product->name; ?></a></td>
	                      <td><?php echo substr($product->description, 0, 30) . '...'; ?></td>
	                      <td><?php echo date('d-m-Y', strtotime($product->createdOn)); ?></td>
	                      <td><?php echo date("d-m-Y", strtotime($product->updatedOn)); ?></td>
	                      <?php if ($product->suspended == 0) : ?>
	                      	<td><span class="label label-success">Attivo</span></td>
	                      <?php else : ?>
	                      	<td><span class="label label-danger">Sospeso</span></td>
	                      <?php endif; ?>
	                    </tr>
	                    <?php endforeach; ?>
                    <?php endif; ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->