<?php
 
 

function F_input_image_3($value,$name,$id,$folder){
   ?>
      <div id="img-current_3<?php echo $id ?>">
         <div class="button-del_3" id="button-del_3-<?php echo $id ?>">
            <i class="fa fa-times-circle"></i>
         </div>
         <?php if($value != " "){ ?>
            <img width="138px" id="img-preview_3<?php echo $id ?>" src="<?php echo $folder.'/'.$value ?>"/>
         <?php } ?>
      </div>
      <div class="">
         <input type="file" name="<?php echo $name ?>" id="file_img_3<?php echo $id ?>" class="form-control">
         <input type="hidden" name="del_img_3" id="del_img_3_<?php echo $id ?>">
      </div>
      <script>
         function readURL<?php echo $id ?>(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                  $('#img-preview_3<?php echo $id ?>').attr('src', e.target.result);
               }
               reader.readAsDataURL(input.files[0]);
            }
         }
         var meta_val = '<?php echo $value ?>';
         if(meta_val == ''){
            $('#img-current_3<?php echo $id ?>').css('display','none');
            $('#button-del_3-<?php echo $id ?>').css('display','none');
         }
         $("#file_img_3<?php echo $id ?>").change(function() {
            readURL<?php echo $id ?>(this);
            $('#button-del_3-<?php echo $id ?>').css('display','block');
            $('#img-current_3<?php echo $id ?>').css('display','unset');
         });
         // js xoa anh va chen value on vao input delimg
         $("#button-del_3-<?php echo $id ?>").click(function(){
            // anh div hinh anh
            $('#img-current_3<?php echo $id ?>').css('display','none');
            $('#del_img_3_<?php echo $id ?>').attr('value','del_img_3');
         });
      </script>
   <?php
}

function F_input_image_4($value,$name,$id,$folder){
   ?>
      <div id="img-current_4<?php echo $id ?>">
         <div class="button-del_4" id="button-del_4-<?php echo $id ?>">
            <i class="fa fa-times-circle"></i>
         </div>
         <?php if($value != " "){ ?>
            <img width="138px" id="img-preview_4<?php echo $id ?>" src="<?php echo $folder.'/'.$value ?>"/>
         <?php } ?>
      </div>
      <div class="">
         <input type="file" name="<?php echo $name ?>" id="file_img_4<?php echo $id ?>" class="form-control">
         <input type="hidden" name="del_img_4" id="del_img_4_<?php echo $id ?>">
      </div>
      <script>
         function readURL<?php echo $id ?>(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                  $('#img-preview_4<?php echo $id ?>').attr('src', e.target.result);
               }
               reader.readAsDataURL(input.files[0]);
            }
         }
         var meta_val = '<?php echo $value ?>';
         if(meta_val == ''){
            $('#img-current_4<?php echo $id ?>').css('display','none');
            $('#button-del_4-<?php echo $id ?>').css('display','none');
         }
         $("#file_img_4<?php echo $id ?>").change(function() {
            readURL<?php echo $id ?>(this);
            $('#button-del_4-<?php echo $id ?>').css('display','block');
            $('#img-current_4<?php echo $id ?>').css('display','unset');
         });
         // js xoa anh va chen value on vao input delimg
         $("#button-del_4-<?php echo $id ?>").click(function(){
            // anh div hinh anh
            $('#img-current_4<?php echo $id ?>').css('display','none');
            $('#del_img_4_<?php echo $id ?>').attr('value','del_img_4');
         });
      </script>
   <?php
}

function F_input_image_5($value,$name,$id,$folder){
   ?>
      <div id="img-current_5<?php echo $id ?>">
         <div class="button-del_5" id="button-del_5-<?php echo $id ?>">
            <i class="fa fa-times-circle"></i>
         </div>
         <?php if($value != " "){ ?>
            <img width="138px" id="img-preview_5<?php echo $id ?>" src="<?php echo $folder.'/'.$value ?>"/>
         <?php } ?>
      </div>
      <div class="">
         <input type="file" name="<?php echo $name ?>" id="file_img_5<?php echo $id ?>" class="form-control">
         <input type="hidden" name="del_img_5" id="del_img_5_<?php echo $id ?>">
      </div>
      <script>
         function readURL<?php echo $id ?>(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                  $('#img-preview_5<?php echo $id ?>').attr('src', e.target.result);
               }
               reader.readAsDataURL(input.files[0]);
            }
         }
         var meta_val = '<?php echo $value ?>';
         if(meta_val == ''){
            $('#img-current_5<?php echo $id ?>').css('display','none');
            $('#button-del_5-<?php echo $id ?>').css('display','none');
         }
         $("#file_img_5<?php echo $id ?>").change(function() {
            readURL<?php echo $id ?>(this);
            $('#button-del_5-<?php echo $id ?>').css('display','block');
            $('#img-current_5<?php echo $id ?>').css('display','unset');
         });
         // js xoa anh va chen value on vao input delimg
         $("#button-del_5-<?php echo $id ?>").click(function(){
            // anh div hinh anh
            $('#img-current_5<?php echo $id ?>').css('display','none');
            $('#del_img_5_<?php echo $id ?>').attr('value','del_img_5');
         });
      </script>
   <?php
}

