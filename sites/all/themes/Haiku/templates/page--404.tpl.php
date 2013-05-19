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
            <div id ="main_content_wrap" class="twelve columns">
              <div id="main_content">
	              <div class="error_wrap">
		              <div class="error_img">
		                <img src="<?php global $root; echo $root;?>/images/404.png" alt="404">
		              </div>
		             
		              <div class="error_text">
		                <h2>Page not found</h2>
		                <p>We're sorry, but the page you are looking for cannot be found. Try one of the following instead:</p>
		                <br>
		                <p><a class="button" href="<?php print base_path();?>"> Home</a></p>
		              </div>    
		            </div>
                  </div>
                  <!--end error wrap-->
	            </div>
	          </div>
        
		      </div>
        </div>    
      </div>
  
<?php haiku_footer($page);?>