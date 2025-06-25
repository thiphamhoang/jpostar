  
  <div>
        <label class="font-weight-bold">Chỉ số và tên 2</label>
        @if($row->icon_text_2 != '' or $row->icon_text_2 != null)
            @php $t2=0; @endphp
            
            @if(json_decode($row->icon_text_2))
                @foreach(json_decode($row->icon_text_2) as $key_it => $it)
                    @php $t2++; @endphp
                    <div class="row icon_text_2 icon_text_2_{{$t2}}">
                        <div class="col-md-4">
                                <div class="input-group mb-2">
                                   
                                    <input type="text" class="form-control" name="icon_text_2[{{$t2}}][icon]" value="<?php echo htmlentities($it->icon) ?>">
                                </div>
                        </div>
                        <div class="col-md-8 no-padding">
                                <div class="input-group-prepend">
                                    <input type="text" class="form-control" name="icon_text_2[{{$t2}}][text]" value="{{$it->text}}">
                                    <div class="input-group-text">
                                        <span class="xoa_it_icon_2" data-row="icon_text_2_{{$t2}}"><i class="fa fa-trash text-danger cursor"></i> </span>  
                                    </div>
                                </div>
                        </div>                        
                    </div>
                @endforeach
            @endif
        @else
        <div class="row icon_text_2">
            <div class="col-md-4">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text"></div>
                        </div>
                        <input type="text" class="form-control" name="icon_text_2[1][icon]" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <input type="text" class="form-control" name="icon_text_2[1][text]" placeholder="Tên">
                </div>
            </div>
        </div>
        @endif
        <div id="add_icon_text_2">
        

        </div>
    </div>
    <div class="text-right">
        <span href="#" class="btn btn-sm btn-primary cursor" id="add_icon_2">Thêm</span>
    </div>
<script>
    $('#add_icon_2').click(function(e){
        e.preventDefault();
        var count = $('.icon_text_2').length;
        var key = count + 1;
        $('#add_icon_text_2').append('<div class="row icon_text_2 icon_text_2_'+key+'"><div class="col-md-4"><div class="input-group mb-2"><div class="input-group-prepend"><div class="input-group-text"></div></div><input type="text"class="form-control"name="icon_text_2['+key+'][icon]"placeholder=""></div></div><div class="col-md-8 no-padding"><div class="input-group-prepend"><input type="text"class="form-control"name="icon_text_2['+key+'][text]"placeholder="Tên"><div class="input-group-text"><span class="xoa_it_icon_2"data-row="icon_text_2_'+key+'"><i class="fa fa-trash text-danger cursor"></i></span></div></div></div></div>');
    });
    //xoa truong vua them
    $('#add_icon_text_2').on('click', '.xoa_it_icon_2',function(e){
        e.preventDefault();
        var it = $(this).data('row');
        $('.'+it).remove();
    });
    //xoa truong da co
    $('.xoa_it_icon_2').click(function(){
        var it = $(this).data('row');
        $('.'+it).remove();
    });
</script>