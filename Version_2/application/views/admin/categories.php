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
            Categorie
            <small>Lista Categorie Inserite</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('back/categories'); ?>">Categorie</a></li>
            <li class="active">Lista</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista Categorie</h3>
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
                      <th>Nome</th>
                      <th>Cancella</th>
                    </tr>
                    
                    <?php foreach ($categories as $category) : ?>
                    
                    <tr>
                      <td><?php echo $category->idCategory; ?></td>
                      <td><a href="<?php echo site_url('back/category' .'/'. $category->idCategory); ?>"><?php echo ucwords($category->nameCategory); ?></a></td>
					   <td style="padding-left: 30px;"><a href="<?php echo site_url('back/d_category'. '/' . $category->idCategory); ?>" class="confirm-delete-category" >
					   <i class="fa fa-remove"></i></a></td>
                    </tr>
                   
                    <?php endforeach; ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->