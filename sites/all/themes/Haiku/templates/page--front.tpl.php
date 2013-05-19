<?php 
  haiku_header($page); // Call Header 
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>

  <?php if (theme_get_setting('enable_slider') == '1') : ?>
		<div class="slider_wrap"> 
	    <div class="row">
	    	<div class="twelve columns">
	    	  <div id="front_slide">
	    	    <?php $i = '1'; while ($i <= $slide_number) { ?>
		    	    <div <?php if (theme_get_setting('slide_caption_'.$i.'') != '') : ?> data-caption="#caption<?php echo $i;?>"<?php endif;?>>
			    	    <img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>">
		    	    </div>
		    	    
		    	    <?php if (theme_get_setting('slide_caption_'.$i.'') != '') : ?>
		    	      <span class="orbit-caption" id="caption<?php echo $i;?>"><?php echo theme_get_setting('slide_caption_'.$i.''); ?></span>
		    	    <?php endif;?>
	    	    <?php $i++; } ?>
	    	  </div>
	    	</div>
			</div>  
		</div>
		<?php endif; ?>
		
		<?php if (theme_get_setting('enable_highlight') == '1') : ?>       
    <div id="highlight">
      <div class="row">
        <div class="twelve columns">
          <h2 class="highlight_text"><?php echo theme_get_setting('highlight_text');?></h1>
        </div>
      </div>
    </div>
    <?php endif; ?>
    
    <?php if (theme_get_setting('enable_services') == '1') : ?>  
    <div id="services" class="row">
      <div class="twelve columns">
        <?php if(!$page['services']) {?>
          <h2>Add a block to the "Front Page Services" block or edit the page--front.tpl template to remove this placeholder content.</h2>
        <?php } else { print render($page['services']); }?>  
      </div>
    </div>
    
    <div class="row seperator">
      <div class="twelve columns">
        <hr>
      </div>
    </div>    
    
    <?php endif; ?>
    
    <?php if (theme_get_setting('enable_information') == '1') : ?>  
    
    <div id="information" class="row">
      <div class="twelve columns">
        
        <?php if(!$page['information']) {?>
		      <h2>Add a block to the "Front Page Information" block or edit the page--front.tpl template to remove this placeholder content.</h2>
			  <?php } else { print render($page['information']); }?>   
      </div>
    </div>    
        
    <div class="row seperator">
      <div class="twelve columns">
        <hr>
      </div>
    </div> 
    
    <?php endif; ?>
          
    <?php if (theme_get_setting('enable_recent_posts') == '1') : ?>         
    <div class="row">
      <div class="twelve columns">
        <div class="heading_title"><?php echo theme_get_setting('recent_posts_title');?></div>
      </div>
    </div> 
     
    <div class="row">
      <?php print render($page['front_blog']); ?>     
    </div>
   
    
     <div class="row seperator">
      <div class="twelve columns">
        <hr>
      </div>
    </div> 
    <?php endif; ?> 
     
    <?php if (theme_get_setting('enable_recent_projects') == '1') : ?>             
    <div class="row">
      <div class="twelve columns">
       
          <div class="heading_title"><?php echo theme_get_setting('recent_projects_title');?></div>
          <div class="carousel_navigation">
	    <a id="prev" class="prev" href="#"><i class="icon-chevron-left"></i></a>
	    <a id="next" class="next" href="#"><i class="icon-chevron-right"></i></a>
          </div>
      
      </div>
    </div> 
     
    <div class="row">
      <div class="twelve columns">
        <div class="projects_carousel">  
          <ul id="recent_projects">
            <?php print render($page['recent_projects']); ?>       
          </ul>
       </div>      
      </div>
    </div>
    <?php endif ?>  
    
    <?php if (theme_get_setting('enable_clients') == '1') : ?>   
     <div class="row seperator">
      <div class="twelve columns">
        <hr>
      </div>
    </div> 
    
    
    <div class="row">
      <div class="twelve columns">
        <?php if(!$page['clients']) {?>

          <h2>Add a block to the "Front Page Clients" block or edit the page--front.tpl template to remove this placeholder content.</h2>
          
        <?php } else { print render($page['clients']); }?>  
      </div>
    </div>
    <?php endif ?>  
    <div class="bottom_spacer"></div>   
  </div>
  <!-- end main wrapper -->    

<?php haiku_footer($page); // Call Footer ?>