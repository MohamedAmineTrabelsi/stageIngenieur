@extends('theme')

@section('content')

<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
         
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Modifier Dossier</h6>
                </div>
                <div class="ms-panel-body">
                    <form class="needs-validation" method="post" action="/update-dossier/{{$dossier->id}}" enctype="multipart/form-data">
                        @csrf
                       

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom220">Propriétaire du Dossier
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control"  value="{{ $dossier->user->nom }} {{ $dossier->user->prenom }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom220">titre </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="titre" value="{{ $dossier->titre }}" required>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom2">description</label>
                                <div class="input-group">
                                    <input type="tel" class="form-control"  name="description"   value="{{ $dossier->description }}" required>

                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom2">Documents</label>
                                <div class="input-group">
                                   <button type="button" onclick="displayPDF()" class="btn btn-primary" style="background-color:#009688;" >Voir PDF </button>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom2">Montant</label>
                                <div class="input-group">

                                    <input type="text" class="form-control" id="document" name="montant" value="{{ $dossier->montant }}">

                                </div>
                            </div>
                          
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom2">Modifier Documents</label>
                                <div class="input-group">

                                    <input type="file" class="form-control" id="document" name="document" >

                                </div>
                            </div>

                        </div>
                       
                        <button class="btn btn-warning mt-4 d-inline w-20" type="reset">Reset</button>
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Enregistrer les modifications</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

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
