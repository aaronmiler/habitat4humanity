<?php
/**
 * @file
 * drupal_basic_pages.features.node_export_features.inc
 */

/**
 * Implements hook_node_export_features_default().
 */
function drupal_basic_pages_node_export_features_default() {
  $node_export = array(
  'code_string' => 'array(
  (object) array(
      \'vid\' => \'133\',
      \'uid\' => \'1\',
      \'title\' => \'Welcome\',
      \'log\' => \'\',
      \'status\' => \'1\',
      \'comment\' => \'1\',
      \'promote\' => \'0\',
      \'sticky\' => \'0\',
      \'vuuid\' => \'e163ebef-aabb-4b84-4148-5ae5cf73dedc\',
      \'nid\' => \'2\',
      \'type\' => \'page\',
      \'language\' => \'und\',
      \'created\' => \'1333910533\',
      \'changed\' => \'1345432336\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'uuid\' => \'5539fdc7-1e41-4aa4-f150-af59e19f950e\',
      \'revision_timestamp\' => \'1345432336\',
      \'revision_uid\' => \'1\',
      \'body\' => array(
        \'und\' => array(
          array(
            \'value\' => "<center>\\r\\n<p><a href=\\"portfolio\\">[[{\\"type\\":\\"media\\",\\"view_mode\\":\\"media_original\\",\\"fid\\":\\"86\\",\\"attributes\\":{\\"alt\\":\\"\\",\\"class\\":\\"media-image\\",\\"height\\":\\"163\\",\\"typeof\\":\\"foaf:Image\\",\\"width\\":\\"280\\"}}]]</a>&nbsp;<a href=\\"services\\">[[{\\"type\\":\\"media\\",\\"view_mode\\":\\"media_original\\",\\"fid\\":\\"87\\",\\"attributes\\":{\\"alt\\":\\"\\",\\"class\\":\\"media-image\\",\\"height\\":\\"163\\",\\"typeof\\":\\"foaf:Image\\",\\"width\\":\\"280\\"}}]]</a></p>\\r\\n<p><a href=\\"contact\\">[[{\\"type\\":\\"media\\",\\"view_mode\\":\\"media_original\\",\\"fid\\":\\"85\\",\\"attributes\\":{\\"alt\\":\\"\\",\\"class\\":\\"media-image\\",\\"height\\":\\"163\\",\\"typeof\\":\\"foaf:Image\\",\\"width\\":\\"280\\"}}]]</a>&nbsp;<a href=\\"about\\">[[{\\"type\\":\\"media\\",\\"view_mode\\":\\"media_original\\",\\"fid\\":\\"88\\",\\"attributes\\":{\\"alt\\":\\"\\",\\"class\\":\\"media-image\\",\\"height\\":\\"163\\",\\"typeof\\":\\"foaf:Image\\",\\"width\\":\\"280\\"}}]]</a></p>\\r\\n</center>",
            \'summary\' => \'\',
            \'format\' => \'full_html\',
            \'safe_value\' => " <p></p><center>\\n<p><a href=\\"portfolio\\"><img alt=\\"\\" class=\\"media-image\\" height=\\"163\\" width=\\"280\\" typeof=\\"foaf:Image\\" src=\\"http://www.alexlaughnan.com/sites/default/files/Portfolio.png\\" /></a> <a href=\\"services\\"><img alt=\\"\\" class=\\"media-image\\" height=\\"163\\" width=\\"280\\" typeof=\\"foaf:Image\\" src=\\"http://www.alexlaughnan.com/sites/default/files/Services.png\\" /></a></p>\\n<p><a href=\\"contact\\"><img alt=\\"\\" class=\\"media-image\\" height=\\"163\\" width=\\"280\\" typeof=\\"foaf:Image\\" src=\\"http://www.alexlaughnan.com/sites/default/files/Contact.png\\" /></a> <a href=\\"about\\"><img alt=\\"\\" class=\\"media-image\\" height=\\"163\\" width=\\"280\\" typeof=\\"foaf:Image\\" src=\\"http://www.alexlaughnan.com/sites/default/files/About.png\\" /></a></p>\\n<p></p></center>\\n ",
            \'safe_summary\' => \'  \',
          ),
        ),
      ),
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'cid\' => \'0\',
      \'last_comment_timestamp\' => \'1333910533\',
      \'last_comment_name\' => NULL,
      \'last_comment_uid\' => \'1\',
      \'comment_count\' => \'0\',
      \'name\' => \'admin\',
      \'picture\' => \'0\',
      \'data\' => \'b:0;\',
      \'path\' => array(
        \'pid\' => \'2\',
        \'source\' => \'node/2\',
        \'alias\' => \'welcome\',
        \'language\' => \'und\',
      ),
      \'menu\' => NULL,
      \'node_export_drupal_version\' => \'7\',
    ),
  (object) array(
      \'vid\' => \'7\',
      \'uid\' => \'1\',
      \'title\' => \'Login\',
      \'log\' => \'\',
      \'status\' => \'1\',
      \'comment\' => \'1\',
      \'promote\' => \'0\',
      \'sticky\' => \'0\',
      \'vuuid\' => \'d0a6d423-44da-0a84-6532-3ecbd142b2af\',
      \'nid\' => \'7\',
      \'type\' => \'page\',
      \'language\' => \'und\',
      \'created\' => \'1334423819\',
      \'changed\' => \'1334423819\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'uuid\' => \'aae5dc07-9f21-7b04-c986-14bc265f7adc\',
      \'revision_timestamp\' => \'1334423819\',
      \'revision_uid\' => \'1\',
      \'body\' => array(),
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'cid\' => \'0\',
      \'last_comment_timestamp\' => \'1334423819\',
      \'last_comment_name\' => NULL,
      \'last_comment_uid\' => \'1\',
      \'comment_count\' => \'0\',
      \'name\' => \'admin\',
      \'picture\' => \'0\',
      \'data\' => \'b:0;\',
      \'path\' => array(
        \'pid\' => \'7\',
        \'source\' => \'node/7\',
        \'alias\' => \'login\',
        \'language\' => \'und\',
      ),
      \'menu\' => NULL,
      \'node_export_drupal_version\' => \'7\',
    ),
  (object) array(
      \'vid\' => \'9\',
      \'uid\' => \'1\',
      \'title\' => \'Access Denied\',
      \'log\' => \'\',
      \'status\' => \'1\',
      \'comment\' => \'1\',
      \'promote\' => \'0\',
      \'sticky\' => \'0\',
      \'vuuid\' => \'1919f2a6-de4d-1c24-dd7d-2fd613700cf8\',
      \'nid\' => \'9\',
      \'type\' => \'page\',
      \'language\' => \'und\',
      \'created\' => \'1334424347\',
      \'changed\' => \'1334424347\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'uuid\' => \'c425b5d3-ca72-7544-1129-4cabeed377b0\',
      \'revision_timestamp\' => \'1334424347\',
      \'revision_uid\' => \'1\',
      \'body\' => array(
        \'und\' => array(
          array(
            \'value\' => "<p>You do not have access to this page.</p>\\r\\n",
            \'summary\' => \'\',
            \'format\' => \'full_html\',
            \'safe_value\' => " <p>You do not have access to this page.</p>\\n ",
            \'safe_summary\' => \'  \',
          ),
        ),
      ),
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'cid\' => \'0\',
      \'last_comment_timestamp\' => \'1334424347\',
      \'last_comment_name\' => NULL,
      \'last_comment_uid\' => \'1\',
      \'comment_count\' => \'0\',
      \'name\' => \'admin\',
      \'picture\' => \'0\',
      \'data\' => \'b:0;\',
      \'path\' => array(
        \'pid\' => \'9\',
        \'source\' => \'node/9\',
        \'alias\' => \'access-denied\',
        \'language\' => \'und\',
      ),
      \'menu\' => NULL,
      \'node_export_drupal_version\' => \'7\',
    ),
  (object) array(
      \'vid\' => \'62\',
      \'uid\' => \'1\',
      \'title\' => \'Page Not Found\',
      \'log\' => \'\',
      \'status\' => \'1\',
      \'comment\' => \'1\',
      \'promote\' => \'0\',
      \'sticky\' => \'0\',
      \'vuuid\' => \'571355a0-49ac-7644-4584-d20ba7f6a09a\',
      \'nid\' => \'8\',
      \'type\' => \'page\',
      \'language\' => \'und\',
      \'created\' => \'1334423950\',
      \'changed\' => \'1334797339\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'uuid\' => \'de222796-8d52-52c4-6dd8-f9e27d283868\',
      \'revision_timestamp\' => \'1334797339\',
      \'revision_uid\' => \'1\',
      \'body\' => array(
        \'und\' => array(
          array(
            \'value\' => "<p>I&#39;m sorry, but the page requested cannot be displayed.<br />\\r\\n\\t<br />\\r\\n\\tSuggestions for finding the information you&#39;re looking for:</p>\\r\\n<ul>\\r\\n\\t<li>\\r\\n\\t\\tUse the <a href=\\"http://alexlaughnan.com/sitemap\\">site map</a></li>\\r\\n\\t<li>\\r\\n\\t\\tTry the search</li>\\r\\n\\t<li>\\r\\n\\t\\tCheck the spelling of the address entered</li>\\r\\n</ul>\\r\\n<p>&nbsp;</p>\\r\\n",
            \'summary\' => \'\',
            \'format\' => \'full_html\',
            \'safe_value\' => " <p>I\'m sorry, but the page requested cannot be displayed.</p>\\n<p>\\tSuggestions for finding the information you\'re looking for:</p>\\n<ul><li>\\n\\t\\tUse the <a href=\\"http://alexlaughnan.com/sitemap\\">site map</a></li>\\n<li>\\n\\t\\tTry the search</li>\\n<li>\\n\\t\\tCheck the spelling of the address entered</li>\\n</ul><p> </p>\\n ",
            \'safe_summary\' => \'  \',
          ),
        ),
      ),
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'cid\' => \'0\',
      \'last_comment_timestamp\' => \'1334423950\',
      \'last_comment_name\' => NULL,
      \'last_comment_uid\' => \'1\',
      \'comment_count\' => \'0\',
      \'name\' => \'admin\',
      \'picture\' => \'0\',
      \'data\' => \'b:0;\',
      \'path\' => array(
        \'pid\' => \'8\',
        \'source\' => \'node/8\',
        \'alias\' => \'page-not-found\',
        \'language\' => \'und\',
      ),
      \'menu\' => NULL,
      \'node_export_drupal_version\' => \'7\',
    ),
)',
);
  return $node_export;
}
