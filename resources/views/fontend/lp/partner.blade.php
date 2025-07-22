
<?php 
    $slide_partner = App\Model\M_slide_img::where('slide_id',$post->lp_slide)->get();
?>

<div class="dmsawards_section" id="lp-login-slide">
    <div class="influencers-section__list horslider-left">
       
         @foreach($slide_partner as $key => $slide_1)
             
                <div class="influencers-section__item">
                    <img class="influencers-section__img lazyloaded"
                        data-src="{{asset('source/slide/'.$slide_1->img)}}" alt=""
                        src="{{asset('source/slide/'.$slide_1->img)}}">
                </div>
           
        @endforeach
        
    </div>
    <div class="influencers-section__list horslider-right">
          @foreach($slide_partner as $key_2 => $slide_2)
            
       
               
                <div class="influencers-section__item">
                    <img class="influencers-section__img lazyload"
                        data-src="{{asset('source/slide/'.$slide_2->img)}}" alt=""
                        src="{{asset('source/slide/'.$slide_2->img)}}">
                </div>
                
          
        @endforeach
        
       
        
    </div>
</div>