@extends('theme')

@section('content')

<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
         
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    @if(Auth::user()->role=="admin")
                    <h6>Modifier Utilisateur</h6>
                    @else
                    <h6>Modifier Solde Utilisateur</h6>

                    @endif
                </div>
                <div class="ms-panel-body">
                    @if(Auth::user()->role=="admin")
                    <form class="needs-validation" method="post" action="/update-user/{{$user->id}}">
                        @csrf
                       

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom220">Nom </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nom" value="{{ $user->nom }}" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom220">Prenom </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="prenom" value="{{ $user->nom }}" required>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom2">Email</label>
                                <div class="input-group">
                                    <input type="tel" class="form-control"  name="email"   value="{{ $user->email }}" required>

                                </div>
                            </div>
                            @if($user->role=="Simple User")
                            <div class="col-md-6 mb-2">
                                <label for="validationCustom003">Solde</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"  name="solde" value="{{ $user->solde }}"required>

                                </div>
                            </div>
                            @endif
                        </div>
                       
                        <button class="btn btn-warning mt-4 d-inline w-20" type="reset">Reset</button>
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Enregistrer les modifications</button>
                    </form>
                    @else
                    <form class="needs-validation" method="post" action="/update-user/{{$user->id}}">
                        @csrf
                       

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom220">Nom </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nom" value="{{ $user->nom }}" required readonly>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom220">Prenom </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="prenom" value="{{ $user->nom }}" required readonly>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom2">Email</label>
                                <div class="input-group">
                                    <input type="tel" class="form-control"  name="email"   value="{{ $user->email }}" required readonly>

                                </div>
                            </div>
                            @if($user->role=="Simple User")
                            <div class="col-md-6 mb-2">
                                <label for="validationCustom003">Solde</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"  name="solde" value="{{ $user->solde }}"required>

                                </div>
                            </div>
                            @endif
                        </div>
                       
                        <button class="btn btn-warning mt-4 d-inline w-20" type="reset">Reset</button>
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Enregistrer les modifications</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
