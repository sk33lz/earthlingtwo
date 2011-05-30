<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : EarthlingTwo  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20090918

Drupal Theme by Arbor Web Development
http://arborwebdevelopment.com
-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>
<body>
<div id="wrapper">
  <div id="header">
    <div id="logo">
    <?php if ($logo) : ?>
    <a class='site-logo' href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" border="0" /></a>
    <?php endif; ?>
    <?php if ($site_name) : ?>
    <div class='site-name'><h1><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print($site_name) ?></a></h1></div>
    <?php endif;?>
    <?php if ($site_slogan) : ?>
    <div class='site-slogan'><h2 class='site-slogan'><?php print($site_slogan) ?></h2></div>
    <?php endif;?>
	</div><!-- end .site-info -->
  </div><!-- end #header -->
  
  <div id="menu">
    <?php if ($primary_links): ?>
    <div id="primary-menu">
    <?php print $primary_links_tree; ?>
    </div><!-- /primary links menu -->
    <?php endif; ?>
  </div><!-- end #menu -->
  
  <div id="page">
    <div id="content">
	<div id="banner"><img src="/<?php print $header_image_path; ?>" /></div>
	<div id="post">
	  <?php print $breadcrumb; ?>
          <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
          <?php print $help; ?>
          <div class="clear-block">
            <?php print $content ?>
          </div>
    </div><!-- end #post -->
    </div><!-- end #content -->
	<?php if ($content_btm): ?>
	<div id="content_btm"><?php print $content_btm ?></div>
	<?php endif; ?>
	<div id="sidebar">
	  <?php print $right ?>
	</div><!-- end #sidebar -->
	<div style="clear: both;">&nbsp;</div>
  </div><!-- end #page -->
</div><!-- end #wrapper -->
<div id="footer-content">
  <div class="column1">
  <?php print $column_1 ?>
  </div>
  <div class="column2">
  <?php print $column_2 ?>
  </div>
</div>
<div id="footer">
  <p><?php print $footer_message . $footer ?></p>
  <p>(c) 2011 <?php print $site_name ?>. Design by <a href="http://www.nodethirtythree.com" title="nodethirtytree">nodethirtythree</a> and <a href="http://www.freecsstemplates.org" title="Free CSS Templates">Free CSS Templates</a>. | <a href="http://drupalservers.net" title="Drupal themes">Drupal Themes</a> by <a href="http://themeroot.com" title="Arbor Web Development">Arbor Web Development</a>.</p>
</div>
<!-- end #footer -->
<?php print $closure ?>
</body>
</html>
