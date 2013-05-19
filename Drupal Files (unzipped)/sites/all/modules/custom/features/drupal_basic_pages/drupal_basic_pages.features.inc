<?php
/**
 * @file
 * drupal_basic_pages.features.inc
 */

/**
 * Implements hook_node_info().
 */
function drupal_basic_pages_node_info() {
  $items = array(
    'page' => array(
      'name' => t('Page'),
      'base' => 'node_content',
      'description' => t('Use pages for static content'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
