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
        <div class="overview">
            <div class="container">
                @foreach ($result as $result)
                    <div class="col-md-12 focus-grid send">
                        <div class="focus-border">
                            <div class="focus-layout result-content">

                                <h2>{{ $result->company }}</h2>
                                <h3>{{ $result->bosyuu }}<h3>
                                <div>{{ $result->lang }}</div>
                                <div>{{ $result->overview }}</div>
                                <div>{{ $result->url }}</div>

                            </div>
                        </div>
                    </div>
                    {{-- <livewire:counter> --}}
                @endforeach
            </div>
        </div>
        <!-- // result -->
        <!--footer section start-->
        @include('parts.footer')
        <!--footer section end-->
</body>

</html>
