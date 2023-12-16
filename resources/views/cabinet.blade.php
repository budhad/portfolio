@extends('layouts.app')
@section('title', 'Кабинет')
@section('content')
<div class="row justify-content-center">
    <p class="text-right"><a href="{{ route('advert.add') }}">Добавить объявление</a></p>
    @if (count($adverts) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Товар</th>
                <th>Цена, руб.</th>
                <th colspan="2">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adverts as $advert)
            <tr>
                <td>
                    <h3>{{ $advert->title }}</h3>
                </td>
                <td>{{ $advert->price }}</td>
                <td>
                    <a href="{{ route('advert.edit', ['ad' => $advert->id]) }}">Изменить</a>
                </td>
                <td>
                    <a href="{{ route('advert.delete', ['ad' => $advert->id]) }}">Удалить</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{ __('You are logged in!') }}
            </div>
        </div>
    </div>
</div>
@endsection