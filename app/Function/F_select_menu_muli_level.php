<?php

//hien thi select menu da cap cap dung trog them moi menu
function F_select_menu_muli_level($data,$parent = 0,$str = ""){
   foreach ($data as $key => $val){
      $id_menu = $val["id"]; 
      $name = $val["name"];
      $type_menu  = $val["menu_type"];
      if($val["parent_id"] == $parent){
?>
      <option value="<?php echo $id_menu ?>">
      	<?php 
            echo $str;
            echo $val-> name;
         ?>
      </option>  
<?php
         F_select_menu_muli_level($data, $id_menu,$str."&nbsp--- ");
      }//end if parent
   }//end foreach data
}//end funcito
