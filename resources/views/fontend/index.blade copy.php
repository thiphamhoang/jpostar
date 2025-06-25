<!DOCTYPE html>
<html lang=vi_VN class=no-js>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <title>{{$title}}</title>
   <meta name="description" content="{{$des}}" />
   <meta name="keywords" content="{{$key}}" />

   <meta property="og:title" content="{{$title}}" />
   <meta property="og:description" content="{{$des}}" />

   <meta property="og:image:width" content="630"/>
    <meta property="og:image:height" content="315"/>
   <meta name="robots" content="index,follow">
   <meta name="copyright" content="" />
   <meta name="author" content="" />
   <meta http-equiv="audience" content="General" />
   <meta name="resource-type" content="Document" />
   <meta name="distribution" content="Global" />
   <meta name="revisit-after" content="1 days" />
   <meta name="generator" content="" />
   <meta property="og:site_name" content="{{$title}}" />
   <meta property="og:type" content="website" />
   <meta property="og:locale" content="vi_VN" />
    @if($favicon)
        <link rel="shortcut icon" href="{{asset('source/theme/'.$favicon)}}">
    @endif

    <!-- <script src="{{asset('style/fontend/js/jquery-3.3.1.min.js')}}"></script> -->
    <script src="{{asset('style/fontend/slick/jquery-2.2.0.min.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{ asset('style/fontend/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('style/fontend/slick/slick-theme.css') }}">

    <script src="{{asset('style/fontend/bootstrap-4-3-1/js/popper.min.js')}}"></script>


    <link rel="stylesheet" href="{{ asset('style/fontend/bootstrap-4-3-1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/fontend/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body class="home">

        @foreach($row_head as $row)
            @include('fontend/layout/'.$row->style)
        @endforeach
        <main class="main">
  
            @yield('content')
        </main>
        @foreach($row_footer as $row)
            @include('fontend/layout/'.$row->style)
        @endforeach

        <script src="{{asset('style/fontend/slick/slick.js')}}"></script>
        <script>
             $(document).on('ready', function() {
                $(".regular_2").slick({
                    dots: true,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    autoplay: true,
                    arrows: true,
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                                centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
                                slidesToScroll: 2
                            }
                        }
                    ]
                });
            });
        </script>

        <script src="{{asset('style/backend/bootstrap-4-3-1/js/bootstrap.min.js')}}"></script>

</body>
</html>
