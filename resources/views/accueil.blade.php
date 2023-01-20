@extends('template')

@section('contenu')

<div class="container-fluid">
    @include('accueil/bandeau_dossier')
    @include('accueil/next_match')
    @include('accueil/annonce_special')
    @include('accueil/classement_result')
    @include('accueil/principaux_partenaires')
</div>

@endsection
