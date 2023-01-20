@extends('template')

@section('contenu')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            CONNEXION
        </div>
        <form class="width-form">
            <div class="form-group margin-form">
                <label for="inputEmail1">Adresse Email</label>
                <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Saisir l'email">
                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons pas vos informations.</small>
            </div>
            <div class="form-group margin-form">
                <label for="inputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword1" placeholder="Saisir le mot de passe">
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>
</div>
@endsection
