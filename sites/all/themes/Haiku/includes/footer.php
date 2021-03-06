<?php 
function haiku_footer($page){
  global $root; 
?>
  <!-- begin footer -->   
  <div id="footer"> 
    
    <?php if (theme_get_setting('enable_footer_twitter') == '1') : ?>
    <div id="footer_twitter">
      <div class="row">
      
        <div class="one columns bird">
          <i class="social foundicon-twitter"></i> 
        </div>
        
        <div class="eleven columns">
          <div id="footer_tweet" class='foot_tweet query'></div>
					<script type="text/javascript">
					                        
					    jQuery(document).ready(function ($) {
					      
					      $(".foot_tweet").tweet({
					        username: "<?php echo theme_get_setting('footer_twitter_handle'); ?>",
					        avatar_size: 0,
					        count: 1,
					        loading_text: "loading tweets..."
					      });
					    
					    });
					    
					  </script>
        </div>
        
      </div>  
    </div>  
    <?php endif; ?>
      
    <?php if (theme_get_setting('enable_primary_footer') == '1') { ?>
    <div class="row">
    
      <div class="three columns">
        <?php if(!$page['footer_1']) {?>
        <h2>Footer Block 1</h2>
        <?php } else { print render($page['footer_1']); }?>   
      </div> 
  
      <div class="three columns">
        <?php if(!$page['footer_2']) {?>
        <h2>Footer Block 2</h2>
        <?php } else { print render($page['footer_2']); }?>  
      </div>
      
                
      <div class="three columns">
        <?php if(!$page['footer_3']) {?>
        <h2>Footer Block 3</h2>        
        <?php } else { print render($page['footer_3']); }?>      
      </div>
      <div class="three columns">
        <h2>Hours</h2>
        <p>9 a.m. to 5 p.m.<br/>
        Monday thru Saturday<br/>
        <br/>
        <span class="footer-icon clock-icon"></span>donations until 4.30 p.m.
      </p>
      </div>
      
    </div> 
    <?php } ?> 
    
    <?php if (theme_get_setting('enable_secondary_footer') == '1') { ?>
    <div class="row">
      <div class="twelve columns"> 
        <?php if(!$page['footer_full']) {?>    
        <hr>
        <h6 class="after_footer"><?php echo theme_get_setting('secondary_footer_text'); ?></h6>
        <?php } else { print render($page['footer_full']); }?>  
        <div class="footer_social">
                <a class="social-icon twitter first" href="http://twitter.com/pdxrestore"></a>
                <a class="social-icon youtube" href="http://www.youtube.com/pdxReStore"></a>
                <a class="social-icon facebook" href="http://www.facebook.com/pdxrestore"></a>
              </div>
      </div> 
    </div>
    <?php } ?>
  
  </div>
  <!-- end footer --> 
<?php }
?>