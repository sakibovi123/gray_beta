<!-- <?php echo SNIPPET_NAME_NAVARRO; ?> section start from here -->
<div id="<?php echo lcfirst(SNIPPET_NAME_NAVARRO); ?>" class="<?php echo lcfirst(SNIPPET_NAME_NAVARRO) . ' ' . APP_NAME . SNIPPET_NAME_NAVARRO . ' ' . SNIPPET_CATEGORY_NAVIGATION . ' ' . SNIPPET_CSS_CLASSES; ?>">  
  <!-- navbar wrapper -->
  <header itemprop="hasPart" itemscope itemtype="http://schema.org/WPHeader">
    <nav class="navbar navbar-expand-lg navbar-light bg-light site-navigation fixed-top" itemprop="hasPart" itemscope itemtype="http://schema.org/SiteNavigationElement">
      <div class="container">
        <a class="navbar-brand" itemprop="url" href="<?php echo APP_HOME; ?>" title="<?php echo APP_HEADER_MENU_HOME; ?>"><img itemprop="image" src="<?php echo APP_LOGO; ?>" alt="<?php echo APP_NAME; ?>" title="<?php echo APP_NAME; ?>" width="80" height="80" class="logo"> <span class="company-name"><?php echo COMPANY_NAME; ?></span></a>
        <button class="navbar-toggler navbar-toggler-right collapsed text-uppercase font-weight-bold  rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

       <span class="my-1 mx-2 close">X</span>
       <span class="fa fa-bars"></span>
   
          
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

