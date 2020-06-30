@extends('layouts.admin')

@section('content')
    <div class="container d-flex flex-column align-items-center">
        <h1 class="mb-4">Archivio del blog</h1>

        @if (session('post-delete'))
            <div class="card text-white bg-success mb-3" style="width: 100%;">
                <div class="card-header">Elimanto !</div>
                <div class="card-body">
                  <h5 class="card-title">{{ session('post-delete') }} è stato eliminato.</h5>
                </div>
            </div>
        @endif      

        <div class="d-flex flex-wrap justify-content-around">
            @foreach( $posts as $post)
                <div class="card mb-5" style="width: 18rem;">
                    {{-- Check dell immagine --}}
                    @if (!empty($post->path_img)) 
                        <img height="200px" width="200px" class="card-img-top" src="{{ asset('/storage/' . $post->path_img) }}" alt="{{ $post->title }}">
                    @else
                        <div class="alert alert-info">
                            <h2>Non Vi sono immagini disponibili</h2>
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $post->title }}</strong></h5>
                        <p class="card-text">{{ $post->body }}</p>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-dark">Mostra</a>
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-dark">Modifica</a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Elimina">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="wrap-pagination mt-5 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
