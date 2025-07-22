 <?php 
    $sess = [
        [
            "title" => "Giới thiêu",
            "id" => "lp-intro"
        ],
        [
            "title" => "Logo giới thiệu",
            "id" => "lp-login-slide"
        ],
        [
            "title" => "Growth-Focused Solutions",
            "id" => "Advantages"
        ],
        [
            "title" => "Download",
            "id" => "lp-download"
        ],
        [
            "title" => "We've 10 years",
            "id" => "Awards"
        ],
        [
            "title" => "Fuel your Web3 growth",
            "id" => "lp-kick"
        ],
        [
            "title" => "Platforms We Cover",
            "id" => "just"
        ],
        [
            "title" => "Who It's For",
            "id" => "Highlights"
        ],
        [
            "title" => "Ready to take your marketing",
            "id" => "contactsform"
        ],
         [
            "title" => "Why switch",
            "id" => "why"
        ],
         [
            "title" => "We Are Featured",
            "id" => "Highlights_2"
        ],
    ]
?>
<div class="col-md-12">
    <hr>
    <h4>Cài đặt hiển thị (tích vào ô chức năng để ẩn)</h4>
    <div class="row">
        @foreach($sess as $key => $display)
            <div class="col-md-3">
                <div class="form-check">
                    <input class="form-check-input" name="display[]" type="checkbox" value="{{$display['id']}}" id="default_{{$key}}">
                    <label class="form-check-label" for="default_{{$key}}">
                       {{$display['title']}}
                    </label>
                </div>
                 
            </div>
        @endforeach
    </div>
