@extends('layouts.admin')

@section('content')
    <div class="container d-flex flex-column align-items-center">
        <h1 class="mb-4">Il tuo post</h1>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    @if (!empty($post->path_img)) 
                        <img height="100%" class="card-img-top" src="{{ asset('/storage/' . $post->path_img) }}" alt="{{ $post->title }}">
                    @else
                        <div class="alert alert-info">
                            <h2>Non Vi sono immagini disponibili</h2>
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $post->title }}</strong></h5>
                        <p class="card-text">{{ $post->body }}</p>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-dark">Modifica</a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Elimina">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
