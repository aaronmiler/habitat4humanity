<?php
/**
 * @file
 * habitat_site.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function habitat_site_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function habitat_site_views_api() {
  return array("version" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function habitat_site_node_info() {
  $items = array(
    'inventory_item' => array(
      'name' => t('Inventory Item'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'page' => array(
      'name' => t('Page'),
      'base' => 'node_content',
      'description' => t('A <em>page</em>, similar in form to a story, is a simple method for creating and displaying information that rarely changes, such as an "About us" section of a website. By default, a page entry does not allow visitor comments and is not featured on the site\'s initial home page.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'store' => array(
      'name' => t('Store'),
      'base' => 'node_content',
      'description' => t('Store locations'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'webform' => array(
      'name' => t('Webform'),
      'base' => 'node_content',
      'description' => t('Create a new form or questionnaire accessible to users. Submission results and statistics are recorded and accessible to privileged users.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
