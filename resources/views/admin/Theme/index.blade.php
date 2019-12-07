@extends('admin.theme.base')
@section('action-content')
    <div class="col-md-13">
        <h3>Thay đổi chủ đề màu sắc cho blog của bạn</h3>
        @foreach($list_theme as $item)
            <div class="col-md-6 item_theme {{( $item->is_active) != 0?'active':''}}" data-id="{{$item->id}}">
                <div class="panel {{( $item->is_active) == 0?'panel-default':'panel-primary'}}">
                        <div class="panel-heading">{{$item->theme_name_en}}</div>
                        <div class="panel-body">{{$item->theme_name_en}}</div>
                </div>
            </div>
        @endforeach
    </div>

@endsection

