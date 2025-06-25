  
  <div>
        <label class="font-weight-bold">Ba text</label>
        @if($row->three_text != '' or $row->three_text != null)
            @php $t=0; @endphp
            
            @if(json_decode($row->three_text))
                @foreach(json_decode($row->three_text) as $key_it => $it)
                    @php $t++; @endphp
                    <div class="row three_text three_text_{{$t}}">
                        <div class="col-md-4">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="three_text[{{$t}}][text_1]" value="<?php if(isset($it->text_1)){ echo htmlentities($it->text_1); } ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="three_text[{{$t}}][text_2]" value="<?php if(isset($it->text_2)){ echo htmlentities($it->text_2); } ?>">
                            </div>
                        </div>
                        <div class="col-md-4 no-padd_three_texting">
                                <div class="input-group-prepend">
                                    <input type="text" class="form-control" name="three_text[{{$t}}][text_3]" value="<?php if(isset($it->text_3)){ echo htmlentities($it->text_3); } ?>">
                                    <div class="input-group-text">
                                        <span class="xoa_it_three_text" data-row="three_text_{{$t}}"><i class="fa fa-trash text-danger cursor"></i> </span>  
                                    </div>
                                </div>
                        </div>                        
                    </div>
                @endforeach
            @endif
        @else
        <div class="row three_text">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="three_text[1][text_1]" >
                 </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="three_text[1][text_2]">
                 </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="three_text[1][text_3]"  >
                </div>
            </div>
        </div>
        @endif
        <div id="add_three_text_three_text">
        

        </div>
    </div>
    <div class="text-right">
        <span href="#" class="btn btn-sm btn-primary cursor" id="add_three_text">Thêm</span>
    </div>
<script>
    $('#add_three_text').click(function(e){
        e.preventDefault();
        var count = $('.three_text').length;
        var key = count + 1;
        $('#add_three_text_three_text').append('<div class="row three_text three_text_'+key+'">'+
            '<div class="col-md-4">'+
                '<div class="form-group">'+
                    '<input type="text" class="form-control" name="three_text['+key+'][text_1]" >'+
                 '</div>'+
            '</div>'+
            '<div class="col-md-4">'+
                '<div class="input-group mb-2">'+
                    
                    '<input type="text"class="form-control"name="three_text['+key+'][text_2]" >'+
                '</div>'+
            '</div>'+
            '<div class="col-md-4 no-padd_three_texting"><div class="input-group-prepend"><input type="text"class="form-control"name="three_text['+key+'][text_3]" ><div class="input-group-text"><span class="xoa_it_three_text"data-row="three_text_'+key+'"><i class="fa fa-trash text-danger cursor"></i></span></div></div></div></div>');
    });
    //xoa truong vua them
    $('#add_three_text_three_text').on('click', '.xoa_it_three_text',function(e){
        e.preventDefault();
        var it = $(this).data('row');
        $('.'+it).remove();
    });
    //xoa truong da co
    $('.xoa_it_three_text').click(function(){
        var it = $(this).data('row');
        $('.'+it).remove();
    });
</script>