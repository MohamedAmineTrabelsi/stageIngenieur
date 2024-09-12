@extends('theme')


@section('content')


<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item active" aria-current="page">Liste des Utilisateurs</li>
                </ol>
            </nav>
            <div class="ms-panel">
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="exemple" class="table table-striped thead-primary w-100">
                            <thead>
                                <tr>
                                    <th>Assuré</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Document</th>
                                    <th>Etat</th>
                                    <th>Montant</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dossiers as $dossier)
                                    <tr data-id="{{ $dossier->id }}">
                                        <td>{{ $dossier->user->nom }}</td>
                                        <td>{{ $dossier->titre }}</td>
                                        <td>{{ $dossier->description }}</td>
                                        <td><button type="button" onclick="displayPDF()" class="btn btn-primary" style="background-color:#009688;">Voir PDF</button></td>
                                        @if($dossier->etat == "en cours")
                                            <td style="background-color:rgb(15, 196, 228); color:white;">{{ $dossier->etat }}</td>
                                        @elseif($dossier->etat == "validé")
                                            <td style="background-color:green; color:white;">{{ $dossier->etat }}</td>
                                        @elseif($dossier->etat == "refusé")
                                            <td style="background-color:red; color:white;">{{ $dossier->etat }}</td>
                                        @else
                                            <td style="background-color:rgb(68, 68, 64); color:white;">{{ $dossier->etat }}</td>
                                        @endif
                                        <td style="background-color:rgb(0, 3, 8); color:white;">{{ $dossier->montant }} DT</td>
                                        @if(Auth::user()->role == "Responsable assurance")
                                        <td style="display:flex;">
                                            <!-- Bouton Valider -->
                                            @if($dossier->etat != "validé" && $dossier->etat != "refusé")
                                                <a href="valider/{{ $dossier->id }}">
                                                    <button type="button" class="btn btn-success" style="background-color:#28a745;">Valider</button>
                                                </a>
                                            @endif
                                            <!-- Bouton Refuser -->
                                            @if($dossier->etat != "validé" && $dossier->etat != "refusé")
                                                <a href="refuser/{{ $dossier->id }}">
                                                    <button type="button" class="btn btn-danger" style="background-color:#dc3545;">Refuser</button>
                                                </a>
                                            @endif
                                            <!-- Bouton Demander plus de documents -->
                                            @if($dossier->etat != "validé" && $dossier->etat != "refusé")
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#commentModal{{ $dossier->id }}">Demander plus de documents</button>
                                            @endif
                                        </td>
                                    @else
                                        <td>
                                            <a href="/modifier-dossier/{{ $dossier->id }}"><i class="fas fa-pencil-alt ms-text-primary"></i></a>
                                            <a href="/deletedossier/{{ $dossier->id }}"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                        </td>
                                    @endif
                                    
                                    
                                    
                                    </tr>
                                    <div class="modal fade" id="commentModal{{ $dossier->id }}" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel{{ $dossier->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="commentModalLabel{{ $dossier->id }}">Demander plus de documents</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="commentForm{{ $dossier->id }}" action="/demander-documents" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="dossierId" value="{{ $dossier->id }}">
                                                        <div class="form-group">
                                                            <label for="commentaire{{ $dossier->id }}">Commentaire</label>
                                                            <textarea class="form-control" id="commentaire{{ $dossier->id }}" name="commentaire" rows="3" required></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Envoyer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
<!-- Scripts -->




@if(isset($dossier) && $dossier->piece_jointe)
    <script>
        function displayPDF() {
            var document = @json($dossier->piece_jointe);
            var pdfUrl = '/documents/' + document;
            window.open(pdfUrl, '_blank');
        }
        function goBack() {
            window.history.back();
        }
    </script>
@endif

