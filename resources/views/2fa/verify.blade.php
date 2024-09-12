


@extends('front.theme')

@section('content')
<style>
     .card {
        background-color: #f8f9fa; /* Couleur de fond de la carte */
        border: 1px solid #ced4da; /* Bordure de la carte */
        border-radius: 10px; /* Arrondi des coins de la carte */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre de la carte */
        padding: 20px; /* Espacement interne de la carte */
    }

    .card .card-header {
        background-color: #3490dc; /* Couleur de fond du card-header */
        color: #fff; /* Couleur du texte du card-header */
        border-bottom: none; /* Supprimer la bordure inférieure du card-header */
      
    }
    .form-label {
        font-weight: bold;
    }

    .form-check-label {
        font-weight: normal;
    }

    .btn-primary {
        background-color: #3490dc;
        border-color: #3490dc;
    }

    .btn-primary:hover {
        background-color: #2779bd;
        border-color: #2779bd;
    }

    /* Ajout de styles supplémentaires pour le formulaire de connexion */
    #password-confirm {
        display: none; /* Masquer le champ de confirmation du mot de passe */
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Google Authenticator Code</div> <!-- Modifier le titre -->
                <div class="card-body">
                    <form method="POST" action="{{ route('2fa.verify') }}">
                        @csrf
                        <div>
                            <img src="/assets/img/auth2.webp" style="width: 30%;border-radius: 23%;">
                            
                            <label for="one_time_password">Code : </label>
                            <input type="text" name="one_time_password" required>
                            <button type="submit" class="btn btn-success">Verifier</button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
