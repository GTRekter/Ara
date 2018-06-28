 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Newsletter
            <small>Lista Iscritti</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('back'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url('back/newsletter'); ?>">Newsletter</a></li>
            <li class="active">Lista</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista Iscritti Newsletter</h3>
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
                      <th>Email</th>
                      
                      <th>Inscrizione</th>
                    </tr>
                    <?php foreach ($newsletters as $newsletter) : ?>
                    <tr>
                      <td><?php echo $newsletter->idNewsletter ?></td>
                      <td><?php echo $newsletter->email ?></td>
                      <td><?php echo date("d-m-Y", strtotime($newsletter->createdOn)); ?></td>
                    </tr>
                    <? endforeach; ?>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->