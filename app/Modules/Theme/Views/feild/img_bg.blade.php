<div class="form-group row">
    <div class="col-md-6">
        <label><i class="fa fa-image"></i> Hình nền</label>
        {{F_input_image($row->img_bg,'img_bg','edit_img_bg',asset('source/theme'))}}
    </div>
    <div class="col-md-6">
        <label><i class="fa fa-image"></i> Hình nền 2</label>
        {{F_input_image_2($row->img_bg_m,'img_bg_m','edit_img_bg_m',asset('source/theme'))}}
    </div>
</div>
