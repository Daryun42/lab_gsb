@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de bord</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php 
                        $visiteur = auth()->user();
                        $nom = $visiteur->nom;
                        $prenom = $visiteur->prenom; 
                    ?>
                    
                    Bienvenue {{$prenom}} {{$nom}} !
                    <br>
                    <br>
                    @hasrole('visiteur_medicaux')
                    <a href="{{ route('visiteur.users.index')}}">
                        <button type="button" class="btn btn-primary" value="on">Gérer vos visites</button>
                    </a>
                    @endhasrole
                    @hasrole('admin')
                    <a href="{{ route('admin.users.index')}}">
                        <button type="button" class="btn btn-primary" value="on">Gérer les visiteurs medicaux</button>
                    </a>
                    <a href="{{ route('admin.visites.create')}}">
                        <button type="button" class="btn btn-success" value="on">Ajouter une visite</button>
                    </a>

                    @endhasrole
                </div>
            </div>
        </div>
    </div>
</div>
@endsection