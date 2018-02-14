@extends('layouts.master')

@section('title', 'Contact')

@section('content')

    <div id="contact" class="container-fluid bg-grey">
      <h2 class="text-center">CONTACT</h2>
        <div class="row">
          <div class="col-sm-5">
            <p><span class="glyphicon glyphicon-map-marker"></span> 11 Avenue Marc Sangnier, 92390 Villeneuve-la-Garenne</p>
            <p><span class="glyphicon glyphicon-phone"></span> +33 1 47 33 89 93</p>
            <p><span class="glyphicon glyphicon-envelope"></span> providems@gmail.com</p>
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2621.3872407032177!2d2.324611314580931!3d48.92706570382453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f27e2122f0f%3A0x5b3c211c22dd0dd1!2s11+Avenue+Marc+Sangnier%2C+92390+Villeneuve-la-Garenne!5e0!3m2!1sfr!2sfr!4v1516288104410" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-lg-7 col-lg-7 col-md-5 col-sm-12 col-xs-12">
            <div class="contact-form">
              <h3 class="contact-info-title">Laissez-nous un message et nous vous contacterons sous 24 heures</h3>
              <div class="row">
                <form>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label class="control-label sr-only " for="Name"></label>
                      <input id="name" type="text" placeholder="Nom" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label class="control-label sr-only " for="email"></label>
                      <input id="email" type="text" placeholder="Email" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                          <label class="control-label sr-only " for="Phone"></label>
                          <input id="phone" type="text" placeholder="numéro de téléphone" class="form-control" required>
                      </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                          <label class="control-label required sr-only" for="select"></label>
                          <select class="form-control">
                              <option value="">Objet de votre message</option>
                              <option value="">Un devis</option>
                              <option value="">Une question</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20">
                    <div class="form-group">
                        <label class="control-label sr-only" for="textarea"></label>
                        <textarea class="form-control pdt20" id="textarea" name="textarea" rows="4" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                      <button class="btn btn-primary btn-lg ">Envoyer le message</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
@endsection                


        
