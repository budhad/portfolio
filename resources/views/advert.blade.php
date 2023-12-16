@extends('layouts.app')
@section('title', $advert->title)
@section('content')
  <h1 class="my-3 text-center">Объявление</h1>
  @if ($advert)
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Товар</th>
          <th>Цена, руб.</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <h3>{{ $advert->title }}</h3>
          </td>
          <td>{{ $advert->price }}</td>
          <td>
          <td>{{ $advert->content }}</td>
          </td>
          <td>{{ $advert->user->name }}</td>
          </td>
        </tr>
      </tbody>
    </table>
    <a href="{{ route('adverts') }}">Go home yankees</a>
  @endif
@endsection