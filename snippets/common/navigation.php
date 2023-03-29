<!-- <?php echo SNIPPET_NAME_NAVARRO; ?> section start from here -->
<div id="<?php echo lcfirst(SNIPPET_NAME_NAVARRO); ?>" class="<?php echo lcfirst(SNIPPET_NAME_NAVARRO) . ' ' . APP_NAME . SNIPPET_NAME_NAVARRO . ' ' . SNIPPET_CATEGORY_NAVIGATION . ' ' . SNIPPET_CSS_CLASSES; ?>">  
  <!-- navbar wrapper -->
  <header itemprop="hasPart" itemscope itemtype="http://schema.org/WPHeader">
    <nav class="navbar navbar-expand-lg navbar-light bg-light site-navigation fixed-top" itemprop="hasPart" itemscope itemtype="http://schema.org/SiteNavigationElement">
      <div class="container">
        <a class="navbar-brand" itemprop="url" href="<?php echo APP_HOME; ?>" title="<?php echo APP_HEADER_MENU_HOME; ?>"><img itemprop="image" src="<?php echo APP_LOGO; ?>" alt="<?php echo APP_NAME; ?>" title="<?php echo APP_NAME; ?>" width="150" height="50" class="logo"></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold  rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-0"><a class="nav-link py-lg-3 py-2 px-0 px-lg-3" itemprop="url" href="<?php echo APP_HEADER_MENU_NAMEA_LINK; ?>" title="<?php echo APP_HEADER_MENU_NAMEA; ?>"><i class="fas fa-home nav-icon"></i><span itemprop="name"><?php echo APP_HEADER_MENU_NAMEA; ?></span></a></li>
            <li class="nav-item mx-0"><a class="nav-link py-lg-3 py-2 px-0 px-lg-3" itemprop="url" href="<?php echo APP_HEADER_MENU_NAMEB_LINK; ?>" title="<?php echo APP_HEADER_MENU_NAMEB; ?>"><i class="fas fa-address-card nav-icon"></i><span itemprop="name"><?php echo APP_HEADER_MENU_NAMEB; ?></span></a></li>
            <li class="nav-item mx-0"><a class="nav-link py-lg-3 py-2 px-0 px-lg-3" itemprop="url" href="<?php echo APP_HEADER_MENU_NAMEC_LINK; ?>" title="<?php echo APP_HEADER_MENU_NAMEC; ?>"><i class="fas fa-award nav-icon"></i><span itemprop="name"><?php echo APP_HEADER_MENU_NAMEC; ?></span></a></li>            
            <li class="nav-item mx-0"><a class="nav-link py-lg-3 py-2 px-0 px-lg-3" itemprop="url" href="<?php echo APP_HEADER_MENU_NAMED_LINK; ?>" title="<?php echo APP_HEADER_MENU_NAMED; ?>"><i class="far fa-money-bill-alt nav-icon"></i><span itemprop="name"><?php echo APP_HEADER_MENU_NAMED; ?></span></a></li>
            <li class="nav-item mx-0 mx-lg-3"><a class="mt-2 btn btn-brand" itemprop="url" href="<?php echo APP_HEADER_MENU_BUTTON_LINK; ?>" title="<?php echo APP_HEADER_MENU_BUTTON; ?>"><i class="fas fa-walking"></i> <span itemprop="name"><?php echo APP_HEADER_MENU_BUTTON; ?></span></a></li>
            <!-- languague switcher -->
            <li class="nav-item dropdown mx-0 my-md-2 mx-lg-2 mt-2 language-selector">
              <button class="btn dropdown-toggle language-selector" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="<?php echo APP_LANGUAGE_SWITCHER; ?>" title="<?php echo APP_LANGUAGE_SWITCHER; ?>">
                  <span class="<?php echo $languageIcons; ?>"></span>
              </button>
              <div class="dropdown-menu dropdown-menu-right languageList">
                  <a class="dropdown-item" itemprop="url" href="?language=fr"><span class="flag-icon flag-icon-fr"></span><span itemprop="name"><?php echo APP_LANGUAGE_FRENCH; ?></span></a>
                  <a class="dropdown-item" itemprop="url" href="?language=bd"><span class="flag-icon flag-icon-bd"></span><span itemprop="name"><?php echo APP_LANGUAGE_BANGLA; ?></span></a>
                  <a class="dropdown-item" itemprop="url" href="?language=en"><span class="flag-icon flag-icon-gb"></span><span itemprop="name"><?php echo APP_LANGUAGE_ENGLISH_UK; ?></span></a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</div>
<!-- <?php echo SNIPPET_NAME_NAVARRO; ?> section ends from here-->
