@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-4">Modifica il post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>       
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="title">Titolo</label>
                <input class="form-control" type="text" id="title" name="title" value="{{ old('title', $post->title) }}" >
            </div>

            <div class="form-group">
                <label for="body">Testo</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10">
                    {{ old('body', $post->body) }}
                </textarea>
            </div>

            <div class="form-group">
                <label for="path_img">Immagine</label>
                @isset($post->path_img)
                    <img class="mb-5 mt-5" height="200px" width="200px" src="{{ asset('/storage/' . $post->path_img) }}" alt="{{ $post->title }}">
                @endisset
                <input class="form-control" type="file" name="path_img" id="path_img" accept="image/*">
            </div>

            <input class="btn btn-success" type="submit" value="Modifica">
        </form>
    </div>
@endsection