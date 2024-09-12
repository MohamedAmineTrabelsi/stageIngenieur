<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>1WayDev</title>
  <!-- Iconic Fonts -->
  <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Bootstrap JS -->

<!-- DataTables CSS -->
<link href="/assets/css/datatables.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js" defer></script>


  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/assets/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="/assets/vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="/assets/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="/assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="/assets/css/slick.css" rel="stylesheet">
  <!-- medjestic styles -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- Page Specific CSS (Morris Charts.css) -->
  <link href="/assets/css/morris.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>
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

@if(session('error'))
<div id="alert-message" class="hidden">
    <script>
        $(document).ready(function() {
            toastr.options = {
                "positionClass": "toast-top-center",
                "progressBar": true,
                "timeOut": 4000
            };
            toastr.error('{{ session('error') }}');
        });
    </script>
</div>
@endif
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
  <!-- Setting Panel -->
  
  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index-2.html"> <img src="/assets/img/1waydev_logo.png" alt="logo"> </a>
      <a href="#" class="text-center ms-logo-img-link"> <img src="/assets/avatar.png" alt="logo"></a>
      <h5 class="text-center text-white mt-2">{{Auth::user()->name}} <h5>
      
      <h6 class="text-center text-white mb-3">  {{Auth::user()->role}}</h6>
      
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
              <span><i class="material-icons fs-16">dashboard</i>Dashboard</span>
          </a>
          <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
              <li> <a href="{{ route('dashboard.statistiques') }}">Consulter dashboard</a> </li>
          </ul>
      </li>
      <!-- /Dashboard -->
      <!-- Doctor -->
     
      <!-- Doctor -->
      <!-- Patient -->
    
     
   

@if(Auth::user()->role=="admin")
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#assurés" aria-expanded="false" aria-controls="assurés">
          <span> <i class="fas fa-users"></i>Utilisateurs</span>
        </a>
        <ul id="assurés" class="collapse" aria-labelledby="assurés" data-parent="#side-nav-accordion" >
            <a href="#mymodal"  data-toggle="modal"style="color: black"> Ajouter un Utilisateur</a>
            <li> <a href="/listeUsers">liste des Utilisateurs</a> </li>
        </ul>
      </li>
    
      <li class="menu-item">
       <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dossier" aria-expanded="false" aria-controls="dossier">
    <span><i class="fas fa-file-alt"></i> Gérer Dossier</span>
