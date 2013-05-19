<?php haiku_header($page);?>
      
	<div id="heading_wrapper">
    <div id="heading_wrapper_after">
   	  <div class="row">
        <div class="six columns">
          <h2 class="page_heading_text"><?php print $title; ?></h2>
        </div>
        <div class="six columns">  
          <div id="breadcrumbs"><h3><?php if (theme_get_setting('breadcrumbs') == '1') {print $breadcrumb . $title; } ?></h3></div>
        </div>  
      </div>
    </div>
  </div> 
  
  <div class="row">
    <div class="twelve columns">

      <!-- Begin Isotope filters -->
      <section id="options" class="clearfix">
	      <ul id="filters" class="option-set clearfix" data-option-key="filter">
	        <li><a href="#filter" data-option-value="*" class="selected small button">All</a></li>
	        <li><a href="#filter" data-option-value=".photography" class="small button">Photography</a></li>
	        <li><a href="#filter" data-option-value=".design" class="small button">Design</a></li>
	        <li><a href="#filter" data-option-value=".marketing" class="small button">Marketing</a></li>
	      </ul>
      </section>
      
      <div class="row">
        <!-- Begin Isotope content -->
        <div id="isotope_test" >
          <?php print render($title_prefix); ?>
          <?php print render($title_suffix); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
        
      </div>
  	</div>
  </div>
  <div class="bottom_spacer"></div>  
<?php haiku_footer($page);?>