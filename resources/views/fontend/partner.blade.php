@extends('fontend.index')
@section('content')

<div class="page-head">
    <div class="text-center">
        <div class="page-title-mod">
            <h2 class="page-title">{{$theme->title_seo}}</h2>
            <img src="{{asset('upload/theme/bg-p.png')}}" class="w-100">
        </div>

    </div>
</div>

<div class="my-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="my-3">
                        <div class="row">
                            @foreach($row_body as $keyt => $item)
                                <div class="col-md-3">
                                    <div class="par-title">
                                        {{$item->name}}
                                    </div>
                                    <div class="par-content mt-4">
                                         <?php echo html_entity_decode($item->content) ?>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection('content')
