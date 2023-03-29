<!-- <?php echo SNIPPET_NAME_FALCON; ?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_FALCON); ?>"
         class="<?php echo lcfirst(SNIPPET_NAME_FALCON) . ' ' . APP_NAME . SNIPPET_NAME_FALCON . ' ' . SNIPPET_CATEGORY_FAQS . ' ' . SNIPPET_CSS_CLASSES; ?>"
         itemscope itemtype="https://schema.org/FAQPage">
    <!-- affiliate-faq block main wrapper -->
    <div class="container affiliate-faq faq-list mt-5">
        <!-- block title -->
        <div class="row heading mb-4 pt-3">
            <div class="col-lg-12 text-center">
                <h3 itemprop="headline"><?php echo APP_PARTNER_FAQ_HEADLINE; ?></h3>
            </div>
        </div>
        <!-- faq list -->
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <h4 itemprop="headline"><?php echo APP_PARTNER_FAQ_PROGRAMME_TITLE; ?></h4>
                <div class="accordion" id="faq1">

                    <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="card-header" id="faq1-head1">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                               data-target="#faq1-body1" aria-expanded="true"><span
                                        itemprop="name"><?php echo APP_PARTNER_FAQ_PROGRAMME_QUESTIONA_TITLE; ?></span></a>
                        </div>
                        <div id="faq1-body1" class="collapse" aria-labelledby="faq1-head1" data-parent="#faq1">
                            <div class="card-body" itemscope itemprop="acceptedAnswer"
                                 itemtype="https://schema.org/Answer">
                                <div itemprop="text">
                                    <?php echo APP_PARTNER_FAQ_PROGRAMME_QUESTIONA_DETAILS; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="card-header" id="faq1-head2">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                               data-target="#faq1-body2" aria-expanded="true"><span
                                        itemprop="name"><?php echo APP_PARTNER_FAQ_PROGRAMME_QUESTIONB_TITLE; ?></span></a>
                        </div>
                        <div id="faq1-body2" class="collapse" aria-labelledby="faq1-head2" data-parent="#faq1">
                            <div class="card-body" itemscope itemprop="acceptedAnswer"
                                 itemtype="https://schema.org/Answer">
                                <div itemprop="text">
                                    <?php echo APP_PARTNER_FAQ_PROGRAMME_QUESTIONB_DETAILS; ?>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                <h4 itemprop="headline"><?php echo APP_PARTNER_FAQ_EARNINGS_TITLE; ?></h4>
                <div class="accordion" id="faq2">


                    <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="card-header" id="faq2-head1">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                               data-target="#faq2-body1" aria-expanded="true"><span
                                        itemprop="name"><?php echo APP_PARTNER_FAQ_EARNINGS_QUESTIONA_TITLE; ?></span></a>
                        </div>
                        <div id="faq2-body1" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                            <div class="card-body" itemscope itemprop="acceptedAnswer"
                                 itemtype="https://schema.org/Answer">
                                <div itemprop="text">
                                    <?php echo APP_PARTNER_FAQ_EARNINGS_QUESTIONA_DETAILS; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="card-header" id="faq2-head2">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                               data-target="#faq2-body2" aria-expanded="true"><span
                                        itemprop="name"><?php echo APP_PARTNER_FAQ_EARNINGS_QUESTIONB_TITLE; ?></span></a>
                        </div>
                        <div id="faq2-body2" class="collapse" aria-labelledby="faq2-head2" data-parent="#faq2">
                            <div class="card-body" itemscope itemprop="acceptedAnswer"
                                 itemtype="https://schema.org/Answer">
                                <div itemprop="text">
                                    <?php echo APP_PARTNER_FAQ_EARNINGS_QUESTIONB_DETAILS; ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="card-header" id="faq2-head3">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                               data-target="#faq2-body3" aria-expanded="true"><span
                                        itemprop="name"><?php echo APP_PARTNER_FAQ_EARNINGS_QUESTIONC_TITLE; ?></span></a>
                        </div>
                        <div id="faq2-body3" class="collapse" aria-labelledby="faq2-head3" data-parent="#faq2">
                            <div class="card-body" itemscope itemprop="acceptedAnswer"
                                 itemtype="https://schema.org/Answer">
                                <div itemprop="text">
                                    <?php echo APP_PARTNER_FAQ_EARNINGS_QUESTIONC_DETAILS; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <h4 itemprop="headline"><?php echo APP_PARTNER_FAQ_PAYOUTS_TITLE; ?></h4>
                <div class="accordion" id="faq3">
                    <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="card-header" id="faq3-head1">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                               data-target="#faq3-body1" aria-expanded="true"><span
                                        itemprop="name"><?php echo APP_PARTNER_FAQ_PAYOUTS_QUESTIONA_TITLE; ?></span></a>
                        </div>
                        <div id="faq3-body1" class="collapse" aria-labelledby="faq3-head1" data-parent="#faq3">
                            <div class="card-body" itemscope itemprop="acceptedAnswer"
                                 itemtype="https://schema.org/Answer">
                                <div itemprop="text">
                                    <?php echo APP_PARTNER_FAQ_PAYOUTS_QUESTIONA_DETAILS; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <h4 itemprop="headline"><?php echo APP_PARTNER_FAQ_CONTACT_TITLE; ?></h4>
                <div class="accordion" id="faq5">
                    <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="card-header" id="faq5-head1">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                               data-target="#faq5-body1" aria-expanded="true"><span
                                        itemprop="name"><?php echo APP_PARTNER_FAQ_CONTACT_QUESTIONA_TITLE; ?></span></a>
                        </div>
                        <div id="faq5-body1" class="collapse" aria-labelledby="faq5-head1" data-parent="#faq5">
                            <div class="card-body" itemscope itemprop="acceptedAnswer"
                                 itemtype="https://schema.org/Answer">
                                <div itemprop="text">
                                    <?php echo APP_PARTNER_FAQ_CONTACT_QUESTIONA_DETAILS; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <?php echo SNIPPET_NAME_FALCON; ?> section ends from here-->

