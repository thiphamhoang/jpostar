<div class="modal fade" id="new_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <form action="{{asset('admin/user/'.$type_id.'/new')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Thêm mới tài khoản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- tên đây đủ -->
                            <div class="form-group">
                                <label>Họ tên(*)</label>
                                <input type="text" class="form-control form-control-sm" id="name" placeholder="Họ tên"
                                    name="name" value="{{old('name')}}" onkeyup="ChangeToSlug();">
                            </div>
                            <!-- so dien thoai -->
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Điện thoại"
                                    name="tel" value="{{old('tel')}}">
                            </div>
                            <!-- email thanh vien -->
                            <div class="form-group">
                                <label>Email của bạn</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Email thành viên"
                                    name="email" value="{{old('email')}}" required>
                            </div>
                           
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" class="form-control form-control-sm" name="address"
                                    value="{{old('address')}}">
                            </div>
                           
                        </div>
                        <div class="col-md-6">
                          
                            <!-- Mat khau  -->
                            <div class="form-group">
                                <label>Mật khẩu(*)</label>
                                <input type="password" class="form-control form-control-sm" placeholder="Mật khẩu"
                                    name="password">
                            </div>
                            <!-- nhap lai mat khau -->
                            <div class="form-group">
                                <label>Nhập lại mật khẩu(*)</label>
                                <input type="password" class="form-control form-control-sm"
                                    placeholder="Nhập lại mật khẩu" name="password_again">
                            </div>
                            <!-- anh dại diện  -->
                            <div class="form-group">
                                <b>Trạng thái: </b>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                        value="on" checked>
                                    <label class="form-check-label" for="inlineRadio1">Công khai</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                        value="off">
                                    <label class="form-check-label" for="inlineRadio2">Khóa</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label><b>Phần trăm giảm giá cho khách hàng</b></label>
                                <input type="number" class="form-control form-control-sm" name="percent" min="0"
                                    max="100">
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
            </div>

        </div>
    </form>
</div>
