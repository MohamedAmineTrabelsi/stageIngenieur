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
                                    <th>Nom Prénom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    
                                    <th> solde </th>
                                    
                                    <th> Modifier Solde </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->prenom }}</td>
                                        <td>{{ $user->email }}</td>
                                        
                                 
                                        @if($user->solde <> 0)
                                        <td style="background-color: green;color:white" >  {{$user->solde}}  TND</td>
                                        @else
                                        <td style="background-color: red;color:white" >  Solde insuffisant</td>

                                        
                                        @endif
                                        <td>
                                            <a href="/modifier-user/{{$user->id}}"><i class="fas fa-pencil-alt ms-text-primary"></i></a> 
                                          
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