<!--              <li class="nav-item mx-0">-->
<!--                  <a class="nav-link py-lg-3 py-2 px-0 px-lg-3" itemprop="url" href="--><?php //echo APP_HEADER_MENU_HOME_LINK; ?><!--" title="--><?php //echo APP_HEADER_MENU_HOME; ?><!--"><i class="fas fa-home nav-icon"></i><span itemprop="name" class="ml-1">--><?php //echo APP_HEADER_MENU_HOME; ?><!--</span></a>-->
<!--              </li>-->

            <li class="nav-item mx-0">
              <a class="nav-link py-lg-3 py-2 px-0 px-lg-3" itemprop="url" href="<?php echo APP_HEADER_MENU_NAMEB_LINK; ?>" title="<?php echo APP_HEADER_MENU_NAMEB; ?>"><i class="fas fa-briefcase nav-icon"></i><span itemprop="name" class="ml-1"><?php echo APP_HEADER_MENU_NAMEB; ?></span></a>
            </li>
            <li class="nav-item mx-0 solution-dropdown">

              <a class="nav-link py-lg-3 py-2 px-0 px-lg-3 dropbtn d-none d-sm-none d-md-none d-lg-block d-xl-block" itemprop="url" href="<?php echo APP_HEADER_MENU_NAMEC_LINK; ?>" title="<?php echo APP_HEADER_MENU_NAMEC; ?>"><i class="fas fa-award nav-icon"></i><span itemprop="name"><?php echo APP_HEADER_MENU_NAMEC; ?> </span>
          </a>

          <a class="nav-link py-lg-3 py-2 px-0 px-lg-3 dropbtn d-lg-none d-xl-none" itemprop="url" href="#"><i class="fas fa-award nav-icon"></i><span itemprop="name" class="ml-1"><?php echo APP_HEADER_MENU_NAMEC; ?></span>
          </a>

              <div class="dropdown-content">
                <div class="dropdown-menu-items">
                    <a itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKA_MENUA_TEXT_LINK ?>" title="<?php echo APP_FOOTER_MENU_BLOCKA_MENUA_TEXT; ?>"><?php echo APP_FOOTER_MENU_BLOCKA_MENUA_TEXT ?></a>
                    <a itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKA_MENUB_TEXT_LINK ?>" title="<?php echo APP_FOOTER_MENU_BLOCKA_MENUB_TEXT; ?>"><?php echo APP_FOOTER_MENU_BLOCKA_MENUB_TEXT ?></a>
                    <a itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKA_MENUC_TEXT_LINK ?>" title="<?php echo APP_FOOTER_MENU_BLOCKA_MENUC_TEXT; ?>"><?php echo APP_FOOTER_MENU_BLOCKA_MENUC_TEXT ?></a>
                    <a itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKA_MENUD_TEXT_LINK ?>" title="<?php echo APP_FOOTER_MENU_BLOCKA_MENUD_TEXT; ?>"><?php echo APP_FOOTER_MENU_BLOCKA_MENUD_TEXT ?></a>
                    <a itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKA_MENUE_TEXT_LINK ?>" title="<?php echo APP_FOOTER_MENU_BLOCKA_MENUE_TEXT; ?>"><?php echo APP_FOOTER_MENU_BLOCKA_MENUE_TEXT ?></a>
                    <a itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKA_MENUF_TEXT_LINK ?>" title="<?php echo APP_FOOTER_MENU_BLOCKA_MENUF_TEXT; ?>"><?php echo APP_FOOTER_MENU_BLOCKA_MENUF_TEXT ?></a>
                </div>
              </div>

          </li>   
         
            <li class="nav-item mx-0 service-dropdown">
              <a class="nav-link py-lg-3 py-2 px-0 px-lg-3 dropbtn d-none d-sm-none d-md-none d-lg-block d-xl-block" itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKC_MENUK_TEXT_LINK; ?>" title="<?php echo APP_FOOTER_MENU_BLOCKC_MENUK_TEXT; ?>"><i class="fas fa-handshake nav-icon"></i> <span itemprop="name"><?php echo APP_FOOTER_MENU_BLOCKC_MENUK_TEXT; ?></span></a>
              
              <a class="nav-link py-lg-3 py-2 px-0 px-lg-3 dropbtn d-lg-none d-xl-none" itemprop="url" href="#"><i class="fas fa-handshake nav-icon"></i> <span itemprop="name"><?php echo APP_FOOTER_MENU_BLOCKC_MENUK_TEXT; ?></span></a>

            <div class="dropdown-content">
                <div class="dropdown-menu-items">
                    <a itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKB_MENU_TEXT_LINK ?>" title="<?php echo APP_FOOTER_MENU_BLOCKB_MENU_TEXT; ?>"><?php echo APP_FOOTER_MENU_BLOCKB_MENU_TEXT ?></a>
                    <a itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKB_MENUA_TEXT_LINK ?>" title="<?php echo APP_FOOTER_MENU_BLOCKB_MENUA_TEXT; ?>"><?php echo APP_FOOTER_MENU_BLOCKB_MENUA_TEXT ?></a>
                    <a itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKB_MENUB_TEXT_LINK ?>" title="<?php echo APP_FOOTER_MENU_BLOCKB_MENUB_TEXT; ?>"><?php echo APP_FOOTER_MENU_BLOCKB_MENUB_TEXT ?></a>
                    <a itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKB_MENUC_TEXT_LINK ?>" title="<?php echo APP_FOOTER_MENU_BLOCKB_MENUC_TEXT; ?>"><?php echo APP_FOOTER_MENU_BLOCKB_MENUC_TEXT ?></a>
                    <a itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKB_MENUD_TEXT_LINK ?>" title="<?php echo APP_FOOTER_MENU_BLOCKB_MENUD_TEXT; ?>"><?php echo APP_FOOTER_MENU_BLOCKB_MENUD_TEXT ?></a>
                    <a itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKB_MENUE_TEXT_LINK ?>" title="<?php echo APP_FOOTER_MENU_BLOCKB_MENUE_TEXT; ?>"><?php echo APP_FOOTER_MENU_BLOCKB_MENUE_TEXT ?></a>
                </div>
              </div>
          
          
          </li>


              <li class="nav-item mx-0"><a class="nav-link py-lg-3 py-2 px-0 px-lg-3" itemprop="url" href="<?php echo APP_FOOTER_MENU_BLOCKC_MENUL_TEXT_LINK; ?>" title="<?php echo APP_FOOTER_MENU_BLOCKC_MENUL_TEXT; ?>"><span itemprop="name"><i class="fas fa-book nav-icon"></i> <?php echo APP_FOOTER_MENU_BLOCKC_MENUL_TEXT; ?></span></a></li>
              <li class="nav-item mx-0"><a class="nav-link py-lg-3 py-2 px-0 px-lg-3" itemprop="url" href="<?php echo APP_HEADER_MENU_CAREER_TEXT_LINK; ?>" title="<?php echo APP_HEADER_MENU_CAREER_TEXT; ?>"><span itemprop="name"><i class="fas fa-laptop-code nav-icon"></i> <?php echo APP_HEADER_MENU_CAREER_TEXT; ?></span></a></li>

              <li class="nav-item mx-0"><a class="nav-link py-lg-3 py-2 px-0 px-lg-3" itemprop="url" href="<?php echo BLOG_LINK_ALTERNATIVE; ?>" title="<?php echo APP_BLOG_HEADLINE;?>"><span itemprop="name"><i class="fas fa-blog nav-icon"></i>Blog</span></a></li>
            </ul>
            <a class="ml-4 btn btn-brand talk-to-expert" itemprop="url" href="<?php echo APP_HEADER_MENU_BUTTON_LINK; ?>" title="<?php echo APP_HEADER_MENU_BUTTON; ?>"><i class="fas fa-phone"></i> <span itemprop="name"><?php echo APP_HEADER_MENU_BUTTON; ?></span></a>

        </div>
      </div>
    </nav>
  </header>
</div>
<!-- <?php echo SNIPPET_NAME_NAVARRO; ?> section ends from here-->
