<div class="Header">
	<div class="Header-mobile">
		<span class="icon-phone"> 473-6183</span>
	</div>
	<div class="Header-top">
		<a href="/">
		 	<div class="Header-logo">

		        <figure><img src="http://localhost/urbano/wp-content/uploads/sites/6/2016/03/logo-e1457792591221.png" alt=""/></figure>
				<h1><?php bloginfo('title' ); ?></h1>
				<!-- <span><?php bloginfo('description'); ?></span> -->
		  	</div>
	  	</a>
	  	<div class="Header-menu">
	  		<div class="Header-menu_desktop">
	  			<?php include TEMPLATEPATH . '/nav.php' ?>
	  		</div>
	  		<label class="Header-label" for="menu">
	  			<span class="icon-menu"></span>
	  		</label>
	  		<input type="checkbox" class="check" id="menu">
	  		<div class="Header-navResponse">
				<?php include TEMPLATEPATH . '/nav.php' ?>
			</div>
		</div>
	</div>
	
</div>


<script>
	function subMenu () {    
	    $('.sub-menu').toggle();
	};

	// function closeContact () {    
	//     $('.Contact').fadeOut(1000);
	// };

	// $('.Header-contact, .Footer-contact').click( openContact );

	$('.menu-item-192').click( subMenu );
</script>