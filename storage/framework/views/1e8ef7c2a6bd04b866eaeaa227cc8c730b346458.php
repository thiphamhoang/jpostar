
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">

    <?php echo $__env->make('backend/alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
               <h3 class="box-title">Danh sách đơn hàng  </h3>
            </div>
            <div class="box-body table-responsive no-padding">
               <table class="table table-hover">
                  <tr>
                     
                     <th>Tên</th>
                     <th>Điện thoại</th>
                     <th>Email</th>
                     <th class="text-center">Nội dung</th>
                     <th class="text-center">Thời gian</th>
                     <th class="text-center"></th>
                  </tr>
                  <?php if(count($order) != 0): ?>
                     <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td class="">
                              <?php echo e($val->name); ?>

                           </td>
                           <td class="">
                              <?php echo e($val->tel); ?>

                           </td>
                           <td class="">
                              <?php echo e($val->email); ?>

                           </td>


                           <td  class="text-center">
                              <?php echo e($val->note); ?>

                           </td>

                            <td class="text-center">
                                <?php
                                $date = date_create($val -> created_at);
                                echo date_format($date,'d/m/Y').'<br />';
                                echo date_format($date,'H:i:s');
                            ?>
                            </td>
                           <td  class="text-center">

                              <!-- xoa -->
                              <a  href="" data-toggle="modal" data-target="#call_del_<?php echo e($val -> id); ?>">
                                 <i class="fa fa-trash text-danger"></i>
                              </a>
                              <div class="modal fade" id="call_del_<?php echo e($val -> id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title"><i class="fa fa-trash text-danger"></i> Bạn có chắc chắn muốn xóa?</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <div class="modal-body text-left">
                                          <!-- id thuoc tinh -->
                                          <b>Thông tin xóa: </b> <?php echo e($val -> name); ?>

                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                                          <a href="<?php echo url()->current().'/del/'.$val->id; ?>" role="button" class="btn btn-danger">Ok Xóa</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- sua  -->
                              <a  href="" data-toggle="modal" data-target="#call_edit_<?php echo e($val -> id); ?>">
                                 <i class="fa fa-edit text-primary"></i>
                              </a>
                              <div class="modal fade" id="call_edit_<?php echo e($val -> id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h6 class="modal-title" id="exampleModalCenterTitle"><i class="text-danger fa fa-edit"></i> Sửa thể loại</h6>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <div class="modal-body text-left">
                                            <form action="<?php echo e(asset('admin/order/edit/'.$val->id)); ?>" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            <div class="row">

                                                    <div class="col-md-4">
                                                       <div class="form-group">
                                                             <label>Họ và tên</label>
                                                                <?php echo e(F_input_basic('text',$val->name,'name','','form-control','','')); ?>

                                                       </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                       <div class="form-group">
                                                             <label>Số điện thoại</label>
                                                                <?php echo e(F_input_basic('text',$val->tel,'tel','','form-control','','')); ?>

                                                       </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                       <div class="form-group">
                                                                <label>Email</label>
                                                                <?php echo e(F_input_basic('text',$val->email,'email','','form-control','','')); ?>

                                                       </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                       <div class="form-group">
                                                                <label>Nội dung</label>
                                                                <textarea name="note"  class="form-control" rows="10"><?php echo e($val->note); ?></textarea>
                                                       </div>
                                                    </div>


                                                 </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                                            </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php else: ?>
                     <tr>
                        <td colspan="9" class="text-center">
                           <h6>Không có bài viết đủ điều kiện lọc</h6>
                        </td>
                     </tr>
                  <?php endif; ?>
               </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
               <?php echo e($order->appends(request()->input()) ->links()); ?>

            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\jpostar\app\Modules/Order/Views/index.blade.php ENDPATH**/ ?>