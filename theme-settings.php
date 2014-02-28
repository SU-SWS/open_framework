<?php
function open_framework_form_system_theme_settings_alter(&$form, &$form_state) {
  
  // Responsive Behavior
  $form['responsive_container'] = array(
    '#type' => 'fieldset',
    '#title' => t('Responsive'),
    '#description' => t('Use these settings to adjust the responsive behavior.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  
  $form['responsive_container']['content_order_classes'] = array(
    '#type'          => 'radios',
    '#title'         => t('Content order in mobile'),
    '#default_value' => theme_get_setting('content_order_classes'),
    '#options'       => array(
      '' => t('Show first sidebar content before main content - <strong><em>Default</em></strong>'),
	  'content-first ' => t('Show main content before sidebar content'),
    ),
  );
 
  // Page Layout
  $form['layout_container'] = array(
    '#type' => 'fieldset',
    '#title' => t('Layout'),
    '#description' => t('Use these settings to adjust the page layout.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
      
  $form['layout_container']['front_heading_classes'] = array(
    '#type'          => 'radios',
    '#title'         => t('Page heading'),
    '#default_value' => theme_get_setting('front_heading_classes'),
    '#options'       => array(
      '' => t('Hide heading on front page - <strong><em>Default</em></strong>'),
	  'show-title ' => t('Show heading on front page'),
    ),
  );

  $form['layout_container']['breadcrumb_classes'] = array(
    '#type'          => 'radios',
    '#title'         => t('Breadcrumbs'),
    '#default_value' => theme_get_setting('breadcrumb_classes'),
    '#options'       => array(
      '' => t('Hide breadcrumbs - <strong><em>Default</em></strong>'),
	  'show-breadcrumb ' => t('Show breadcrumbs'),
    ),
  );
      
  // Background Section
  $form['background_container'] = array(
    '#type' => 'fieldset',
    '#title' => t('Body background'),
    '#description' => t('Use these settings to select a different body background image.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  
  // Body Background Image
 $form['background_container']['body_bg_classes'] = array(
    '#type'          => 'radios',
    '#title'         => t('Enable body background image'),
    '#default_value' => theme_get_setting('body_bg_classes'),
    '#options'       => array(
      '' => t('None - <strong><em>Default</em></strong>'),
	  'bodybg ' => t('Use my image (upload below):'),
    ),
  );
   
  // Default path for image
  $body_bg_path = theme_get_setting('body_bg_path');
  if (file_uri_scheme($body_bg_path) == 'public') {
    $body_bg_path = file_uri_target($body_bg_path);
  }
 
  // Helpful text showing the file name, disabled to avoid the user thinking it can be used for any purpose.
  $form['background_container']['body_bg_path'] = array(
    '#type' => 'hidden',
    '#title' => 'Path to body background image',
    '#default_value' => $body_bg_path,
  );
  if (!empty($body_bg_path)) {
    $form['background_container']['body_bg_preview'] = array(
      '#markup' => !empty($body_bg_path) ? 
       theme('image', array('path' => theme_get_setting('body_bg_path'))) : '',
    );
  }

  // Upload field
  $form['background_container']['body_bg_upload'] = array(
    '#type' => 'file',
    '#title' => 'Upload body background image',
    '#description' => 'You can upload the following image file types: *.jpg, *.gif, or *.png',
  );
  
  // Body Background Image Style
  $form['background_container']['body_bg_type'] = array(
    '#type'          => 'radios',
    '#title'         => t('Choose body background style'),
    '#default_value' => theme_get_setting('body_bg_type'),
    '#options'       => array(
      '' => t('Wallpaper pattern - <strong><em>Default</em></strong>'),
	  'photobg ' => t('Stretch to fill body'),
    ),
  );
  
  // Border Style
  $form['border_container'] = array(
    '#type' => 'fieldset',
    '#title' => t('Borders'),
    '#description' => t('Use these settings to change the border style.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
    
  $form['border_container']['border_classes'] = array(
    '#type'          => 'radios',
    '#title'         => t('Border style for content section'),
    '#default_value' => theme_get_setting('border_classes'),
    '#options'       => array(
	  '' => t('No borders - <strong><em>Default</em></strong>'),
      'borders' => t('Show borders'),
    ),
  );
  
  $form['border_container']['corner_classes'] = array(
    '#type'          => 'radios',
    '#title'         => t('Corner style'),
    '#default_value' => theme_get_setting('corner_classes'),
    '#options'       => array(
	  '' => t('Straight corners - <strong><em>Default</em></strong>'),
      'roundedcorners' => t('Rounded corners (not supported in Internet Explorer 8 or below)'),
    ),
  );
  
  // Attach custom submit handler to the form
  $form['#submit'][] = 'open_framework_settings_submit';
  $form['#validate'][] = 'open_framework_settings_validate';
}

function open_framework_settings_submit($form, &$form_state) {
  $settings = array();
  // Get the previous value
  $previous = 'public://' . $form['background_container']['body_bg_path']['#default_value'];
  $file = file_save_upload('body_bg_upload');
  if ($file) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
   
    if(file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['body_bg_path'] = $form_state['values']['body_bg_path'] = $destination;
    }
  } else {
    // Avoid error when the form is submitted without specifying a new image
    $_POST['body_bg_path'] = $form_state['values']['body_bg_path'] = $previous;
  }
 
}

function open_framework_settings_validate($form, &$form_state) {
  $validators = array('file_validate_is_image' => array());
  // Check for a new uploaded logo.
  $file = file_save_upload('body_bg_upload', $validators);
  if (isset($file)) {
    // File upload was attempted.
    if ($file) {
      // Put the temporary file in form_values so we can save it on submit.
      $form_state['values']['body_bg_upload'] = $file;
    }
    else {
      // File upload failed.
      form_set_error('body_bg_upload', t('The background image could not be uploaded.'));
    }
  }
}