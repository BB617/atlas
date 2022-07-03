@extends('layouts.sidebar')

@section('content')
<div class="vh-100 pt-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-5" style="border-radius:5px; background:#FFF;">
    <div class="w-75 m-auto border" style="border-radius:5px;">

      <p class="text-center">{{ $calendar->getTitle() }}</p>
      <div class="">
        {!! $calendar->render() !!}
      </div>
    </div>
    <div class="text-right w-75 m-auto">
      <input type="submit" class="btn btn-primary" value="予約する" form="reserveParts">
    </div>
  </div>
</div>
<div id="modal" class="modal">
  <div id="modal__bg" class="modal__bg"></div>
  <div class="modal__content">
    <dl>
      <dt>予約日：</dt>
      <dd id="date"></dd>
      <dt>時間：</dt>
      <dd id="part"></dd>
    </dl>
    <p>上記の予約をキャンセルしてもよろしいですか？</p>
    <div>
      <button class="btn btn-primary col-2 px-2 modal__close" style="font-size:12px">閉じる</button>
      <button id="submit" type="submit" class="btn btn-danger col-2 px-2" name="date" style="font-size:12px" value="" form="deleteParts">キャンセル</button>
    </div>
  </div>

</div>
@endsection
