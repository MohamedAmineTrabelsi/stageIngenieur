@extends('theme')

@section('content')

<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item active" aria-current="page">Détails du contact</li>
                </ol>
            </nav>
            <div class="ms-panel">
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Nom:</th>
                                    <td>{{ $contact->nom }}</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>{{ $contact->email }}</td>
                                </tr>
                                <tr>
                                    <th>Téléphone:</th>
                                    <td>{{ $contact->tel }}</td>
                                </tr>
                                <tr>
                                    <th>Message:</th>
                                    <td>{{ $contact->message }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
