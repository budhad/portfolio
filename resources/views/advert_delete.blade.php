@extends('layouts.app')
@section('title', 'Удалить advert->title')
@section('content')

<form action="{{ route('advert.destroy', ['ad' => $advert->id]) }}" method="POST">
  @csrf
  @method('DELETE')
  <input type="submit" class="btn btn-danger" value="Удалить">
</form>

@endsection