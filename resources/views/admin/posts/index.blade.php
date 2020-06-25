@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-4">Archivio del blog</h1>

        @if (session('post-delete'))
            <div class="alert alert-danger">
                <p>{{ session('post-delete') }} è stato eliminato.</p>
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Creato il</th>
                    <th>Aggiornato il</th>
                    <th colspan="4"></th>
                </tr>
            </thead>
            <tbody>
                @foreach( $posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Mostra</a>
                        </td>
                        <td>
                            <a href="{{ route('admin.posts.edit', $post->id )}}" class="btn btn-primary">Modifica</a>
                        </td>
                        <td>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Elimina">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="wrap-pagination mt-5 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
