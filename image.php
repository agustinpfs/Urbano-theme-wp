<div class="Image">
	<div class="Image-background"></div>
	<div class="Image-map">
		<aside class="Image-login">
			<?php dynamic_sidebar('page-sidebar-id'); ?>

		</aside>
	</div>
	<h2>under the sky</h2>
	<figure>
		<img src="http://localhost/urbano/wp-content/uploads/sites/6/2016/03/urban.jpg" alt="">
	</figure>
</div>

<script>
	

	function showRegister() {
		// $('html').scrollTop(0)
		$("#forgot_password").fadeOut(0)
		$( "#login" ).fadeOut(0)
		$("#register").fadeIn(0)
		$( ".tabs_login li:nth-child(2)").css({"background-color":"#d34836"})
		$( ".tabs_login li:nth-child(3)").css({"background-color":"transparent"})
		$( ".tabs_login li:nth-child(1)").css({"background-color":"transparent"})
		event.preventDefault();
	// $("#linkId").attr("href", "http://the.new.url");
 }

 	function showForgot() {
		// $('html').scrollTop(0)
		$( "#login" ).fadeOut(0)
		$("#register").fadeOut(0)
		$("#forgot_password").fadeIn(0)
		$( ".tabs_login li:nth-child(3)").css({"background-color":"#d34836"})
		$( ".tabs_login li:nth-child(2)").css({"background-color":"transparent"})
		$( ".tabs_login li:nth-child(1)").css({"background-color":"transparent"})
		event.preventDefault();
	// $("#linkId").attr("href", "http://the.new.url");
 }

 	function showLogin() {
		// $('html').scrollTop(0)
		$( "#login" ).fadeIn(0)
		$("#register").fadeOut(0)
		$("#forgot_password").fadeOut(0)
		$( ".active_login").css({"background-color":"#d34836"})
		$( ".tabs_login li:nth-child(2)").css({"background-color":"transparent"})
		$( ".tabs_login li:nth-child(3)").css({"background-color":"transparent"})


		event.preventDefault();
	// $("#linkId").attr("href", "http://the.new.url");
 }




	// $( ".Index-article" ).hover( showExcerpt )

	// $( ".Header-icon" ).click(function() {
	//   $( ".Header-nav" ).slideToggle( "slow" );
	// });


	$( ".tabs_login li:nth-child(2)" ).click(showRegister)
	$( ".tabs_login li:nth-child(3)" ).click(showForgot)
	$( ".active_login" ).click(showLogin)
</script>










