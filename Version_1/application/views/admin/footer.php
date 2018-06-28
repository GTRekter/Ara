<?php
$resources_path = $this->config->item('resources_url');
$resources_css = $resources_path . "/css";
$resources_js = $resources_path . "/js";
$resources_img = $resources_path . "/img";
?> 
      <footer class="main-footer">
        <strong>Ragss &copy; 2015 All rights reserved.</strong>
      </footer>
      
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo $resources_path ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo $resources_path ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo $resources_path ?>/plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?php echo $resources_path ?>/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?php echo $resources_path ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?php echo $resources_path ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo $resources_path ?>/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo $resources_path ?>/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?php echo $resources_path ?>/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo $resources_path ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="<?php echo $resources_path ?>/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo $resources_path ?>/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $resources_path ?>/dist/js/app.min.js" type="text/javascript"></script>    
    
    <!-- AdminLTE dashboard demo (This is only for demo purposes)
    <script src="<?php echo $resources_path ?>/dist/js/pages/dashboard.js" type="text/javascript"></script>    
    -->
    <script type="text/javascript">
      $(function () {    
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5({
        	"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
        	"emphasis": true, //Italics, bold, etc. Default true
        	"lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
        	"html": false, //Button which allows you to edit the generated HTML. Default false
        	"link": true, //Button to insert a link. Default true
        	"image": false, //Button to insert an image. Default true,
        	"color": true //Button to change color of font  
        });
        
      });
    </script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo $resources_path ?>/dist/js/demo.js" type="text/javascript"></script>
    
    
     <!-- FUNZIONA PER GRAFICI -->     
    <script type="text/javascript">
    $(document).ready(function() {
      /* Morris.js Charts */
      Morris.Area({
        element: 'revenue-chart',
        resize: true,
        data: [
        	<?php for ($i = 1; $i <= 12; $i++) : ?>
        		<?
        		$productViews = 0;
        		$newsViews = 0;
        		$year = date("Y");
        		
        		foreach ($products as $product) {
        			if ( (date("Y",strtotime($product->createdOn)) == $year) && (date("m",strtotime($product->createdOn)) == $i) ) {
        				$productViews += $product->views;
        			}
        		}
        		foreach ($news as $new) {
        			if ( (date("Y",strtotime($new->createdOn)) == $year) && (date("m",strtotime($product->createdOn)) == $i) ){
        				$newsViews += $new->views;
        			}
        		}
        		?>
        		{m: '<?php echo $year ?>-<?php echo $i ?>', item1: <?php echo $newsViews ?>, item2: <?php echo $productViews ?> },
			<?php endfor; ?>
        ],
        xkey: 'm',
        ykeys: ['item1', 'item2'],
        labels: ['News', 'Prodotti'],
        lineColors: ['#a0d0e0', '#3c8dbc'],
        hideHover: 'auto'
      });      
      Morris.Line({
        element: 'line-chart',
        resize: true,
        data: [
        
        <?php 
        $productNumber = 0;
        for ($i = 1; $i <= 12; $i++) : ?>
        	<?
        	
        	$year = date("Y"); 	
        	foreach ($products as $product) {
        		if ( (date("Y",strtotime($product->createdOn)) == $year) && (date("m",strtotime($product->createdOn)) == $i) ) {
        			$productNumber += 1;
        		}
        	}
        	?>
        	{y: '<?php echo $year ?>-<?php echo $i ?>', item1: <?php echo $productNumber ?> },
        <?php endfor; ?>
        ],
        xkey: 'y',
        ykeys: ['item1'],
        labels: ['Prodotti'],
        lineColors: ['#efefef'],
        lineWidth: 2,
        hideHover: 'auto',
        gridTextColor: "#fff",
        gridStrokeWidth: 0.4,
        pointSize: 4,
        pointStrokeColors: ["#efefef"],
        gridLineColor: "#efefef",
        gridTextFamily: "Open Sans",
        gridTextSize: 10
      });
      
      //The Calender
      $("#calendar").datepicker();
      
    });
    </script>
    
    <!-- PREVENT DEFAULTS ON IMPORTANT BUTTONS !-->
    <script type="text/javascript">
    	$(document).ready(function() {
    		
    		// Prevent Defaults on Important Buttons
    		$('.confirm-delete-product').on('click', function(){
    		    return confirm("Sei sicuro di voler cancellare questo prodotto? Tutti i dati relativi a questo prodotto, incluse le immagini, verranno cancellati permanentemente!");
    		});
    	
    		$('.confirm-delete-subcategory').on('click', function(){
    		    return confirm("Sei sicuro di voler cancellare questa sottocategoria? Tutti i dati relativi a questo sottocategoria verranno cancellati permanentemente! I prodotti associati verranno SOSPESI, ma non cancellati!");
    		});
    		
    		$('.confirm-delete-category').on('click', function(){
    		    return confirm("Sei sicuro di voler cancellare questa categoria? Tutti i dati relativi a questa categoria, così come tutte le sottocategorie relative verranno cancellati permanentemente! I prodotti associati verranno SOSPESI, ma non cancellati!");
    		});
    	
    	});
    	
    </script>
    <!-- END PREVENT DEFAULTS ON IMPORTANT BUTTONS !-->
    
    <?php 
    $flashdata = $this->session->flashdata('message');
    if (!empty($flashdata)) : ?>
    	<script>
    		alert('<?php echo trim(json_encode($flashdata),'"'); ?>');
    	</script>
    <?php endif; ?>
  </body>
</html>