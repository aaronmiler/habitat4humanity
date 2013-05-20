<?php 
function haiku_header($page){
  global $root; 
?>
  <div id="main_wrapper">
  <header>
    <div class="container h4h_header">
            
      <div class="row">  
        <div class="four columns branding" <?php if (variable_get('site_slogan')) : ?>style="padding-top: 10px" <?php endif; ?> >
          <?php if (theme_get_setting('branding_type') == 'logo'): ?>
            <a href="<?php print base_path();?>"><img src="<?php print file_create_url(theme_get_setting('bg_path')); ?>" /></a>
          <?php endif; ?>
          <?php if (theme_get_setting('branding_type') == 'text'): ?>
            <a href="<?php print base_path();?>">
              <h1 id="main_title_text"><?php print variable_get('site_name'); ?></h1>
              <h2 id="main_title_slogan"><?php print variable_get('site_slogan'); ?></h2>
            </a>
          <?php endif; ?>
        </div>
      	<div class="eight columns"> 
          <div id="nav">
            <!-- begin menu -->
             <nav class="top-bar">
              <ul class="left">
              <li class="name">
	              <h1>
	                <a href="#">
	                  Select a page 
	                </a>
	              </h1>
	            </li>
              <li class="toggle-topbar"><a href="#"></a></li>
              </ul>
              <section class="social">
                <a href="http://visitor.constantcontact.com/d.jsp?m=1101491234386&p=oi">Subscribe to our newsletter</a> | 
                <a href="http://www.volunteerup.com/ProjectCal.asp?o=131">Volunteer Sign Up</a>
                <a class="social-icon twitter first" href="http://twitter.com/pdxrestore"></a>
                <a class="social-icon youtube" href="http://www.youtube.com/pdxReStore"></a>
                <a class="social-icon facebook" href="http://www.facebook.com/pdxrestore"></a>
              </section>
              <section class="menu_wrap">
				          <?php print theme('links__system_main_menu', array(
				            'attributes' => array(
				              'id' => 'main-menu-links',
				              'class' => array('links', 'clearfix'),
				            ),
				            'heading' => array(
				              'text' => t('Main menu'),
				              'level' => 'h2',
				              'class' => array('element-invisible'),
				            ),
				          )); 
				          ?>
              </section>
             </nav>
				      </div> 
				        
				    </div> 
				 
            <!-- end menu -->   
          </div> 
        </div>
        <!-- end main span2 -->  
       
       <?php  // haiku_style_switch(); ?>
          
  </header> 

<?php }
?>