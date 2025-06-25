
@extends('fontend.index')
@section('content')

<div class="page-head">
    <div class="text-center">
         <h3 class="page-title">{{$theme->title_seo}}</h3>
    </div>
</div>

<div class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    @foreach($row_body as $keyc => $row)
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <?php echo html_entity_decode($row->content) ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('source/theme/'.$row->img)}}" class="w-100" >
                            </div>
                            <div class="col-md-6">
                                <div>
                                    @include('backend/alert')
                                </div>
                                <div class="">
                                    <form action="{{asset('_form_/regis')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Họ tên">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="tel" placeholder="Số điện thoại">
                                        </div>
                                        <div class="form-group">
                                            <textarea type="textarea" class="form-control" name="note" placeholder="Nội dung"></textarea>
                                        </div>
                                        <div class="form-group">
                                             <button class="btn btn-primary">Gửi</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection('content')
