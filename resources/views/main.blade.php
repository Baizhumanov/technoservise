@extends('view')

@section('main')
    <div class="container">
        @foreach($sections as $section)
            <div class="row">
                <div class="col">
                    <h2>{{ $section->name }}</h2>
                </div>
            </div>
            <div class="row mb-4">
                @foreach($items as $item)
                    @if($item->section_id == $section->id)
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="card">
                                <img src="{{ Storage::url($item->preview_image) }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <div class="card-text text-wrap text-truncate" style="min-height: 100px; max-height: 100px">{{ $item->content }}</div>
                                    <a href="news/{{ $item->id }}" class="btn btn-link">Читать больше</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
