<div class="scrolltop">
	<i class="fa fa-angle-up" aria-hidden="true"></i>	
</div>
<div class="regis_fixed">
	<?php if(get_locale() == 'vi') { ?>
		<ul>
			<li><a href="<?php echo get_permalink(307);?>">Đăng ký tham quan</a></li>
			<li><a href="<?php echo get_permalink(107);?>">Đăng ký gian hàng</a></li>
		</ul>
	<?php }else{ ?>
		<ul>
			<li><a href="<?php echo get_permalink(313);?>">Registration Visitors</a></li>
			<li><a href="<?php echo get_permalink(110);?>">Booth Registration</a></li>
		</ul>
	<?php }?>
</div>
<footer class="footer">
	<div class="container">

		
		<div class="copyright">
			<p>©2019 VIETNAM LIFT AND ELEVATORS EXPO</p>
		</div>
	</div>
</footer>
<div id="loader" >
     <i class="fa fa-circle-o-notch fa-spin"></i>
</div>
<?php wp_footer(); ?>
<!-- MESSENGER -->
<script>      
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1953938748210615',
			xfbml      : true,
			version    : 'v2.6'
		});
	};
	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));      
</script>
<!-- END  MESSENGER -->
<script src="<?php echo BASE_URL; ?>/js/wow.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/slick.js"></script>
<script src="<?php echo BASE_URL; ?>/js/custom.js"></script>
</body>  
</html>
