<?php
/**
* Implementation of hook_settings() for themes.
*/
function earthlingtwo_settings($settings) {
  // This ensures that a 'files' directory exists if it hasn't
  // already been been created.
  file_check_directory(file_directory_path(),
    FILE_CREATE_DIRECTORY, 'file_directory_path');

  // Check for a freshly uploaded header image, save it to the
  // filesystem, and grab its full path for later use.
  if ($file = file_save_upload('header_image',
      array('file_validate_is_image' => array()))) {
    $parts = pathinfo($file->filename);
    $filename = 'earthlingtwo_header_image.'. $parts['extension'];
    if (file_copy($file, $filename, FILE_EXISTS_REPLACE)) {
      $settings['header_image_path'] = $file->filepath;
    }
  }

  // Define the settings-related FormAPI elements.
  $form = array();
  $form['header_image'] = array(
    '#type' => 'file',
    '#title' => t('Header image'),
    '#description' => t('Upload a custom image for the header image and replace the default. Same width image suggested of 546px, the height should scale nicely.'),
    '#maxlength' => 40,
  );
  $form['header_image_path'] = array(
    '#type' => 'value',
    '#value' => !empty($settings['header_image_path']) ?
      $settings['header_image_path'] : '',
  );
  if (!empty($settings['header_image_path'])) {
    $form['header_image_preview'] = array(
      '#type' => 'markup',
      '#value' => !empty($settings['header_image_path']) ?
          theme('image', $settings['header_image_path']) : '',
    );
  }
  return $form;
}