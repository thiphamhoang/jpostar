
<div class="modal fade" id="new_type_menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <form action="<?php echo asset('admin/menu/type/new') ?>" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="exampleModalCenterTitle">Thêm vị trí menu</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
         </div>
         <div class="modal-body">
            <!-- ten vi tri menu -->
            <div class="form-group">
               <label><i class="fa fa-th"></i> <b>Tên vị trí menu</b></label>
               <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label> <b>Thể loại</b></label>
                <input type="text" class="form-control" name="type">
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
<?php /**PATH E:\xampp\htdocs\jpostar\app\Modules/Menu/Views/IV_Modal_menu_type_new.blade.php ENDPATH**/ ?>