</a>

        <ul id="dossier" class="collapse" aria-labelledby="dossier" data-parent="#side-nav-accordion" >
          <a href="#mymodal2"  data-toggle="modal"style="color: black"> Ajouter un Dossier</a>

            <li class="menu-item"> <a href="/dossier"> Liste des Dossiers </a>
            
            </ul>
            
      </li>    

      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#contact" aria-expanded="false" aria-controls="contact">
          <span><i class="fas fa-envelope"></i>Contact ({{$count}})</span>
        </a>
        <ul id="contact" class="collapse" aria-labelledby="contact" data-parent="#side-nav-accordion" >
            <li class="menu-item"> <a href="/contacts">Mes contacts ({{$count}})</a>
            </ul>
      </li> 
     @elseif(Auth::user()->role=="Simple User")
    <li class="menu-item">
      <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dossier" aria-expanded="false" aria-controls="dossier">
        <span><i class="fas fa-stethoscope"></i>Gérer Dossier</span>
      </a>
      <ul id="dossier" class="collapse" aria-labelledby="dossier" data-parent="#side-nav-accordion" >
        <a href="#mymodal2"  data-toggle="modal"style="color: black"> Ajouter un Dossier</a>

          <li class="menu-item"> <a href="/mes-dossier"> Mes Dossiers </a>
          
          </ul>
          
    </li>    

    @elseif(Auth::user()->role=="Responsable assurance")
    <li class="menu-item">
      <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dossier" aria-expanded="false" aria-controls="dossier">
        <span><i class="fas fa-stethoscope"></i>Gérer Dossier</span>
      </a>
      <ul id="dossier" class="collapse" aria-labelledby="dossier" data-parent="#side-nav-accordion" >
        

          <li class="menu-item"> <a href="/dossier"> Liste des Dossiers </a>
          
          </ul>
          
    </li> 

    <li class="menu-item">
      <a href="#" class="has-chevron" data-toggle="collapse" data-target="#users" aria-expanded="false" aria-controls="users">
        <span><i class="fas fa-stethoscope"></i>Gérer Solde Utilisateurs</span>
      </a>
      <ul id="users" class="collapse" aria-labelledby="users" data-parent="#side-nav-accordion" >
        

        <li> <a href="/listeUsersrespo">liste des Utilisateurs</a> </li>
          
          </ul>
          
    </li>
    
    
 
    @endif
    </ul>
  </aside>
  <!-- Sidebar Right -->
  <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
    <div class="ms-aside-header">
      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
        <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a></li>
        <li role="presentation" class="fs-12"><a href="#recentPosts" aria-controls="recentPosts" role="tab" data-toggle="tab"> Settings </a></li>
        <li><button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
      </ul>
    </div>
    <div class="ms-aside-body">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
          <ul class="ms-activity-log">
            <li>
              <div class="ms-btn-icon btn-pill icon btn-light">
                <i class="flaticon-gear"></i>
              </div>
              <h6>Update 1.0.0 Pushed</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-success">
                <i class="flaticon-tick-inside-circle"></i>
              </div>
              <h6>Profile Updated</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-warning">
                <i class="flaticon-alert-1"></i>
              </div>
              <h6>Your payment is due</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-danger">
                <i class="flaticon-alert"></i>
              </div>
              <h6>Database Error</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-info">
                <i class="flaticon-information"></i>
              </div>
              <h6>Checkout what's Trending</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-secondary">
                <i class="flaticon-diamond"></i>
              </div>
              <h6>Your Dashboard is ready</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
          </ul>
          <a href="#" class="btn btn-primary d-block"> View All </a>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="recentPosts">
          <h6>General Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Location Tracking</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Notifications</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Popups</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Log Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Advanced Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!-- Main Content -->
  <main class="body-content">
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">
      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
      </div>
      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index-2.html"><img src="/assets/img/1waydev_logo.png" alt="logo"> </a>
      </div>
      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

      

   <!--    <li class="ms-nav-item dropdown">
          <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6>
              <span class="badge badge-pill badge-info">4 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>12 ways to improve your crypto dashboard</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>You have newly registered users</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>Your account was logged in from an unauthorized IP</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>An application form has been submitted</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center">
              <a href="#">View all Notifications</a>
            </li>
          </ul>
        </li>-->
        
        <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="/assets/avatar.png" alt="people"> </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            
            <li class="dropdown-divider"></li>
            <li class="ms-dropdown-list">
              <a class="media fs-14 p-2" href="/profile"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
             
            </li>
            <li class="dropdown-divider"></li>
          
            <li class="dropdown-menu-footer">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 <span><i class="flaticon-shut-down mr-2"></i> Logout</span>
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
    
            </li>
          </ul>
        </li>
      </ul>
      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
      </div>
    </nav>
    <!-- Body Content Wrapper -->
  @yield('content')
  </main>
  <!-- MODALS -->
  <!-- Reminder Modal -->



  <!-- Modal -->
  <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ms-modal-dialog-width">
      <div class="modal-content ms-modal-content-width">
        <div class="modal-header ms-modal-header-radius-0">
          <h4 class="modal-title text-white">Ajouter un Utilisateur</h4>
          <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">x</button>
        </div>
        <div class="modal-body p-0 text-left">
          <div class="col-xl-12 col-md-12">
            <div class="ms-panel ms-panel-bshadow-none">
              <div class="ms-panel-header">
                <h6>Ajouter un Utilisateur</h6>
              </div>
              <div class="ms-panel-body">
                <form class="form" action="ajouterUser" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                  </div>
                  <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="role">Rôle</label>
                    <select class="form-control" id="role" name="role" required>
                      <option value="Simple User">Simple User</option>
                      <option value="Responsable assurance" selected>Responsable assurance</option>
                    </select>
                  </div>
                  <div class="form-group" id="solde-field" style="display:none;">
                    <label for="solde">Solde ( TND )</label>
                    <input type="text" class="form-control" id="solde" name="solde">
                  </div>
                  <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="mymodal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ms-modal-dialog-width">
      <div class="modal-content ms-modal-content-width">
        <div class="modal-header ms-modal-header-radius-0">
          <h4 class="modal-title text-white">Ajouter un Dossier</h4>
          <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">x</button>
        </div>
        <div class="modal-body p-0 text-left">
          <div class="col-xl-12 col-md-12">
            <div class="ms-panel ms-panel-bshadow-none">
              <div class="ms-panel-header">
                <h6>Ajouter un Dossier</h6>
              </div>
              <div class="ms-panel-body">
                <form class="form" action="ajouterDossier" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    @if(Auth::user()->role=="admin")

                    <label for="titre">Utilisateur</label>
              <select name="user_id" class="form-control" > 
                @foreach($simpleuser as $simpleuser)
              <option value="{{$simpleuser->id}}"> {{$simpleuser->nom}} {{$simpleuser->prenom}} </option>
                
              @endforeach
              @else
              <input type="hidden" class="form-control" value="{{Auth::user()->id}}" name="user_id">
                @endif
              </selec>
              </select>
              <form action="/votre-route" method="post" enctype="multipart/form-data">
                @csrf <!-- Laravel CSRF protection -->
            
                <!-- Affichage des erreurs générales -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" value="{{ old('titre') }}" required minlength="3" maxlength="100" placeholder="Entrez le titre">
                    @error('titre')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}" required minlength="10" maxlength="500" placeholder="Entrez la description">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="montant">Montant (TND)</label>
                    <input type="number" class="form-control @error('montant') is-invalid @enderror" id="montant" name="montant" value="{{ old('montant') }}" required min="0" step="0.01" placeholder="Entrez le montant">
                    @error('montant')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="document">Document</label>
                    <input type="file" class="form-control @error('document') is-invalid @enderror" id="document" name="document" required>
                    @error('document')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
            
              </div>
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


  <!-- Modal -->


  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  
