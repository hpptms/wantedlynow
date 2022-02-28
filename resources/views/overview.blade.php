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
                            <div class="focus-layout overview-content" style="text-align:left;">
                                <div class="wrap">
                                    <div>企業名：</div>
                                    <h2>{{ $result->company }}</h2>
                                </div>
                                <div class="wrap">
                                    <div>タイトル：</div>
                                    <h3>{{ $result->bosyuu }}<h3>
                                </div>
                                <div class="wrap">
                                    <div>言語など：</div>
                                    <div class="lang">{{ $result->lang }}</div>
                                </div>
                                <div class="wrap">
                                    <div>概要：</div>
                                    <div>{{ $result->overview }}</div>
                                </div>
                                <div style="text-align:center;">
                                    <a href="{{ $result->url }}">
                                        <button type="button" class="btn btn-info btn-lg">wantedlyで見る</button>
                                    </a>
                                </div>

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

<script>
    $tmp = "";
    $lang = $(".lang").text();
    $array = $lang.split(",");
    $.each($array, function($index, $value){
        $tmp = $tmp + ('<span class="tmp">' + $value + '</span>');
    });
    $(".lang").html($tmp);
    $('.tmp').addClass('tag');
</script>
