<?php
require 'config.php';

if (isset($_POST['title']) && isset($_POST["content"])) {
  $title = $_POST["title"];
  $content = $_POST["content"];
  $author = "Developer";
  $img = $_FILES["img"]["name"];
  $sql = " INSERT INTO  blog  (title, content, author, img) VALUES (:title, :content, :author, :img)";

  $statement = $conn->prepare($sql);
  if ($statement->execute([":title" => $title, ":content" => $content, ":author" => $author, ":img" => $img])) {
    $message = "Data inserted successfully";
  }
} else {
  $message = "Data inserted successfully";
}

?>

<link href="/assets/styles/blog-style.css" rel="stylesheet">

<!-- banner section starts here -->
<section class="banner-section">
  <img src="https://nh-g.com/wp-content/uploads/2022/05/banner-1440x420.jpg" alt="">

  <div class="post-details">
    <div class="post-header text-center">
      CREATE POST
    </div>

    <!-- <div class="post-description">
        SINGLE BLOG POST
      </div> -->
  </div>
</section>
<!-- banner section ends here -->

<!-- detailed blog section starts here -->

<!-- detailed blog section ends here -->


<!-- comment form  -->
<form method="POST" enctype="multipart/form-data">
  <?php if (empty($message)) : ?>
    <div class="container mx-auto alert alert-primary" role="alert">
      <?= $message ?>
    </div>
  <?php endif; ?>


  <div class="row mt-5 container mx-auto">
    <div class="col">
      <input type="text" class="form-control" placeholder="Title" aria-label="Title" name="title">
    </div>
  </div>

  <div class="row mt-4 container mx-auto">
    <div class="col">
      <textarea type="text" name="content" rows="8" class="form-control" aria-label="" placeholder="Enter comment here.."></textarea>
    </div>
  </div>
  <div class="row mt-4 container mx-auto">
    <div class="col">
      <input type="file" class="p-2 bg-light" name="img">
    </div>
  </div>

  <div class="row mt-5 container mx-auto text-center">
    <div class="col">
      <input name="insert" type="submit" class="btn btn-outline-secondary w-50" value="Submit">
    </div>
  </div>
  <!-- comment form ends -->
  </div>
</form>


</section>
<!-- comment section ends here -->