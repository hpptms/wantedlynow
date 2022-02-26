<!DOCTYPE html>
<html>
	@include('parts.meta')
<body>
<div class="header">
	@include('parts.head')
	<div class="banner text-center">
	  <div class="container">    
			@include('parts.top')
	  </div>
	</div>
	<!-- result -->
	{{-- @foreach($values as $value)
		{{$value->company}}<br>
		{{$value->bosyuu}}<br>
	@endforeach --}}
	<!-- // result -->
	<!--footer section start-->		
	@include('parts.footer')
    <!--footer section end-->
</body>
</html>