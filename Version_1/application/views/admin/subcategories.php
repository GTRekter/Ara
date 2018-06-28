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
            Sottocategorie
            <small>Lista Sottocategorie Inserite</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('back/subcategories'); ?>">Sottocategorie</a></li>
            <li class="active">Lista</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista Sottocategorie</h3>
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
                      <th>ID Sottocategoria</th>
                      <th>Nome</th>
                      <th>Categoria</th>
                      <th>Cancella</th>
                    </tr>
                    
                    <?php foreach ($subcategories as $subcategory) : ?>
                    
                    <tr>
                      <td><?php echo $subcategory->idSubcategory; ?></td>
                      <td><a href="<?php echo site_url('back/subcategory' .'/'. $subcategory->idSubcategory); ?>"><?php echo ucwords($subcategory->nameSubcategory); ?></a></td>
					   <td><?php foreach ($categories as $category) { if ($category->idCategory == $subcategory->idCategoryS) { echo ucwords($category->nameCategory); } } ?></td>
					   <td style="padding-left: 30px;"><a href="<?php echo site_url('back/d_subcategory'. '/' . $subcategory->idSubcategory); ?>" class="confirm-delete-subcategory"><i class="fa fa-remove"></i></a></td>
                    </tr>
                   
                    <?php endforeach; ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->