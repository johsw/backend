  <div id="container">

    <header id="page-header">
      <div id="header-inner">
      <?php if ($site_name): ?>
       <div id="masthead">  
         <div id="site-logo-wrapper">
           <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="site-logo">
           </a>
         </div>
         <div id="site-name-wrapper">
           <div id="site-name">
             <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="site-name-link">
             <?php print $site_name; ?>
             </a>
            </div>
           <div id="site-slogan">
             <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="site-slogan-link">
              <?php print $site_slogan; ?>
             </a>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php if ($main_menu): ?>
      <nav>
        <a href="#" id="hamburger-button" class="icons icon-menu"></a>
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
      </nav>
      <?php endif; ?>
      </div>
    </header>


    <?php print render($page['header']); ?>

    <?php /* if ($breadcrumb): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; */ ?>

      <?php print $messages; ?>

    <section id="main">

      <div id="content">
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div>

      <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar-first">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>

    </section> <!-- /#main -->
    <footer>
      <div id="footer-inner">
      WIREFRAME
      <?php print render($page['footer']); ?>
      </div>
    </footer>


  </div> <!-- /#container -->
