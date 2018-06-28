 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Articoli / News
            <small>Lista articoli inseriti</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('back/articles'); ?>">News</a></li>
            <li class="active">Lista</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista Articoli</h3>
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
                      <th>Titolo</th>
                      <th>Testo</th>
                      <th>Inserito</th>
                      <th>Modificato</th>
                      <th>Status</th> 
                    </tr>
                    <?php if ($news) : ?>
                    <?php foreach ($news as $new) : ?>
                    <tr>
                      <td><?php echo $new->idNews ?></td>
                      <td><a href="<?php echo site_url('back/article' . '/' . $new->idNews); ?>"><?php echo word_limiter($new->title, 5); ?></a></td>
                      <td><?php echo word_limiter($new->text, 10); ?></td>
                      <td><?php echo date("d-m-Y", strtotime($new->createdOn)); ?></td>
                      <td><?php echo date("d-m-Y", strtotime($new->updatedOn)); ?></td>
                      <?php if ($new->suspended == 0) : ?>
                      <td><span class="label label-success">Attivo</span></td>
                      <?php else : ?>
                      <td><span class="label label-danger">Sospeso</span></td>
                      <?php endif; ?> 
                    </tr>
                    <? endforeach; ?>
                    <?php endif; ?>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->