<?php
//hien thi o danh sach danh muc da cap
function F_cat_multi_level($data,$parent = 0,$str = ""){
   foreach ($data as $key => $val){
      $id_cat = $val -> id;
      $name = $val -> name;
      if($val -> parent_id == $parent){
?>
      <tr>
         <td class="" data-toggle="modal" data-target="#edit_cat_<?php echo $id_cat ?>">
            <div class="admin-list-news">
               <div class="admin-list-news-title">
                  <?php echo $str; ?> <?php echo $name ?>

               </div>
            </div>
         </td>
         <!-- url -->
         <td><?php echo $val -> url ?></td>
         <td><?php echo $val -> type ?></td>
         <td>
            <?php if($val->img != ''){ ?>
               <img src="<?php echo asset('source/cat/'.$val->img);?>" width="30px">
            <?php }else{ ?>
               <img src="<?php echo asset('upload/theme/noimg.jpg');?>" width="30px">
            <?php } ?>
         </td>
         <td>
            <div class="admin-action">
               <!-- trang thai -->
               <?php echo F_change_status($val) ?>
               <!-- xoa -->
                  <a  href="" data-toggle="modal" data-target="#call_del_<?php echo $id_cat ?>">
                     <i class="fa fa-trash text-danger"></i>
                  </a>
               <!-- modal xoa  -->
                  <div class="modal fade" id="call_del_<?php echo $id_cat ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <b>Thông tin xóa: </b> <?php echo $name ?>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                              <a href="<?php echo url()->current().'/del/'.$val->id; ?>" role="button" class="btn btn-danger">Ok Xóa</a>
                           </div>
                        </div>
                     </div>
                  </div>
               <!-- xem -->
               <a target="_blank" href="<?php echo asset($val->url); ?>" target="_blank">
                  <i class="fa fa-eye text-success"></i>
               </a>
            </div>
         </td>
         <td><?php echo $id_cat; ?></td>
      </tr>
      <!-- model sua   -->
      <div class="modal fade" id="edit_cat_<?php echo $id_cat ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <form action="<?php echo asset('admin/cat/edit/'.$val->id) ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalCenterTitle">Sửa danh mục</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
               </div>
               <div class="modal-body">


                <div class="row">
                        <div class="col-md-6">
                            <!-- ten danh muc -->
                            <div class="form-group">
                                <label for="name_cat">Tên danh mục</label>
                                <input value="<?php echo $val -> name ?>" type="text" class="form-control " id="name" placeholder="Bạn điền tên danh mục" name="name" onkeyup="ChangeToSlug_cat();">
                            </div>

                            <div class="form-group">
                                <label for="name_cat_seo">Mô tả ngắn</label>
                                <textarea class="form-control" name="des"><?php echo $val->des; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- tiêu đề SEO -->
                            <div class="form-group">
                                <label for="name_cat_seo">Tiêu đề SEO</label>
                                <input type="text" class="form-control" id="title_seo" placeholder="Bạn điền tiêu đề SEO" name="title_seo" value="<?php echo $val -> title_seo ?>">
                            </div>
                            <!-- mô tả danh mục  -->
                            <div class="form-group">
                                <label>Mô tả danh mục (SEO - Meta Description)</label>
                                <textarea  class="form-control" id="des_seo" rows="3" name="des_seo" placeholder="Bạn điền mô tả danh mục (tối đa 325 ký tự)" ><?php echo $val -> des_seo ?></textarea>
                            </div>
                            <!-- meta keyword-->
                            <div class="form-group">
                                <label for="name_cat">Keyword(SEO - Meta keyword)</label>
                                <input type="text" class="form-control" id="key_seo" placeholder="Bạn điền keyword, cách nhau dấu phẩy" name="key_seo" value="<?php echo $val -> key_seo ?>">
                            </div>
                            <div class="box-body">
                                 <?php F_input_image($val->img,'img','cat_'.$val->id,'') ?>
                           </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <!-- URL danh muc -->
                            <div class="form-group">
                                <label for="url_cat">URL danh mục</label>
                                <input type="text" class="form-control " id="url" placeholder="URL danh mục" name="url" value="<?php echo $val -> url ?>" required>
                            </div>
                            <!-- danh mục cha -->
                            <div class="form-group">
                                <label for="parent_cat">Danh mục cha</label>
                                <select class="form-control" name="parent_id">
                                    <option selected value="0">Chọn danh mục cha</option>
                                    <?php F_select_cat_multi_level_EDIT($data,$val->parent_id,$val) ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name_cat_seo">Định danh danh mục</label>
                                <input type="text" class="form-control" name="type" value="<?php echo $val -> type ?>">
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
<?php
         F_cat_multi_level($data,$id_cat,$str."&nbsp------");//de quuy danh muc
      }//end if parent
   }//end foreach data
}//end funcito
