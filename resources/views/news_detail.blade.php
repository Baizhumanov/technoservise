@extends('view')

@section('main')
    <div class="container">
        <div class="row">
            <h1>{{ $title }}</h1>
            <div class="fs-5 text-muted my-2">{{ $date }}, {{ $author }}</div>
            <img src="{{ Storage::url($image) }}" class="img-fluid" alt="...">
            <p class="my-5">
                {{ $content }}
            </p>
        </div>
    </div>
@endsection
