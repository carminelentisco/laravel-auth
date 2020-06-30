@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-4">Nuovo post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>       
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Titolo</label>
                <input class="form-control" type="text" id="title" name="title" value="{{ old('title') }}" >
            </div>

            <div class="form-group">
                <label for="body">Testo</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10">
                    {{ old('body') }}
                </textarea>
            </div>

            {{-- Image --}}
            <div class="form-group">
                <label for="path_img">Immagine</label>
                <input class="form-control" type="file" name="path_img" id="path_img" accept="image/*">
            </div>

            <input class="btn btn-success" type="submit" value="Crea">
        </form>
    </div>
@endsection
