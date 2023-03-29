<!-- <?php echo SNIPPET_NAME_TEGAN; ?> section start from here -->
<section>
    <!-- our-team block main wrapper -->
    <div class="our-team mt-5">
        <!-- our-team main image -->
        <div class="container">

            <div class="row heading">
                <div class="col-lg-12 text-center">
                    <h5 itemprop="headline" class="text-color">
                        <a href='/blog'><?php echo APP_BLOG_HEADLINE;?></a>
                    </h5>
                </div>
            </div>

            <div class="row">
                <?php
                    $curl_handle=curl_init();
                    curl_setopt($curl_handle,CURLOPT_URL,'https://gray.ggtasker.co.uk/blog/wp-json/get-posts/4');
                    curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
                    curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
                    curl_setopt($curl_handle, CURLOPT_POST, 1);
                    $response = curl_exec($curl_handle);
                    curl_close($curl_handle);
                    if (!empty($response)){
                        $response = json_decode($response,true);
                        
                      foreach( $response as $post_item ) : ?>

                        <div class="col-md-3 col-sm-6 my-3 blog-outsource pb-5">
                            <a href="<?php echo $post_item['permalink'] ?>">
                                <div class="img-thumbnail rounded-0">
                                    <img itemprop="image" width="200" height="200" class='w-100 h-auto' src="<?php echo $post_item['thumbnail_img_url']; ?>" alt="<?php echo $post_item['post_title']; ?>" title="<?php echo $post_item['post_title']; ?>">
                                </div>
                                <p class="my-2 pos-bottom"><?php echo $post_item['post_title']; ?></p>
                            </a>
                        </div>
                    
                <?php 
                    endforeach;
                      
                    }
                ?>

            </div>
        </div>
    </div>
</section>
<!-- <?php echo SNIPPET_NAME_TEGAN; ?> section ends from here-->