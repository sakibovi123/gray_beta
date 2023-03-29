<?php 
  require 'config.php';

  $sql = "SELECT * FROM blog";

  $statement = $conn->prepare($sql);
  $statement->execute();

  $blogs = $statement->fetchAll(PDO::FETCH_ASSOC);

?>





  <!-- slider section starts -->


    
    

  <div class="banner-section">
    <img src="https://nh-g.com/wp-content/uploads/2022/05/banner-1440x420.jpg" class="w-100" alt="">

    <div class="post-details">
      <div class="post-header">
        All Blogs
      </div>

      <div class="post-description">
        RECENT BLOGS
      </div>
    </div>
</div>

    

  
  <!-- slider section ends -->

  <!-- blog section starts here -->
  <section class="blog-section">
    <div class="blog-header">
      Blogs
    </div>

    <div class="blog-card-section row">

      <?php foreach( $blogs as $blog ):?>
      <div class="blog-card col-sm-3 my-5">
        <div class="blog-card-image">
          <img src="https://cdn3.wpbeginner.com/wp-content/uploads/2016/11/blogimagetools.jpg" alt="">
        </div>
  
        <div class="blog-card-details">
          <div class="blog-details-heading">
            <a href="<?php echo 'BLOG_DETAILS_LINK'?>">
              <?php echo $blog["title"]; ?>
            </a> 
          </div>
  
          <div class="divider">
          </div>
  
          <div class="blog-details-body">
            <?php echo $blog["content"];?>
          </div>
  
          <div class="divider">
          </div>
  
          <div class="blog-details-footer">
            <ul class="footer-list">
              <li>
                <a href="#">John Doe</a>
              </li>
              <li>
                |
              </li>
              <li>
                <a href="#">22.07.2020 14:20</a>
              </li>
              <li>
                |
              </li>
              <li>
                <a href="#"><i class="fa fa-comments"></i> 12</a>
              </li>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

  


     

    </div>
  </section>
  <div class="container mx-auto text-center">
        <a href="<?php echo CREATE_BLOG_LINK;  ?>" class="text-center btn btn-outline-secondary w-30">
          Create a post
        </a>
  </div>
  <!-- blog section ends here -->
