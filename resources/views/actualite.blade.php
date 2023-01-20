@extends('template')

@section('contenu')

<div class="container-fluid">
    @include('actualite/bandeau')
    @include('actualite/articles')
    @include('actualite/galerie')
</div>

@endsection
