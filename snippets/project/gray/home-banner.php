<!-- <?php echo SNIPPET_NAME_BANYAN;?> section start from here-->
<section id="<?php echo lcfirst(SNIPPET_NAME_BANYAN);?>" class="<?php echo lcfirst(SNIPPET_NAME_BANYAN).' '.APP_NAME.SNIPPET_NAME_BANYAN.' '.SNIPPET_CATEGORY_BANNER.' '.SNIPPET_CSS_CLASSES;?>" itemscope itemtype="http://schema.org/WebPage">
    <!-- banner-image main wrapper-->
    <meta itemprop="image" content="<?php echo APP_HOME_BANNER_IMAGE; ?>">
    <div class="home-only-slider">
        <div class="big-banner text-white home-slider">
            <div class=" banner-container mt-1">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">

                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active flex">
                            <img class="d-block w-100" src="assets/images/banners/Template-1.1.jpg?w=1800" alt="First slide">
                            <div class="carousel-caption home-banner-text d-flex flex-column">
                                <h1>E-commerce is the activity of electronically</h1>
                                <p> Ecommerce, also known as electronic commerce or internet commerce, refers to the buying and selling of goods or services using the internet, and the transfer of money and data to execute these transactions. </p>
                                <button class="read-more-btn"><a href="<?php  echo APP_HEADER_MENU_NAMEC_LINK ?>">Read more</a></button>
                            </div>
                        </div>
                        <div class="carousel-item flex">
                            <img class="d-block w-100" src="assets/images/banners/e-Commerce-3-new.jpg?w=1480" alt="Second slide">
                            <div class="carousel-caption home-banner-text d-flex flex-column">
                                <h1>E-commerce is the activity of electronically</h1>
                                <p> Ecommerce, also known as electronic commerce or internet commerce, refers to the buying and selling of goods or services using the internet, and the transfer of money and data to execute these transactions. </p>
                                <button class="read-more-btn"><a href="<?php  echo APP_HEADER_MENU_NAMEC_LINK ?>">Read more</a></button>
                            </div>
                        </div>
                        <div class="carousel-item flex">
                            <img class="d-block w-100" src="assets/images/banners/Template-2-.jpg?w=1480" alt="Third slide">
                            <div class="carousel-caption home-banner-text d-flex flex-column">
                                <h1>E-commerce is the activity of electronically buying</h1>
                                <p> Ecommerce, also known as electronic commerce or internet commerce, refers to the buying and selling of goods or services using the internet, and the transfer of money and data to execute these transactions. </p>
                                <button class="read-more-btn"><a href="<?php  echo APP_HEADER_MENU_NAMEC_LINK ?>">Read more</a></button>
                            </div>
                        </div>
                        <div class="carousel-item flex">
                            <img class="d-block w-100" src="assets/images/banners/Project-management-2.jpg?w=1480" alt="Second slide">
                            <div class="carousel-caption home-banner-text d-flex flex-column">
                                <h1> E-commerce is the activity of electronically </h1>
                                <p> Ecommerce, also known as electronic commerce or internet commerce, refers to the buying and selling of goods or services using the internet, and the transfer of money and data to execute these transactions. </p>
                                <button class="read-more-btn"><a href="<?php  echo APP_HEADER_MENU_NAMEC_LINK ?>">Read more</a></button>

                            </div>
                        </div>
                        <div class="carousel-item flex">
                            <img class="d-block w-100" src="assets/images/banners/Project-management-2.jpg?w=1480" alt="Second slide">
                            <div class="carousel-caption home-banner-text d-flex flex-column">
                                <h1>E-commerce is the activity of electronically</h1>
                                <p> Ecommerce, also known as electronic commerce or internet commerce, refers to the buying and selling of goods or services using the internet, and the transfer of money and data to execute these transactions. </p>
                                <button class="read-more-btn"><a href="<?php  echo APP_HEADER_MENU_NAMEC_LINK ?>">Read more</a></button>
                            </div>
                        </div>
                        <div class="carousel-item flex">
                            <img class="d-block w-100" src="assets/images/banners/Project-management-2.jpg?w=1480" alt="Second slide">
                            <div class="carousel-caption home-banner-text d-flex flex-column">
                                <h1>E-commerce is the activity of electronically</h1>
                                <p> Ecommerce, also known as electronic commerce or internet commerce, refers to the buying and selling of goods or services using the internet, and the transfer of money and data to execute these transactions. </p>
                                <button class="read-more-btn"><a href="<?php  echo APP_HEADER_MENU_NAMEC_LINK ?>">Read more</a></button>
                            </div>
                        </div>



                        <div class="readmore">

                        </div>
                        <!---->
                    </div>

                </div>
            </div>
        </div>
        <!-- video modal start -->
        <div class="modal video-modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
            <div class="modal-dialog video-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header d-none">
                        <h5 class="modal-title"><?php echo APP_HOME_BANNER_MODAL_TITLE; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video modal end -->
</section>
<!-- <?php echo SNIPPET_NAME_BANYAN;?> section ends from here -->

