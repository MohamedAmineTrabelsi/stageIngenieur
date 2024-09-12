@extends('theme')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')

<style>

.move-alert {
    animation: moveAlert 0.5s infinite alternate;
  }

  @keyframes moveAlert {
    from { transform: translateY(0); }
    to { transform: translateY(-10px); }
  }
    </style>

<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item active" aria-current="page">Liste des Messages</li>
                </ol>
            </nav>
            <div class="ms-panel">
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="exemple" class="table table-striped thead-primary w-100">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->nom }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->tel }}</td>
                                        <td>{{ substr($contact->message, 0, 5) }}.... </td>
                                        <td>
                                            <div> 
                                        <a href="/deletecontact/{{$contact->id}}"><i class="far fa-trash-alt ms-text-danger"></i></a>
</div> 
                                             @if($contact->read=="0")
                                           <div style="margin-left:35px !important">  <a href="/detailscontact/{{$contact->id}}">   <button type="button" class="btn btn-warning move-alert" style="margin-top: 1px;     margin-right: 10px; background-color:#fda600
                                                ">nouveau Message</button>  </a>
                                                </div>

                                             @else
                                             <div style="margin-top:10%">
                                             <a href="/detailscontact/{{$contact->id}}">   <i class="fa fa-eye"></i>  </a>
</div>
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
</div>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
<script>
    var botmanWidget = {
        aboutText: 'Start the conversation with Hi',
        introMessage: ""
    };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
@endsection
