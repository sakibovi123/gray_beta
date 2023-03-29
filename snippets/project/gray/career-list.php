<!-- <?php echo SNIPPET_NAME_CALIANA;?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_CALIANA);?>" class="<?php echo lcfirst(SNIPPET_NAME_CALIANA).' '.APP_NAME.SNIPPET_NAME_CALIANA.' '.SNIPPET_CATEGORY_CONTENTBLOCK.' '.SNIPPET_CSS_CLASSES;?>" itemscope itemtype="http://schema.org/WebPage"> 
    <!-- career-page title wrapper 
    <div class="page-title text-white">
        <div class="container page-title-container">
            <div class="row page-title-text">
                <div class="col-lg-12 text-center">
                    <h1 itemprop="headline"><?php echo APP_CAREER_HEADLINE; ?></h1>
                    <p itemprop="description" class="lead"><?php echo APP_CAREER_SUBHEADLINE; ?></p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- career-list wrapper -->
    <div class="container career-list mt-5">    
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="job-list">                    
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer" class="job-box d-md-flex align-items-center justify-content-between mb-30">
                        <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                            <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                <?php echo APP_CAREER_LIST_JOB_TITLE_ICON_1; ?>
                            </div>
                            <div class="job-content">
                                <h5 itemprop="name" class="text-center text-md-left">
                                    <a href="<?php echo APP_CAREER_LIST_JOB_LINK_3; ?>" title="<?php echo APP_CAREER_LIST_JOB_TITLE_1; ?>"> <?php echo APP_CAREER_LIST_JOB_TITLE_1; ?></a>
                                </h5>
                                <ul class="d-md-flex flex-wrap ff-open-sans">
                                    <li class="mr-md-4">
                                        <i class="<?php echo APP_ICON_LOCATION; ?>"></i>
                                        <span itemprop="areaServed"><?php echo APP_CAREER_LIST_JOB_LOCATION_1; ?></span>
                                    </li>
                                    <li class="mr-md-4">
                                        <span itemprop="priceCurrency" content="<?php echo APP_SALARY_CURRENCY;?>"><i class="<?php echo APP_ICON_DOLLER; ?>"></i> </span> 
                                        <span itemprop="price"><?php  echo APP_CAREER_LIST_JOB_SALARY_RANGE_1; ?></span>
                                    </li>
                                    <li class="mr-md-4">
                                        <i class="<?php echo APP_ICON_CLOCK; ?>"></i>
                                        <span itemprop="category"><?php echo APP_CAREER_LIST_JOB_TYPE_1; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-right my-4 flex-shrink-0">
                            <a itemprop="url" href="<?php echo APP_CAREER_LIST_JOB_LINK_1; ?>" class="btn d-block w-100 d-sm-inline-block btn-brand"><?php echo APP_CAREER_LIST_JOB_LINK_TEXT; ?></a>
                        </div>
                    </div>
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer" class="job-box d-md-flex align-items-center justify-content-between mb-30">
                        <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                            <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                <?php echo APP_CAREER_LIST_JOB_TITLE_ICON_2; ?>
                            </div>
                            <div class="job-content">
                                <h5 itemprop="name" class="text-center text-md-left">
                                    <a href="<?php echo APP_CAREER_LIST_JOB_LINK_3; ?>" title="<?php echo APP_CAREER_LIST_JOB_TITLE_2; ?>"> <?php echo APP_CAREER_LIST_JOB_TITLE_2; ?> </a>
                                </h5>
                                <ul class="d-md-flex flex-wrap ff-open-sans">
                                    <li class="mr-md-4">
                                        <i class="<?php echo APP_ICON_LOCATION; ?>"></i>
                                        <span itemprop="areaServed"><?php echo APP_CAREER_LIST_JOB_LOCATION_2; ?></span>
                                    </li>
                                    <li class="mr-md-4">
                                        <span itemprop="priceCurrency" content="<?php echo APP_SALARY_CURRENCY;?>"><i class="<?php echo APP_ICON_DOLLER; ?>"></i> </span> 
                                        <span itemprop="price"><?php  echo APP_CAREER_LIST_JOB_SALARY_RANGE_2; ?></span>
                                    </li>
                                    <li class="mr-md-4">
                                        <i class="<?php echo APP_ICON_CLOCK; ?>"></i> 
                                        <span itemprop="category"><?php echo APP_CAREER_LIST_JOB_TYPE_2; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-right my-4 flex-shrink-0">
                            <a itemprop="url" href="<?php echo APP_CAREER_LIST_JOB_LINK_2; ?>" class="btn d-block w-100 d-sm-inline-block btn-brand"><?php echo APP_CAREER_LIST_JOB_LINK_TEXT; ?></a>
                        </div>
                    </div>
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer" class="job-box d-md-flex align-items-center justify-content-between mb-30">
                        <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                            <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                <?php echo APP_CAREER_LIST_JOB_TITLE_ICON_3; ?>
                            </div>
                            <div class="job-content">
                                <h5 itemprop="name" class="text-center text-md-left">
                                    <a href="<?php echo APP_CAREER_LIST_JOB_LINK_3; ?>" title="<?php echo APP_CAREER_LIST_JOB_TITLE_1; ?>"><?php echo APP_CAREER_LIST_JOB_TITLE_3; ?></a>
                                </h5>
                                <ul class="d-md-flex flex-wrap ff-open-sans">
                                    <li class="mr-md-4">
                                        <i class="<?php echo APP_ICON_LOCATION; ?>"></i>
                                        <span itemprop="areaServed"><?php echo APP_CAREER_LIST_JOB_LOCATION_3; ?></span>
                                    </li>
                                    <li class="mr-md-4">
                                        <span itemprop="priceCurrency" content="<?php echo APP_SALARY_CURRENCY;?>"><i class="<?php echo APP_ICON_DOLLER; ?>"></i> </span> 
                                        <span itemprop="price"><?php  echo APP_CAREER_LIST_JOB_SALARY_RANGE_3; ?></span>
                                    </li>
                                    <li class="mr-md-4">
                                        <i class="<?php echo APP_ICON_CLOCK; ?>"></i> 
                                        <span itemprop="category"><?php echo APP_CAREER_LIST_JOB_TYPE_3; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-right my-4 flex-shrink-0">
                            <a href="<?php echo APP_CAREER_LIST_JOB_LINK_3; ?>" class="btn d-block w-100 d-sm-inline-block btn-brand"><?php echo APP_CAREER_LIST_JOB_LINK_TEXT; ?></a>
                        </div>
                    </div>
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer" class="job-box d-md-flex align-items-center justify-content-between mb-30">
                        <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                            <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                <?php echo APP_CAREER_LIST_JOB_TITLE_ICON_4; ?>
                            </div>
                            <div class="job-content">
                                <h5 itemprop="name" class="text-center text-md-left">
                                    <a href="<?php echo APP_CAREER_LIST_JOB_LINK_3; ?>" title="<?php echo APP_CAREER_LIST_JOB_TITLE_1; ?>"><?php echo APP_CAREER_LIST_JOB_TITLE_4; ?></a>
                                </h5>
                                <ul class="d-md-flex flex-wrap ff-open-sans">
                                    <li class="mr-md-4">
                                        <i class="<?php echo APP_ICON_LOCATION; ?>"></i>
                                        <span itemprop="areaServed"><?php echo APP_CAREER_LIST_JOB_LOCATION_4; ?></span>
                                    </li>
                                    <li class="mr-md-4">
                                        <span itemprop="priceCurrency" content="<?php echo APP_SALARY_CURRENCY;?>"><i class="<?php echo APP_ICON_DOLLER; ?>"></i> </span> 
                                        <span itemprop="price"><?php  echo APP_CAREER_LIST_JOB_SALARY_RANGE_4; ?></span>
                                    </li>
                                    <li class="mr-md-4">
                                        <i class="<?php echo APP_ICON_CLOCK; ?>"></i> 
                                        <span itemprop="category"><?php echo APP_CAREER_LIST_JOB_TYPE_4; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-right my-4 flex-shrink-0">
                            <a itemprop="url" href="<?php echo APP_CAREER_LIST_JOB_LINK_4; ?>" class="btn d-block w-100 d-sm-inline-block btn-brand"><?php echo APP_CAREER_LIST_JOB_LINK_TEXT; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <?php echo SNIPPET_NAME_CALIANA;?> section ends from here-->

