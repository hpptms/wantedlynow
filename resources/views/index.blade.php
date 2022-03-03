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
			<div class="container">
				@include('parts.freeform')
				<div class="clearfix"></div>
			</div>
			<div class="trending-ads">
				<div class="container">
				<!-- slider -->
				@include('parts.sponsored')
			<!-- //slider -->				
			</div>
		</div>
		<!--footer section start-->		
		@include('parts.footer')
        <!--footer section end-->
</body>
</html>