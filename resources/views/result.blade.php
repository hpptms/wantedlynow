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
	{{-- @foreach($results as $result) --}}
	<pre>
		{{-- {{$result->id}}<br>
		{{$result->company}}<br>
		{{$result->bosyuu}}<br> --}}
	</pre>
	@endforeach
	<!-- // result -->
	<!--footer section start-->		
	@include('parts.footer')
    <!--footer section end-->
</body>
</html>