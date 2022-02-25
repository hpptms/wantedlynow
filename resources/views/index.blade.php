<!DOCTYPE html>
<html>
@include('parts.meta')
<body>
	@include('parts.head')
	<div class="main-banner banner text-center">
	  <div class="container">    
			@include('parts.top')
			<a href="{{ url('towantedly') }}">wantedly様へ</a>
	  </div>
	</div>
		<!-- content-starts-here -->
		<div class="content">
			<div class="categories">
				<div class="container">
					@include('parts.langs')
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="trending-ads">
				<div class="container">
				<!-- slider -->
				<div class="trend-ads">
					<h2>Sponsored Links</h2>
							<ul id="flexiselDemo3">
								<li>
									<div class="col-md-12 biseller-column">
										<a href="https://px.a8.net/svt/ejp?a8mat=3HG58C+APSYBM+50+5YBMCI&a8ejpredirect=https%3A%2F%2Fwww.conoha.jp%2Fwing" rel="nofollow">
											<img class="alignnone size-full wp-image-289" src="https://res.cloudinary.com/danj8nvfr/image/upload/v1645759215/inhous/WS000008.jpg.webp" alt="conoha wing" width="952" height="327" />
											</a>
									</div>
								</li>
								<li>
									<div class="col-md-12 biseller-column">
										<a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3601201&pid=887196493&vc_url=https%3A%2F%2Ftechacademy.jp%2F%3Futm_source%3Dvaluecommerce%26utm_medium%3Daffiliate%26utm_campaign%3Dmylink" rel="nofollow">
											<img src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3601201&pid=887196493" width="0" height="1" border="0" />
											<img src="https://res.cloudinary.com/danj8nvfr/image/upload/v1645759215/inhous/WS000011.jpg.webp" border="0" /></a>
									</div>
								</li>
								<li>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p9.jpg"/>
											<span class="price">&#36; 2599</span>
										</a> 
										<div class="ad-info">
											<h5>Lorem Ipsum is simply dummy</h5>
											<span>3 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p10.jpg"/>
											<span class="price">&#36; 3999</span>
										</a> 
										<div class="ad-info">
											<h5>It is a long established fact that a reader</h5>
											<span>9 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p11.jpg"/>
											<span class="price">&#36; 2699</span>
										</a> 
										<div class="ad-info">
											<h5>passage of Lorem Ipsum you need to be</h5>
											<span>1 day ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p12.jpg"/>
											<span class="price">&#36; 899</span>
										</a> 
										<div class="ad-info">
											<h5>There are many variations of passages</h5>
											<span>1 hour ago</span>
										</div>
									</div>
								</li>
						</ul>
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
					   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
					</div>   
			</div>
			<!-- //slider -->				
			</div>
		</div>
		<!--footer section start-->		
		@include('parts.footer')
        <!--footer section end-->
</body>
</html>