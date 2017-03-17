@extends('front/default')
@section('content')
    <div class="container">
        {{ $user->prenom }} {{ $user->nom }}
    </div>
@endsection