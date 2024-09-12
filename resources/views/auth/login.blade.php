@extends('front.theme')

@section('content')
<head>
    <!-- Inclure Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
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

    .password-container {
        position: relative;
    }

    .password-container input[type="password"],
    .password-container input[type="text"] {
        width: 100%;
        padding-right: 30px;
    }

    .password-container .toggle-password {
        position: absolute;
        right: 20px; /* Déplacer l'icône 10px vers la gauche */
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Connexion</div> <!-- Modifier le titre -->
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Adresse Email</label> <!-- Modifier le libellé -->
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Mot de passe</label> <!-- Modifier le libellé -->
                            <div class="col-md-6 password-container">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="toggle-password" onclick="togglePasswordVisibility()">
                                    <i class="fas fa-eye"></i>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Se souvenir de moi</label> <!-- Modifier le libellé -->
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Connexion</button> <!-- Modifier le texte du bouton -->
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">Mot de passe oublié ?</a> <!-- Modifier le texte du lien -->
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        const passwordField = document.getElementById('password');
        const togglePassword = document.querySelector('.toggle-password i');
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        togglePassword.classList.toggle('fa-eye');
        togglePassword.classList.toggle('fa-eye-slash');
    }
</script>
@endsection
