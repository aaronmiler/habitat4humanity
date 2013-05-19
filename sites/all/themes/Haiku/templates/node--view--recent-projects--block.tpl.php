<?php 
	global $root, $base_url;
	$tags = render($content['field_portfolio_tags']);
	$tags = str_replace(' ', '/',$tags);
?>

	<li>
		<div class="carousel_item_wrapper"> 
      <div class="carousel_item_content">
	      <div class="carousel_item_image">
	        <?php print render($content['field_portfolio_image']); ?>
	      </div>
	    </div>
      <div class="carousel_item_hover">
	     
	      <p><a href="<?php echo file_create_url($node->field_portfolio_image['und'][0]['uri']); ?>" rel="lightbox" title="<?php print $title; ?>"><i class="general foundicon-search"></i></a><a href="<?php print $node_url;?>" > <i class="general foundicon-paper-clip"></i></a></p>
	    </div> 
    </div>  
   <div class="carousel_item_description">
    <h4><a href="<?php print $node_url;?>"><?php print $title; ?></a></h4>
     <p><?php echo $tags;?></p>
   </div>  
 </li>