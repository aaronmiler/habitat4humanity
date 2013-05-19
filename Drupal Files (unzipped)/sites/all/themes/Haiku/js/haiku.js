  $(window).load(function() {
    $('.menu_wrap ul ul').css('display','block');
  });
  
  jQuery(document).ready(function ($) {
  	
	  $('ul#quotes').quote_rotator();
  
    $('.menu_1 a').append('<p class="menu_tagline">the beginning</p>');
    
    $('.menu_2 a').append('<p class="menu_tagline">what we offer</p>');
    
    $('.menu_3 a').append('<p class="menu_tagline">recent news</p>');
    
    $('.menu_4 a').append('<p class="menu_tagline">our latest work</p>');
    
    $('.menu_5 a').append('<p class="menu_tagline">get in touch</p>');
     
	  $(".featured").orbit({timer: false});
	  
	  $("#front_slide").orbit({captions: true});
	    
	  $(".services_content").hover(
      function(){
          $(this).children(".team_image_hover").fadeTo(400,.8).show();
      },
      function(){
          $(this).children(".team_image_hover").fadeTo(400,0);
      }
    );
    
    $(".carousel_item_wrapper").hover(
      function(){
          $(this).children(".carousel_item_hover").fadeTo(400,.9).show();
      },
      function(){
          $(this).children(".carousel_item_hover").fadeTo(400,0);
      }
    );
    
    $().UItoTop({ easingType: 'easeOutQuart' });
    
    $(".recent_post_photo a").replaceWith(function() {  return $(this).contents(); });
    
    $(window).load(function(){
     
      var $container = $('#isotope_test');

      $container.isotope({
        itemSelector : '.switch'
      });
      
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });
    });  

	  $('#recent_projects').carouFredSel({
	    width: '100%',
	    responsive: true,
	    circular : false,
	    infinite : false,
	    auto: false,
	    next : {
	      button : "#next",
	      key	: "right"
	    },
	    prev : {
	      button : "#prev",
	      key	: "left"
	    },
	    swipe: {
	      onMouse: true,
	      onTouch: false
	    },
	    items: {
	      
	      visible: {
	        min: 1,
	        max: 4
	      }
	    }
	  });
	  
	  $('#clients_carousel').carouFredSel({
	    width: '100%',
	    responsive: true,
	    circular : false,
	    infinite : false,
	    auto: false,
	    next : {
	      button : "#clients_next",
	      key	: "right"
	    },
	    prev : {
	      button : "#clients_prev",
	      key	: "left"
	    },
	    swipe: {
	      onMouse: true,
	      onTouch: false
	    },
	    items: {
	      
	      visible: {
	        min: 1,
	        max: 4
	      }
	    }
	  });

    $('input[type="submit"]').addClass('small button');
       
   	$('.has-dropdown ul').addClass('dropdown');
   	 
   	$('.top-bar ul').removeClass('menu');
   	 
   	$('.menu_wrap ul').addClass('right');

    $('#recent_projects').after('<div style="clear:both;"></div>');
   
   	$('.menu_wrap .dropdown').prepend('<li class="title back js-generated"><h5><a href="#">Main Menu</a></h5></li>');
   	   	
	  $("#google_map").fitMaps( {w: '100%', h:'370px'} ); 
	 
	  jQuery("ul.faq li").each(function(){
	    if(jQuery(this).index() > 0){
	    jQuery(this).children(".faq-content").css('display','none');
	    }
	    else{
	    jQuery(this).find(".faq-head-image").addClass('active');
	    }
	
	    jQuery(this).children(".faq-head").bind("click", function(){
	    jQuery(this).children().addClass(function(){
	    if(jQuery(this).hasClass("active")) return "";
	      return "active";
	    });
	    jQuery(this).siblings(".faq-content").slideDown();
	    jQuery(this).parent().siblings("li").children(".faq-content").slideUp();
	    jQuery(this).parent().siblings("li").find(".active").removeClass("active");
	    });
	  });
	  
	});