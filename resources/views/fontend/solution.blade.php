@extends('fontend.index')
@section('content')

<div class="page-head">
    <div class="text-center">
        <img src="{{asset('upload/theme/bg-gp.png')}}"  class="w-100">
        <h3 class="page-title">{{$theme->title_seo}}</h3>
    </div>
</div>

<div class="my-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="my-3">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">


                        @foreach($row_body as $keyt => $item)
                            <li class="nav-item">
                                <a class="nav-link @if($keyt == 0) active @endif" id="pills-{{$item->style}}-tab" data-toggle="pill" href="#pills-{{$item->style}}" role="tab" aria-controls="pills-{{$item->style}}" aria-selected="true">{{$item->name}}</a>
                            </li>
                        @endforeach

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        @foreach($row_body as $keyc => $row)
                            <div class="tab-pane fade @if($keyc == 0) show active @endif" id="pills-{{$row->style}}" role="tabpanel" aria-labelledby="pills-{{$row->style}}-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <h3>{{$row->title}}</h3>
                                        </div>
                                        <div class="text-center">
                                           {{$row->des}}
                                        </div>
                                    </div>
                                    <hr class="line">
                                </div>

                                @include('fontend/solution/'.$row->style)


                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection('content')
