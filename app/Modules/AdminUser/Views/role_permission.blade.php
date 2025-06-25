@extends('backend.index')
@section('content')
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Danh sách quyền
         <a href="{{asset('admin/user')}}" class="btn btn-light btn-sm">Quay lại</a>
      </h1>

    </section>
      @include('backend/alert')
   <!-- Main content -->
   <section class="content">
      @if($type == 'user')
         @php $column = 'user_id' @endphp
      @else
         @php $column = 'type_id' @endphp
      @endif
      <div class="box">
         <div class="box-body p-4">
            <div class="row mt-3">
               
               <script>
                function permission_domain(id)
                    {
                    let a = $('#a-' + id);
                    let status = a.attr('class');
                
                    if(status == 'on'){
                        $('#permi_' + id).attr('class', 'fa fa-toggle-off text-dark');
                        a.removeClass('on');
                        a.attr('class', 'off');
                    }else{
                        $('#permi_'+ id).attr('class', 'fa fa-toggle-on text-success');
                        a.removeClass('off');
                        a.attr('class', 'on');
                    }
                        $.get("{{asset('')}}"+"admin/user/role_domain/{{$user_type_id}}/add_group/"+id);
                    }
                </script>
            </div>
           
          
            {{-- web  --}}
            <div class="row mt-4">
               <div class="col-md-12"> <h5>Phân quyền<h5></div>
               <ul class="list-group">
                  @if($permission -> count() != 0)
                  @php $i = 0; @endphp
                     @foreach($permission as $key => $val)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                 {{$val -> title}} ({{$val->id}})
                                 <span class="ml-3 cursor">
                                    @if(isset($val -> f_role ->where($column,$user_type_id)-> first()->id))
                                       @if($val -> f_role ->where($column,$user_type_id)-> first()->id)
                                          <div id="a-{{$val->id}}" class="on" onclick="permission({{$val->id}},'{{$type}}')">
                                             <i id="permi_{{$val ->id}}" class="fa fa-toggle-on text-success"></i>
                                          </div>
                                       @endif
                                    @else
                                       <div id="a-{{$val->id}}" class="off" onclick="permission({{$val->id}},'{{$type}}')" >
                                          <i id="permi_{{$val ->id}}" class="fa fa-toggle-off text-dark"></i>
                                       </div>
                                    @endif
                                 </span>
                              
                              <script>
                                 function permission(id,type)
                                 {
                                    let a = $('#a-' + id);
                                    let status = a.attr('class');
                                    console.log(status);
                                    if(status == 'on'){
                                       $('#permi_' + id).attr('class', 'fa fa-toggle-off text-dark');
                                       a.removeClass('on');
                                       a.attr('class', 'off');
                                    }else{
                                       $('#permi_'+ id).attr('class', 'fa fa-toggle-on text-success');
                                       a.removeClass('off');
                                       a.attr('class', 'on');
                                    }
                                    $.get("{{asset('')}}"+"admin/user/role/{{$user_type_id}}/permission/add/"+id+"/"+type);
                                 }
                              </script>
                        </li>
                        @php $i++; @endphp
                        @if($i % 10 == 0 && $i != count($permission)) </ul><ul> @endif
                     @endforeach
                  @endif
                  
               </ul>
            </div>

            
         </div>
      </div>

   </section>
</div>
@endsection