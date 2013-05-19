<?php

/**
 * @file media_vimeo/includes/themes/media_vimeo.theme.inc
 *
 * Theme and preprocess functions for Media: Vimeo.
 */

/**
 * Preprocess function for theme('media_vimeo_video').
 */
function media_vimeo_preprocess_media_vimeo_video(&$variables) {

  // Build the URI.
  $wrapper = file_stream_wrapper_get_instance_by_uri($variables['uri']);
  $parts = $wrapper->get_parameters();
  $variables['video_id'] = $parts['v'];

  // Parse options and build the query string. Only add the option to the query
  // array if the option value is not default. Be careful, depending on the
  // wording in media_vimeo.formatters.inc, TRUE may be query=0.
  // @see http://developer.vimeo.com/player/embedding
  $query = array();

  // These queries default to 0. If the option is true, set value to 1.
  foreach (array('api', 'autoplay', 'loop') as $option) {
    if ($variables['options'][$option]) {
      $query[$option] = 1;
    }
  }
  // Add a query player ID and identical html ID if js API is set.
  if ($variables['options']['api']) {
    $query['player_id'] = drupal_html_id('media-vimeo-' . $variables['video_id']);
    $variables['api_id_attribute'] = 'id="' . $query['player_id'] . '" ';
  }
  else {
    $variables['api_id_attribute'] = NULL;
  }

  // These queries default to 1. If the option is false, set value to 0.
  foreach (array('portrait', 'title', 'byline') as $option) {
    if (!$variables['options'][$option]) {
      $query[$option] = 0;
    }
  }

  // Strings.
  if (isset($variables['options']['color'])) {
    $query['color'] = str_replace('#', '', $variables['options']['color']);
  }

  // Non-query options.
  $protocol = $variables['options']['protocol'];

  // Add some options as their own template variables.
  foreach (array('width', 'height') as $themevar) {
    $variables[$themevar] = $variables['options'][$themevar];
  }

  // Build the iframe URL with options query string.
  $variables['url'] = url($protocol . 'player.vimeo.com/video/' . $variables['video_id'], array('query' => $query, 'external' => TRUE));
}

function theme_media_vimeo_field_formatter_styles($variables) {
  $element = $variables['element'];
  $style = $variables['style'];
  $variables['file'] = $element['#item'];
  $variables['uri'] = $variables['file']['uri'];
  $variables['style_name'] = $style['name'];
  return theme('media_vimeo_embed', $variables);
}

/**
 * Preview for Styles UI.
 */
function theme_media_vimeo_preview_style($variables) {
  $variables['uri'] = media_vimeo_variable_get('preview_uri');
  $variables['field_type'] = 'file';
  $variables['object'] = file_uri_to_object($variables['uri']);

  return theme('styles', $variables);
}

/**
 * NOTE: Deprecated with Styles version 2.
 */
function theme_media_vimeo_styles($variables) {
  $style = $variables['style'];
  $variables['file'] = $variables['object'];
  $variables['uri'] = $variables['object']->uri;
  $variables['style_name'] = $style['name'];
  return theme('media_vimeo_embed', $variables);
}

/**
 * @todo: get this working
 *
 * This code is for embedding videos in WYSIYWG areas, not currently working.
 * NOTE: Deprecated with Styles version 2.
 */
function theme_media_vimeo_embed($variables) {
  $preset_name = $variables['preset_name'];
  $preset = styles_containers_available_styles('file', 'media_vimeo', $preset_name);
  $output = '';
  if (!empty($preset)) {
    // Build the URL for display.
    $uri = $variables['uri'];
    $wrapper = file_stream_wrapper_get_instance_by_uri($uri);
    $parts = $wrapper->get_parameters();

    $autoplay = 'false';
    $in_browser = $thumbnail = FALSE;

    foreach ($preset['effects'] as $effect) {
      switch ($effect['name']) {
        case 'autoplay':
          $autoplay = $effect['data']['autoplay'] ? 'true' : 'false';
          break;
        case 'resize':
          $width = $effect['data']['width'];
          $height = $effect['data']['height'];
          break;
        case 'thumbnail':
          $thumbnail = $effect['data']['thumbnail'];
      }
    }
    if (isset($variables['object']->override)) {
      $override = $variables['object']->override;
      if (isset($override['width'])) {
        $width = $override['width'];
      }
      if (isset($override['height'])) {
        $height = $override['height'];
      }
      if (isset($override['wysiwyg'])) {
        $thumbnail = TRUE;
      }
      if (isset($override['browser']) && $override['browser']) {
        $in_browser = TRUE;
        $thumbnail = TRUE;
      }
    }
    $width = isset($width) ? $width : media_vimeo_variable_get('width');
    $height = isset($height) ? $height : media_vimeo_variable_get('height');
    $video_id = check_plain($parts['v']);
    if ($thumbnail) {
      // @todo Clean this up.
      $image_variables = array(
        'path' => $wrapper->getOriginalThumbnailPath(),
        'alt' => $variables['alt'],
        'title' => $variables['title'],
        'getsize' => FALSE,
      );
      if (isset($preset['image_style'])) {
        $image_variables['path'] = $wrapper->getLocalThumbnailPath();
        $image_variables['style_name'] = $preset['image_style'];
        $output = theme('image_style', $image_variables);
      }
      else {
        // We need to add this style attribute here so that it doesn't get lost
        // If you resize a video in a node, save it, edit it, but don't adjust
        // the sizing of the video while editing, the size will revert to the
        // default.  Adding the specific size here retains the original resizing
        $WYSIWYG = isset($variables['object']->override['style']) ? $variables['object']->override['style'] : '';
        $image_variables['attributes'] = array('width' => $width, 'height' => $height, 'style' => $WYSIWYG);
        $output = theme('image', $image_variables);
      }
      if ($in_browser) {
        // Add an overlay that says 'Vimeo' to media library browser thumbnails.
        $output .= '<span />';
      }
    }
    else {
      $output = theme('media_vimeo_video', array('uri' => $uri, 'width' => $width, 'height' => $height, 'autoplay' => ($autoplay == 'true' ? TRUE : NULL)));
    }
  }
  return $output;
}
