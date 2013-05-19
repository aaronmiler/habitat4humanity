<?php

/**
 * @file
 * Styles class implementation for Media: Vimeo.
 */

class MediaVimeoStyles extends FileStyles {
  public $autoplay;

  function getAutoplay() {
    return $this->get('autoplay');
  }
  function setAutoplay($value) {
    return $this->set('autoplay', $value);
  }

  function getImageUri() {
    if ($image_uri = $this->get('imageUri')) {
      return $image_uri;
    }
    $object = $this->getObject();
    if ($object->uri) {
      $wrapper = file_stream_wrapper_get_instance_by_uri($object->uri);
      return $wrapper->getLocalThumbnailPath();
    }
  }
  function video($effect) {
    $variables = array(
      'uri' => $this->getUri(),
      'width' => $this->getWidth(),
      'height' => $this->getHeight(),
      'autoplay' => $this->getAutoplay(),
    );
    $this->setOutput(theme('media_vimeo_video', $variables));
  }
}
