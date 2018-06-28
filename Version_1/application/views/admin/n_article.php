
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
            Nuova News
            <small>News</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php site_url('back/article'); ?>">News</a></li>
            <li class="active">Nuova News</li>
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
                  <h3 class="box-title">Inserisci Nuova News</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url('back/c_article'); ?>">
                  <input type="hidden" name="currentURL" value="<?php echo current_url(); ?>"  id="currentURL" />
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Titolo *</label>
                      <input type="text" class="form-control" id="title" name="title" value="">
                    </div>
                    <div class="form-group">
                      <label for="subtitle">Sottotitolo *</label>
                      <input type="text" class="form-control" id="subtitle" name="subtitle" value="">
                    </div>
                    <div class="form-group">
                      <label for="text">Testo *</label>
                      <textarea id="text" name="text" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="cover">Immagine Cover *</label>
                      <input type="file" id="cover" name="cover">
                    </div>
                    <div class="form-group">
                      <label>Sospendi News</label><br />
                      <input type="checkbox" id="suspended" name="suspended"> <label for="suspended" style="font-weight: normal;"> Sospeso</label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Inserisci News</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->