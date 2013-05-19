<?php global $root;?>
<article class="<?php print $classes . ' ' . $zebra; ?>"<?php print $attributes; ?>>
  <div class="comment_avatar">
    <?php 
      if (!$picture) {
        echo '<img src="'.$root.'/images/anon.png">'; 
      }
      else { 
        print $picture;   
      }
    ?>
  </div>
  <div class="comment_body">
    <ul class="comment_meta">  
      <li><i class="icon-user"></i> by <?php print $author; ?></li>
      <li><i class="icon-calendar"></i> <?php print format_date($node->created, 'custom', 'M d, Y'); ?></li>
      <li><i class="icon-info-sign"></i> <?php print $permalink; ?></li>
    </ul>
    <?php if ($new): ?>
      <span class="new"><?php print $new ?></span>
    <?php endif; ?>
    
      <div class="comment_content"<?php print $content_attributes; ?>>
        <?php hide($content['links']); print render($content); ?>
        <?php if ($signature): ?>
         <div class="user-signature clearfix">
           <?php print $signature ?>
        </div>
       <?php endif; ?>
      </div>

    <?php if (!empty($content['links'])) { print render($content['links']); } ?>
   </div>
   <div class="clearfix"></div>

</article> <!-- /.comment -->