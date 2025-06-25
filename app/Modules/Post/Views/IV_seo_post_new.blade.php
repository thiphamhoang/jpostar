<div class="box box-info collapsed-box">
    <div class="box-header with-border">
        <h3 class="box-title">Tối ưu SEO</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>

        </div>
    </div>
    <div class="box-body">
        <div class="form-group google_snipet" style="padding: 10px; background-color: #f0f0f1; border-radius: 5px;">
            <div class="">{{asset('')}}<span class="google_url"> </span></div>
            <div class="" style="color: #2330ab;font-size: 20px;">
                <span class="google_title"></span>
            </div>
            <div class=""><span class="google_des"></span></div>
        </div>
        <!-- tieu de bài viết  -->
        <div class="form-group">
            <label>Tiêu đề SEO (Số lượng tiêu chuẩn 60 ký tự | hiện tại : <span id="count_title"></span>)</label>
            <input id="seo_title" type="text" class="form-control" placeholder="Bạn điền tiêu đề" name="title_seo"
                value="{{old('title_seo')}}">
               
        </div>
        <!-- mô tả bài viết  -->
        <div class="form-group">
            <label>Mô tả bài viết (Số lượng tiêu chuẩn 215 ký tự | hiện tại : <span id="count_des"></span>)</label>
            <textarea id="seo_des" class="form-control" rows="3" name="des_seo"
                placeholder="Bạn điền mô tả bài viết">{{old('des_seo')}}</textarea>
               
        </div>
        <!-- meta keyword bài viết  -->
        <div class="form-group">
            <label>Keywords (SEO - Meta keyword)</label>
            <input type="text" class="form-control" rows="3" name="key_seo"
                placeholder="Bạn điền từ khóa bài viết, cách nhau dấu phẩy" value="{{ old('key_seo') }}">
              
        </div>
      
       
        <script>
            //title 
            $('#seo_title').keyup(function () {
                var google_title = this.value;
                var title_count = this.value.length;
                $('#count_title').html(title_count);
                var title = $('#title_post').val();
                if (google_title == '') {
                    $('.google_title').html(title);
                } else {
                    $('.google_title').html(google_title);
                }
                if (title_count <= 60) {
                    $('#seo_title').addClass('border-success');
                } else if (title_count > 60 && title_count <= 70) {
                    $('#seo_title').addClass('border-warning');
                } else {
                    $('#seo_title').addClass('border-danger');
                }
            });

            $('#seo_des').keyup(function () {
                var google_des = this.value;
                var des_count = this.value.length;
                $('#count_des').html(des_count);
                $('.google_des').html(google_des);
                if (des_count <= 215) {
                    $('#seo_des').addClass('border-success');
                } else if (des_count > 215 && des_count <= 250) {
                    $('#seo_des').addClass('border-warning');
                } else {
                    $('#seo_des').addClass('border-danger');
                }
            });

        </script>
    </div>
</div>
