 
 
<div class="col-md-12">
    <div class="form-group row">
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Ngày hoàn thành</label>
            <input type="text" class="form-control" name="da_date" value="{{old('da_date')}}">
        </div>
        <div class="col-md-6">
            <label class="font-weight-bold mt-2"> Địa chỉ</label>
            <input type="text" class="form-control" name="da_address" value="{{old('lp_title_1')}}">
        </div>
 
    </div>
 </div>
<div class="col-md-12">
    <div class="form-group">
        <label><i class="fa fa-align-justify"></i> Tổng quan dự án</label>
        <textarea type="textarea" id="da_tongQuan" class="form-control" name="da_tongQuan"  >{{old('da_tongQuan')}}</textarea>
        {{F_tinymce('da_tongQuan')}}
    </div>
 </div>
<div class="col-md-12">
    <div class="form-group">
        <label><i class="fa fa-align-justify"></i> Tính năng nổi bật</label>
        <textarea type="textarea" id="da_tinhNang" class="form-control" name="da_tinhNang"  >{{old('da_tinhNang')}}</textarea>
        {{F_tinymce('da_tinhNang')}}
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label><i class="fa fa-align-justify"></i> Mô hình doanh thu dự kiến:</label>
        <textarea type="textarea" id="da_moHinh" class="form-control" name="da_moHinh"  >{{old('da_moHinh')}}</textarea>
        {{F_tinymce('da_moHinh')}}
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label><i class="fa fa-align-justify"></i> Chi phí phát triển và marketing:</label>
        <textarea type="textarea" id="da_chiPhi" class="form-control" name="da_chiPhi"  >{{old('da_chiPhi')}}</textarea>
        {{F_tinymce('da_chiPhi')}}
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label><i class="fa fa-align-justify"></i> Lộ trình phát triển (Roadmap):</label>
        <textarea type="textarea" id="da_loTrinh" class="form-control" name="da_loTrinh"  >{{old('da_loTrinh')}}</textarea>
        {{F_tinymce('da_loTrinh')}}
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label><i class="fa fa-align-justify"></i> Gọi vốn::</label>
        <textarea type="textarea" id="da_goiVon" class="form-control" name="da_goiVon"  >{{old('da_goiVon')}}</textarea>
        {{F_tinymce('da_goiVon')}}
    </div>
</div>