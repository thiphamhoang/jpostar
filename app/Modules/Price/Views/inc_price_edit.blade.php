 <div class="modal fade" id="call_edit_{{$val -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
               <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title" id="exampleModalCenterTitle">Sửa bảng giá</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                     <form action="{{asset('admin/price/'.$price_id.'/list/edit/'.$val->id)}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div>
                           <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="font-weight-bold"> Tiêu đề </label>
                                    <input type="text" name="title" class="form-control" value="{{$val->title}}" required>
                                </div>
                                <div class="col-md-6">
                                    <label> Tiêu đề 2 </label>
                                    <input type="text" name="title_2" class="form-control" value="{{$val->title_2}}">
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-md-4">
                                    <label class="font-weight-bold">Giá bán</label>
                                    <input type="text" name="price" class="form-control"  value="{{$val->price}}">
                                </div>
                                <div class="col-md-4">
                                    <label>Giá giảm </label>
                                    <input type="text" name="price_km" class="form-control"  value="{{$val->price_km}}">
                                </div>
                                <div class="col-md-4">
                                    <label>Phần trăm giảm</label>
                                    <input type="text" name="price_percent" class="form-control" value="{{$val->price_percent}}">
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-md-4">
                                    <label class="font-weight-bold">Đơn vị</label>
                                    <input type="text" name="unit" class="form-control" value="{{$val->unit}}">
                                </div>
                                <div class="col-md-4">
                                    <label>Mô tả 1 </label>
                                    <input type="text" name="des" class="form-control" value="{{$val->des}}">
                                </div>
                                <div class="col-md-4">
                                    <label>Mô tả 2</label>
                                    <input type="text" name="des_2" class="form-control" value="{{$val->des_2}}">
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-md-8">
                                    <label class="font-weight-bold">Link</label>
                                    <input type="text" name="link" class="form-control" value="{{$val->link}}">
                                </div>
                                <div class="col-md-4">
                                    <label>Nút bấm</label>
                                    <input type="text" name="button" class="form-control" value="{{$val->button}}">
                                </div>
                               
                           </div>
                           <div class="form-group row">
                                <div class="col-md-12">
                                       
                                    <div>
                                        <hr>
                                            <label class="font-weight-bold">Nhiều text</label>
                                            @if($val->service != '' or $val->service != null)
                                                @php $t=0; @endphp
                                                
                                                @if(json_decode($val->service))
                                                    @foreach(json_decode($val->service) as $key_it => $it)
                                                        @php $t++; @endphp
                                                        <div class="row service service_{{$t}}">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <select class="form-control" name="service[{{$t}}][status]" >
                                                                        <option value="on" @if(isset($it->status))@if($it->status == 'on') selected @endif @endif>Mở</option>
                                                                        <option value="off"  @if(isset($it->status))@if($it->status == 'off') selected @endif @endif>Đóng</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                    <div class="input-group-prepend">
                                                                        <input type="text" class="form-control" name="service[{{$t}}][text]" value="{{$it->text}}">
                                                                        <div class="input-group-text">
                                                                            <span class="xoa_it_service_{{$val->id}}" data-row="service_{{$t}}"><i class="fa fa-trash text-danger cursor"></i> </span>  
                                                                        </div>
                                                                    </div>
                                                            </div>                        
                                                        </div>
                                                    @endforeach
                                                @endif
                                            @else
                                            <div class="row service">
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="service[1][text]" placeholder="Tên">
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <div id="service_{{$val->id}}_service">
                                            

                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <span href="#" class="btn btn-sm btn-primary cursor" id="service_{{$val->id}}">Thêm</span>
                                        </div>
                                    <script>
                                        $('#service_{{$val->id}}').click(function(e){
                                            e.preventDefault();
                                            var count = $('.service').length;
                                            var key = count + 1;
                                            $('#service_{{$val->id}}_service').append('<div class="row service service_'+key+'"><div class="col-md-12"><div class="input-group-prepend"><input type="text"class="form-control"name="service['+key+'][text]"placeholder="Tên"><div class="input-group-text"><span class="xoa_it_service_{{$val->id}}"data-row="service_'+key+'"><i class="fa fa-trash text-danger cursor"></i></span></div></div></div></div>');
                                        });
                                        //xoa truong vua them
                                        $('#service_{{$val->id}}_service').on('click', '.xoa_it_service_{{$val->id}}',function(e){
                                            e.preventDefault();
                                            var it = $(this).data('row');
                                            $('.'+it).remove();
                                        });
                                        //xoa truong da co
                                        $('.xoa_it_service_{{$val->id}}').click(function(){
                                            var it = $(this).data('row');
                                            $('.'+it).remove();
                                        });
                                    </script>
                                </div> 
                            </div>


                           <!-- ảnh price  -->
                           <div class="form-group">
                                {{F_input_image($val -> img,'img',$val -> id,asset('/source/price/'))}}
                            </div>    
                           
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Đóng</button>
                           <button type="submit" class="btn btn-sm btn-primary">Sửa</button>
                        </div>
                     </form>
                  </div> <!-- dong the modal -body -->
               </div>
            </div>
         </div>