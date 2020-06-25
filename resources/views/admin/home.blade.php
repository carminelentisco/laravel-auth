@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
           <h1 class="display-4">Benvenuto nell tua Dashboard </h1>
           <p class="lead">Accesso effettuato con successo</p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Visita i tuoi post</h1>
                <p class="lead">In questa sezione troverai tutti i tuoi post</p>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg" href="{{ route('admin.posts.index') }}" role="button">Vai!</a>
            </div>
        </div>
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Aggiungi un post</h1>
                <p class="lead">Crea qui i tuoi post</p>
                <hr class="my-4">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary btn-lg" href="{{ route('admin.posts.create') }}" role="button">Crea</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
