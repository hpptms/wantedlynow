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
        <div class="result">
            <div class="container">
                @foreach ($results as $result)
				<form action="{{ url("/overview/$result->id",) }}" method="POST">
					{{ Form::token() }}
                    <div class="col-md-12 focus-grid send">
                        <div class="focus-border">
                            <div class="focus-layout result-content">
                                <h2>{{ $result->company }}</h2>
                                <h3>{{ $result->bosyuu }}<h3>
                                <input type="hidden" name="id" value="{{ $result->id }}">
                            </div>
                        </div>
                    </div>
                    {{-- <livewire:counter> --}}
                @endforeach
				</form>
            </div>
        </div>
        <!-- // result -->
        <!--footer section start-->
        @include('parts.footer')
        <!--footer section end-->
</body>

</html>

<script>	
    $('.send').on('click blur', function() {
		$form = $(this).parent();
        $form.submit();
    });
</script>
