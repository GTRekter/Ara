
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
            Nuova Newsletter
            <small>Newsletter</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('back/newsletter'); ?>">Newsletter</a></li>
            <li class="active">Nuova Newsletter</li>
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
                  <h3 class="box-title">Invia una nuova Newsletter</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url('back/c_newsletter'); ?>">
               	  <input type="hidden" name="currentURL" value="<?php echo current_url(); ?>"  id="currentURL" />
                  <div class="box-body">
                    <div class="form-group">
                      <label for="name">Titolo</label>
                      <input type="text" class="form-control" id="title" name="title" value="">
                    </div>
                    <div class="form-group">
                      <label for="name">Sottotitolo</label>
                      <input type="text" class="form-control" id="subtitle" name="subtitle" value="">
                    </div>
                    <div class="form-group">
                      <label for="description">Descrizione</label>
                      <textarea id="text" name="text" class="textarea form-control" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
         			
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Invia Newsletter</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->