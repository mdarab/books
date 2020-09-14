@extends('layouts.app')

@section('title', __('همۀ کتاب‌های بنیاد سعدی'))

@section('content')
    <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">
                {{ __('صفحۀ اصلی') }}
              </a></li>
              <li class="breadcrumb-item active" aria-current="page">
                {{ __('کتاب‌ها') }}
              </li>
            </ol>
          </nav>
        </div>
    </div>
    <div class="row mb-4 text-center d-flex justify-content-center">
        <div class="col-12">
          <div class="description font-weight-light">
            <p>
                بنیاد سعدی با هدف آموزش زبان فارسی به غیرفارسی‌زبانان تأسیس شده است و تاکنون در این زمینه
                <span class="badge">{{ $books->count() }}</span>
                کتاب تالیف کرده است.
            </p>
          </div>
        </div>
        @foreach ($books as $book)
            <div class="col-6 col-md-3 mb-2">
            <a href="{{ route('books.show', $book) }}">
                <div class="card book-card">
                    <img src="{{ $book->cover !== NULL ? Storage::url($book->cover) : asset('img/cover.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">
                            {{ $book->title }}
                            @foreach ($book->levels as $level)
                                <span class="badge badge-primary">
                                    {{ $level->title }}
                                </span>
                            @endforeach
                        </p>
                    </div>
                </div>
            </a>
            </div>
        @endforeach
    </div>
@endsection