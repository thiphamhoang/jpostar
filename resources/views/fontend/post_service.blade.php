@extends('fontend.index')
@section('content')
<div id="mm-0" class="mm-page mm-slideout">
 
        <div class="hero-section hero-section_wide hero-section_webstrategy hero-section_stick" id="lp-head">


            @foreach($row_head as $row)
                @include('fontend/layout/'.$row->style)
            @endforeach
                

            @include('fontend/lp/intro')
            @include('fontend/lp/partner')
        </div>
        @include('fontend/lp/meet')
        @include('fontend/lp/news_2')   
        @include('fontend/lp/why')
     
        @include('fontend/lp/feature')
    
         @include('fontend/lp/download')
         @include('fontend/lp/award')
        @include('fontend/lp/kick')
        @include('fontend/lp/just')
        @include('fontend/lp/smarter')
 
  
</div>

<?php 
    $displaySave = [];
    if($post->display){
        $displaySave = json_decode($post->display);
    }
 
?>
@if($displaySave)
    @foreach($displaySave as $item)
        @if($item)
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    var el = document.getElementById("{{ $item }}");
                    if (el) {
                        el.style.display = "none";
                    }
                });
            </script>
        @endif
    @endforeach
 @endif


@endsection('content')
