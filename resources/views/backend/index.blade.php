<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <title>{{$title}}</title>
   
   <script src="{{asset('style/backend/js/jquery-3.3.1.min.js')}}"></script>
   <script src="{{asset('style/backend/js/jquery-ui.js')}}"></script>
   
   <script src="{{asset('style/backend/js/jquery.nestable.js')}}"></script>
   <script src="{{asset('style/backend/bootstrap-4-3-1/js/popper.min.js') }}"></script>
  <!-- giao dien -->
   <link rel="stylesheet" href="{{ asset('style/backend/css/AdminLTE.css') }}">
   <link rel="stylesheet" href="{{asset('style/backend/css/skin-blue.min.css')}}">

   <link rel="stylesheet" href="{{ asset('style/backend/css/style_admin.css') }}">
   <link rel="stylesheet" href="{{ asset('style/backend/bootstrap-4-3-1/css/bootstrap.min.css') }}">
   {{-- tinymce  --}}
   <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>  

   <!-- time date data -->
   <link rel="stylesheet" href="{{ asset('style/backend/timepicker/timepicker.css') }}">
   <link rel="stylesheet" href="{{ asset('style/backend/datepicker/datepicker.min.css') }}">
   <link rel="stylesheet" href="{{ asset('style/backend/colorpicker/bootstrap-colorpicker.min.css') }}">
   <link rel="stylesheet" href="{{ asset('style/backend/select_search/bootstrap-select.css') }}">
   {{-- font  --}}
   <link rel="stylesheet" href="{{ asset('style/backend/icon/line-awesome/css/line-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ asset('style/backend/icon/themify/themify-icons.css') }}">
   {{-- animate --}}
   <link rel="stylesheet" href="{{ asset('style/backend/animate/animate.css') }}">
   {{-- codemirror  --}}
   <script src="{{asset('style/backend/codemirror/codemirror.js') }}"></script>
   <link rel="stylesheet" href="{{asset('style/backend/codemirror/codemirror.css') }}">
   <script src="{{asset('style/backend/codemirror/javascript.js') }}"></script>

   <script src="{{asset('style/backend/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
   <script src="{{asset('style/backend/datepicker/datepicker.min.js')}}"></script>
   <script src="{{asset('style/backend/timepicker/timepicker.js')}}"></script>
   <script src="{{asset('style/backend/money/simple.money.format.js')}}"></script>

  
</head>
<body class="skin-blue sidebar-mini sidebar-collapse">
    <div class="wrapper">
        @include('backend/top')
        @include('backend/menu')
        @yield('content')
        @include('backend/footer')
        <div class="control-sidebar-bg"></div>
    </div>
    <script src="{{asset('style/backend/icon/icon.js')}}"></script>
    <script src="{{asset('style/backend/bootstrap-4-3-1/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('style/backend/js/jquery.maphilight.js')}}"></script>
    <script src="{{asset('style/backend/js/adminlte.min.js')}}"></script>
    <script src="{{asset('style/backend/select_search/bootstrap-select.js')}}"></script>
 
   
    <script>
        //Date picker
            $('#datepicker').datepicker({autoclose: true,  format: 'dd/mm/yyyy',})
        //Timepicker
        $('#timepicker').timepicker({showInputs: false,})  
        //format money
        $('.money').simpleMoneyFormat();
    
        function changecolor(id){
            var color = $('#'+id).val();
            $('#'+id+'_review').css('background-color',color);
        }
        // sua tinymce on popup 
        $(document).on('focusin', function(e) {
            if ($(e.target).closest(".tox-dialog").length) {
            e.stopImmediatePropagation();
            }
        });
    </script>
   
</body>
</html>