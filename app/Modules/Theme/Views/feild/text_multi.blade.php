  
  <div>
    <hr>
        <label class="font-weight-bold">Nhiều text</label>
        @if($row->text_multi != '' or $row->text_multi != null)
            @php $t=0; @endphp
            
            @if(json_decode($row->text_multi))
                @foreach(json_decode($row->text_multi) as $key_it => $it)
                    @php $t++; @endphp
                    <div class="row text_multi text_multi_{{$t}}">
                       
                        <div class="col-md-12  ">
                                <div class="input-group-prepend">
                                    <input type="text" class="form-control" name="text_multi[{{$t}}][text]" value="{{$it->text}}">
                                    <div class="input-group-text">
                                        <span class="xoa_it_text_multi" data-row="text_multi_{{$t}}"><i class="fa fa-trash text-danger cursor"></i> </span>  
                                    </div>
                                </div>
                        </div>                        
                    </div>
                @endforeach
            @endif
        @else
        <div class="row text_multi">
            
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="text_multi[1][text]" placeholder="Tên">
                </div>
            </div>
        </div>
        @endif
        <div id="add_text_multi_text_multi">
        

        </div>
    </div>
    <div class="text-right">
        <span href="#" class="btn btn-sm btn-primary cursor" id="add_text_multi">Thêm</span>
    </div>
<script>
    $('#add_text_multi').click(function(e){
        e.preventDefault();
        var count = $('.text_multi').length;
        var key = count + 1;
        $('#add_text_multi_text_multi').append('<div class="row text_multi text_multi_'+key+'"><div class="col-md-12"><div class="input-group-prepend"><input type="text"class="form-control"name="text_multi['+key+'][text]"placeholder="Tên"><div class="input-group-text"><span class="xoa_it_text_multi"data-row="text_multi_'+key+'"><i class="fa fa-trash text-danger cursor"></i></span></div></div></div></div>');
    });
    //xoa truong vua them
    $('#add_text_multi_text_multi').on('click', '.xoa_it_text_multi',function(e){
        e.preventDefault();
        var it = $(this).data('row');
        $('.'+it).remove();
    });
    //xoa truong da co
    $('.xoa_it_text_multi').click(function(){
        var it = $(this).data('row');
        $('.'+it).remove();
    });
</script>