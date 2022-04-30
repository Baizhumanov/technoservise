@extends('view')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert alert-secondary" role="alert">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <h2>Добавление</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Добавление автора</div>
                        <form action="{{ url('author') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="fullname" class="form-label">ФИО</label>
                                <input type="text" class="form-control" id="fullname" name="fullname">
                            </div>
                            <div class="mb-3">
                                <label for="birthdate" class="form-label">Дата рождения</label>
                                <input type="date" class="form-control" id="birthdate" max="3000-12-31" min="1000-01-01" name="birthdate">
                            </div>
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Аватар</label>
                                <input type="file" class="form-control" id="avatar" name="avatar">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Добавление раздела</div>
                        <form action="{{ url('section') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="section-name" class="form-label">Название раздела</label>
                                <input type="text" class="form-control" id="section-name" name="section-name">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Добавление новости</div>
                        <form action="{{ url('news') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Заголовок</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Контент</label>
                                <textarea class="form-control" id="content" name="content" row="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="preview-image" class="form-label">Изображение</label>
                                <input type="file" class="form-control" id="preview-image" name="preview-image">
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Автор</label>
                                <select name="author" id="author" class="form-select">
                                    @foreach($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->fullname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="section" class="form-label">Раздел</label>
                                <select name="section" id="section" class="form-select">
                                    @foreach($sections as $section)
                                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
@endsection
