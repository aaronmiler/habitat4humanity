<?php 
global $root, $base_url;
$share_url = $base_url.'/node/'.$node->nid;
?>

  <div id="single_portfolio" class="row">
  <div class="eight columns">
    <div class="portfolio_image"><?php print render($content['field_portfolio_image']); ?></div>
  </div>
  
  <div class="four columns">  
	  <?php if (!$page): ?>
	  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
		<?php endif; ?>

  
    <?php print render($title_prefix); ?>

      <h3 class="post_title" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>

    <?php print render($title_suffix); ?>
  
  <div class="article_content"<?php print $content_attributes; ?>>
    <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['taxonomy_forums']);
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_portfolio_tags']);
      hide($content['field_portfolio_image']);
      print render($content);
    ?>
  </div>
 
<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>

  </div>
  </div>
  <div class="bottom_spacer"></div>   