@extends('template')

@section('contenu')

<div class="container-fluid">
    @include('application/intro')
    @include('application/presentation')
    @include('application/storelink')
</div>

@endsection
