<head>
<title>wantedly now</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-select.css')}}">
<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
<!-- for-mobile-apps -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="自社サービス,自社プロダクト,wantedly" />
<meta name="description" content="wantedly内の募集で自社サービス,自社プロダクトの募集のみ表示しています">
<link rel="canonical" href="https://wantedlynow.net/">
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="website">
<meta property="og:title" content="wantedly内の募集で自社サービス,自社プロダクトの募集のみ表示しています">
<meta property="og:description" content="wantedly内の募集で自社サービス,自社プロダクトの募集のみ表示しています">
<meta property="og:url" content="https://wantedlynow.net/">
<meta property="og:site_name" content="wantedly now">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="wantedly内の募集で自社サービス,自社プロダクトの募集のみ表示しています">
<meta name="twitter:title" content="wantedly now">
<meta name="msvalidate.01" content="F37C7C79F80EDFE1CEA4ABB1A123E3CA" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="https://res.cloudinary.com/danj8nvfr/image/upload/v1645163643/casino/chick.svg" sizes="32x32">
<link rel="icon" href="https://res.cloudinary.com/danj8nvfr/image/upload/v1645163643/casino/chick.svg" sizes="192x192">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
{{-- グーグル広告 --}}
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5157294493857921"
     crossorigin="anonymous"></script>
{{-- グーグル広告 --}}
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-57073157-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-57073157-9');
</script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.js')}}"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="{{ asset('js/jquery.leanModal.min.js')}}"></script>
<link href="{{ asset('css/jquery.uls.css')}}" rel="stylesheet"/>
<link href="{{ asset('css/jquery.uls.grid.css')}}" rel="stylesheet"/>
<link href="{{ asset('css/jquery.uls.lcd.css')}}" rel="stylesheet"/>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Source -->
<script src="{{ asset('js/jquery.uls.data.js')}}"></script>
<script src="{{ asset('js/jquery.uls.data.utils.js')}}"></script>
<script src="{{ asset('js/jquery.uls.lcd.js')}}"></script>
<script src="{{ asset('js/jquery.uls.languagefilter.js')}}"></script>
<script src="{{ asset('js/jquery.uls.regionfilter.js')}}"></script>
<script src="{{ asset('js/jquery.uls.core.js')}}"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
</head>