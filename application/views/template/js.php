<script type='text/javascript' src='<?= base_url() ?>/assets/js/jquery-2.2.3.min.js'></script>
		<!-- //js -->

<!--menu script-->
<script type="text/javascript" src="<?= base_url() ?>/assets/js/modernizr-2.6.2.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>	
<!--FlexSlider-->

		<script defer src="<?= base_url() ?>/assets/js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!--End-slider-script-->

 	<!-- script for portfolio -->
	<script type='text/javascript' src='<?= base_url() ?>/assets/js/jquery.easy-gallery.js'></script>
	<script type='text/javascript'>
		//init Gallery
		$('.portfolio').easyGallery();
	</script>
	<script src="<?= base_url() ?>/assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true // 100% fit in a container
			});
		});
	</script>
	<!-- //script for portfolio -->
	<!-- clients -->
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 1,
							animationSpeed: 1500,
							autoPlay:false,
							autoPlaySpeed: 3500,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:1
								},
								tablet: { 
									changePoint:768,
									visibleItems: 1
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.flexisel.js"></script>
			<!-- //clients -->
				<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="<?= base_url() ?>/assets/js/move-top.js"></script>
			<script type="text/javascript" src="<?= base_url() ?>/assets/js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
		<!-- start-smoth-scrolling -->
	
		<!-- for-bottom-to-top smooth scrolling -->
			<script type="text/javascript">
				$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/								
				$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!-- //for-bottom-to-top smooth scrolling -->
</body>
</html>