      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Dashboard<small>Pannello di Controllo</small></h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo count($products); ?></h3>
                  <p>Totale Prodotti</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="<?php echo site_url('back/products'); ?>" class="small-box-footer">Vai ai Prodotti <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>                 
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo count($news); ?></h3>
                  <p>Totale News</p>
                </div>
                <div class="icon">
                  <i class="ion ion-earth"></i>
                </div>
                <a href="<?php echo site_url('back/articles'); ?>" class="small-box-footer">Vai alle News <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo count($newsletters); ?></h3>
                  <p>Totale Newsletters</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo site_url('back/newsletter'); ?>" class="small-box-footer">Vai alle Newsletter <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                <?php if ($products) : ?>
                  <h3>
                  <?php 
                  $mediaprice = 0;
                  foreach ($products as $product) {
                  	$mediaprice += $product->price;
                  } 
                  echo number_format(($mediaprice / count($products)),2);
                  ?> €</h3>
                 <?php else : ?>
                 <h3>€ 0.00</h3>
                 <?php endif; ?>
                  <p>Prezzo medio prodotti</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?php echo site_url('back/products'); ?>" class="small-box-footer">Vai ai Prodotti <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                  <li class="pull-left header">
                  	<i class="fa fa-bar-chart"></i>Report visualizzazioni                  
                  </li>
                </ul>
                <div class="tab-content no-padding">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                </div>
              </div><!-- /.nav-tabs-custom -->

              <!-- quick email widget -->
              <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope-o"></i>
                  <h3 class="box-title">Scrivi una Mail Veloce</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div>
                
                <div class="box-body">
                  <form action="<?php echo site_url('back/send_quick_mail') ?>" method="post">
                    <div class="form-group">
                      <input type="email" id="email" name="email" class="form-control" placeholder="Email a:"/>
                    </div>
                    <div class="form-group">
                      <input type="text" id="subject" name="subject" class="form-control" placeholder="Soggetto"/>
                    </div>
                    <div>
                      <textarea id="text" name="text" class="textarea" placeholder="Messaggio" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    </div>
                    <div class="box-footer clearfix">
                      <button type="submit" class="pull-right btn btn-default" id="sendEmail">Invia <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                  </form>
              </div>

            </section><!-- /.Left col -->
            
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

              <!-- solid sales graph -->
              <div class="box box-solid bg-teal-gradient">
                <div class="box-header">
                  <i class="fa fa-th"></i>
                  <h3 class="box-title">Prodotti online</h3>
                  <div class="box-tools pull-right">
                    <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body border-radius-none">
                  <div class="chart" id="line-chart" style="height: 250px;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- Calendar -->
              <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">Calendario</h3>
                  <!-- <div class="pull-right box-tools">
                    <div class="btn-group">
                      <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div> -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div><!-- /.box-body -->
                <!--<div class="box-footer text-black">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="clearfix">
                        <span class="pull-left">Task #1</span>
                        <small class="pull-right">90%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Task #2</span>
                        <small class="pull-right">70%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="clearfix">
                        <span class="pull-left">Task #3</span>
                        <small class="pull-right">60%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Task #4</span>
                        <small class="pull-right">40%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      