<?php include('header.php'); ?>

<div class="wrapper">

  <!-- top nav bar --> 
  <?php include('../snippets/admin/navbar/nishi.php'); ?>  

  <!-- left sidebar form start here --> 
  <?php include('../snippets/admin/navbar/nishan.php'); ?>    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- left sidebar form start here --> 
    <?php include('../snippets/admin/breadcrumbs/brad.php'); ?> 

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!-- fluid container stater here --> 

        <?php if (isset($_GET['snipid'])) { ?>
        
         <?php include('../snippets/'.$_GET['snipid'].'.php'); ?>  
        
        <?php } else { ?>
        
        <div class="row">
          <div class="col-lg-6">
            <?php include('../snippets/admin/cards/chaplin.php'); ?>    
            <?php include('../snippets/admin/cards/chris.php'); ?> 
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <?php include('../snippets/admin/cards/charlie.php'); ?>    
            <?php include('../snippets/admin/cards/charles.php'); ?> 
          </div>
          <!-- /.col-md-6 -->
        </div>        
      <?php } ?>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- scripts --> 
<?php include('scripts.php'); ?>

</body>
</html>