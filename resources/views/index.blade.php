@extends('layouts.app')
@section('title', 'Gleb Stopudov')
@section('content')
  <header>
    <h1 class="my-3 text-center">I'ts me</h1>
  </header>
  <main>
    <section>
      <h2>Чтобы мы друг друга понимали:</h2>
      <div class="questions-container">
        <div class="question">
          Первый вопрос
          <div class="request-container">
            <ul>
              <li>1 вариант</li>
              <li>2 вариант</li>
              <li>3 вариант</li>
              <li>4 вариант</li>
            </ul>
          </div>
        </div>
        <div class="question">
          Второй вопрос
          <ul>
              <li>1 вариант</li>
              <li>2 вариант</li>
              <li>3 вариант</li>
            </ul>
        </div>
        <div class="question">
          Третий вопрос
          <ul>
              <li>1 вариант</li>
              <li>2 вариант</li>
            </ul>
        </div>
      </div>
    </section>
  </main>
@endsection