  <!--==============================footer=================================-->
  <footer>
    <div id="footer" class="section-3 footer-dark">
      <div class="container">
        <div class="row">
          <!-- Contact us -->
          <div class="span3">
            <h2>Contact us</h2>
            <address class="vcard">
            <span class="street-address">294 Herbert macaulay way, Sabo, Yaba</span><a href="mailto:info@owltemplates.com" class="email">info@impactproject.com.ng</a>
            <ul id="social" class="tooltip-demo">
              <li><a rel="tooltip" title="RSS" href="#"><img alt="RSS" src="img/social_icons/rss.png"></a></li>
              <li><a rel="tooltip" title="Twitter" href="#"><img alt="Twitter" src="img/social_icons/twitter.png"></a></li>
              <li><a rel="tooltip" title="Facebook" href="#"><img alt="Facebook" src="img/social_icons/facebook.png"></a></li>
            </ul>
            </address>
          </div>
          <!-- Useful Links -->
          <div class="span3">
            <h2>Useful Links</h2>
            <ul class="list">
              <li><a href="#">API & Tools</a></li>
             <li><a href="#">Data Repository</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <!-- twitter feed  -->
          <div class="span3">
            <h2>Twitter Feed</h2>
            <div class="tweets">
              <p> Loading Tweets... </p>
              <ul id="tweet-list">
              </ul>
            </div>
          </div>
          <!-- Newsletter -->
          <div class="span3">
            <h2>Newsletter</h2>
            <form class="navbar-inverse form-search">
              <div class="navbar-search input-append">
                <input type="text" placeholder="Your Email" class="span2 search-query">
                <button type="submit" class="btn btn-warning">submit</button>
              </div>
              <div class="clearfix"></div>
            </form>
            <div class="clearfix p1">
              <p class="text-info"><i>Subscribe today to our newsletter and receive latest updates and information.</i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer 2 -->
    <div id="copyrights" class="footer-2 footer-dark">
      <div class="container">
        <div class="row">
          <div class="span12">impactProject &copy; 2013 <a href="#">Privacy Policy</a></div>
        </div>
      </div>
    </div>
  </footer>
</div>
<!--==============================Style Switcher =================================-->

<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.sliderTabs.js"></script>
<!-- jQuery Slider  -->
<script type="text/javascript" src="js/rs-plugin/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/rs-plugin/jquery.themepunch.revolution.min.js"></script>
<!-- Elastislider  -->
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
<!-- Pretty photo  -->
<script type="text/javascript" src="js/jquery.prettyphoto.js"></script>
<!-- Carousel  -->
<!-- totop  -->
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="js/prettify.js"></script>
<!-- Quicksand  -->
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<!-- Image animated Style  -->
<script type="text/javascript" src="js/jquery.gridrotator.js"></script>
<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
<!-- Accordion  -->
<script type="text/javascript" src="js/accordion.js"></script>
<!-- Tabs  -->
<script type="text/javascript" src="js/tabs.js"></script>
<!-- Sitemap  -->
<script type="text/javascript" src="js/sitemap.js"></script>
<!-- Navigation  -->
<script type="text/javascript" src="js/nav-small.js"></script>
<script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
<!-- Isotope  -->
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<!-- Metro Style  -->
<script type="text/javascript" src="js/boxgrid.js"></script>
<!--<script type="text/javascript" src="demo/switcher.js"></script>-->
<!-- Elastislider  -->
<script>
				jQuery("#carousel-blog").elastislide({
					imageW 		: 270,
					minItems		: 2,
					speed			: 600,
					easing		: "easeOutQuart",
					margin		: 30,
					border		: 0,
					onClick		: function() {}
				});</script>
<!-- Image animated Style  -->
<script type="text/javascript">	
			$(function() {
			
				$( '#ri-grid' ).gridrotator( {
					rows : 4,
					columns : 8,
					maxStep : 2,
					interval : 2000,
					w1024 : {
						rows : 5,
						columns : 6
					},
					w768 : {
						rows : 5,
						columns : 5
					},
					w480 : {
						rows : 6,
						columns : 4
					},
					w320 : {
						rows : 7,
						columns : 4
					},
					w240 : {
						rows : 7,
						columns : 3
					},
				} );
			
			});
		</script>
<!-- Metro Style  -->
<script>
			$(function() {

				Boxgrid.init();
				

			});
		</script>
<!-- Revolution Slider  -->
<script>
			var api;
			jQuery(document).ready(function() {
				 api =  jQuery('.fullwidthbanner').revolution(
								{
									delay:9000,
									startheight:370,
									startwidth:960,

									hideThumbs:10,

									thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
									thumbHeight:50,
									thumbAmount:5,

									navigationType:"both",					//bullet, thumb, none, both		(No Thumbs In FullWidth Version !)
									navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
									navigationStyle:"round",				//round,square,navbar

									touchenabled:"on",						// Enable Swipe Function : on/off
									onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

									navOffsetHorizontal:0,
									navOffsetVertical:20,

									stopAtSlide:-1,
									stopAfterLoops:-1,

									shadow:1,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
									fullWidth:"on"							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
								});
			});
			
		</script>
<!--<script type="text/javascript">
  	// initialise plugins
		jQuery(function(){
			// Banners button
			jQuery('ul.banners_cycle li').mouseenter(function(){
				jQuery(this).find('.button').stop(false,true).fadeIn();
			})
			jQuery('ul.banners_cycle li').mouseleave(function(){
				jQuery(this).find('.button').stop(false,true).fadeOut();
			});
			
			// Banners
			jQuery('ul.banners_cycle li:not(.style-1)').mouseenter(function(){
				jQuery(this).css('z-index','6');
				jQuery(this).stop(false, true).animate({right:'-64px'}, {easing:"swing", duration: 300});
				jQuery(this).animate({right:'0'});
			});
			jQuery('ul.banners_cycle li:not(.style-1)').mouseleave(function(){
				jQuery(this).stop(false, true).animate({right:'-64px'});
				jQuery(this).stop(false, true).animate({right:'0'}, 'slow');
			});
			
			// Banner #2
			jQuery('ul.banners_cycle li.style-2').mouseleave(function(){
				jQuery(this).css('z-index','5');
			});
			// Banner #3
			jQuery('ul.banners_cycle li.style-3').mouseleave(function(){
				jQuery(this).css('z-index','4');
			});
			// Banner #4
			jQuery('ul.banners_cycle li.style-4').mouseleave(function(){
				jQuery(this).css('z-index','3');
			});
			// Banner #5
			jQuery('ul.banners_cycle li.style-5').mouseleave(function(){
				jQuery(this).css('z-index','2');
			});
			// Banner #6
			jQuery('ul.banners_cycle li.style-6').mouseenter(function(){
				jQuery('body').css('overflow-x','hidden');
			});
			jQuery('ul.banners_cycle li.style-6').mouseleave(function(){
				jQuery(this).css('z-index','1');
				jQuery('body').css('overflow-x','hidden');
			});
		});
  </script>-->
</body>

<!-- Mirrored from owltemplates.com/demo/website/success/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 13 May 2013 18:36:25 GMT -->
</html>
