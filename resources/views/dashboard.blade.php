@extends('theme')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

@if(session('success'))
<div id="alert-message" class="hidden">
    <script>
        $(document).ready(function() {
            toastr.options = {
                "positionClass": "toast-top-center",
                "progressBar": true,
                "timeOut": 4000
            };
            toastr.success('{{ session('success') }}');
        });
    </script>
</div>
@endif

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card border-warning shadow">
                <div class="card-header bg-warning text-white">
                    <i class="fas fa-exclamation-circle"></i> Demandes de Documents Supplémentaires
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $demandeCount }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card border-info shadow">
                <div class="card-header bg-info text-white">
                    <i class="fas fa-hourglass-half"></i> Dossiers en Cours
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $enCoursCount }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card border-success shadow">
                <div class="card-header bg-success text-white">
                    <i class="fas fa-check-circle"></i> Dossiers Validés
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $valideCount }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card border-danger shadow">
                <div class="card-header bg-danger text-white">
                    <i class="fas fa-times-circle"></i> Dossiers Refusés
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $refuseCount }}</h5>
                </div>
            </div>
        </div>


    </div>
</div>



<style>
.card {
    transition: transform 0.3s ease-in-out;
}

.card:hover {
    transform: translateY(-10px);
}

.card .card-header {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

.card .card-header i {
    margin-right: 10px;
}
</style>

@endsection
