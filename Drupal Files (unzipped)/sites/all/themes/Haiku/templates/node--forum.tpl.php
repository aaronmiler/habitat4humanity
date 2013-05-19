<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php endif; ?>

  <?php if ($user_picture || $display_submitted || !$page): ?>
   
  
      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
        
        <h2 class="node_title" <?php print $title_attributes; ?>><div class="node_title_wrap"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></div></h2><div class="triangle"></div>

      <?php endif; ?>
      <?php print render($title_suffix); ?>
  
      <?php if ($display_submitted): ?>
        <ul class="meta" style="float: none !important;">
        
          <li><i class="icon-user"></i> by <?php print $name; ?></li>
          <li><i class="icon-calendar"></i> <?php print $date; ?></li>
        <li><i class="icon-comment"></i> <a href="<?php print $node_url;?>/#comments"><?php print $comment_count; ?> comments</a></li>
        </ul>
      <?php endif; ?>
	
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
    
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['taxonomy_forums']);
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      
      print render($content);
    ?>
  </div>
 
  	  Forum category:<?php print render($content['taxonomy_forums']); ?>
 
    <?php if (render($content['field_tags'])): ?>  
      <div class="tags"><i class="icon-tags"></i><?php print render($content['field_tags']); ?></div>
    <?php endif; ?>
    
    <div class="read_more">
    <?php if($teaser): ?>
     <button class="btn" type="button"> <?php print l(t('Read more'), '../' . $node_url, array('attributes' => array('class' => t('newreadmore')))); ?> </button>
  <?php endif;?>

    </div>
<div class="clearfix"></div>


  <?php print render($content['comments']); ?>

<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>