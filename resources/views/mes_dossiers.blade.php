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
                                    <th>Assuré </th>
                                    <th>titre</th>
                                    <th>description</th>
                                    <th> Document </th>
                                    <th> Etat </th>
                                    
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dossiers as $dossier)
                                    <tr>
                                        <td>{{ $dossier->user->nom }}</td>
                                        <td>{{ $dossier->titre }}</td>
                                        <td>{{ $dossier->description }}</td>
                                        <td> <button type="button" onclick="displayPDF()" class="btn btn-primary" style="background-color:#009688;" >Voir PDF </button>
                                        </td>
                                        @if($dossier->etat=="en cours")
                                       <td style="background-color: #ffa000;color:white"> {{ $dossier->etat }}  </td>
                                       @elseif($dossier->etat=="validé")
                                       <td style="background-color: green;color:white"> {{ $dossier->etat }}  </td>
                                       @elseif($dossier->etat=="refusé")
                                       <td style="background-color: red;color:white"> {{ $dossier->etat }}  </td>
                                        @else 
                                        <td style="background-color: rgb(68 68 64);color:white"> {{ $dossier->etat }}  </td>


                                       @endif
                                        <td>
                                            @if($dossier->etat<>"en cours" && $dossier->etat<>"Le Responsable Assurance demande plus de documents." )
                                            <a href="#"  style="cursor: no-drop"><i class="fas fa-pencil-alt ms-text-primary"></i></a> 
                                            <a href="#" style="cursor: no-drop"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                            @else
                                            <a href="/modifier-dossier/{{$dossier->id}}"><i class="fas fa-pencil-alt ms-text-primary"></i></a> 
                                            <a href="/deletedossier/{{ $dossier->id }}"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                             @endif
                                        </td>
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