@extends('layouts.main')
@section('header')
<div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Список новостей</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>

    </div>
  </div>
@endsection
@section('content')
    @forelse ($newsList as $news)
    <div class="col">
        <div class="card shadow-sm">
            <img src="{{ $news['image'] }}">
            <div class="card-body">
                <strong>
                    <a href=" {{ route('news.show', ['id' => $news['id']]) }}">
                    {{ $news['title'] }}
                    </a>
                </strong>
                <p class="card-text">
                    {!! $news['description'] !!}
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">

                        <a href=" {{ route('news.show', ['id' => $news['id']]) }}" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                    </div>
                        <small class="text-muted">Статус:   <em>{{ $news['author'] }}</em></small>
                        <small class="text-muted">Автор:   <em>{{ $news['status'] }}</em></small>
                </div>
            </div>
        </div>
    </div>
    @empty
        <h2>Новостей нет</h2>
    @endforelse
@endsection

{{--
@forelse($newsList as $news)
    <div class="news">
        <h3>
            <a href=" {{ route('news.show', ['id' => $news['id']]) }}">
                {{ $news['title'] }}
            </a>
        </h3>
        <img src="{{ $news['image'] }}">
        <br>
        <p>Статус:  <em>{{ $news['status'] }}</em></p>
        <p>Автор:   <em>{{ $news['author'] }}</em></p>
        <p>{!! $news['description'] !!}</p>
    </div>
    <hr>
@empty
    <h2>Новостей нет</h2>
@endforelse

@if (empty($newsList))
    <h2>Новостей нет</h2>
@else
@foreach($newsList as $news)
    <div class="news">
        <h3>
            <a href=" {{ route('news.show', ['id' => $news['id']]) }}">
                {{ $news['title'] }}
            </a>
        </h3>
        <img src="{{ $news['image'] }}">
        <br>
        <p>Статус:  <em>{{ $news['status'] }}</em></p>
        <p>Автор:   <em>{{ $news['author'] }}</em></p>
        <p>{!! $news['description'] !!}</p>
    </div>
    <hr>
@endforeach
@endif
--}}
