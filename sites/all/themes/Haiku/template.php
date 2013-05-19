<?php
/**
 * Define $root global variable.
 */
global $root;
$root = base_path() . path_to_theme();

include_once(drupal_get_path('theme', 'haiku').'/includes/init.php');

/**
 * Preprocess variables for the username.
 */
function haiku_preprocess_username(&$vars) {
  global $theme_key;
  $theme_name = $theme_key;
  
  // Add rel=author for SEO and supporting search engines
  if (isset($vars['link_path'])) {
    $vars['link_attributes']['rel'][] = 'author';
  }
  else {
    $vars['attributes_array']['rel'][] = 'author';
  }
}

/**
 * Assign theme hook suggestions for custom templates.
 */  
function haiku_preprocess_page(&$vars, $hook) {
  if (isset($vars['node'])) {
    $suggest = "page__node__{$vars['node']->type}";
    $vars['theme_hook_suggestions'][] = $suggest;
  }
  
  $status = drupal_get_http_header("status");  
  if($status == "404 Not Found") {      
    $vars['theme_hook_suggestions'][] = 'page__404';
  }
}

/**
 * Assign top level menu list items an ascending class of menu_$number.
 */
function haiku_menu_link(array $variables) {
  unset($variables['element']['#attributes']['class']);
  $element = $variables['element'];
  static $item_id = 0;
  $menu_name = $element['#original_link']['menu_name'];
  
  
  if ($element['#original_link']['depth'] == 1 && $menu_name == variable_get('menu_main_links_source', 'main-menu')) {
	  $element['#attributes']['class'][] = 'menu_' . (++$item_id);
	}
  
  if ($element['#below']) {
    $element['#attributes']['class'][] = 'has-dropdown';
  }
  
  if ($element['#href'] == '<front>' && drupal_is_front_page()) {
    $element['#attributes']['class'][] = 'active-trail';
  }
  
  $sub_menu = $element['#below'] ? drupal_render($element['#below']) : '';
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);

  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . '</li>';
}

/**
 * Allow sub-menu items to be displayed.
 */
function haiku_links($variables) {
  if (array_key_exists('id', $variables['attributes']) && $variables['attributes']['id'] == 'main-menu-links') {
  	$pid = variable_get('menu_main_links_source', 'main-menu');
	$tree = menu_tree($pid);
	return drupal_render($tree);
  }
  return theme_links($variables);
}

/**
 * Add a comma delimiter between several field types.
 */
function haiku_field($variables) {
 
  $output = '';
 
  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<div class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';  
  }
 
  // Render the items.
 
  if ($variables['element']['#field_name'] == 'field_tags') {
    // For tags, concatenate into a single, comma-delimitated string.
    foreach ($variables['items'] as $delta => $item) {
      $rendered_tags[] = drupal_render($item);
    }
    $output .= implode(', ', $rendered_tags);
  }
  
  elseif ($variables['element']['#field_name'] == 'field_image') {
    // For tags, concatenate into a single, comma-delimitated string.
    foreach ($variables['items'] as $delta => $item) {
      $rendered_tags[] = drupal_render($item);
    }
    $output .= implode(', ', $rendered_tags);
  }
  
  elseif ($variables['element']['#field_name'] == 'field_second_image') {
    // For tags, concatenate into a single, comma-delimitated string.
    foreach ($variables['items'] as $delta => $item) {
      $rendered_tags[] = drupal_render($item);
    }
    $output .= implode(', ', $rendered_tags);
  }

  elseif ($variables['element']['#field_name'] == 'field_portfolio_tags') {
    // For tags, concatenate into a single, comma-delimitated string.
    foreach ($variables['items'] as $delta => $item) {
      $rendered_tags[] = drupal_render($item);
    }
    $output .= implode(', ', $rendered_tags);
  }
  
  elseif ($variables['element']['#field_name'] == 'field_portfolio_image') {

    // For tags, concatenate into a single, comma-delimitated string.
    foreach ($variables['items'] as $delta => $item) {
      $rendered_tags[] = drupal_render($item);
    }
    $output .= implode(', ', $rendered_tags);
  }
   
  else {
    // Default rendering taken from theme_field().
    foreach ($variables['items'] as $delta => $item) {
      $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even');
      $output .= '<div class="' . $classes . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</div>';
    }
  }
  
  // Render the top-level DIV.
   
  return $output;
}

