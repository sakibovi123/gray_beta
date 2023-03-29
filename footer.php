<!-- <?php echo SNIPPET_NAME_FORTUNE;?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_FORTUNE);?>" class="<?php echo lcfirst(SNIPPET_NAME_FORTUNE).' '.APP_NAME.SNIPPET_NAME_FORTUNE.' '.SNIPPET_CATEGORY_FOOTER.' '.SNIPPET_CSS_CLASSES;?>">
    <!-- footer wrapper -->
    <footer itemprop="hasPart" itemscope itemtype="https://schema.org/WPFooter">


        <div class="container">

<!--        <div class="d-flex test-nasir">-->
<!---->
<!--            <p><button class="ok"><a href="--><?php //echo APP_FOOTER_MENU_BLOCKA_MENUA_TEXT_LINK ?><!--">e-learning </a></button></p>&nbsp;-->
<!--            <p><button class="ok"><a href="--><?php //echo APP_FOOTER_MENU_BLOCKA_MENUB_TEXT_LINK ?><!--">e-commerce</a></button></p>&nbsp;-->
<!--            <p><button class="ok"><a href="--><?php //echo APP_FOOTER_MENU_BLOCKA_MENUC_TEXT_LINK ?><!--">CRM</a></button></p>&nbsp;-->
<!--            <p><button class="ok"><a href="--><?php //echo APP_FOOTER_MENU_BLOCKA_MENUD_TEXT_LINK ?><!--">Booking System</a></button></p>&nbsp;-->
<!--            <p><button class="ok"><a href="--><?php //echo APP_FOOTER_MENU_BLOCKA_MENUE_TEXT_LINK ?><!--">Health System</a></button></p>&nbsp;-->
<!--            <p><button class="ok"><a href="--><?php //echo APP_FOOTER_MENU_BLOCKA_MENUF_TEXT_LINK ?><!--">Network Platform</a></button></p>&nbsp;-->
<!--        </div>-->
<!--            <div class="d-flex test-nasir">-->
<!--                <p><button class="ok"><a href="--><?php //echo APP_FOOTER_MENU_BLOCKB_MENU_TEXT_LINK ?><!--">Project Consultancy </a></button></p>&nbsp;-->
<!--                <p><button class="ok"><a href="--><?php //echo APP_FOOTER_MENU_BLOCKB_MENUA_TEXT_LINK ?><!--">Project Management </a></button></p>&nbsp;-->
<!--                <p><button class="ok"><a href="--><?php //echo APP_FOOTER_MENU_BLOCKB_MENUB_TEXT_LINK ?><!--">Design Branding</a></button></p>&nbsp;-->
<!--                <p><button class="ok"><a href="--><?php //echo APP_FOOTER_MENU_BLOCKB_MENUC_TEXT_LINK ?><!--">Development</a></button></p>&nbsp;-->
<!--                <p><button class="ok"><a href="--><?php //echo APP_FOOTER_MENU_BLOCKB_MENUD_TEXT_LINK ?><!--">Testing & Debugging</a></button></p>&nbsp;-->
<!--                <p><button class="ok"><a href="--><?php //echo APP_FOOTER_MENU_BLOCKB_MENUE_TEXT_LINK ?><!--">Hosting & maintenance</a></button></p>&nbsp;-->
<!--            </div>-->
            <div class="navbar d-flex test-nasir">
                <p><button class="ok"><a href="<?php echo APP_FOOTER_MENU_BLOCKC_MENUD_TEXT_LINK ?>">Privacy & Legal </a></button></p>&nbsp;
                <p><button class="ok"><a href="<?php echo APP_FOOTER_MENU_BLOCKC_MENUJ_TEXT_LINK ?>">Story of Gray</a></button></p>&nbsp;
                <p><button class="ok"><a href="<?php echo APP_FOOTER_MENU_BLOCKC_MENUM_TEXT_LINK ?>">Outsource</a></button></p>&nbsp;
                <p><button class="ok"><a href="<?php echo APP_FOOTER_MENU_BLOCKD_MENUPA_TEXT_LINK ?>">Partnership</a></button></p>&nbsp;
                <p><button class="ok"><a href="mailto:admin@ggtasker.co.uk" target="_blank" > Send an Email</a></button></p>&nbsp;
                <p><button class="ok"><a href="<?php echo APP_FOOTER_MENU_BLOCKC_MENUA_TEXT_LINK ?>">Contact Us</a></button></p>&nbsp;
            </div>
            <hr>
            <!-- sakib code -->
            <div class="d-flex align-items-center justify-content-between">
                <div class="">
                    <p class="cpy"> © Gray 2023, All right received.</p>
                </div>

                <div class="social-container">
                    <!-- Add font awesome icons -->
                    <a href="https://www.facebook.com/" target="_blank" class="fa fa-linkedin"></a>
                    <a href="https://www.facebook.com/" target="_blank"class="fa fa-facebook"></a>
                    <a href="https://www.facebook.com/" target="_blank" class="fa fa-twitter"></a>
                    <a href="https://www.facebook.com/" target="_blank" class="fa fa-youtube"></a>
                </div>
            </div>
            <!-- sakib code ends -->

        </div>
<!--        Up pogrom-->
<!--        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="arrow up"></i></button>-->

    </footer>
</section>

<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


<!-- <?php echo SNIPPET_NAME_FORTUNE;?> section ends from here -->

<!-- scripts included -->
<?php include 'snippets/scripts.php'; ?>