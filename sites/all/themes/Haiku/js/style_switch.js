  jQuery(document).ready(function ($) {
    
    $("#color-nav li ").click(function() { 
      $("link.switch").attr("href",$(this).attr('rel'));
    });
   
	  $('#slideout').hover(function() {
	    $(this).animate({left:'0px'}, {queue:false, duration: 500});
	  }, 
	  function() {
	    $(this).animate({left:'-150px'}, {queue:false, duration: 500});
	  });
	  
    $("#color-nav li").click(function() { 
      $("link.switch").attr("href",$(this).attr('class'));
    });
    
    $(".debut-dark-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/backgrounds/debut_dark.png)");
    });
    
    $(".grid-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/backgrounds/noisy_grid.png)");
    });
    
    $(".wood-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/backgrounds/retina_wood.png)");
    });
    
    $(".dark-wood-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/backgrounds/dark_wood.png)");
    });
    
    $(".nistri-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/backgrounds/nistri.png)");
    });
    
    $(".bedge-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/backgrounds/bedge.png)");
    });
    
    $(".cartographer-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/backgrounds/cartographer.png)");
    });
    
    $(".illusion-bg").click(function() {
      $('body').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/backgrounds/illusion.png)");
    });
    
    $(".subtle-dots-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/wrapper-backgrounds/subtle_dots.png)");
    });
    
    $(".cream-dust-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/wrapper-backgrounds/cream_dust.png)");
    });
    
    $(".debut-light-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/wrapper-backgrounds/debut_light.png)");
    });
    
    $(".dust-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/wrapper-backgrounds/dust.png)");
    });
    
    $(".gray-jean-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/wrapper-backgrounds/gray_jean.png)");
    });
    
    $(".retina-dust-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/wrapper-backgrounds/retina_dust.png)");
    });
    
    $(".linen-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/wrapper-backgrounds/linen.png)");
    });
    
    $(".striped-lens-bg").click(function() {
      $('#main_wrapper').css("background-image", "url(http://refaktor.co/haiku-demo/sites/all/themes/haiku-drupal/images/wrapper-backgrounds/striped_lens.png)");
    });
    
    $(".blue-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#1b78ca'});
    });
    
    $(".black-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#000'});
    });
    
    $(".green-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#369616'});
    });
    
    $(".orange-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#DB8916'});
    });
    
    $(".red-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#ca1a1a'});
    });
    
    $(".light-blue-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#1b96ca'});
    });
    
    $(".purple-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#8622b1'});
    });
    
    $(".yellow-bg").click(function() {
      $('body').css({'background-image': 'none', 'background': '#dab800'});
    });
    
    $(".switch_wide").click(function() {
      $('#main_wrapper').css({ 'max-width': '100%', 'margin': '0 auto' });
      $('header').css({ 'max-width': '100%'});
      $('#main_wrapper').css({'box-shadow': '0px 0px 3px 0px black'});
      $('.bg_patterns_wrap').css({ 'display': 'none'});
      $('#footer').css({ 'max-width': '100%', 'margin': '0 auto', 'position': 'absolute'});
    });

    $(".switch_boxed").click(function() {
      $('#main_wrapper').css({ 'max-width': '1080px', 'margin': '0 auto'});
      $('#main_wrapper').css({'box-shadow': 'none'});
      $('header').css({ 'max-width': '1080px'});
      $('#footer').css({ 'max-width': '1080px', 'margin': '0 auto', 'position': 'absolute', 'left': '0', 'right': '0'});
      $('.bg_patterns_wrap').css({ 'display': 'block'});

    });
      
  });