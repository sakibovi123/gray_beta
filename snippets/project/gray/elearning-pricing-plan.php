<!-- <?php echo SNIPPET_NAME_PLATO;?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_PLATO);?>" class="<?php echo lcfirst(SNIPPET_NAME_PLATO).' '.APP_NAME.SNIPPET_NAME_PLATO.' '.SNIPPET_CATEGORY_PRICES.' '.SNIPPET_CSS_CLASSES;?>" itemscope itemtype="https://schema.org/WebPage">
    <!-- pricing-plan main wrapper -->
    <div class="container pricing-plan">
        <!-- block title -->
        <div class="row heading mb-3 mt-5">
            <div class="col-lg-12 text-center">
                <h1 itemprop="headline"><?php echo APP_ELEARNING_PRICING_TITLE;?></h1>
                <p itemprop="text" class="pt-1"><?php echo APP_ELEARNING_PRICING_SUBTITLE;?></p>
            </div>
        </div>
        <!-- plan type -->
        <ul class="nav nav-pills d-flex justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-annual-tab" data-toggle="pill" href="#pills-annual" role="tab" aria-controls="pills-annual" aria-selected="true" itemprop="genre"><?php echo APP_ELEARNING_PRICING_ANNUAL; ?></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-monthly-tab" data-toggle="pill" href="#pills-monthly" role="tab" aria-controls="pills-monthly" aria-selected="false" itemprop="genre"><?php echo APP_ELEARNING_PRICING_MONTHLY; ?></a>
            </li>
        </ul>
        <!-- plan detail -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-annual" role="tabpanel" aria-labelledby="pills-annual-tab">
                <div class="card-deck">
                    <div class="card mb-4">
                        <div class="card-body rounded-lg">
                            <!-- pricing: basic-plan -->
                            <div itemscope itemtype="http://schema.org/UnitPriceSpecification">
                                <div itemprop="name" class="plan-name text-center mb-2"><?php echo APP_ELEARNING_PRICING_BASIC_TITLE; ?></div>
                                <p itemprop="description" class="text-center text-muted mb-3"><?php echo APP_ELEARNING_PRICING_BASIC_SUBTITLE; ?></p>
                                <div class="text-center price">
                                    <span itemprop="price" content="<?php echo APP_PRICE_ZERO; ?>"><?php echo APP_ELEARNING_PRICING_BASIC_PRICE_MONNTHLY; ?></span>
                                    <meta itemprop="priceCurrency" content="<?php echo APP_PRICE_CURRENCY; ?>">
                                    <span itemprop="billingDuration" content="<?php echo APP_PRICE_MONTHLY; ?>" class="text-small text-center"><?php echo APP_ELEARNING_PRICING_BASIC_PRICE_PER_MONTH; ?></span>
                                </div>
                            </div>
                            <div class="text-center price-gray"><s><?php echo APP_ELEARNING_PRICING_BASIC_PRICE_MONNTHLY;?><span class="text-small text-center"><?php echo APP_ELEARNING_PRICING_BASIC_PRICE_PER_MONTH; ?></span></s></div>
                            <div itemprop="text" class="text-center price-gray"><?php echo APP_ELEARNING_PRICING_BASIC_PRICE_SUBTEXT;?></div>
                            <a itemprop="url" href="<?php echo APP_ELEARNING_PRICING_BASIC_PRICE_BUTTONA_LINK; ?>" class="btn btn-brand-border btn-block p-2 rounded-pill mt-4"><?php echo APP_ELEARNING_PRICING_BASIC_PRICE_BUTTONA_TEXT;?></a>
                            <!-- basic: set-up service-->
                            <div class="mt-4 text-center"><b><?php echo APP_ELEARNING_PRICING_BASIC_BLOCKA_TITLE;?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?> <?php echo APP_YEAR; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_FREE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_HUNDRED; ?> <?php echo APP_TERM_GBYTES; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_EIGHTY; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_FIVEHUNDRED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICF_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_POWERED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICK_TEXT; ?>
                                </li>                  
                            </ul>
                            <!-- basic: course-functions service-->
                            <div class="pt-3 text-center"><b><?php echo APP_ELEARNING_PRICING_BASIC_BLOCKB_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICF_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICK_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICL_TEXT; ?>
                                </li>
                            </ul>
                            <!-- basic: boosters service-->
                            <div class="pt-3 text-center"><b><?php echo APP_ELEARNING_PRICING_BASIC_BLOCKC_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BASICA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BASICB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BASICC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BASICD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BASICE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BASICF_TEXT; ?>
                                </li>                                    
                            </ul>                            
                        </div>
                        <div class="card-footer">
                            <a itemprop="url" href="<?php echo APP_ELEARNING_PRICING_BASIC_PRICE_BUTTONB_LINK; ?>" class="btn btn-brand-border btn-block p-2 rounded-pill"><?php echo APP_ELEARNING_PRICING_BASIC_PRICE_BUTTONB_TEXT; ?></a>
                        </div>
                    </div>
                    <div class="w-100 d-none d-sm-block d-lg-none"><!-- wrap every 2 on sm--></div>
                    <div class="card mb-4 highlight">
                        <div class="popular-plan text-center"><?php echo APP_TERM_MOSTPOPULAR; ?></div>
                        <div class="card-body rounded-lg">
                            <!-- pricing: pro-plan -->
                            <div itemscope itemtype="http://schema.org/UnitPriceSpecification">
                                <div itemprop="name" class="plan-name text-center mb-2"><?php echo APP_ELEARNING_PRICING_PRO_TITLE; ?></div>
                                <p itemprop="description" class="text-center text-muted mb-3"><?php echo APP_ELEARNING_PRICING_PRO_SUBTITLE; ?></p>
                                <div class="text-center price">
                                    <span itemprop="price" content="<?php echo APP_PRICE_ZERO; ?>"><?php echo APP_ELEARNING_PRICING_PRO_PRICE_MONNTHLY; ?></span>
                                    <meta itemprop="priceCurrency" content="<?php echo APP_PRICE_CURRENCY; ?>">
                                    <span itemprop="billingDuration" content="<?php echo APP_PRICE_MONTHLY; ?>" class="text-small text-center"><?php echo APP_ELEARNING_PRICING_PRO_PRICE_PER_MONTH; ?></span>
                                </div>
                            </div>
                            <div class="text-center price-gray"><s><?php echo APP_ELEARNING_PRICING_PRO_PRICE_MONNTHLY; ?><span class="text-small text-center"><?php echo APP_ELEARNING_PRICING_PRO_PRICE_PER_MONTH; ?></span></s></div>
                            <div itemprop="text" class="text-center price-gray"><?php echo APP_ELEARNING_PRICING_PRO_PRICE_SUBTEXT;?></div>
                            <a itemprop="url" href="<?php echo APP_ELEARNING_PRICING_PRO_PRICE_BUTTONA_LINK; ?>" class="btn btn-brand btn-block p-2 rounded-pill mt-4"><?php echo APP_ELEARNING_PRICING_PRO_PRICE_BUTTONA_TEXT; ?></a>
                            <!-- pro: set-up service-->
                            <div class="mt-4 text-center"><b><?php echo APP_ELEARNING_PRICING_PRO_BLOCKA_TITLE;?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?> <?php echo APP_YEAR; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_FREE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_UNLIMITED; ?> </strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_FOUR; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_HUNDRED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_THOUSENDS; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROF_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_TEN; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_THREE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_THREE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_REMOVE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROK_TEXT; ?>
                                </li>                  
                            </ul>
                            <!-- pro: course-functions service-->
                            <div class="pt-3 text-center"><b><?php echo APP_ELEARNING_PRICING_PRO_BLOCKB_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROF_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROK_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROL_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROM_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PRON_TEXT; ?>
                                </li>
                            </ul>
                            <!-- pro: boosters service-->
                            <div class="pt-3 text-center"><b><?php echo APP_ELEARNING_PRICING_PRO_BLOCKC_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROF_TEXT; ?>
                                </li> 
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROK_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROL_TEXT; ?>
                                </li> 
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROM_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PRON_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROO_TEXT; ?>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a itemprop="url" href="<?php echo APP_ELEARNING_PRICING_PRO_PRICE_BUTTONB_LINK; ?>" class="btn btn-brand btn-block p-2 rounded-pill"><?php echo APP_ELEARNING_PRICING_PRO_PRICE_BUTTONB_TEXT; ?></a>
                        </div>
                    </div>
                    <div class="w-100 d-none d-sm-block d-lg-none"><!-- wrap every 2 on sm--></div>
                    <div class="card mb-4">
                        <div class="card-body rounded-lg">
                            <!-- pricing: business-plan -->
                            <div itemscope itemtype="http://schema.org/UnitPriceSpecification">
                                <div itemprop="name" class="plan-name text-center mb-2"><?php echo APP_ELEARNING_PRICING_BUSINESS_TITLE; ?></div>
                                <p itemprop="description" class="text-center text-muted mb-3"><?php echo APP_ELEARNING_PRICING_BUSINESS_SUBTITLE; ?></p>
                                <div class="text-center price">
                                    <span itemprop="price" content="<?php echo APP_PRICE_ZERO; ?>"><?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_MONNTHLY; ?></span>
                                    <meta itemprop="priceCurrency" content="<?php echo APP_PRICE_CURRENCY; ?>">
                                    <span itemprop="billingDuration" content="<?php echo APP_PRICE_MONTHLY; ?>" class="text-small text-center"><?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_PER_MONTH; ?></span>
                                </div>
                            </div>                    
                            <div class="text-center price-gray"><s><?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_MONNTHLY;?><span class="text-small text-center"><?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_PER_MONTH;?></span></s></div>
                            <div itemprop="text" class="text-center price-gray"><?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_SUBTEXT;?></div>
                            <a itemprop="url" href="<?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_BUTTONA_TEXT_LINK;?>" class="btn btn-brand-border btn-block p-2 rounded-pill mt-4"><?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_BUTTONA_TEXT;?></a>
                            <!-- business: set-up service-->
                            <div class="mt-4 text-center"><b><?php echo APP_ELEARNING_PRICING_BUSINESS_BLOCKA_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?> <?php echo APP_YEAR; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_FREE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_UNLIMITED; ?> </strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_UNLIMITED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_UNLIMITED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_UNLIMITED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSF_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_FIFTY; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_THREE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_TEN; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_UNLIMITED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_REMOVE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSK_TEXT; ?>
                                </li> 
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_ADVANCED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSL_TEXT; ?>
                                </li>                 
                            </ul>
                            <!-- business: course-functions service-->
                            <div class="pt-3 text-center"><b><?php echo APP_ELEARNING_PRICING_BUSINESS_BLOCKB_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSF_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSK_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSL_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSM_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSN_TEXT; ?>
                                </li>
                            </ul>
                            <!-- business: boosters service-->
                            <div class="pt-3 text-center"><b><?php echo APP_ELEARNING_PRICING_BUSINESS_BLOCKC_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSF_TEXT; ?>
                                </li>  
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSK_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSL_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSM_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSN_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSO_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSP_TEXT; ?>
                                </li>                                   
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a itemprop="url" href="<?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_BUTTONB_TEXT_LINK; ?>" class="btn btn-brand-border btn-block p-2 rounded-pill"><?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_BUTTONB_TEXT; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                <div class="card-deck">
                    <div class="card mb-4">
                        <div class="card-body rounded-lg">
                            <!-- pricing: basic-plan -->
                            <div itemscope itemtype="http://schema.org/UnitPriceSpecification">
                                <div itemprop="name" class="plan-name text-center mb-2"><?php echo APP_ELEARNING_PRICING_BASIC_TITLE; ?></div>
                                <p itemprop="description" class="text-center text-muted mb-3"><?php echo APP_ELEARNING_PRICING_BASIC_SUBTITLE; ?></p>
                                <div class="text-center price">
                                    <span itemprop="price" content="<?php echo APP_PRICE_ZERO; ?>"><?php echo APP_ELEARNING_PRICING_BASIC_PRICE_MONNTHLY; ?></span>
                                    <meta itemprop="priceCurrency" content="<?php echo APP_PRICE_CURRENCY; ?>">
                                    <span itemprop="billingDuration" content="<?php echo APP_PRICE_MONTHLY; ?>" class="text-small text-center"><?php echo APP_ELEARNING_PRICING_BASIC_PRICE_PER_MONTH; ?></span>
                                </div>
                            </div>
                            <a itemprop="url" href="<?php echo APP_ELEARNING_PRICING_BASIC_PRICE_BUTTONA_LINK; ?>" class="btn btn-brand-border btn-block p-2 rounded-pill mt-4"><?php echo APP_ELEARNING_PRICING_BASIC_PRICE_BUTTONA_TEXT;?></a>
                            <!-- basic: set-up service-->
                            <div class="mt-4 text-center"><b><?php echo APP_ELEARNING_PRICING_BASIC_BLOCKA_TITLE;?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?> <?php echo APP_YEAR; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_FREE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_HUNDRED; ?> <?php echo APP_TERM_GBYTES; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_EIGHTY; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_FIVEHUNDRED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICF_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_POWERED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BASICK_TEXT; ?>
                                </li>                  
                            </ul>
                            <!-- basic: course-functions service-->
                            <div class="pt-3 text-center"><b><?php echo APP_ELEARNING_PRICING_BASIC_BLOCKB_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICF_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICK_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BASICL_TEXT; ?>
                                </li>
                            </ul>
                            <!-- basic: boosters service-->
                            <div class="pt-3 text-center"><b><?php echo APP_ELEARNING_PRICING_BASIC_BLOCKC_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BASICA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BASICB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BASICC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BASICD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BASICE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BASICF_TEXT; ?>
                                </li>                                    
                            </ul>                          
                        </div>
                        <div class="card-footer">
                            <a itemprop="url" href="<?php echo APP_ELEARNING_PRICING_BASIC_PRICE_BUTTONB_LINK; ?>" class="btn btn-brand-border btn-block p-2 rounded-pill"><?php echo APP_ELEARNING_PRICING_BASIC_PRICE_BUTTONB_TEXT; ?></a>
                        </div>
                    </div>
                    <div class="w-100 d-none d-sm-block d-lg-none"><!-- wrap every 2 on sm--></div>
                    <div class="card mb-4 highlight">
                        <div class="popular-plan text-center"><?php echo APP_TERM_MOSTPOPULAR; ?></div>
                        <div class="card-body rounded-lg">
                            <!-- pricing: pro-plan -->
                            <div itemscope itemtype="http://schema.org/UnitPriceSpecification">
                                <div itemprop="name" class="plan-name text-center mb-2"><?php echo APP_ELEARNING_PRICING_PRO_TITLE; ?></div>
                                <p itemprop="description" class="text-center text-muted mb-3"><?php echo APP_ELEARNING_PRICING_PRO_SUBTITLE; ?></p>
                                <div class="text-center price">
                                    <span itemprop="price" content="<?php echo APP_PRICE_ZERO; ?>"><?php echo APP_ELEARNING_PRICING_PRO_PRICE_MONNTHLY; ?></span>
                                    <meta itemprop="priceCurrency" content="<?php echo APP_PRICE_CURRENCY; ?>">
                                    <span itemprop="billingDuration" content="<?php echo APP_PRICE_MONTHLY; ?>" class="text-small text-center"><?php echo APP_ELEARNING_PRICING_PRO_PRICE_PER_MONTH; ?></span>
                                </div>
                            </div>
                            <a itemprop="url" href="<?php echo APP_ELEARNING_PRICING_PRO_PRICE_BUTTONA_LINK; ?>" class="btn btn-brand btn-block p-2 rounded-pill mt-4"><?php echo APP_ELEARNING_PRICING_PRO_PRICE_BUTTONA_TEXT; ?></a>
                            <!-- pro: set-up service-->
                            <div class="mt-4 text-center"><b><?php echo APP_ELEARNING_PRICING_PRO_BLOCKA_TITLE;?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?> <?php echo APP_YEAR; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_FREE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_UNLIMITED; ?> </strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_FOUR; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_HUNDRED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_THOUSENDS; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROF_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_TEN; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_THREE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_THREE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_REMOVE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_PROK_TEXT; ?>
                                </li>                  
                            </ul>
                            <!-- pro: course-functions service-->
                            <div class="pt-3 text-center"><b><?php echo APP_ELEARNING_PRICING_PRO_BLOCKB_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROF_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROK_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROL_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PROM_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_PRON_TEXT; ?>
                                </li>
                            </ul>
                            <!-- pro: boosters service-->
                            <div class="pt-3 text-center"><b><?php echo APP_ELEARNING_PRICING_PRO_BLOCKC_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROF_TEXT; ?>
                                </li> 
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROK_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROL_TEXT; ?>
                                </li> 
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROM_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PRON_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_PROO_TEXT; ?>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a itemprop="url" href="<?php echo APP_ELEARNING_PRICING_PRO_PRICE_BUTTONB_LINK; ?>" class="btn btn-brand btn-block p-2 rounded-pill"><?php echo APP_ELEARNING_PRICING_PRO_PRICE_BUTTONB_TEXT; ?></a>
                        </div>
                    </div>
                    <div class="w-100 d-none d-sm-block d-lg-none"><!-- wrap every 2 on sm--></div>
                    <div class="card mb-4">
                        <div class="card-body rounded-lg">
                            <!-- pricing: business-plan -->
                            <div itemscope itemtype="http://schema.org/UnitPriceSpecification">
                                <div itemprop="name" class="plan-name text-center mb-2"><?php echo APP_ELEARNING_PRICING_BUSINESS_TITLE; ?></div>
                                <p itemprop="description" class="text-center text-muted mb-3"><?php echo APP_ELEARNING_PRICING_BUSINESS_SUBTITLE; ?></p>
                                <div class="text-center price">
                                    <span itemprop="price" content="<?php echo APP_PRICE_ZERO; ?>"><?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_MONNTHLY; ?></span>
                                    <meta itemprop="priceCurrency" content="<?php echo APP_PRICE_CURRENCY; ?>">
                                    <span itemprop="billingDuration" content="<?php echo APP_PRICE_MONTHLY; ?>" class="text-small text-center"><?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_PER_MONTH; ?></span>
                                </div>
                            </div>                    
                            <a itemprop="url" href="<?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_BUTTONA_TEXT_LINK;?>" class="btn btn-brand-border btn-block p-2 rounded-pill mt-4"><?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_BUTTONA_TEXT;?></a>
                            <!-- business: set-up service-->
                            <div class="mt-4 text-center"><b><?php echo APP_ELEARNING_PRICING_BUSINESS_BLOCKA_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_ONE; ?> <?php echo APP_YEAR; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_FREE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_UNLIMITED; ?> </strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_UNLIMITED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_UNLIMITED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_UNLIMITED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSF_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_FIFTY; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_THREE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo NUMBER_TEN; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_UNLIMITED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_REMOVE; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSK_TEXT; ?>
                                </li> 
                                <li class="mb-3">
                                    <strong><?php echo APP_TERM_ADVANCED; ?></strong> <?php echo APP_ELEARNING_PRICING_BLOCKA_BUSINESSL_TEXT; ?>
                                </li>                 
                            </ul>
                            <!-- business: course-functions service-->
                            <div class="pt-3 text-center"><b><?php echo APP_ELEARNING_PRICING_BUSINESS_BLOCKB_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSF_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSK_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSL_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSM_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKB_BUSINESSN_TEXT; ?>
                                </li>
                            </ul>
                            <!-- business: boosters service-->
                            <div class="pt-3 text-center"><b><?php echo APP_ELEARNING_PRICING_BUSINESS_BLOCKC_TITLE; ?></b></div>
                            <ul class="list-unstyled mt-3 text-small text-center">
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSA_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSB_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSC_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSD_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSE_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSF_TEXT; ?>
                                </li>  
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSG_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSH_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSI_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSJ_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSK_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSL_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSM_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSN_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSO_TEXT; ?>
                                </li>
                                <li class="mb-3">
                                    <?php echo APP_ELEARNING_PRICING_BLOCKC_BUSINESSP_TEXT; ?>
                                </li>                                   
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a itemprop="url" href="<?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_BUTTONB_TEXT_LINK; ?>" class="btn btn-brand-border btn-block p-2 rounded-pill"><?php echo APP_ELEARNING_PRICING_BUSINESS_PRICE_BUTTONB_TEXT; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <?php echo SNIPPET_NAME_PLATO;?> section ends from here -->

