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
            <?php echo substr($article->title, 0 ,20) . '...'; ?>
            <small>News</small>
          </h1>
          <ol class="breadcrumb">
			 <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			 <li><a href="<?php echo site_url('back/articles'); ?>">News</a></li>
            <li class="active"><?php echo substr($article->title, 0 ,20) . '...'; ?></li>
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
                  <h3 class="box-title">Modifica News</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url('back/u_article'); ?>">
                  <input type="hidden" name="idNews" value="<?php echo $article->idNews; ?>" id="idNews" />
                  <input type="hidden" name="currentURL" value="<?php echo current_url(); ?>"  id="currentURL" />
                  <div class="box-body">
                  	<div class="form-group">
                  	  <label for="name">Immagine Cover Attuale</label>
                  	  <div class="col-md-12">
                  	  <img src="<?php echo $resources_img; ?>/news/<?php echo $article->cover; ?>" alt="" width="100px"/><br/><br/>
                  	  </div>
                  	</div>
                    <div class="form-group">
                      <label for="title">Titolo *</label>
                      <input type="text" class="form-control" id="title" name="title" value="<?php echo $article->title; ?>">
                    </div>
                    <div class="form-group">
                      <label for="subtitle">Sottotitolo *</label>
                      <input type="text" class="form-control" id="subtitle" name="subtitle" value="<?php echo $article->subtitle; ?>">
                    </div>
                    <div class="form-group">
                      <label for="text">Descrizione *</label>
                      <textarea id="text" name="text" rows="5" class="form-control"><?php echo $article->text; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="cover">Cambia Immagine Cover</label>
                      <input type="file" id="cover" name="cover">
                    </div>
                    <div class="form-group">
                      <label>Sospendi News</label><br />
                      <input type="checkbox" <?php if ($article->suspended == 1) { echo "checked='checked'"; } ?> id="suspended" name="suspended" value="1"> <label for="suspended" style="font-weight: normal;"> Sospeso</label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Salva News</button>
                    <a href="<?php echo site_url('back/d_article'. '/' . $article->idNews); ?>" class="btn btn-primary">Cancella News</a>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->