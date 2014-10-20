<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

  <?php print render($page['pre_header']); ?>
  <header class="header" id="header" role="banner">


    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    <?php print render($page['header']); ?>

  </header>

  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php if ($is_front): ?>
        <?php print render($page['content_front']); ?>
       <div class="contenidor">
         <div class="dalt"> 
           <div class="bloc bloc1"> 
            <?php $pdata = theme_get_setting('central-sup-esquerra'); ?>
            <?php print check_markup($pdata['value'], $pdata['format']); ?>
           </div>
           <div class="bloc bloc2"> 
            <?php $pdata = theme_get_setting('central-sup-central'); ?>
            <?php print check_markup($pdata['value'], $pdata['format']); ?>
           </div>
           <div class="bloc bloc3"> 
             <span class='tabs-title'><?php print t('Activity on web'); ?></span>
             <div class="tabs">
               <span class="tab-pnts tab"><?php print t('Last points'); ?></span>
               <span class="tab-comm tab"><?php print t('Last comments'); ?></span>
               <span class="tab-usrs tab"><?php print t('Last users'); ?></span>
             </div>
             <?php print views_embed_view('ultims_comentaris','block'); ?>
             <?php print views_embed_view('portada_ultims_usuaris','block'); ?>
             <?php print views_embed_view('portada_ultims_punts','block'); ?>
           </div> 
           <div class="bloc bloc4"> 
           <a href="https://www.facebook.com/sharer/sharer.php?u=<?php global $base_url; print $base_url; ?>"><img src="<?php print $base_path; ?>/sites/all/themes/pamapam/images/bloc_fb_cap.png" /></a>
               <div data-cycle-slides="> div > .facebook_wall" data-cycle-next="#fb-next" data-cycle-prev="#fb-prev" data-cycle-timeout="0" data-cycle-fx="scrollHorz" class="cycle-slideshow">
               <?php
               $block = module_invoke('facebook_wall','block_view','facebook_wall');        
               print render($block['content']);
               ?>
               </div>
             <div id="fb-next"></div>
             <div id="fb-prev"></div>
           </div>
         </div>
         <div class="baix"> 
           <div class="bloc bloc5">
             <figure>
               <a href="<?php print theme_get_setting('central-inf-esquerra-link'); ?>">
                  <div class="darken-overlay"></div>
                 <img src="<?php print file_create_url(file_load(theme_get_setting('central-inf-esquerra-img'))->uri);?>"></img> 
                 <figcaption><?php print theme_get_setting('central-inf-esquerra-txt-img'); ?>
                 </figcaption>
                </a>
             </figure>
             <h3><?php print theme_get_setting('central-inf-esquerra-txt');  ?> </h3>
           </div>
           <div class="bloc bloc6">
             <figure>
               <a href="<?php print theme_get_setting('central-inf-central-link'); ?>">
                  <div class="darken-overlay"></div>
                 <img src="<?php print file_create_url(file_load(theme_get_setting('central-inf-central-img'))->uri);?>"></img>
                 <figcaption><?php print theme_get_setting('central-inf-central-txt-img'); ?>
               </figcaption>
               </a>
             </figure>
             <h3><?php print theme_get_setting('central-inf-central-txt');  ?> </h3>
           </div>
           <div class="bloc bloc7">
             <figure>
               <a href="<?php print theme_get_setting('central-inf-dreta-link'); ?>">
                  <div class="darken-overlay"></div>
                 <img src="<?php print file_create_url(file_load(theme_get_setting('central-inf-dreta-img'))->uri);?>"></img>
                 <figcaption><?php print theme_get_setting('central-inf-dreta-txt-img'); ?>
                 </figcaption>
               </a>
             </figure>
             <h3><?php print theme_get_setting('central-inf-dreta-txt');  ?> </h3>
           </div>
           <div class="bloc bloc8">
             <?php print views_embed_view('tweets','block'); ?>
           </div>
         </div>
       </div>
       <div class="wrapper-blog">
          <?php print views_embed_view('portada_ultims_blogs','block'); ?>
       </div>
        <?php drupal_add_js(drupal_get_path('theme', 'pamapam') . '/js/mapa.js'); ?>
        <?php drupal_add_js(drupal_get_path('theme', 'pamapam') . '/js/blocs_portada.js'); ?>
        <?php drupal_add_js(drupal_get_path('theme', 'pamapam') . '/js/blogs_portada.js'); ?>
        <?php else: ?>
        <?php print render($page['content']); ?>
      <?php endif; ?>
      <?php print $feed_icons; ?>
    </div>

    <div id="navigation">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>
  <?php print render($page['footer']); ?>
</div>
<div class="contenidor-footer">
  <div class="footer-top"><?php print theme_get_setting('pre-footer')['value']; ?> </div>
  <div class="impulsen"> 
    <div class="superior"><?php print theme_get_setting('superior');?> </div>
    <div class="logos"> 
      <div class="esquerra"><img src="<?php print file_create_url(file_load(theme_get_setting('imagen01'))->uri);?>" class=img-esquerra></img> <a href="<?php print theme_get_setting('enllac1');?>"><? print theme_get_setting('text1');?></a></div>
      <div class="dreta"><img src="<?php print file_create_url(file_load(theme_get_setting('imagen02'))->uri);?>" class=img-esquerra></img> <a href="<?php print theme_get_setting('enllac2'); ?>"><? print theme_get_setting('text2');?></a></div>   
   </div> 
  </div>
  <div class="participen">
    <div class="superior"> <?php print theme_get_setting('text21');?> </div>
    <div class="logos">
 <a href="<?php print theme_get_setting('enllaç21'); ?>"><img src="<?php print file_create_url(file_load(theme_get_setting('imagen1'))->uri);?>"></img> </a>
 <a href="<?php print theme_get_setting('enllaç22'); ?>"><img src="<?php print file_create_url(file_load(theme_get_setting('imagen2'))->uri);?>"></img> </a>
 <a href="<?php print theme_get_setting('enllaç23'); ?>"><img src="<?php print file_create_url(file_load(theme_get_setting('imagen3'))->uri);?>"></img> </a>
    </div>
  </div>
</div>
<?php print render($page['bottom']); ?>