</div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-12"><hr><h4>Giới thiệu</h4></div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_title_1" value="All your marketing needs in">
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_title_2" value="one single monthly subscriptio">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Mô tả</label>
           <textarea name="lp_des" class="form-control">Crystal-clear hourly billing and hundreds of marketing and creative experts at your disposal. That's what you get when you sign up for NinjaPromo's all-in-one marketing service.</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Mô tả 2</label>
           <textarea name="lp_des_2" class="form-control">Design, develop, create ads, and more within one handy marketing subscription.</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Ảnh mô tả</label>
           <div class="mt-3">
             {{F_input_image_2('','lp_img','lp_img','')}}
           </div>
        </div>
    </div>
    {{-- slide  --}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Slide</h4></div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">SLide ảnh đối tác</label>
            <select name="lp_slide" class="form-control">
                <option value="">Trống</option>
                @foreach($slideList as $slide)
                    <option value="{{$slide->id}}">{{$slide->name}}</option>
                @endforeach
            </select>
        </div>
        
    </div>
      {{-- meet--}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Meet</h4></div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_meet_title_1" value="Meet the new generation">
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_meet_title_2" value="of digital marketing services">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Text 1</label>
            <input type="text" class="form-control" name="lp_meet_texx_1" value="Freelance / In-house / Agencies">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Text 2</label>
            <input type="text" class="form-control" name="lp_meet_texx_2" value="2025">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Text 3</label>
            <input type="text" class="form-control" name="lp_meet_texx_3" value="Subscription">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input type="text" class="form-control my-1" name="lp_meet_block_11" value="24h">
            <input type="text" class="form-control my-1" name="lp_meet_block_12" value="Turnaround">
            <input type="text" class="form-control my-1" name="lp_meet_block_13" value="Launch projects in less than a day. Perfect for those tight deadlines and urgent tasks.">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 2</label>
            <input type="text" class="form-control my-1" name="lp_meet_block_21" value="50%+">
            <input type="text" class="form-control my-1" name="lp_meet_block_22" value="Output Growth">
            <input type="text" class="form-control my-1" name="lp_meet_block_23" value="Get ready for a major marketing scale-up. Outpace your average agency's output.">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input type="text" class="form-control my-1" name="lp_meet_block_31" value="30+">
            <input type="text" class="form-control my-1" name="lp_meet_block_32" value="Services On Tap">
            <input type="text" class="form-control my-1" name="lp_meet_block_33" value="Every design and marketing service you can imagine. Available to you on-demand.">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input type="text" class="form-control my-1" name="lp_meet_block_41" value="top 1%">
            <input type="text" class="form-control my-1" name="lp_meet_block_42" value="Global Experts">
            <input type="text" class="form-control my-1" name="lp_meet_block_43" value="Build a ready-to-go vetted team. Watch your ROI shoot sky-high.">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input type="text" class="form-control my-1" name="lp_meet_block_51" value="10">
            <input type="text" class="form-control my-1" name="lp_meet_block_52" value="Extra Hours/Week">
            <input type="text" class="form-control my-1" name="lp_meet_block_53" value="Reclaim your schedule with simplified management. Take your time back to lead.">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input type="text" class="form-control my-1" name="lp_meet_block_61" value="$100k">
            <input type="text" class="form-control my-1" name="lp_meet_block_62" value="Saving">
            <input type="text" class="form-control my-1" name="lp_meet_block_63" value="Average saving on annual agency fees">
        </div>
    </div>

    {{-- Why switch--}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Why switch</h4></div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_why_title_1" value="Why switch to a subscription-based">
        </div>
        {{-- <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_why_title_2" value="marketing model?">
        </div> --}}

        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input name="lp_why_block_11" type="text" class="form-control my-1"  value="Leave hiring costs behind">
            <textarea name="lp_why_block_12" class="form-control">Forget the hefty fees of traditional agencies and the high costs of in-house teams. NinjaPromo's all-in-one monthly subscription means you only pay for what you need with no hidden charges.</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 2</label>
            <input name="lp_why_block_21" type="text" class="form-control my-1"  value="Break free from billable hours">
            <textarea name="lp_why_block_22" class="form-control">With a traditional agency, every second spent on your project is billable. But with our subscription service, you have unlimited access to our team of specialists for one monthly price.</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input name="lp_why_block_31" type="text" class="form-control my-1"  value="Hit the ground running">
            <textarea name="lp_why_block_32" class="form-control">One day is all it takes to get your marketing plans into action. Simply post a task, connect with a marketing specialist, and get the ball rolling within 24 hours.</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input name="lp_why_block_41" type="text" class="form-control my-1"  value="Get it all in one place">
            <textarea name="lp_why_block_42" class="form-control">Tired of juggling multiple freelancers or agencies for different marketing services? Our all-in-one service offers everything from development and design to content creation and advertising.</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input name="lp_why_block_51" type="text" class="form-control my-1"  value="Tap into out-of-reach specialists">
            <textarea name="lp_why_block_52" class="form-control">It's not always easy to find and hire the right skillset when your budget or location limits your options. We give you access to a diverse team of experts from all over the world, instantly.</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input name="lp_why_block_61" type="text" class="form-control my-1"  value="Scale up or down as needed">
            <textarea name="lp_why_block_62" class="form-control">Whether you need to ramp up your marketing efforts during a busy season or scale back during slower times, you have the freedom to adjust your plan as and when you need to.</textarea>
        </div>
      
    </div>

    {{-- Featured --}}
    <div class="row">
        <div class="col-md-12"><hr><h4>We Are Featured In</h4></div>
    
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_feature_title" value="We Are Featured In">
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">Link</label>
            <input type="text" class="form-control" name="lp_feature_link" value="#">
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">Tiêu đề 1</label>
            <textarea name="lp_feature_des" class="form-control">NinjaPromo's founders shared insights with Forbes on the strategic advantages of partnering over contracting with service providers.</textarea>
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">Ảnh</label>
              {{F_input_image_5('','lp_feature','lp_feature','')}}
        </div>
    </div>

    
    {{-- media --}}
    <div class="row">
        <div class="col-md-12"><hr><h4>And other media</h4></div>
    
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_media_title" value="And other media">
        </div>
         <div class="col-md-6">
            <label class="font-weight-bold mt-2">SLide ảnh đối tác</label>
            <select name="lp_media_slide" class="form-control">
                <option value="">Trống</option>
                @foreach($slideList as $slide)
                    <option value="{{$slide->id}}">{{$slide->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- media --}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Download</h4></div>
    
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_download_title_1" value="Download A Guide to Making">
        </div>
{{--     
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_download_title_2" value="2025 Your Best Marketing Year">
        </div> --}}
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tên nút download</label>
            <input type="text" class="form-control" name="lp_download_button" value="DOWNLOAD FOR FREE">
        </div>
         <div class="col-md-6">
            <label class="font-weight-bold mt-2">Ảnh</label>
             {{F_input_image_3('','lp_download','lp_download','')}}
        </div>
    </div>

     {{-- media --}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Award-Winning</h4></div>
    
        <div class="col-md-3">
            <label class="font-weight-bold mt-2"> Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_award_title_1" value="We're the">
        </div>
    
        <div class="col-md-3">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_award_title_2" value="Award-Winning">
        </div>
        <div class="col-md-3">
            <label class="font-weight-bold mt-2"> Tiêu đề 3</label>
            <input type="text" class="form-control" name="lp_award_title_3" value="Agency">
        </div>
        <div class="col-md-3">
            <label class="font-weight-bold mt-2">SLide ảnh đối tác</label>
            <select name="lp_award_slide" class="form-control">
                <option value="">Trống</option>
                @foreach($slideList as $slide)
                    <option value="{{$slide->id}}">{{$slide->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
     {{-- Kick your growth--}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Kick</h4></div>
    
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_growth_title_1" value="“Kick your growth into high">
        </div>
    
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_growth_title_2" value="gear with our marketing">
        </div>
        {{-- <div class="col-md-3">
            <label class="font-weight-bold mt-2"> Tiêu đề 3</label>
            <input type="text" class="form-control" name="lp_growth_title_3" value="subscription”">
        </div> --}}
        <div class="col-md-3">
            <label class="font-weight-bold mt-2"> Tên nút</label>
            <input type="text" class="form-control" name="lp_growth_button" value="Contact us">
        </div>
        <div class="col-md-3">
            <label class="font-weight-bold mt-2"> Tên ảnh</label>
            <input type="text" class="form-control" name="lp_growth_name" value="Slava Kasperovich">
        </div>
        <div class="col-md-3">
            <label class="font-weight-bold mt-2">Ảnh</label>
              {{F_input_image_4('','lp_growth','lp_growth','')}}
        </div>
    </div>


    {{-- Kick your growth--}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Just subscribed?</h4></div>
         <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_just_title_1" value="Just subscribed?">
        </div>
    
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_just_title_2" value="Here’s how we roll out the red carpet">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">SLide ảnh kinh nghiệm</label>
            <select name="lp_just_slide" class="form-control">
                <option value="">Trống</option>
                @foreach($slideList as $slide)
                    <option value="{{$slide->id}}">{{$slide->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

        
    {{--The smarter--}}
    <div class="row">
        <div class="col-md-12"><hr><h4>The smarter</h4></div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_smarter_title_1" value="The smarter way to market —">
        </div>
    
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_smarter_title_2" value="why subscription beats the rest">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">SLide câu hỏi</label>
            <select name="lp_smarter_slide" class="form-control">
                <option value="">Trống</option>
                @foreach($slideList as $slide)
                    <option value="{{$slide->id}}">{{$slide->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
