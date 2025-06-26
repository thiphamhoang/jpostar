<?php

//hien thi o bang danh sach menu
function FF_nav_multi_level($menu, $parent = 0,$sub=0){
   if(isset($menu)){
      foreach ($menu as $key => $val){
         $id_nav = $val->id;
         if($parent == $val->parent_id){
            $f_child = App\Model\M_menu::where('parent_id',$val->id)->get();
?>
            <li   class="menu-item menu-item-type-post_type menu-item-object-page   <?php if(count($f_child) > 0){echo ' menu-item-has-children';}?>">
               <?php  if($val-> icon != ''){echo $val-> icon;}  ?>
               <a href="<?php echo asset($val->url) ?>" class="menu-main-a <?php echo  $val->type ?>" >
                  <span  ><?php echo $val-> name ?></span>
                  <?php if(count($f_child) > 0){echo html_entity_decode(' <span style="width:3px !important"> <i class="fa-solid fa-angle-down"></i> </span>');}?>

               </a>
               <?php
                  if(count($f_child) > 0){
                  ?>
                     <ul class="sub-menu " >
                        <?php echo FF_nav_multi_level($menu, $id_nav,$sub++) ?>
                     </ul>
                  <?php
                  }
               ?>
            </li>
<?php
         }
      }//end if parent
   }//end foreach data
}//end


//hien thi o bang danh sach menu
function FF_nav_multi_level_mobile($menu, $parent = 0,$sub=0){
   if(isset($menu)){
      foreach ($menu as $key => $val){
         $id_nav = $val->id;
         if($parent == $val->parent_id){
            $f_child = App\Model\M_menu::where('parent_id',$val->id)->get();
?>
            <li   class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-397 mm-listitem   <?php if(count($f_child) > 0){echo ' menu-item-has-children';}?>">
               <?php  if($val-> icon != ''){echo $val-> icon;}  ?>
               <a href="<?php echo asset($val->url) ?>" class="menu-main-a <?php echo  $val->type ?> " >
                  <span  ><?php echo $val-> name ?></span>
                  <?php if(count($f_child) > 0){echo html_entity_decode(' <span style="width:3px !important"> <i class="fa-solid fa-angle-down"></i> </span>');}?>

               </a>
               <?php
                  if(count($f_child) > 0){
                  ?>
                     <ul class="mm-sub-menu " style="padding: 0px 30px;">
                        <?php echo FF_nav_multi_level($menu, $id_nav,$sub++) ?>
                     </ul>
                  <?php
                  }
               ?>
            </li>
<?php
         }
      }//end if parent
   }//end foreach data
}//end
