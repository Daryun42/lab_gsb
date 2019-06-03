@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Profil praticien</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Ville</th>
                                <th scope="col">Code postal</th>
                                <th scope="col">rue</th>
                                <!-- <th scope="col">Actions</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <?php $visiteur = auth()->user();?>
                        <?php $visites = $visiteur->visites;?>
                        
                        
                        
                            @foreach($praticiens as $praticien)
                            <tr>
                                <td>{{ $praticien->nom }}</td>
                                <td>{{ $praticien->prenom }}</td>
                                <td>{{ $praticien->ville }}</td>
                                <td>{{ $praticien->cpostal }}</td>
                                <td>{{ $praticien->rue }}</td>


                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