/**
 * Put Breadcrumbs in a ul li structure and add descending z-index style to each <a href> tag.
 */
function haiku_breadcrumb($variables) {
  $count = '100';
  $breadcrumb = $variables['breadcrumb'];
  $crumbs = '';

  if (!empty($breadcrumb)) {
   
    foreach($breadcrumb as $value) {
      $count = $count - 1;
      $style = ' style="z-index:'.$count.';"';
      $pos = strpos( $value, ">"); 
      $temp1=substr($value,0,$pos);
      $temp2=substr($value,$pos,$pos);
      $crumbs = $value.'/ ';
    }
  
  }
  return $crumbs;
}

/**
 * Add various META tags to HTML head..
 */
function haiku_preprocess_html(&$vars){
  global $root;
  $meta_title = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#weight' => 1,
    '#attributes' => array(
      'name' => 'title',
      'content' => theme_get_setting('seo_title')
    )
  );
  $meta_description = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#weight' => 2,
    '#attributes' => array(
      'name' => 'description',
      'content' => theme_get_setting('seo_description')
    )
  );
  $meta_keywords = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#weight' => 3,
    '#attributes' => array(
      'name' => 'keywords',
      'content' => theme_get_setting('seo_keywords')
    )
  );
  /* Commenting out for now
  $meta_ie_render_engine = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#weight' => 0,
    '#attributes' => array(
      'content' =>  'IE=edge,chrome=1',
      'http-equiv' => 'X-UA-Compatible',
    )
  );
  */
  $font = array(
    '#tag' => 'link', 
    '#weight' => 4,
    '#attributes' => array( 
      'href' => 'http://fonts.googleapis.com/css?family=Open+Sans', 
      'rel' => 'stylesheet',
      'type' => 'text/css',
    ),
  );
  $condensed= array(
    '#tag' => 'link', 
    '#weight' => 5,
    '#attributes' => array( 
      'href' => 'http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300', 
      'rel' => 'stylesheet',
      'type' => 'text/css',
    ),
  );
  $foundation = array(
    '#tag' => 'link', 
    '#weight' => 6,
    '#attributes' => array( 
      'href' => ''.$root.'/foundation/stylesheets/foundation.css', 
      'rel' => 'stylesheet',
      'type' => 'text/css',
      'media' => 'screen',
    ),
  );
  $foundation_app = array(
    '#tag' => 'link', 
    '#weight' => 7,
    '#attributes' => array( 
      'href' => ''.$root.'/foundation/stylesheets/app.css', 
      'rel' => 'stylesheet',
      'type' => 'text/css',
      'media' => 'screen',
    ),
  );
  $style = array(
    '#tag' => 'link', 
    '#weight' => 8,
    '#attributes' => array( 
      'href' => ''.$root.'/css/style.css', 
      'rel' => 'stylesheet',
      'type' => 'text/css',
      'media' => 'screen',
    ),
  );
  $color = array(
    '#tag' => 'link', 
    '#weight' => 9,
    '#attributes' => array( 
      'href' => ''.$root.'/css/colors/'.theme_get_setting('color_scheme').'.css', 
      'rel' => 'stylesheet',
      'type' => 'text/css',
      'media' => 'screen',
    ),
  );
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#weight' => 10,
    '#attributes' => array(
      'name' => 'viewport',
      'content' =>  'width=device-width, initial-scale=1, maximum-scale=1',
    )
  );
  $font_family = array(
    '#type' => 'markup',
    '#markup' => "<style type='text/css'>body {font-family:".theme_get_setting('font_family')." !important;}</style> ",
    '#weight' => 11,
  );
  $headings = array(
    '#type' => 'markup',
    '#markup' => "<style type='text/css'>h1 {font-size:".theme_get_setting('h1').";} h2 {font-size:".theme_get_setting('h2').";} h3 {font-size:".theme_get_setting('h3').";} h4 {font-size:".theme_get_setting('h4').";} h5 {font-size:".theme_get_setting('h5').";} h6 {font-size:".theme_get_setting('h6').";}</style> ",
    '#weight' => 12,
  );
  
  $box_layout = array(
    '#type' => 'markup',
    '#markup' => "<style type='text/css'>#main_wrapper { max-width: 1080px; margin: 0 auto; } header {left: 0; right: 0; max-width: 1080px; margin: 0 auto;} #footer { max-width: 1080px; margin: 0 auto; position: absolute; left: 0; right: 0; }</style> ",
    '#weight' => 13,
  );

  $background_color = array(
    '#type' => 'markup',
    '#markup' => "<style type='text/css'>body {background:".theme_get_setting('body_background').";}</style> ",
    '#weight' => 14,
  );

  $background_image = array(
    '#type' => 'markup',
    '#markup' => "<style type='text/css'>body {background-image:url(".$root."/images/backgrounds/".theme_get_setting('background_select').".png);}</style> ",
    '#weight' => 15,
  );
  
  $wrapper_background_color = array(
    '#type' => 'markup',
    '#markup' => "<style type='text/css'>#main_wrapper {background:".theme_get_setting('main_wrapper_background').";}</style> ",
    '#weight' => 16,
  );

   $wrapper_background_image = array(
    '#type' => 'markup',
    '#markup' => "<style type='text/css'>#main_wrapper {background-image:url(".$root."/images/wrapper-backgrounds/".theme_get_setting('main_wrapper_pattern_select').".png);}</style> ",
    '#weight' => 17,
  );
  
  $highlight_margin = array(
    '#type' => 'markup',
    '#markup' => "<style type='text/css'>#highlight {margin-top: -50px;}</style> ",
    '#weight' => 18,
  );


    
  if (theme_get_setting('seo_title') != "") {
    drupal_add_html_head( $meta_title, 'meta_title' );
  }
   if (theme_get_setting('seo_description') != "") {
    drupal_add_html_head( $meta_description, 'meta_description' );
  }
  if (theme_get_setting('seo_keywords') != "") {
    drupal_add_html_head( $meta_keywords, 'meta_keywords' );
  }
  
  if (theme_get_setting('enable_boxed_layout') == "1") {
    drupal_add_html_head( $box_layout, 'box_layout' );
  }

  drupal_add_html_head( $font, 'google_font_open_sans' );
  drupal_add_html_head( $condensed, 'google_font_condensed' );
  drupal_add_html_head( $foundation, 'foundation_style' );
  drupal_add_html_head( $foundation_app, 'foundation_app_style' );
  drupal_add_html_head( $style, 'main_style' );
  drupal_add_html_head( $color, 'color_style' );
  drupal_add_html_head( $viewport, 'meta_viewport' );
  drupal_add_html_head( $font_family, 'font_family');
  drupal_add_html_head( $headings, 'headings');
  drupal_add_html_head( $background_color, 'background_color');
  
  if (theme_get_setting('enable_background_pattern') == "1") {
    drupal_add_html_head( $background_image, 'background_image');
  }  
  
  drupal_add_html_head( $wrapper_background_color, 'wrapper_background_color');
  
  if (theme_get_setting('enable_main_wrapper_pattern') == "1") {
    drupal_add_html_head( $wrapper_background_image, 'wrapper_background_image');
  }  
  
  if (theme_get_setting('enable_slider') != "1") {
    drupal_add_html_head( $highlight_margin, 'header_height');
  }  
}

/* Separate from haiku_preprocess_html so function can be called directly before </head> tag. */
function haiku_user_css() {
  echo "<!-- User defined CSS -->";
  echo "<style type='text/css'>";
  echo theme_get_setting('user_css');
  echo "</style>";
  echo "<!-- End user defined CSS -->";	
}

?>