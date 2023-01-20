@extends('template')

@section('contenu')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            INSCRIPTION
        </div>
        <form class="width-form">
            <div class="form-group margin-form">
                <label for="inputName">Nom</label>
                <input type="text" class="form-control" id="inputName" placeholder="NOM">
            </div>
            <div class="form-group margin-form">
                <label for="inputName">Prénom</label>
                <input type="text" class="form-control" id="inputName" placeholder="Prénom">
            </div>
            <div class="form-group margin-form">
                <label for="inputEmail1">Adresse Email</label>
                <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Saisir l'email">
            </div>
            <div class="form-group margin-form">
                <label for="inputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword1" placeholder="Saisir le mot de passe">
            </div>
            <div class="form-group margin-form">
                <label for="inputPassword1">Confirmation du mot de passe</label>
                <input type="password" class="form-control" id="inputPassword1" placeholder="Confirmer le mot de passe">
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
</div>
@endsection
