<section id="comments" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<div class="clearfix"></div>
  <?php if ($content['comments'] && $node->type != 'forum'): ?>
    <?php print render($title_prefix); ?>
    <h4 class="comments_title"><?php print t('Comments'); ?></h4>
    <?php print render($title_suffix); ?>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

  <?php if ($content['comment_form']): ?>
    <section id="comment-form-wrapper">
      <h4 class="comments_title"><?php print t('Add new comment'); ?></h4>
      <?php print render($content['comment_form']); ?>
    </section> <!-- /#comment-form-wrapper -->
    <div class="bottom_spacer"></div>    
  <?php endif; ?>
</section> <!-- /#comments -->