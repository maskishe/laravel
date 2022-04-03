@extends('layouts.main')
@section('header')
<div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">{{ $news['title'] }}</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>

    </div>
  </div>
@endsection
@section('content')
<div class="news">
        <! HW 3. Blade ToDo test commit>
        <h3>{{ $news['title'] }}</h3>
        <img src="{{ $news['image'] }}">
        <br>
        <p>Статус:  <em>{{ $news['status'] }}</em></p>
        <p>Автор:   <em>{{ $news['author'] }}</em></p>
        <p>{!! $news['description'] !!}</p>
</div>
@endsection

