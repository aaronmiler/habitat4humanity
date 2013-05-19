<?php

global $slide_number;
$slide_number = theme_get_setting('slides_number');

drupal_add_js(drupal_get_path('theme', 'haiku') .'/js/theme_settings.js'); 
 
function haiku_form_system_theme_settings_alter(&$form, &$form_state) {
  global $slide_number;

 // Default path for image
  $bg_path = theme_get_setting('bg_path');
  if (file_uri_scheme($bg_path) == 'public') {
    $bg_path = file_uri_target($bg_path);
  }
  
  // Default path for back-ground image
  $background_path = theme_get_setting('background_path');
  if (file_uri_scheme($background_path) == 'public') {
    $background_path = file_uri_target($background_path);
  }  
  
  $count = 1;
  while ($count <= $slide_number){
    ${'slide_path_' . $count} = theme_get_setting('slide_path_'.$count.'');
    if (file_uri_scheme(${'slide_path_' . $count}) == 'public') {
      ${'slide_path_' . $count} = file_uri_target(${'slide_path_' . $count});
    }  
  $count++;
  }

  // Container
  $form['options'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'defaults',
    '#weight' => '-10',
    '#attached' => array(
      'css' => array(drupal_get_path('theme', 'haiku') . '/css/theme-options.css'),
    ),
  );
 
  // General
  $form['options']['general'] = array(
    '#type' => 'fieldset',
    '#title' => 'General',
  );
  
    // Breadcrumbs
    $form['options']['general']['breadcrumbs'] = array(
      '#type' => 'checkbox',
      '#title' => 'Breadcrumbs',
      '#default_value' => theme_get_setting('breadcrumbs'),
    );
        
    // SEO
    $form['options']['general']['seo'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">SEO</h3>',
    );
    
      // SEO Title
      $form['options']['general']['seo']['seo_title'] = array(
        '#type' => 'textfield',
        '#title' => 'Title',
        '#default_value' => theme_get_setting('seo_title'),
      );
      
       // SEO Description
      $form['options']['general']['seo']['seo_description'] = array(
        '#type' => 'textarea',
        '#title' => 'Description',
        '#default_value' => theme_get_setting('seo_description'),
      );
      
       // SEO Keywords
      $form['options']['general']['seo']['seo_keywords'] = array(
        '#type' => 'textarea',
        '#title' => 'Keywords',
        '#default_value' => theme_get_setting('seo_keywords'),
      );
        
  // Header Options
  $form['options']['header'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header'),
  );
  
    // Logo
    $form['options']['header']['branding'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Branding</h3>',
    );
    
      // Logo Toggle
      $form['options']['header']['branding']['branding_type'] = array(
        '#type' => 'select',
        '#title' => 'Branding Type',
        '#default_value' => theme_get_setting('branding_type'),
        '#options' => array(
          'logo' => 'Logo',
          'text' => 'Text',
        ),
      );

      $form['options']['header']['branding']['bg_path'] = array(
        '#type' => 'textfield',
        '#title' => 'Path to logo',
        '#default_value' => $bg_path,
        '#disabled' => TRUE,
        '#states' => array(
          'visible' => array('#edit-branding-type' => array('value' => 'logo')),
        ), 
      );

      $form['options']['header']['branding']['bg_upload'] = array(
        '#type' => 'file',
        '#title' => 'Upload logo',
        '#description' => 'Upload a new logo image.',
        '#states' => array(
          'visible' => array('#edit-branding-type' => array('value' => 'logo')),
        ), 
      );
	  
	  //for back-ground image
	  $form['options']['header']['branding']['background_path'] = array(
        '#type' => 'textfield',
        '#title' => 'Path to Background image',
        '#default_value' => $background_path,
        '#disabled' => TRUE,
        '#states' => array(
          'visible' => array('#edit-branding-type' => array('value' => 'background')),
        ), 
      );
	  
	  
	 $form['options']['header']['branding']['background_upload'] = array(
        '#type' => 'file',
        '#title' => 'Upload Back-ground image',
        '#description' => 'Upload a Back-ground image.',
	
        '#states' => array(
          'visible' => array('#edit-branding-type' => array('value' => 'background')),
        ), 
      );
     
  // Front Page
  $form['options']['front_page'] = array(
    '#type' => 'fieldset',
    '#title' => 'Front Page',
  );
  
    // Slider
    $form['options']['front_page']['slider'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Image Slider</h3>',
      
    );
    
      // Enable Slider
      $form['options']['front_page']['slider']['enable_slider'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Image Slider',
        '#default_value' => theme_get_setting('enable_slider'),
      );
            
      // Enable Slider
      $form['options']['front_page']['slider']['slides_number'] = array(
        '#type' => 'select',
        '#title' => 'Select the number of slides you wish to use:',
        '#default_value' => theme_get_setting('slides_number'),
        '#options' => array(
          '1' => '1',
          '2' => '2',
          '3' => '3',
          '4' => '4',
          '5' => '5',
          '6' => '6',
          '7' => '7',
          '8' => '8',
          '9' => '9',
          '10' => '10',
        ),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_slider"]' => array('checked' => FALSE)
          )
        )
      );

      $i = 1;
      while ($i <= $slide_number) {
      
        $form['options']['front_page']['slider']['slide_'.$i.''] = array(
          '#type' => 'fieldset',
          '#title' => '<h3 class="options_heading">Slide '.$i.'</h3>',
          '#states' => array (
          'invisible' => array(
            'input[name="enable_slider"]' => array('checked' => FALSE)
          )
        )
        );

          $form['options']['front_page']['slider']['slide_'.$i.'']['slide_path_'.$i.''] = array(
            '#type' => 'textfield',
            '#title' => 'Path to Slide '.$i.'',
            '#default_value' => ${'slide_path_' . $i},
            '#disabled' => TRUE,
          );
	      
	        $form['options']['front_page']['slider']['slide_'.$i.'']['slide_upload_'.$i.''] = array(
            '#type' => 'file',
            '#title' => 'Upload image for Slide '.$i.'',
            '#description' => 'Upload a slide image.',
          );
          
                    
          $form['options']['front_page']['slider']['slide_'.$i.'']['slide_caption_'.$i.''] = array(
            '#type' => 'textfield',
            '#title' => 'Caption for Slide '.$i.'',
            '#default_value' => theme_get_setting('slide_caption_'.$i.''),
          );

	    $i++;    
      }
      
     // Highlight
    $form['options']['front_page']['highlight'] = array(
      '#type' => 'fieldset', 
      '#title' => '<div class="plus"></div><h3 class="options_heading">Highlight</h3>',
      
    );
    
      // Enable highlight 
      $form['options']['front_page']['highlight']['enable_highlight'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Highlight',
        '#default_value' => theme_get_setting('enable_highlight'),
      );
      
      // highlight Text
      $form['options']['front_page']['highlight']['highlight_text'] = array(
      	'#type' => 'textarea',
      	'#title' => 'Highlight Text',
      	'#default_value' => theme_get_setting('highlight_text'),
      	'#states' => array (
          'invisible' => array(
            'input[name="enable_highlight"]' => array('checked' => FALSE)
          )
        )
      );
        
    // Services
    $form['options']['front_page']['services'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Services</h3>',
      
    );
    
	    // Enable Services
	    $form['options']['front_page']['services']['enable_services'] = array(
	      '#type' => 'checkbox',
	      '#title' => 'Enable Services Section',
	      '#default_value' => theme_get_setting('enable_services'),
	    );
	    
	  // Information
    $form['options']['front_page']['information'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Information</h3>',
      
    );
    
      // Enable Information
      $form['options']['front_page']['information']['enable_information'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Information',
        '#default_value' => theme_get_setting('enable_information'),
      );
            
    // Recent Posts
    $form['options']['front_page']['recent_posts'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Recent Posts</h3>',
      
    );
    
      // Enable Recent Posts
      $form['options']['front_page']['recent_posts']['enable_recent_posts'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Recent Posts Section',
        '#default_value' => theme_get_setting('enable_recent_posts'),
      );
      
      //Recent Posts Title
      $form['options']['front_page']['recent_posts']['recent_posts_title'] =array(
        '#type' => 'textfield',
        '#title' => 'Recent Posts Title',
        '#default_value' => theme_get_setting('recent_posts_title'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_recent_posts"]' => array('checked' => FALSE)
          )
        )
      );  
      
    // Recent Projects
    $form['options']['front_page']['recent_projects'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Recent Projects</h3>',
      
    );
    
      // Enable Services
      $form['options']['front_page']['recent_projects']['enable_recent_projects'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Recent Projects Section',
        '#default_value' => theme_get_setting('enable_recent_projects'),
      );
      
      //Services Title
      $form['options']['front_page']['recent_projects']['recent_projects_title'] =array(
        '#type' => 'textfield',
        '#title' => 'Recent Projects Title',
        '#default_value' => theme_get_setting('recent_projects_title'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_recent_projects"]' => array('checked' => FALSE)
          )
        )
      );     
      
    // Clients
    $form['options']['front_page']['clients'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Clients</h3>',
      
    );
    
      // Enable clients
      $form['options']['front_page']['clients']['enable_clients'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Clients',
        '#default_value' => theme_get_setting('enable_clients'),
      );
      
      //Clients Title
      $form['options']['front_page']['clients']['clients_title'] =array(
        '#type' => 'textfield',
        '#title' => 'Clients Title',
        '#default_value' => theme_get_setting('clients_title'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_clients"]' => array('checked' => FALSE)
          )
        )
      );  
   
     
  // Layout
  $form['options']['layout'] = array(
    '#type' => 'fieldset',
    '#title' => 'Layout',
  );
  
     // Enable boxed layout
      $form['options']['layout']['enable_boxed_layout'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable boxed layout',
        '#default_value' => theme_get_setting('enable_boxed_layout'),
      );
          
    // Page Layout
    $form['options']['layout']['page_layout'] = array(
      '#type' => 'radios',
      '#title' => 'Select a page layout:',
      '#default_value' => theme_get_setting('page_layout'),
      '#options' => array(
        'sidebar_right' => 'Sidebar Right',
        'full_width' => 'Full Width',
      ),
    );
    
    // Blog Layout
    $form['options']['layout']['blog_layout'] = array(
      '#type' => 'radios',
      '#title' => 'Select a blog layout:',
      '#default_value' => theme_get_setting('blog_layout'),
      '#options' => array(
        'sidebar_right' => 'Sidebar Right',
        'full_width' => 'Full Width',
      ),
    );
   
  // Design
  $form['options']['design'] = array(
    '#type' => 'fieldset',
    '#title' => 'Design',
  );
  
   // Colors
    $form['options']['design']['colors'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Color Scheme</h3>',
    );
  
      // Color Scheme
      $form['options']['design']['colors']['color_scheme'] = array(
        '#type' => 'select',
        '#title' => 'Color Scheme',
        '#default_value' => theme_get_setting('color_scheme'),
        '#options' => array(
          'black' => 'Black',
          'blue' => 'Blue',
          'light-blue' => 'light-blue',
          'green' => 'Green',
          'yellow' => 'Yellow',
          'purple' => 'Purple',
          'orange' => 'Orange',
          'red' => 'Red (default)',
        ),
      );
      
    // Background
    $form['options']['design']['background'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Background</h3>',
    );
    
      // Background Color
      $form['options']['design']['background']['body_background'] =array(
        '#type' => 'textfield',
        '#title' => 'Body background color',
        '#default_value' => theme_get_setting('body_background'),
      );    
      
     // Enable background pattern
      $form['options']['design']['background']['enable_background_pattern'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable background pattern',
        '#default_value' => theme_get_setting('enable_background_pattern'),
      );
    
      // Background
    $form['options']['design']['background']['background_select'] = array(
      '#type' => 'radios',
      '#title' => 'Select a background pattern:',
      '#default_value' => theme_get_setting('background_select'),
      '#options' => array(
        'retina_wood' => 'item',
        'debut_dark' => 'item',
        'noisy_grid' => 'item',
        'dark_wood' => 'item',
        'cartographer' => 'item',
        'bedge' => 'item',
        'illusion' => 'item',
        'nistri' => 'item',
      ),
      
      '#states' => array (
          'invisible' => array(
            'input[name="enable_background_pattern"]' => array('checked' => FALSE)
          )
        )

    );  
    
    // Background
    $form['options']['design']['main_wrapper'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Main Wrapper</h3>',
    );
    
      // Background Color
      $form['options']['design']['main_wrapper']['main_wrapper_background'] =array(
        '#type' => 'textfield',
        '#title' => 'Main wrapper background color',
        '#default_value' => theme_get_setting('main_wrapper_background'),
      );    
      
     // Enable background pattern
      $form['options']['design']['main_wrapper']['enable_main_wrapper_pattern'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable main wrapper pattern',
        '#default_value' => theme_get_setting('enable_main_wrapper_pattern'),
      );
    
      // Background
    $form['options']['design']['main_wrapper']['main_wrapper_pattern_select'] = array(
      '#type' => 'radios',
      '#title' => 'Select a main wrapper pattern:',
      '#default_value' => theme_get_setting('main_wrapper_pattern_select'),
      '#options' => array(
        'subtle_dots' => 'item',
        'debut_light' => 'item',
        'cream_dust' => 'item',
        'gray_jean' => 'item',
        'dust' => 'item',
        'linen' => 'item',
        'retina_dust' => 'item',
        'striped_lens' => 'item',
      ),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_main_wrapper_pattern"]' => array('checked' => FALSE)
          )
        )

    );  

      
    // CSS
    $form['options']['design']['css'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">CSS</h3>',
    );
      
      // User CSS
      $form['options']['design']['css']['user_css'] = array(
        '#type' => 'textarea',
        '#title' => 'Add your own CSS',
        '#default_value' => theme_get_setting('user_css'),
      ); 
  
  // Typography
  $form['options']['typography'] = array(
    '#type' => 'fieldset',
    '#title' => 'Typography',
  );
  
    // Font
    $form['options']['typography']['font'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Font</h3>',
    );
    
      // Font Family
      $form['options']['typography']['font']['font_family'] = array(
        '#type' => 'select',
        '#title' => 'Select a font family',
        '#default_value' => theme_get_setting('font_family'),
        '#options' => array(
          'proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif' => 'proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif (default)',
          'Open Sans Condensed, serif' => '"Open Sans Condensed", serif',
          'Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif',
          'Georgia, serif' => 'Georgia, serif',
          '"Helvetica Neue", Helvetica, Arial, sans-serif' => '"Helvetica Neue", Helvetica, Arial, sans-serif',
          '"Times New Roman", Times, serif' => '"Times New Roman", Times, serif',
          'Verdana, Arial, Helvetica, sans-serif' => 'Verdana, Arial, Helvetica, sans-serif',
        ),
      );
    
    //Headings
    $form['options']['typography']['headings'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Headings</h3>',
    );
    
      //H1
      $form['options']['typography']['headings']['h1'] =array(
        '#type' => 'textfield',
        '#title' => 'h1 Size',
        '#default_value' => theme_get_setting('h1'),
      );
      
      //H2
      $form['options']['typography']['headings']['h2'] =array(
        '#type' => 'textfield',
        '#title' => 'h2 Size',
        '#default_value' => theme_get_setting('h2'),
      );
      
      //H3
      $form['options']['typography']['headings']['h3'] =array(
        '#type' => 'textfield',
        '#title' => 'h3 Size',
        '#default_value' => theme_get_setting('h3'),
      );
      
      //H4
      $form['options']['typography']['headings']['h4'] =array(
        '#type' => 'textfield',
        '#title' => 'h4 Size',
        '#default_value' => theme_get_setting('h4'),
      );
      
      //H5
      $form['options']['typography']['headings']['h5'] =array(
        '#type' => 'textfield',
        '#title' => 'h5 Size',
        '#default_value' => theme_get_setting('h5'),
      );
      
      //H6
      $form['options']['typography']['headings']['h6'] =array(
        '#type' => 'textfield',
        '#title' => 'h6 Size',
        '#default_value' => theme_get_setting('h6'),
      );
      
  // Footer
  $form['options']['footer'] = array(
    '#type' => 'fieldset',
    '#title' => 'Footer',
  );
  
    // Footer Twitter Feed
    $form['options']['footer']['footer_twitter'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Twitter Feed</h3>',
    ); 
    
      // Enable Footer Twitter Feed
      $form['options']['footer']['footer_twitter']['enable_footer_twitter'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Twitter Feed',
        '#default_value' => theme_get_setting('enable_footer_twitter'),
      );
      
      // Footer Twitter Feed Handle
      $form['options']['footer']['footer_twitter']['footer_twitter_handle'] = array(
        '#type' => 'textfield',
        '#title' => 'Twitter Feed Handle',
        '#default_value' => theme_get_setting('footer_twitter_handle'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_footer_twitter"]' => array('checked' => FALSE)
          )
        )
      );
      
    // Primary Footer
    $form['options']['footer']['primary_footer'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Primary Footer</h3>',
    );   
      
	    // Enable Primary Footer
	    $form['options']['footer']['primary_footer']['enable_primary_footer'] = array(
	      '#type' => 'checkbox',
	      '#title' => 'Enable Primary Footer',
	      '#default_value' => theme_get_setting('enable_primary_footer'),
	    );
      
    
    // Secondary Footer
    $form['options']['footer']['secondary_footer'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Secondary Footer</h3>',
    ); 
    
      // Enable Secondary Footer
      $form['options']['footer']['secondary_footer']['enable_secondary_footer'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Secondary Footer',
        '#default_value' => theme_get_setting('enable_secondary_footer'),
      );
      
      // Secondary Footer Left
      $form['options']['footer']['secondary_footer']['secondary_footer_text'] = array(
        '#type' => 'textfield',
        '#title' => 'Secondary Footer Text',
        '#default_value' => theme_get_setting('secondary_footer_text'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_secondary_footer"]' => array('checked' => FALSE)
          )
        )
      );
        
  // Submit Button
  $form['#submit'][] = 'haiku_settings_submit';
  $form['#submit'][] = 'haiku_background_settings_submit';
  $form['#submit'][] = 'haiku_slide_settings_submit';
  
}

