@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-4">Archivio del blog</h1>

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
                            <a href="" class="btn btn-primary">Modifica</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-success">Elimina</a>
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