function F_input_image_6($value,$name,$id,$folder){
   ?>
      <div id="img-current_6<?php echo $id ?>">
         <div class="button-del_6" id="button-del_6-<?php echo $id ?>">
            <i class="fa fa-times-circle"></i>
         </div>
         <?php if($value != " "){ ?>
            <img width="138px" id="img-preview_6<?php echo $id ?>" src="<?php echo $folder.'/'.$value ?>"/>
         <?php } ?>
      </div>
      <div class="">
         <input type="file" name="<?php echo $name ?>" id="file_img_6<?php echo $id ?>" class="form-control">
         <input type="hidden" name="del_img_6" id="del_img_6_<?php echo $id ?>">
      </div>
      <script>
         function readURL<?php echo $id ?>(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                  $('#img-preview_6<?php echo $id ?>').attr('src', e.target.result);
               }
               reader.readAsDataURL(input.files[0]);
            }
         }
         var meta_val = '<?php echo $value ?>';
         if(meta_val == ''){
            $('#img-current_6<?php echo $id ?>').css('display','none');
            $('#button-del_6-<?php echo $id ?>').css('display','none');
         }
         $("#file_img_6<?php echo $id ?>").change(function() {
            readURL<?php echo $id ?>(this);
            $('#button-del_6-<?php echo $id ?>').css('display','block');
            $('#img-current_6<?php echo $id ?>').css('display','unset');
         });
         // js xoa anh va chen value on vao input delimg
         $("#button-del_6-<?php echo $id ?>").click(function(){
            // anh div hinh anh
            $('#img-current_6<?php echo $id ?>').css('display','none');
            $('#del_img_6_<?php echo $id ?>').attr('value','del_img_6');
         });
      </script>
   <?php
}

function F_input_image_7($value,$name,$id,$folder){
   ?>
      <div id="img-current_7<?php echo $id ?>">
         <div class="button-del_7" id="button-del_7-<?php echo $id ?>">
            <i class="fa fa-times-circle"></i>
         </div>
         <?php if($value != " "){ ?>
            <img width="138px" id="img-preview_7<?php echo $id ?>" src="<?php echo $folder.'/'.$value ?>"/>
         <?php } ?>
      </div>
      <div class="">
         <input type="file" name="<?php echo $name ?>" id="file_img_7<?php echo $id ?>" class="form-control">
         <input type="hidden" name="del_img_7" id="del_img_7_<?php echo $id ?>">
      </div>
      <script>
         function readURL<?php echo $id ?>(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                  $('#img-preview_7<?php echo $id ?>').attr('src', e.target.result);
               }
               reader.readAsDataURL(input.files[0]);
            }
         }
         var meta_val = '<?php echo $value ?>';
         if(meta_val == ''){
            $('#img-current_7<?php echo $id ?>').css('display','none');
            $('#button-del_7-<?php echo $id ?>').css('display','none');
         }
         $("#file_img_7<?php echo $id ?>").change(function() {
            readURL<?php echo $id ?>(this);
            $('#button-del_7-<?php echo $id ?>').css('display','block');
            $('#img-current_7<?php echo $id ?>').css('display','unset');
         });
         // js xoa anh va chen value on vao input delimg
         $("#button-del_7-<?php echo $id ?>").click(function(){
            // anh div hinh anh
            $('#img-current_7<?php echo $id ?>').css('display','none');
            $('#del_img_7_<?php echo $id ?>').attr('value','del_img_7');
         });
      </script>
   <?php
}
function F_input_image_8($value,$name,$id,$folder){
   ?>
      <div id="img-current_8<?php echo $id ?>">
         <div class="button-del_8" id="button-del_8-<?php echo $id ?>">
            <i class="fa fa-times-circle"></i>
         </div>
         <?php if($value != " "){ ?>
            <img width="138px" id="img-preview_8<?php echo $id ?>" src="<?php echo $folder.'/'.$value ?>"/>
         <?php } ?>
      </div>
      <div class="">
         <input type="file" name="<?php echo $name ?>" id="file_img_8<?php echo $id ?>" class="form-control">
         <input type="hidden" name="del_img_8" id="del_img_8_<?php echo $id ?>">
      </div>
      <script>
         function readURL<?php echo $id ?>(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                  $('#img-preview_8<?php echo $id ?>').attr('src', e.target.result);
               }
               reader.readAsDataURL(input.files[0]);
            }
         }
         var meta_val = '<?php echo $value ?>';
         if(meta_val == ''){
            $('#img-current_8<?php echo $id ?>').css('display','none');
            $('#button-del_8-<?php echo $id ?>').css('display','none');
         }
         $("#file_img_8<?php echo $id ?>").change(function() {
            readURL<?php echo $id ?>(this);
            $('#button-del_8-<?php echo $id ?>').css('display','block');
            $('#img-current_8<?php echo $id ?>').css('display','unset');
         });
         // js xoa anh va chen value on vao input delimg
         $("#button-del_8-<?php echo $id ?>").click(function(){
            // anh div hinh anh
            $('#img-current_8<?php echo $id ?>').css('display','none');
            $('#del_img_8_<?php echo $id ?>').attr('value','del_img_8');
         });
      </script>
   <?php
}

