  
  <div>
    <hr>
        <label class="font-weight-bold">Nhiều text 2</label>
        @if($row->text_multi_2 != '' or $row->text_multi_2 != null)
            @php $t=0; @endphp
            
            @if(json_decode($row->text_multi_2))
                @foreach(json_decode($row->text_multi_2) as $key_it => $it)
                    @php $t++; @endphp
                    <div class="row text_multi_2 text_multi_2_{{$t}}">
                       
                        <div class="col-md-12  ">
                                <div class="input-group-prepend">
                                    <input type="text" class="form-control" name="text_multi_2[{{$t}}][text]" value="{{$it->text}}">
                                    <div class="input-group-text">
                                        <span class="xoa_it_text_multi_2" data-row="text_multi_2_{{$t}}"><i class="fa fa-trash text-danger cursor"></i> </span>  
                                    </div>
                                </div>
                        </div>                        
                    </div>
                @endforeach
            @endif
        @else
        <div class="row text_multi_2">
            
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="text_multi_2[1][text]" placeholder="Tên">
                </div>
            </div>
        </div>
        @endif
        <div id="add_text_multi_2_text_multi_2">
        

        </div>
    </div>
    <div class="text-right">
        <span href="#" class="btn btn-sm btn-primary cursor" id="add_text_multi_2">Thêm</span>
    </div>
<script>
    $('#add_text_multi_2').click(function(e){
        e.preventDefault();
        var count = $('.text_multi_2').length;
        var key = count + 1;
        $('#add_text_multi_2_text_multi_2').append('<div class="row text_multi_2 text_multi_2_'+key+'"><div class="col-md-12"><div class="input-group-prepend"><input type="text"class="form-control"name="text_multi_2['+key+'][text]"placeholder="Tên"><div class="input-group-text"><span class="xoa_it_text_multi_2"data-row="text_multi_2_'+key+'"><i class="fa fa-trash text-danger cursor"></i></span></div></div></div></div>');
    });
    //xoa truong vua them
    $('#add_text_multi_2_text_multi_2').on('click', '.xoa_it_text_multi_2',function(e){
        e.preventDefault();
        var it = $(this).data('row');
        $('.'+it).remove();
    });
    //xoa truong da co
    $('.xoa_it_text_multi_2').click(function(){
        var it = $(this).data('row');
        $('.'+it).remove();
    });
</script>