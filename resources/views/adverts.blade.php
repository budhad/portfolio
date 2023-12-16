@extends('layouts.app')

@section('title', 'Объявления')

@section('content')
  <h1 class="my-3 text-center">Объявления</h1>
  @if (count($adverts) > 0)
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Товар</th>
          <th>Цена, руб.</th>
          <th>&nbsp;</th>
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
              <a href="{{ route('advert', ['advert' => $advert->id]) }}">Подробнее...</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
@endsection