function F_input_image_9($value,$name,$id,$folder){
   ?>
      <div id="img-current_9<?php echo $id ?>">
         <div class="button-del_9" id="button-del_9-<?php echo $id ?>">
            <i class="fa fa-times-circle"></i>
         </div>
         <?php if($value != " "){ ?>
            <img width="138px" id="img-preview_9<?php echo $id ?>" src="<?php echo $folder.'/'.$value ?>"/>
         <?php } ?>
      </div>
      <div class="">
         <input type="file" name="<?php echo $name ?>" id="file_img_9<?php echo $id ?>" class="form-control">
         <input type="hidden" name="del_img_9" id="del_img_9_<?php echo $id ?>">
      </div>
      <script>
         function readURL<?php echo $id ?>(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                  $('#img-preview_9<?php echo $id ?>').attr('src', e.target.result);
               }
               reader.readAsDataURL(input.files[0]);
            }
         }
         var meta_val = '<?php echo $value ?>';
         if(meta_val == ''){
            $('#img-current_9<?php echo $id ?>').css('display','none');
            $('#button-del_9-<?php echo $id ?>').css('display','none');
         }
         $("#file_img_9<?php echo $id ?>").change(function() {
            readURL<?php echo $id ?>(this);
            $('#button-del_9-<?php echo $id ?>').css('display','block');
            $('#img-current_9<?php echo $id ?>').css('display','unset');
         });
         // js xoa anh va chen value on vao input delimg
         $("#button-del_9-<?php echo $id ?>").click(function(){
            // anh div hinh anh
            $('#img-current_9<?php echo $id ?>').css('display','none');
            $('#del_img_9_<?php echo $id ?>').attr('value','del_img_9');
         });
      </script>
   <?php
}


function F_input_image_10($value,$name,$id,$folder){
   ?>
      <div id="img-current_10<?php echo $id ?>">
         <div class="button-del_10" id="button-del_10-<?php echo $id ?>">
            <i class="fa fa-times-circle"></i>
         </div>
         <?php if($value != " "){ ?>
            <img width="138px" id="img-preview_10<?php echo $id ?>" src="<?php echo $folder.'/'.$value ?>"/>
         <?php } ?>
      </div>
      <div class="">
         <input type="file" name="<?php echo $name ?>" id="file_img_10<?php echo $id ?>" class="form-control">
         <input type="hidden" name="del_img_10" id="del_img_10_<?php echo $id ?>">
      </div>
      <script>
         function readURL<?php echo $id ?>(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                  $('#img-preview_10<?php echo $id ?>').attr('src', e.target.result);
               }
               reader.readAsDataURL(input.files[0]);
            }
         }
         var meta_val = '<?php echo $value ?>';
         if(meta_val == ''){
            $('#img-current_10<?php echo $id ?>').css('display','none');
            $('#button-del_10-<?php echo $id ?>').css('display','none');
         }
         $("#file_img_10<?php echo $id ?>").change(function() {
            readURL<?php echo $id ?>(this);
            $('#button-del_10-<?php echo $id ?>').css('display','block');
            $('#img-current_10<?php echo $id ?>').css('display','unset');
         });
         // js xoa anh va chen value on vao input delimg
         $("#button-del_10-<?php echo $id ?>").click(function(){
            // anh div hinh anh
            $('#img-current_10<?php echo $id ?>').css('display','none');
            $('#del_img_10_<?php echo $id ?>').attr('value','del_img_10');
         });
      </script>
   <?php
}
 