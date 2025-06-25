<?php
function F_menu_multi_level_ui($data,$type_id,$row_list,$cat_list,$parent = 0,$str = ""){
   foreach ($data as $key => $val){
     $id_menu = $val -> id;
     $type_menu = $val -> menu_type;
     if($val -> parent_id== $parent){
?>
     <!-- ten menu -->

         <li class="dd-item  dd3-item" data-id="<?php echo $id_menu ?>">
            <div class="dd-handle dd3-handle"></div>
            <div class="dd3-content">
               <?php echo html_entity_decode( $val -> icon);?>
               <?php if($val->img != ''){ ?>
               <img height="15px" src="<?php echo asset('source/menu/'.$val->img) ?>">
               <?php } ?>
                  <span class="menu-name">
                     <?php
                         echo $val-> name;
                     ?>
                  </span>
                  <!-- action  -->
                  <span class="menu-ac">
                     <!-- trang thai  -->
                     <?php if($val->status == 'off'){ ?>
                        <a href="<?php echo url()->current().'/status/'.$val->id; ?>">
                           <i class="fa fa-exclamation-circle text-danger"></i>
                        </a>
                     <?php }elseif($val->status == 'on'){ ?>
                        <a href="<?php echo url()->current().'/status/'.$val->id; ?>">
                           <i class="fa fa-check-circle text-success"></i>
                        </a>
                     <?php } ?>
                     <!-- xoa  -->
                     <a  href="" data-toggle="modal" data-target="#call_del_<?php echo $id_menu ?>">
                        <i class="fa fa-trash text-danger"></i>
                     </a>
                     <div class="modal fade" id="call_del_<?php echo $id_menu ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title"><i class="fa fa-trash text-danger"></i> Bạn có chắc chắn muốn xóa?</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>

                              <div class="modal-footer">
                                 <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                                 <a  href="<?php echo asset('admin/menu/type/'.$val->menu_type_id.'/del/'.$val->id) ?>" role="button" class="btn btn-danger">Ok Xóa</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- sua  -->
                     <a href="#" data-toggle="modal" data-target="#edit_menu_<?php echo $val -> id ?>">
                        <i class="fa fa-edit"></i>
                     </a>
                     <!-- model edit menu custome -->
                     <div class="modal fade" id="edit_menu_<?php echo $val -> id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <form action="<?php echo asset('admin/menu/type/'.$val -> menu_type_id.'/edit/'.$val -> id) ?>" method="post"  enctype="multipart/form-data">
                           <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                           <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Sửa Menu</h5>
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
                                          <input type="text" id="name_menu_<?php echo $val->id ?>" value="<?php echo $val ->name ?>" class="form-control" placeholder="Bạn điền menu" name="name">
                                       </div>

                                       <!-- link menu -->
                                       <div class="form-group">
                                          <label><i class="fa fa-link"></i> Link menu</label>
                                          <input type="text" id="url_menu_<?php echo $val->id ?>" value="<?php echo $val->url?>" class="form-control" placeholder="Bạn điền link menu" name="url">
                                       </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label> Kiểu</label>
                                            <input type="text" class="form-control" name="type" value="<?php echo $val->type ?>">
                                        </div>

                                       </script>
                                        <!-- menu icon -->
                                       <div class="form-group">
                                          <label><i class="fa fa-icons"></i> Biểu tượng </label>
                                          <input type="text" value="<?php echo htmlentities($val -> icon) ?>" class="form-control" placeholder="Ví dụ: <i class='fa fa-user'></i>" name="icon">
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
                  </span>
                  <!-- ket thuc xoa  -->
               </div>

<?php
      if($val -> f_child){
          echo '<ol class="'.$str.'">';
            F_menu_multi_level_ui($data,$type_id,$row_list,$cat_list,$id_menu,$str."dd-list");//de quuy danh muc
          echo '</ol>';

        echo ' </li>';
      }
     }//end if parent
  }//end foreach data
}//end funcito
