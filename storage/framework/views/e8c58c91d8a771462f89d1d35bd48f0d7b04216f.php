
<div class="modal fade" id="edit_widget" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <form action="<?php echo asset('admin/menu/type/edit/'.$type->id) ?>" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="exampleModalCenterTitle">Sửa vị trí menu</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
         </div>
         <div class="modal-body">
            <!-- ten vi tri menu -->
            <div class="form-group">
               <label><i class="fa fa-th"></i> <b>Tên vị trí menu</b></label>
               <input type="text" class="form-control" name="name" value="<?php echo e($type ->name); ?>">
            </div>
            <!-- url -->
            <div class="form-group">
               <label> <b>URL</b></label>
               <input type="text" class="form-control" name="url" value="<?php echo e($type ->url); ?>">
            </div>
            <div class="form-group">
               <label> <b>Thể loại</b></label>
               <input type="text" class="form-control" name="type" value="<?php echo e($type ->type); ?>">
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
<?php /**PATH D:\xampp\htdocs\jpostar\app\Modules/Menu/Views/IV_Modal_menu_type_edit.blade.php ENDPATH**/ ?>