<script>
  document.getElementById('role').addEventListener('change', function () {
    var soldeField = document.getElementById('solde-field');
    if (this.value === 'Simple User') {
      soldeField.style.display = 'block';
    } else {
      soldeField.style.display = 'none';
    }
  });
  </script>
  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <script src="/assets/js/popper.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/perfect-scrollbar.js"> </script>
  <script src="/assets/js/jquery-ui.min.js"> </script>

  <!-- Global Required Scripts End -->
  <script src="/assets/js/d3.v3.min.js"> </script>
  <script src="/assets/js/topojson.v1.min.js"> </script>
  <script src="/assets/js/datamaps.all.min.js"> </script>


  <!-- Page Specific Scripts Start -->
  <script src="/assets/js/slick.min.js"> </script>
  <script src="/assets/js/moment.js"> </script>
  <script src="/assets/js/jquery.webticker.min.js"> </script>
  <script src="/assets/js/Chart.bundle.min.js"> </script>
  <script src="/assets/js/index-chart.js"> </script>

  <!-- Page Specific Scripts Finish -->
  <script src="/assets/js/calendar.js"></script>
  <!-- medjestic core JavaScript -->
  <script src="/assets/js/framework.js"></script>
  <!-- Settings -->
  <script src="/assets/js/settings.js"></script>

</table>

<script>
     $(document).ready(function() {
            $('#exemple').DataTable();
            $('#exemple2').DataTable();
            $('#exemple3').DataTable();
            $('#exemple4').DataTable();


    });
</script>
</script>

</body>



</html>
