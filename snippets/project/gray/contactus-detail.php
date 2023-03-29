<!-- <?php echo SNIPPET_NAME_CORDELL; ?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_CORDELL); ?>"
         class="<?php echo lcfirst(SNIPPET_NAME_CORDELL) . ' ' . APP_NAME . SNIPPET_NAME_CORDELL . ' ' . SNIPPET_CATEGORY_CONTACTS . ' ' . SNIPPET_CSS_CLASSES; ?> contact-details"
         itemscope itemtype="http://schema.org/Organization">
    <!-- contactus page title wrapper -->
    <div class="page-title text-white">
        <div class="container page-title-container">
            <div class="row page-title-text">
                <div class="col-lg-12 text-center">
                    <h1 itemprop="name"><?php echo APP_CONTACTUS_HEADLINE; ?></h1>
                    <p itemprop="description" class="lead"><?php echo APP_CONTACTUS_SUBHEADLINE; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-detail main wrapper -->
    <div class="container contact-detail pt-5 mt-4">
        <div class="row mb-4">
            <!-- contact form -->
            <div class="col-lg-6 contact-form">
                <div class="contact-form-box">
                    <p class="lead pb-4" itemprop="description">
                        <?php echo APP_CONTACTUS_SHORTDESCRIPTION; ?>
                    </p>
                    <form method="post" id="<?php echo APP_NAME; ?>Contactus" class="<?php echo APP_NAME; ?>Contactus"
                          enctype="multipart/form-data" action="/thank-you.php">

                        <div class="form-group">
                            <input type="text" name="fullname" class="form-control" id="fullname"
                                   placeholder="<?php echo APP_CONTACTUS_NAME; ?>" required
                                   aria-label="<?php echo APP_CONTACTUS_NAME; ?>">
                        </div>


                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="<?php echo APP_CONTACTUS_EMAIL; ?>" required
                                   aria-label="<?php echo APP_CONTACTUS_EMAIL; ?>">
                        </div>
                        <div class="form-group">

                            <input type="tel" class="form-control" name="phonenumber" id="phone"
                                   placeholder="<?php echo APP_CONTACTUS_PHONE; ?>" required
                                   aria-label="<?php echo APP_CONTACTUS_PHONE; ?>">
                        </div>
                        <div class="form-group">
                            <select id="enqury-solution" class="form-control" required name="solution">
                                <option value="" selected><?php echo APP_CONTACTUS_SELECTION_DEFAULT_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_SELECTIONA_TEXT; ?>"><?php echo APP_CONTACTUS_SELECTIONA_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_SELECTIONB_TEXT; ?>"><?php echo APP_CONTACTUS_SELECTIONB_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_SELECTIONC_TEXT; ?>"><?php echo APP_CONTACTUS_SELECTIONC_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_SELECTIOND_TEXT; ?>"><?php echo APP_CONTACTUS_SELECTIOND_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_SELECTIONE_TEXT; ?>"><?php echo APP_CONTACTUS_SELECTIONE_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_SELECTIONF_TEXT; ?>"><?php echo APP_CONTACTUS_SELECTIONF_TEXT; ?></option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select id="enqury-service" class="form-control" required name="service">
                                <option value="" selected><?php echo APP_CONTACTUS_SEERVICE_DEFAULT_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_SEERVICEA_TEXT; ?>"><?php echo APP_CONTACTUS_SEERVICEA_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_SEERVICEB_TEXT; ?>"><?php echo APP_CONTACTUS_SEERVICEB_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_SEERVICEC_TEXT; ?>"><?php echo APP_CONTACTUS_SEERVICEC_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_SEERVICED_TEXT; ?>"><?php echo APP_CONTACTUS_SEERVICED_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_SEERVICEE_TEXT; ?>"><?php echo APP_CONTACTUS_SEERVICEE_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_SEERVICEF_TEXT; ?>"><?php echo APP_CONTACTUS_SEERVICEF_TEXT; ?></option>

                            </select>
                        </div>


                        <div class="form-group">
                            <select id="enqury-budget" class="form-control" required name="budget">
                                <option value="" selected><?php echo APP_CONTACTUS_PRICE_DEFAULT_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_PRICEA_TEXT; ?>"><?php echo APP_CONTACTUS_PRICEA_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_PRICEB_TEXT; ?>"><?php echo APP_CONTACTUS_PRICEB_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_PRICEC_TEXT; ?>"><?php echo APP_CONTACTUS_PRICEC_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_PRICED_TEXT; ?>"><?php echo APP_CONTACTUS_PRICED_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_PRICEE_TEXT; ?>"><?php echo APP_CONTACTUS_PRICEE_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_PRICEF_TEXT; ?>"><?php echo APP_CONTACTUS_PRICEF_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_PRICEG_TEXT; ?>"><?php echo APP_CONTACTUS_PRICEG_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_PRICEH_TEXT; ?>"><?php echo APP_CONTACTUS_PRICEH_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_PRICEI_TEXT; ?>"><?php echo APP_CONTACTUS_PRICEI_TEXT; ?></option>
                                <option value="<?php echo APP_CONTACTUS_PRICEJ_TEXT; ?>"><?php echo APP_CONTACTUS_PRICEJ_TEXT; ?></option>
                            </select>
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" cols="30" rows="6"
                                      placeholder="<?php echo APP_CONTACTUS_MESSAGE; ?>" required
                                      aria-label="<?php echo APP_CONTACTUS_MESSAGE; ?>"></textarea>
                        </div>
                        <!--<input type="hidden" name="token_gnerate" id="token_gnerate">-->
                        <!-- <div id='recaptcha' class="g-recaptcha"
                             data-sitekey="6LfpSI0fAAAAAPc2FZMfty_cTDY2Zshx4SzQ6vIP"
                             data-callback="onSubmit"
                             data-size="invisible"></div> -->

                        <div id="alert"></div>
                         <input type="hidden" name="recaptcha_response" id="recaptchaResponse">


                        <button type="submit" class="btn btn-brand" id="submit-button"><?php echo APP_CONTACTUS_FORM_SUBMIT_TEXT; ?> <i
                                    class="fas fa-arrow-circle-right"></i></button>



                        





                    </form>
                </div>
            </div>
            <!-- contact info -->
            <div class="col-lg-6 contact-type">
                <!-- contact type -->
                <div class="row">
                    <!-- <div class="col-lg-6">
        <div class="contact-type-box email">
              <h5><i class="<?php echo APP_CONTACTUS_BLOCKD_ICON; ?>"></i><span itemprop="name"><?php echo APP_CONTACTUS_BLOCKD_TITLE; ?></span></h5>
              <p class="lead pb-4" itemprop="email"><?php echo APP_CONTACTUS_BLOCKD_DESCRITPION; ?></p>
              <div class="contact-link">
                <a itemprop="url" href="<?php echo APP_CONTACTUS_BLOCKD_LINK; ?>"><?php echo APP_CONTACTUS_BLOCKD_LINK_TEXT; ?> <i class="<?php echo APP_CONTACTUS_BLOCKD_LINK_ICON; ?>"></i></a>
              </div>
            </div>

            

          </div> -->
                    <div class="col">
                        <div class="contact-type-box address">
                            <h5><i class="fa fa-map-marker" aria-hidden="true"></i> <span
                                        itemprop="name"><?php echo APP_CONTACTUS_BLOCKB_TITLE; ?></span></h5>
                            <p class="lead pb-4" itemprop="address" itemscope
                               itemtype="https://schema.org/PostalAddress">
                                <span itemprop="streetAddress"><?php echo APP_ADDRESS_STREET; ?></span>
                                <span itemprop="addressLocality"><?php echo APP_ADDRESS_LOCALITY; ?></span>
                                <span itemprop="postalCode"><?php echo APP_ADDRESS_POSTAL_CODE; ?></span>
                            <h5>
                                <a href="tel:+448081751749">
                                    <span itemprop="telephone"><i
                                                class="fas fa-phone"></i> </span> <?php echo APP_PHONE ?>
                                </a>
                            </h5>


                            <div class="contact-link">
                                <a itemprop="url" href="<?php echo APP_CONTACTUS_BLOCKB_LINK; ?>"
                                   target="_blank"><?php echo APP_CONTACTUS_BLOCKB_LINK_TEXT; ?> <i
                                            class="<?php echo APP_CONTACTUS_BLOCKB_LINK_ICON; ?>"></i></a>
                            </div>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2490.4299216951267!2d-0.09945878423482073!3d51.37677607961389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760732678be62f%3A0x800950b713353a52!2sLansdowne%20Rd%2C%20Croydon%20CR0%202BX!5e0!3m2!1sen!2suk!4v1645623288123!5m2!1sen!2suk"
                            width="600" height="370" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <!-- social links -->
                <div class="row social-links">
                    <div class="col-lg-12 text-right">
                        <a itemprop="sameAs" class="btn social-icon mx-1" href="<?php echo APP_FACEBOOK_LINK; ?>"
                           title="<?php echo APP_FACEBOOK_TITLE; ?>" target="_blank"><i
                                    class="<?php echo APP_FACEBOOK_ICON; ?>"></i></a>
                        <a itemprop="sameAs" class="btn social-icon mx-1" href="<?php echo APP_TWITTER_LINK; ?>"
                           title="<?php echo APP_TWITTER_TITLE; ?>" target="_blank"><i
                                    class="<?php echo APP_TWITTER_ICON; ?>"></i></a>
                        <a itemprop="sameAs" class="btn social-icon mx-1" href="<?php echo APP_LINKEDIN_LINK; ?>"
                           title="<?php echo APP_LINKEDIN_TITLE; ?>" target="_blank"><i
                                    class="<?php echo APP_LINKEDIN_ICON; ?>"></i></a>
                        <a itemprop="sameAs" class="btn social-icon mx-1" href="<?php echo APP_YOUTUBE_LINK; ?>"
                           title="<?php echo APP_YOUTUBE_TITLE; ?>" target="_blank"><i
                                    class="<?php echo APP_YOUTUBE_ICON; ?>"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <?php echo SNIPPET_NAME_CORDELL; ?> section ends from here-->