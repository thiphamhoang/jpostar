
<div class="modal fade" id="new_menu_custome" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <form action="<?php echo asset('admin/menu/type/'.$type_id.'/new_custome') ?>" method="post"  enctype="multipart/form-data">
      <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="exampleModalCenterTitle">Thêm menu tùy chỉnh</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-6">
                  <!-- ten menu -->
                  <div class="form-group">
                     <label><i class="fa fa-list"></i> Tên menu (bắt buộc)</label>
                     <input type="text" id="name_menu" class="form-control" placeholder="Bạn điền menu" name="name">
                  </div>

                     <!-- menu cha -->
                  <div class="form-group">
                     <label><i class="fa fa-stream"></i> Menu cha</label>
                     <div class="form-group">
                           <select class="form-control" name="parent_id">
                           <option value="0">Menu cha</option>
                              <?php F_select_menu_muli_level($menu) ?>
                           </select>
                     </div>
                  </div>
                  <!-- link menu -->
                  <div class="form-group">
                     <label><i class="fa fa-link"></i> Link menu</label>
                     <input type="text" class="form-control" placeholder="Bạn điền link menu" name="url" id="url_menu">
                  </div>

               </div>
               <div class="col-md-6">

                    <div class="form-group">
                        <label> Kiểu</label>
                        <input type="text" class="form-control" name="type" >
                    </div>

                    <!-- menu icon -->
                    <div class="form-group">
                        <label><i class="fa fa-icons"></i> Biểu tượng </label>
                        <input type="text" class="form-control" placeholder="Ví dụ: <i class='fa fa-user'></i>" name="icon">
                        Bạn copy mã biểu tượng  <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_bank">tại đây</a>
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
<?php /**PATH E:\xampp\htdocs\jpostar\app\Modules/Menu/Views/IV_Modal_menu_new_custome.blade.php ENDPATH**/ ?>