@extends('template')

@section('contenu')

<div class="container-fluid">
    @include('club/bandeau')
    @include('club/histoire')
    @include('club/teams')
    @include('club/arbitrage')
    @include('club/bureau')
</div>

@endsection