function haiku_settings_submit($form, &$form_state) {
  // Get the previous value
  $previous = 'public://' . $form['options']['header']['branding']['bg_path']['#default_value'] ;
  
  $file = file_save_upload('bg_upload');
  if ($file) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    
    if(file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['bg_path'] = $form_state['values']['bg_path'] = $destination;
      if ($destination != $previous) {
        return;
      }
    }
  } else {
    // Avoid error when the form is submitted without specifying a new image
    $_POST['bg_path'] = $form_state['values']['bg_path'] = $previous;
  }
  
}

// for background image//ntf
function haiku_background_settings_submit($form, &$form_state) {

  // Get the previous value
  $previous = 'public://' . $form['options']['header']['branding']['background_path']['#default_value'] ;
  
  $file = file_save_upload('background_upload');
  if ($file) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    
    if(file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['background_path'] = $form_state['values']['background_path'] = $destination;
      if ($destination != $previous) {
        return;
      }
    }
  } else {
    // Avoid error when the form is submitted without specifying a new image
    $_POST['background_path'] = $form_state['values']['background_path'] = $previous;
  }
  
}

// for slider images
function haiku_slide_settings_submit($form, &$form_state) {
  global $slide_number;
  $counter = '1';
  
  while ($counter <= $slide_number) {
  // Get the previous value
  $previous = 'public://' . $form['options']['front_page']['slider']['slide_'.$counter.'']['slide_path_'.$counter.'']['#default_value'] ;
  
  $file = file_save_upload('slide_upload_'.$counter.'');
  if ($file) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    
    if(file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['slide_path_'.$counter.''] = $form_state['values']['slide_path_'.$counter.''] = $destination;
      if ($destination != $previous) {
        return;
      }
    }
  } else {
    // Avoid error when the form is submitted without specifying a new image
    $_POST['slide_path_'.$counter.''] = $form_state['values']['slide_path_'.$counter.''] = $previous;
  }
  
  $counter++;
  }
}


?>