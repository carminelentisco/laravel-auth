@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Benvenuto nel mio Blog</h1>
        <p class="lead">Benvenuto nel mio blog costrutio interamente da zero utilizzando un framework PHP chiamato Laravel</p>
        <hr class="my-4">
        <p>Nel menù in alto troverai tutte le azioni che potrai compiere, se vuoi scrivere un post ricoda di iscriverti</p>
        <a class="btn btn-primary btn-lg" href="{{ route('posts.index') }}" role="button">Guarda Tutti i Post</a>
    </div>

    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Vuoi iscriverti?</h1>
                <p class="lead">Iscriviti per accedere al blog</p>
                <hr class="my-4">
                <p>Clicca il pulsante qui sotto per iscriverti al blog</p>
                <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Iscriviti !</a>
            </div>
        </div>
    
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Accedi ora</h1>
                <p class="lead">Per scrivere un post effettua l'accesso</p>
                <hr class="my-4">
                <p>Per accedere clicca il pulsante qui sotto</p>
                <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Accedi ora !</a>
            </div>
        </div>
      </div>
    
</div>
@endsection
