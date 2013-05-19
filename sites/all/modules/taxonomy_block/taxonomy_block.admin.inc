<?php
/**
 * @file
 * Administration settings form.
 */

/**
 * Callback for admin/config/taxonomy_block;
 */
function taxonomy_block_admin_settings() {
  $form = array();

  $vocabs = array();
  foreach(taxonomy_vocabulary_get_names() as $vocab) {
    $vocabs[$vocab->vid] = $vocab->name;
  }

  $form['taxonomy_block_vid'] = array(
    '#type'           => 'select',
    '#title'          => t('Select a Vocabulary'),
    '#default_value'  => variable_get('taxonomy_block_vid', 0),
    '#description'    => t('Select Vocabulary for used by taxonomy block.'),
    '#options'        => $vocabs
  );

  $form['taxonomy_block_node_count'] = array(
    '#type'           => 'checkbox',
    '#title'          => t('Show node count'),
    '#default_value'  => variable_get('taxonomy_block_node_count', 0)
  );

  //@todo, use an enable checkbox and form states api to display form
  $form['taxonomy_block_custom_link'] = array(
    '#type'           => 'fieldset',
    '#title'          => t('Custom Overview Link'),
    '#collapsible'    => FALSE,
    '#description' => t('A link that gets injected at the top position of the block. <b>LEAVE EMPTY TO DISABLE</b>'),
  );
    $form['taxonomy_block_custom_link']['taxonomy_block_link_title'] = array(
      '#type'           => 'textfield',
      '#title'          => t('Title of the Link'),
      '#default_value' => variable_get('taxonomy_block_link_title', ''),
      '#description' => t('The Title of the link'),
    );
    $form['taxonomy_block_custom_link']['taxonomy_block_link'] = array(
      '#type'           => 'textfield',
      '#title'          => t('Custom Overview Link'),
      '#default_value' => variable_get('taxonomy_block_link', ''),
      '#description' => t('URL of a page, for example a view that shows an overview of the terms with images. <b>DO NOT ADD leading slash</b>'),
    );


  return system_settings_form($form);
}
