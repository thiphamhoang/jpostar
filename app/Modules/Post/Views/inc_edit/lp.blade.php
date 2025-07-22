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
];
    $displaySave = [];
    if($post->display){
        $displaySave = json_decode($post->display);
    }
 
?>
<div class="col-md-12">
    <hr>
    <h4>Cài đặt hiển thị</h4>
    <div class="row">
        @foreach($sess as $key => $display)
            <div class="col-md-3">
                <div class="form-check">
                    <input class="form-check-input {{$display['id']}}" name="display[]" type="checkbox" value="{{$display['id']}}" id="default_{{$key}}">
                    <label class="form-check-label" for="default_{{$key}}">
                       {{$display['title']}}
                    </label>
                </div>
                 
            </div>
        @endforeach
        
    </div>
</div>
<div class="col-md-12">
    <div class="row" id="lp-intro">
        <div class="col-md-12"><hr><h4>Giới thiệu</h4></div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_title_1" value="{{$post->lp_title_1}}">
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_title_2" value="{{$post->lp_title_2}}">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Mô tả</label>
           <textarea name="lp_des" class="form-control">{{$post->lp_des}}</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Mô tả 2</label>
           <textarea name="lp_des_2" class="form-control">{{$post->lp_des_2}}</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Ảnh mô tả</label>
           <div class="mt-3">
             {{F_input_image_2($post->lp_img,'lp_img','lp_img',asset('/source/post/'))}}
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
                    <option value="{{$slide->id}}" @if($post->lp_slide == $slide->id) selected @endif>{{$slide->name}}</option>
                @endforeach
            </select>
        </div>
        
    </div>
      {{-- meet--}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Meet</h4></div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_meet_title_1" value="{{$post->lp_meet_title_1}}">
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_meet_title_2" value="{{$post->lp_meet_title_2}}">
        </div>
         <div class="col-md-4">
            <label class="font-weight-bold mt-2">Text 1</label>
            <input type="text" class="form-control" name="lp_meet_texx_1" value="{{$post->lp_meet_texx_1}}">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Text 2</label>
            <input type="text" class="form-control" name="lp_meet_texx_2" value="{{$post->lp_meet_texx_2}}">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Text 3</label>
            <input type="text" class="form-control" name="lp_meet_texx_3" value="{{$post->lp_meet_texx_3}}">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input type="text" class="form-control my-1" name="lp_meet_block_11" value="{{$post->lp_meet_block_11}}">
            <input type="text" class="form-control my-1" name="lp_meet_block_12" value="{{$post->lp_meet_block_12}}">
            <input type="text" class="form-control my-1" name="lp_meet_block_13" value="{{$post->lp_meet_block_13}}">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 2</label>
            <input type="text" class="form-control my-1" name="lp_meet_block_21" value="{{$post->lp_meet_block_21}}">
            <input type="text" class="form-control my-1" name="lp_meet_block_22" value="{{$post->lp_meet_block_22}}">
            <input type="text" class="form-control my-1" name="lp_meet_block_23" value="{{$post->lp_meet_block_23}}">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input type="text" class="form-control my-1" name="lp_meet_block_31" value="{{$post->lp_meet_block_31}}">
            <input type="text" class="form-control my-1" name="lp_meet_block_32" value="{{$post->lp_meet_block_32}}">
            <input type="text" class="form-control my-1" name="lp_meet_block_33" value="{{$post->lp_meet_block_33}}">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input type="text" class="form-control my-1" name="lp_meet_block_41" value="{{$post->lp_meet_block_41}}">
            <input type="text" class="form-control my-1" name="lp_meet_block_42" value="{{$post->lp_meet_block_42}}">
            <input type="text" class="form-control my-1" name="lp_meet_block_43" value="{{$post->lp_meet_block_43}}">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input type="text" class="form-control my-1" name="lp_meet_block_51" value="{{$post->lp_meet_block_51}}">
            <input type="text" class="form-control my-1" name="lp_meet_block_52" value="{{$post->lp_meet_block_52}}">
            <input type="text" class="form-control my-1" name="lp_meet_block_53" value="{{$post->lp_meet_block_53}}">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input type="text" class="form-control my-1" name="lp_meet_block_61" value="{{$post->lp_meet_block_61}}">
            <input type="text" class="form-control my-1" name="lp_meet_block_62" value="{{$post->lp_meet_block_62}}">
            <input type="text" class="form-control my-1" name="lp_meet_block_63" value="{{$post->lp_meet_block_63}}">
        </div>
    </div>

    {{-- Why switch--}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Why switch</h4></div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_why_title_1" value="{{$post->lp_why_title_1}}">
        </div>
        {{-- <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_why_title_2" value="{{$post->lp_why_title_2}}">
        </div> --}}

        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 1</label>
            <input name="lp_why_block_11" type="text" class="form-control my-1"  value="{{$post->lp_why_block_11}}">
            <textarea name="lp_why_block_12" class="form-control">{{$post->lp_why_block_12}}</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 2</label>
            <input name="lp_why_block_21" type="text" class="form-control my-1"  value="{{$post->lp_why_block_21}}">
            <textarea name="lp_why_block_22" class="form-control">{{$post->lp_why_block_22}}</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 3</label>
            <input name="lp_why_block_31" type="text" class="form-control my-1"  value="{{$post->lp_why_block_31}}">
            <textarea name="lp_why_block_32" class="form-control">{{$post->lp_why_block_32}}</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 4</label>
            <input name="lp_why_block_41" type="text" class="form-control my-1"  value="{{$post->lp_why_block_41}}">
            <textarea name="lp_why_block_42" class="form-control">{{$post->lp_why_block_42}}</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 5</label>
            <input name="lp_why_block_51" type="text" class="form-control my-1"  value="{{$post->lp_why_block_51}}">
            <textarea name="lp_why_block_52" class="form-control">{{$post->lp_why_block_52}}</textarea>
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">Block 6</label>
            <input name="lp_why_block_61" type="text" class="form-control my-1"  value="{{$post->lp_why_block_61}}">
            <textarea name="lp_why_block_62" class="form-control">{{$post->lp_why_block_62}}</textarea>
        </div>
      
    </div>

    {{-- Featured --}}
    <div class="row">
        <div class="col-md-12"><hr><h4>We Are Featured In</h4></div>
    
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_feature_title" value="{{$post->lp_feature_title}}">
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">Link</label>
            <input type="text" class="form-control" name="lp_feature_link" value="{{$post->lp_feature_link}}">
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">Tiêu đề 1</label>
            <textarea name="lp_feature_des" class="form-control">{{$post->lp_feature_des}}</textarea>
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2">Ảnh</label>
            {{F_input_image_5($post->lp_feature,'lp_feature','lp_feature',asset('/source/post/'))}}
        </div>
    </div>

    
    {{-- media --}}
    <div class="row">
        <div class="col-md-12"><hr><h4>And other media</h4></div>
    
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_media_title" value="{{$post->lp_media_title}}">
        </div>
         <div class="col-md-6">
            <label class="font-weight-bold mt-2">SLide ảnh đối tác</label>
            <select name="lp_media_slide" class="form-control">
                <option value="">Trống</option>
                @foreach($slideList as $slide)
                    <option value="{{$slide->id}}"  @if($post->lp_media_slide == $slide->id) selected @endif>{{$slide->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- media --}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Download</h4></div>
    
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_download_title_1" value="{{$post->lp_download_title_1}}">
        </div>
    
        {{-- <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_download_title_2" value="{{$post->lp_download_title_2}}">
        </div> --}}
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Tên nút download</label>
            <input type="text" class="form-control" name="lp_download_button" value="{{$post->lp_download_button}}">
        </div>
         <div class="col-md-6">
            <label class="font-weight-bold mt-2">Ảnh</label>
             {{F_input_image_3($post->lp_download,'lp_download','lp_download',asset('/source/post/'))}}
        </div>
    </div>

     {{-- media --}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Award-Winning</h4></div>
    
        <div class="col-md-3">
            <label class="font-weight-bold mt-2"> Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_award_title_1" value="{{$post->lp_award_title_1}}">
        </div>
    
        <div class="col-md-3">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_award_title_2" value="{{$post->lp_award_title_2}}">
        </div>
        <div class="col-md-3">
            <label class="font-weight-bold mt-2"> Tiêu đề 3</label>
            <input type="text" class="form-control" name="lp_award_title_3" value="{{$post->lp_award_title_3}}">
        </div>
        <div class="col-md-3">
            <label class="font-weight-bold mt-2">SLide ảnh đối tác</label>
            <select name="lp_award_slide" class="form-control">
                <option value="">Trống</option>
                @foreach($slideList as $slide)
                    <option value="{{$slide->id}}" @if($post->lp_award_slide == $slide->id) selected @endif>{{$slide->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
     {{-- Kick your growth--}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Kick</h4></div>
    
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_growth_title_1" value="{{$post->lp_growth_title_1}}">
        </div>
    
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_growth_title_2" value="{{$post->lp_growth_title_2}}">
        </div>
        {{-- <div class="col-md-3">
            <label class="font-weight-bold mt-2"> Tiêu đề 3</label>
            <input type="text" class="form-control" name="lp_growth_title_3" value="{{$post->lp_growth_title_3}}">
        </div> --}}
        <div class="col-md-3">
            <label class="font-weight-bold mt-2"> Tên nút</label>
            <input type="text" class="form-control" name="lp_growth_button" value="{{$post->lp_growth_button}}">
        </div>
        <div class="col-md-3">
            <label class="font-weight-bold mt-2"> Tên ảnh</label>
            <input type="text" class="form-control" name="lp_growth_name" value="{{$post->lp_growth_name}}">
        </div>
        <div class="col-md-3">
            <label class="font-weight-bold mt-2">Ảnh</label>
              {{F_input_image_4($post->lp_growth,'lp_growth','lp_growth',asset('/source/post/'))}}
        </div>
    </div>


    {{-- Kick your growth--}}
    <div class="row">
        <div class="col-md-12"><hr><h4>Just subscribed?</h4></div>
         <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_just_title_1" value="{{$post->lp_just_title_1}}">
        </div>
    
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_just_title_2" value="{{$post->lp_just_title_2}}">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">SLide ảnh kinh nghiệm</label>
            <select name="lp_just_slide" class="form-control">
                <option value="">Trống</option>
                @foreach($slideList as $slide)
                    <option value="{{$slide->id}}"  @if($post->lp_just_slide == $slide->id) selected @endif>{{$slide->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

        
    {{--The smarter--}}
    <div class="row">
        <div class="col-md-12"><hr><h4>The smarter</h4></div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Tiêu đề 1</label>
            <input type="text" class="form-control" name="lp_smarter_title_1" value="{{$post->lp_smarter_title_1}}">
        </div>
    
        <div class="col-md-4">
            <label class="font-weight-bold mt-2"> Tiêu đề 2</label>
            <input type="text" class="form-control" name="lp_smarter_title_2" value="{{$post->lp_smarter_title_2}}">
        </div>
        <div class="col-md-4">
            <label class="font-weight-bold mt-2">SLide câu hỏi</label>
            <select name="lp_smarter_slide" class="form-control">
                <option value="">Trống</option>
                @foreach($slideList as $slide)
                    <option value="{{$slide->id}}" @if($post->lp_smarter_slide == $slide->id) selected @endif>{{$slide->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
  @if($displaySave)
    @foreach($displaySave as $item)
        @if($item)
            <script>
                // document.addEventListener("DOMContentLoaded", function () {
                //     var el = document.getElementById("{{ $item }}");
                //     if (el) {
                //         el.style.display = "none";
                //     }
                // });

                // checkbox 
                $('.{{$item}}').prop('checked','checked');
            </script>
        @endif
    @endforeach
 @endif