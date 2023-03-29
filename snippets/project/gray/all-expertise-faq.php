<!-- <?php echo SNIPPET_NAME_FALCON; ?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_FALCON); ?>"
         class="<?php echo lcfirst(SNIPPET_NAME_FALCON) . ' ' . APP_NAME . SNIPPET_NAME_FALCON . ' ' . SNIPPET_CATEGORY_FAQS . ' ' . SNIPPET_CSS_CLASSES; ?>"
         itemscope itemtype="https://schema.org/FAQPage">
    <!-- affiliate-faq block main wrapper -->
    <div class="container affiliate-faq faq-list">
        <!-- block title -->
        <div class="row heading mb-4">
            <div class="col-lg-12 text-center">
                <h3 itemprop="headline"><?php echo APP_SOLUTION_FAQ_HEADLINE; ?></h3>
                <p itemprop="description"> <?php echo APP_SOLUTION_FAQ_QUESTIONA_DETAILS; ?> </p>
            </div>
        </div>
        <!-- faq list -->
        <div class="row">
            <div class="col-lg-8 offset-lg-2">


                <?php if ($_GET['q'] == 'project-consultancy') { ?>

                    <h4 itemprop="headline"><?php echo APP_PROJECT_CONSULTANCY_SOLUTION_FAQ_TOPICI_TITLE; ?></h4>
                    <div class="accordion" id="faq9">

                        <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <div class="card-header" id="faq9-head1">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                   data-target="#faq9-body1" aria-expanded="true"><span
                                            itemprop="name"><?php echo APP_PROJECT_CONSULTANCY_SOLUTION_FAQ_TOPICI_QUESTIONA; ?></span></a>
                            </div>
                            <div id="faq9-body1" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                <div class="card-body" itemscope itemprop="acceptedAnswer"
                                     itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                        <?php echo APP_PROJECT_CONSULTANCY_SOLUTION_FAQ_TOPICI_ANSWERA; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <div class="card-header" id="faq9-head2">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                   data-target="#faq9-body2" aria-expanded="true"><span
                                            itemprop="name"><?php echo APP_PROJECT_CONSULTANCY_SOLUTION_FAQ_TOPICI_QUESTIONB; ?></span></a>
                            </div>
                            <div id="faq9-body2" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                <div class="card-body" itemscope itemprop="acceptedAnswer"
                                     itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                        <?php echo APP_PROJECT_CONSULTANCY_SOLUTION_FAQ_TOPICI_ANSWERB; ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <div class="card-header" id="faq9-head3">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                   data-target="#faq9-body3" aria-expanded="true"><span
                                            itemprop="name"><?php echo APP_PROJECT_CONSULTANCY_SOLUTION_FAQ_TOPICI_QUESTIONC; ?></span></a>
                            </div>
                            <div id="faq9-body3" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                <div class="card-body" itemscope itemprop="acceptedAnswer"
                                     itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                        <?php echo APP_PROJECT_CONSULTANCY_SOLUTION_FAQ_TOPICI_ANSWERC; ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <div class="card-header" id="faq9-head4">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                   data-target="#faq9-body4" aria-expanded="true"><span
                                            itemprop="name"><?php echo APP_PROJECT_CONSULTANCY_SOLUTION_FAQ_TOPICI_QUESTIOND; ?></span></a>
                            </div>
                            <div id="faq9-body4" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                <div class="card-body" itemscope itemprop="acceptedAnswer"
                                     itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                        <?php echo APP_PROJECT_CONSULTANCY_SOLUTION_FAQ_TOPICI_ANSWERD; ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <div class="card-header" id="faq9-head5">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                   data-target="#faq9-body5" aria-expanded="true"><span
                                            itemprop="name"><?php echo APP_PROJECT_CONSULTANCY_SOLUTION_FAQ_TOPICI_QUESTIONE; ?></span></a>
                            </div>
                            <div id="faq9-body5" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                <div class="card-body" itemscope itemprop="acceptedAnswer"
                                     itemtype="https://schema.org/Answer">
                                    <div itemprop="text">
                                        <?php echo APP_PROJECT_CONSULTANCY_SOLUTION_FAQ_TOPICI_ANSWERE; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <?php } elseif ($_GET['q'] == 'project-management') { ?>


                        <h4 itemprop="headline"><?php echo APP_PROJECT_MANAGEMENT_SOLUTION_FAQ_TOPICI_TITLE; ?></h4>
                        <div class="accordion" id="faq9">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_PROJECT_MANAGEMENT_SOLUTION_FAQ_TOPICI_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq9-body1" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_PROJECT_MANAGEMENT_SOLUTION_FAQ_TOPICI_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_PROJECT_MANAGEMENT_SOLUTION_FAQ_TOPICI_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq9-body2" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_PROJECT_MANAGEMENT_SOLUTION_FAQ_TOPICI_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body3" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_PROJECT_MANAGEMENT_SOLUTION_FAQ_TOPICI_QUESTIONC; ?></span></a>
                                </div>
                                <div id="faq9-body3" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_PROJECT_MANAGEMENT_SOLUTION_FAQ_TOPICI_ANSWERC; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head4">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body4" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_PROJECT_MANAGEMENT_SOLUTION_FAQ_TOPICI_QUESTIOND; ?></span></a>
                                </div>
                                <div id="faq9-body4" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_PROJECT_MANAGEMENT_SOLUTION_FAQ_TOPICI_ANSWERD; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head5">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body5" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_PROJECT_MANAGEMENT_SOLUTION_FAQ_TOPICI_QUESTIONE; ?></span></a>
                                </div>
                                <div id="faq9-body5" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_PROJECT_MANAGEMENT_SOLUTION_FAQ_TOPICI_ANSWERE; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } elseif ($_GET['q'] == 'design') { ?>

                        <h4 itemprop="headline"><?php echo APP_DESIGN_SOLUTION_FAQ_TOPICI_TITLE; ?></h4>
                        <div class="accordion" id="faq9">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DESIGN_SOLUTION_FAQ_TOPICI_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq9-body1" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DESIGN_SOLUTION_FAQ_TOPICI_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DESIGN_SOLUTION_FAQ_TOPICI_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq9-body2" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DESIGN_SOLUTION_FAQ_TOPICI_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body3" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DESIGN_SOLUTION_FAQ_TOPICI_QUESTIONC; ?></span></a>
                                </div>
                                <div id="faq9-body3" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DESIGN_SOLUTION_FAQ_TOPICI_ANSWERC; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    <?php } elseif ($_GET['q'] == 'development') { ?>

                        <h4 itemprop="headline"><?php echo APP_DEVELELOPMENT_SOLUTION_FAQ_TOPICI_TITLE; ?></h4>
                        <div class="accordion" id="faq9">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DEVELELOPMENT_SOLUTION_FAQ_TOPICI_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq9-body1" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DEVELELOPMENT_SOLUTION_FAQ_TOPICI_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DEVELELOPMENT_SOLUTION_FAQ_TOPICI_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq9-body2" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DEVELELOPMENT_SOLUTION_FAQ_TOPICI_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body3" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DEVELELOPMENT_SOLUTION_FAQ_TOPICI_QUESTIONC; ?></span></a>
                                </div>
                                <div id="faq9-body3" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DEVELELOPMENT_SOLUTION_FAQ_TOPICI_ANSWERC; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head4">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body4" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DEVELELOPMENT_SOLUTION_FAQ_TOPICI_QUESTIOND; ?></span></a>
                                </div>
                                <div id="faq9-body4" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DEVELELOPMENT_SOLUTION_FAQ_TOPICI_ANSWERD; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    <?php } elseif ($_GET['q'] == 'testing') { ?>

                        <h4 itemprop="headline"><?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_TITLE; ?></h4>
                        <div class="accordion" id="faq9">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq9-body1" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq9-body2" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body3" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_QUESTIONC; ?></span></a>
                                </div>
                                <div id="faq9-body3" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_ANSWERC; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head4">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body4" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_QUESTIOND; ?></span></a>
                                </div>
                                <div id="faq9-body4" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_ANSWERD; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head5">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body5" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_QUESTIONE; ?></span></a>
                                </div>
                                <div id="faq9-body5" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_ANSWERE; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head6">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body6" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_QUESTIONF; ?></span></a>
                                </div>
                                <div id="faq9-body6" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_SOLUTION_FAQ_TOPICI_ANSWERF; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } elseif ($_GET['q'] == 'maintenance') { ?>


                        <h4 itemprop="headline"><?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_TITLE; ?></h4>
                        <div class="accordion" id="faq9">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq9-body1" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq9-body2" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body3" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_QUESTIONC; ?></span></a>
                                </div>
                                <div id="faq9-body3" class="collapse" aria-labelledby="faq9-head1" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_ANSWERC; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head4">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body4" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_QUESTIOND; ?></span></a>
                                </div>
                                <div id="faq9-body4" class="collapse" aria-labelledby="faq9-head4" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_ANSWERD; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head5">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body5" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_QUESTIONE; ?></span></a>
                                </div>
                                <div id="faq9-body5" class="collapse" aria-labelledby="faq9-head5" data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_ANSWERE; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head6">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body6" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_QUESTIONF; ?></span></a>
                                </div>
                                <div id="faq9-body6" class="collapse" aria-labelledby="faq9-head6"
                                     data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_ANSWERF; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head7">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body7" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_QUESTIONG; ?></span></a>
                                </div>
                                <div id="faq9-body7" class="collapse" aria-labelledby="faq9-head9"
                                     data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_ANSWERG; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head8">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body8" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_QUESTIONH; ?></span></a>
                                </div>
                                <div id="faq9-body8" class="collapse" aria-labelledby="faq9-head8"
                                     data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_ANSWERH; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head9">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body9" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_QUESTIONI; ?></span></a>
                                </div>
                                <div id="faq9-body9" class="collapse" aria-labelledby="faq9-head9"
                                     data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_ANSWERI; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq9-head10">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq9-body10" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_QUESTIONJ; ?></span></a>
                                </div>
                                <div id="faq9-body10" class="collapse" aria-labelledby="faq9-head10"
                                     data-parent="#faq9">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_SOLUTION_FAQ_TOPICI_ANSWERJ; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    <?php } ?>


                    <!-- Cost -->

                    <?php if ($_GET['q'] == 'project-consultancy') { ?>

                        <h4 itemprop="headline"><?php echo APP_CONSULTANCY_FAQ_TOPICM_TITLE; ?></h4>
                        <div class="accordion" id="faq2">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_CONSULTANCY_FAQ_TOPICM_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq2-body1" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_CONSULTANCY_FAQ_TOPICM_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_CONSULTANCY_FAQ_TOPICM_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq2-body2" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_CONSULTANCY_FAQ_TOPICM_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body3" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_CONSULTANCY_FAQ_TOPICM_QUESTIONC; ?></span></a>
                                </div>
                                <div id="faq2-body3" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_CONSULTANCY_FAQ_TOPICM_ANSWERC; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    <?php } elseif ($_GET['q'] == 'project-management') { ?>

                        <h4 itemprop="headline"><?php echo APP_MANAGEMENT_FAQ_TOPICN_TITLE; ?></h4>
                        <div class="accordion" id="faq2">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MANAGEMENT_FAQ_TOPICN_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq2-body1" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MANAGEMENT_FAQ_TOPICN_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MANAGEMENT_FAQ_TOPICN_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq2-body2" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MANAGEMENT_FAQ_TOPICN_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body3" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MANAGEMENT_FAQ_TOPICN_QUESTIONC; ?></span></a>
                                </div>
                                <div id="faq2-body3" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MANAGEMENT_FAQ_TOPICN_ANSWERC; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    <?php } elseif ($_GET['q'] == 'design') { ?>

                        <h4 itemprop="headline"><?php echo APP_DESIGN_COST_FAQ_TOPICP_TITLE; ?></h4>
                        <div class="accordion" id="faq2">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DESIGN_COST_FAQ_TOPICP_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq2-body1" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DESIGN_COST_FAQ_TOPICP_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DESIGN_COST_FAQ_TOPICP_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq2-body2" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DESIGN_COST_FAQ_TOPICP_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } elseif ($_GET['q'] == 'development') { ?>

                        <h4 itemprop="headline"><?php echo APP_DEVELOPMENT_COST_FAQ_TOPICP_TITLE; ?></h4>
                        <div class="accordion" id="faq2">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DEVELOPMENT_COST_FAQ_TOPICP_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq2-body1" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DEVELOPMENT_COST_FAQ_TOPICP_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DEVELOPMENT_COST_FAQ_TOPICP_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq2-body2" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DEVELOPMENT_COST_FAQ_TOPICP_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body3" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DEVELOPMENT_COST_FAQ_TOPICP_QUESTIONC; ?></span></a>
                                </div>
                                <div id="faq2-body3" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DEVELOPMENT_COST_FAQ_TOPICP_ANSWERC; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head4">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body4" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DEVELOPMENT_COST_FAQ_TOPICP_QUESTIOND; ?></span></a>
                                </div>
                                <div id="faq2-body4" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DEVELOPMENT_COST_FAQ_TOPICP_ANSWERD; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head5">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body5" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DEVELOPMENT_COST_FAQ_TOPICP_QUESTIONE; ?></span></a>
                                </div>
                                <div id="faq2-body5" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DEVELOPMENT_COST_FAQ_TOPICP_ANSWERE; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } elseif ($_GET['q'] == 'testing') { ?>

                        <h4 itemprop="headline"><?php echo APP_TESTING_COST_FAQ_TOPICP_TITLE; ?></h4>
                        <div class="accordion" id="faq2">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_COST_FAQ_TOPICP_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq2-body1" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_COST_FAQ_TOPICP_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_COST_FAQ_TOPICP_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq2-body2" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_COST_FAQ_TOPICP_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body3" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_COST_FAQ_TOPICP_QUESTIONC; ?></span></a>
                                </div>
                                <div id="faq2-body3" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_COST_FAQ_TOPICP_ANSWERC; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head4">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body4" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_COST_FAQ_TOPICP_QUESTIOND; ?></span></a>
                                </div>
                                <div id="faq2-body4" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_COST_FAQ_TOPICP_ANSWERD; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head5">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body5" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_COST_FAQ_TOPICP_QUESTIONE; ?></span></a>
                                </div>
                                <div id="faq2-body5" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_COST_FAQ_TOPICP_ANSWERE; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } elseif ($_GET['q'] == 'maintenance') { ?>

                        <h4 itemprop="headline"><?php echo APP_MAINTENANCE_COST_FAQ_TOPICP_TITLE; ?></h4>
                        <div class="accordion" id="faq2">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_COST_FAQ_TOPICP_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq2-body1" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_COST_FAQ_TOPICP_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_COST_FAQ_TOPICP_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq2-body2" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_COST_FAQ_TOPICP_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq2-head3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq2-body3" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_COST_FAQ_TOPICP_QUESTIONC; ?></span></a>
                                </div>
                                <div id="faq2-body3" class="collapse" aria-labelledby="faq2-head1" data-parent="#faq2">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_COST_FAQ_TOPICP_ANSWERC; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    <?php } ?>


                    <!-- Cancellations & Refunds -->

                    <?php if ($_GET['q'] == 'project-consultancy') { ?>

                        <h4 itemprop="headline"><?php echo APP_CONSULTANCY_FAQ_TOPICL_TITLE; ?></h4>
                        <div class="accordion" id="faq10">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq10-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq10-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_CONSULTANCY_FAQ_TOPICL_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq10-body1" class="collapse" aria-labelledby="faq10-head1"
                                     data-parent="#faq10">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_CONSULTANCY_FAQ_TOPICL_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq10-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq10-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_CONSULTANCY_FAQ_TOPICL_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq10-body2" class="collapse" aria-labelledby="faq10-head1"
                                     data-parent="#faq10">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_CONSULTANCY_FAQ_TOPICL_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <?php } elseif ($_GET['q'] == 'project-management') { ?>

                        <h4 itemprop="headline"><?php echo APP_MANAGEMENT_FAQ_TOPICO_TITLE; ?></h4>
                        <div class="accordion" id="faq10">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq10-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq10-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MANAGEMENT_FAQ_TOPICO_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq10-body1" class="collapse" aria-labelledby="faq10-head1"
                                     data-parent="#faq10">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MANAGEMENT_FAQ_TOPICO_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq10-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq10-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MANAGEMENT_FAQ_TOPICO_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq10-body2" class="collapse" aria-labelledby="faq10-head1"
                                     data-parent="#faq10">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MANAGEMENT_FAQ_TOPICO_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } elseif ($_GET['q'] == 'development') { ?>

                        <h4 itemprop="headline"><?php echo APP_DEVELOPMENT_CANCELLATION_FAQ_TOPICO_TITLE; ?></h4>
                        <div class="accordion" id="faq10">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq10-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq10-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DEVELOPMENT_CANCELLATION_FAQ_TOPICO_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq10-body1" class="collapse" aria-labelledby="faq10-head1"
                                     data-parent="#faq10">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DEVELOPMENT_CANCELLATION_FAQ_TOPICO_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } elseif ($_GET['q'] == 'testing') { ?>

                        <h4 itemprop="headline"><?php echo APP_TESTING_CANCELLATION_FAQ_TOPICO_TITLE; ?></h4>
                        <div class="accordion" id="faq10">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq10-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq10-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_CANCELLATION_FAQ_TOPICO_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq10-body1" class="collapse" aria-labelledby="faq10-head1"
                                     data-parent="#faq10">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_CANCELLATION_FAQ_TOPICO_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } elseif ($_GET['q'] == 'maintenance') { ?>

                        <h4 itemprop="headline"><?php echo APP_MAINTENANCE_CANCELLATION_FAQ_TOPICO_TITLE; ?></h4>
                        <div class="accordion" id="faq10">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq10-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq10-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_CANCELLATION_FAQ_TOPICO_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq10-body1" class="collapse" aria-labelledby="faq10-head1"
                                     data-parent="#faq10">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_CANCELLATION_FAQ_TOPICO_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } ?>


                    <!-- Help and support -->

                    <?php if ($_GET['q'] == 'project-consultancy') { ?>
                        <h4 itemprop="headline"><?php echo APP_CONSULTANCY_FAQ_TOPICK_TITLE; ?></h4>
                        <div class="accordion" id="faq1">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq1-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq1-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_CONSULTANCY_FAQ_TOPICK_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq1-body1" class="collapse" aria-labelledby="faq1-head1" data-parent="#faq1">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_CONSULTANCY_FAQ_TOPICK_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq1-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq1-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_CONSULTANCY_FAQ_TOPICK_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq1-body2" class="collapse" aria-labelledby="faq1-head1" data-parent="#faq1">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_CONSULTANCY_FAQ_TOPICK_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <?php } elseif ($_GET['q'] == 'project-management') { ?>

                        <h4 itemprop="headline"><?php echo APP_CONSULTANCY_FAQ_TOPICK_TITLE; ?></h4>
                        <div class="accordion" id="faq1">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq1-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq1-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_CONSULTANCY_FAQ_TOPICK_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq1-body1" class="collapse" aria-labelledby="faq1-head1" data-parent="#faq1">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_CONSULTANCY_FAQ_TOPICK_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq1-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq1-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_CONSULTANCY_FAQ_TOPICK_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq1-body2" class="collapse" aria-labelledby="faq1-head1" data-parent="#faq1">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_CONSULTANCY_FAQ_TOPICK_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } elseif ($_GET['q'] == 'development') { ?>

                        <h4 itemprop="headline"><?php echo APP_DEVELOPMENT_HELP_FAQ_TOPICK_TITLE; ?></h4>
                        <div class="accordion" id="faq1">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq1-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq1-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DEVELOPMENT_HELP_FAQ_TOPICK_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq1-body1" class="collapse" aria-labelledby="faq1-head1" data-parent="#faq1">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DEVELOPMENT_HELP_FAQ_TOPICK_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq1-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq1-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DEVELOPMENT_HELP_FAQ_TOPICK_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq1-body2" class="collapse" aria-labelledby="faq1-head1" data-parent="#faq1">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DEVELOPMENT_HELP_FAQ_TOPICK_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } elseif ($_GET['q'] == 'testing') { ?>

                        <h4 itemprop="headline"><?php echo APP_TESTING_HELP_FAQ_TOPICK_TITLE; ?></h4>
                        <div class="accordion" id="faq1">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq1-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq1-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_HELP_FAQ_TOPICK_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq1-body1" class="collapse" aria-labelledby="faq1-head1" data-parent="#faq1">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_HELP_FAQ_TOPICK_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq1-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq1-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_TESTING_HELP_FAQ_TOPICK_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq1-body2" class="collapse" aria-labelledby="faq1-head1" data-parent="#faq1">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_TESTING_HELP_FAQ_TOPICK_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } elseif ($_GET['q'] == 'maintenance') { ?>

                        <h4 itemprop="headline"><?php echo APP_MAINTENANCE_HELP_FAQ_TOPICK_TITLE; ?></h4>
                        <div class="accordion" id="faq1">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq1-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq1-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_HELP_FAQ_TOPICK_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq1-body1" class="collapse" aria-labelledby="faq1-head1" data-parent="#faq1">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_HELP_FAQ_TOPICK_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq1-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq1-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_MAINTENANCE_HELP_FAQ_TOPICK_QUESTIONB; ?>
                                        </span>
                                    </a>
                                </div>
                                <div id="faq1-body2" class="collapse" aria-labelledby="faq1-head1" data-parent="#faq1">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_MAINTENANCE_HELP_FAQ_TOPICK_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php } ?>


                    <!-- Ownership -->

                    <?php if ($_GET['q'] == 'design') { ?>

                        <h4 itemprop="headline"><?php echo APP_DESIGN_OWNERSHIP_FAQ_TOPICP_TITLE; ?></h4>
                        <div class="accordion" id="faq12">

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq12-head1">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq12-body1" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DESIGN_OWNERSHIP_FAQ_TOPICP_QUESTIONA; ?></span></a>
                                </div>
                                <div id="faq12-body1" class="collapse" aria-labelledby="faq12-head1"
                                     data-parent="#faq12">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DESIGN_OWNERSHIP_FAQ_TOPICP_ANSWERA; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" id="faq12-head2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                       data-target="#faq12-body2" aria-expanded="true"><span
                                                itemprop="name"><?php echo APP_DESIGN_OWNERSHIP_FAQ_TOPICP_QUESTIONB; ?></span></a>
                                </div>
                                <div id="faq12-body2" class="collapse" aria-labelledby="faq12-head1"
                                     data-parent="#faq12">
                                    <div class="card-body" itemscope itemprop="acceptedAnswer"
                                         itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <?php echo APP_DESIGN_OWNERSHIP_FAQ_TOPICP_ANSWERB; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- <?php echo SNIPPET_NAME_FALCON; ?> section ends from here-->