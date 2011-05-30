<?php

function earthlingtwo_preprocess_page(&$vars) {

 // Generate menu tree from source of Primary Links

 $vars['primary_links_tree'] = menu_tree(variable_get('menu_primary_links_source','primary-links'));
 $settings = theme_get_settings('earthlingtwo');
  if (!empty($settings['header_image_path'])) {
    $vars['header_image_path'] = $settings['header_image_path'];
  }
  else {
    $vars['header_image_path'] = path_to_theme().'/images/img07.jpg';
  }

}