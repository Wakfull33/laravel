@extends('front/default')
@section('content')
    <div class="container">
        @foreach($users as $user)
        <p>{{ $user->prenom }} {{ $user->nom }}
            <a shref="{{ route("users.edit", $user) }}" class="btn btn-primary">Modifier</a>
            {!! BootForm::open()->action(route("users.destroy", $user))->style("display:inline") !!}
            {!! BootForm::hidden("_method")->value("delete") !!}
            <input type="submit" value="Supprimer" class="btn btn-danger"/>
            {!! BootForm::close() !!}
        </p>
        @endforeach
    </div>
@endsection