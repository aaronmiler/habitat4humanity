<?php function haiku_style_switch() { global $root; ?>
	
	<div id="slideout">
	      <div id="slidecontent">
	      
		      <h6 class="switch_heading">Colors</h6>
		        <div class="color_switch_wrap">
					    <ul id="color-nav">
					      <li class="<?php echo $root;?>/css/colors/default.css"><div class="switch_tile red"></div></li>
					      <li class="<?php echo $root;?>/css/colors/black.css"><div class="switch_tile black"></div></li>
					      <li class="<?php echo $root;?>/css/colors/green.css"><div class="switch_tile green"></div></li>
					      <li class="<?php echo $root;?>/css/colors/orange.css"><div class="switch_tile orange"></div></li>
					      <li class="<?php echo $root;?>/css/colors/blue.css"><div class="switch_tile blue"></div></li>
					      <li class="<?php echo $root;?>/css/colors/light-blue.css"><div class="switch_tile light-blue"></div></li>
					      <li class="<?php echo $root;?>/css/colors/purple.css"><div class="switch_tile purple"></div></li>
					 		  <li class="<?php echo $root;?>/css/colors/yellow.css"><div class="switch_tile yellow"></div></li>
					    </ul>
			      </div>
			      
			      <h6 class="switch_heading">Main Pattern</h6>  
			        <ul id="wrapper-bg-nav">
			          <li class="subtle-dots-bg"><div class="switch_tile subtle-dots"></div></li>
			          <li class="cream-dust-bg"><div class="switch_tile cream-dust"></div></li>
			          <li class="debut-light-bg"><div class="switch_tile debut-light"></div></li>  
			          <li class="dust-bg"><div class="switch_tile dust"></div></li>  
			          <li class="gray-jean-bg"><div class="switch_tile gray-jean"></div></li>  
			          <li class="retina-dust-bg"><div class="switch_tile retina-dust"></div></li>  
			          <li class="linen-bg"><div class="switch_tile linen"></div></li>  
			          <li class="striped-lens-bg"><div class="switch_tile striped-lens"></div></li>  
			        </ul>
			      
			    <h6 class="switch_heading">Layout</h6>  
			      <ul id="layout-nav">
			        <li class="switch_wide"><a class="tiny secondary button">Wide</a></li>
			        <li class="switch_boxed"><a class="tiny secondary button">Boxed</a></li>
			      </ul>  
	  
			    <div class="bg_patterns_wrap">
				    <h6 class="switch_heading">Background Patterns</h6>
				    <ul class="bg-nav">
				      <li class="wood-bg"><div class="switch_tile wood-bg"></div></li>
				      <li class="debut-dark-bg"><div class="switch_tile debut-dark-bg"></div></li>
				      <li class="grid-bg"><div class="switch_tile grid-bg"></div></li>
				      <li class="dark-wood-bg"><div class="switch_tile dark-wood-bg"></div></li>
				      <li class="cartographer-bg"><div class="switch_tile cartographer-bg"></div></li>
				      <li class="bedge-bg"><div class="switch_tile bedge-bg"></div></li>
				      <li class="illusion-bg"><div class="switch_tile illusion-bg"></div></li>
				      <li class="nistri-bg"><div class="switch_tile nistri-bg"></div></li>
				    </ul>
				   </div>
				   
				   <div class="bg_patterns_wrap">
				    <h6 class="switch_heading">Background Colors</h6>
				    <ul class="bg-nav">
				      <li class="blue-bg"><div class="switch_tile blue"></div></li>
				      <li class="black-bg"><div class="switch_tile black"></div></li>
				      <li class="green-bg"><div class="switch_tile green"></div></li>
				      <li class="orange-bg"><div class="switch_tile orange"></div></li>
				      <li class="red-bg"><div class="switch_tile red"></div></li>
				      <li class="light-blue-bg"><div class="switch_tile light-blue"></div></li>
				      <li class="purple-bg"><div class="switch_tile purple"></div></li>
				      <li class="yellow-bg"><div class="switch_tile yellow"></div></li>
				    </ul>
			    </div>
			    
	      </div>
      
	      <div id="clickme">
	       <img src="<?php echo $root;?>/images/switch/edit.png" alt="switch">
	      </div>
      
        </div>

	
	
<?php } ?>