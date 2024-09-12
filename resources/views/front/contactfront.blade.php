@extends('front.theme')

@section('content')
<style>
    ::placeholder {
      color: black !important; 
    }
    input {
    color: black !important; 
  }  textarea {
    color: black !important; 
  }
  .rs-contact-form-area__box {
       
        border: 1px solid #ced4da; /* Bordure de la carte */
        border-radius: 10px; /* Arrondi des coins de la carte */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre de la carte */
        padding: 20px; /* Espacement interne de la carte */
    }
    
    
    </style>

<div class="container">
    <section class="rs-contact-form-area pt-120 pb-120 loaded">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-5">
                    <div class="rs-contact-form-area__box"  style="background:#f8f9fa">
                    <h3 class="title" style="color: #3490dc;" >Contacter nous</h3>
                        <form id="" action="/addcontact" method="post">
                            @csrf
                            <div class="input-box mt-30">
                                <input id="name" name="nom" type="text" style="background-color: white" placeholder="Votre Nom" required="">
                            </div>
                            <div class="input-box mt-30">
                                <input id="email" name="email" type="email"   style="background-color: white" placeholder=" Votre E-mail " required="">
                            </div>
                            <div class="input-box mt-30">
                                <input  name="tel" type="text"   style="background-color: white" placeholder="Votre numero Tel" required="">
                            </div>
                            <div class="input-box mt-30">
                                <textarea name="message"   style="background-color: white" placeholder="Ecrire votre Message..."></textarea>
                            </div>
                            <div class="input-box mt-20">
    <button class="main-btn" style="background-color: #3490dc; border-color: #3490dc;" type="submit">Envoyer</button>
</div>

                        </form>
                        <p id="form-messages" class="form-message mt-15"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
