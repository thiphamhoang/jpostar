<div class="form-group">
    <label class="font-weight-bold"> Nội dung</label>
    <textarea class="form-control" id="edit_content" name="content">{{$row->content}}</textarea>
    {{ F_tinymce('edit_content')}}
 </div>