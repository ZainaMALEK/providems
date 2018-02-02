@extends('layouts.master')

@section('title', 'Accueil')

@section('content')

<section class="page-section clearfix">
  <div class="container">
    <div class="intro">
      <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/philipp-berndt-173197.jpg" alt="">
      <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">
          <span class="section-heading-upper">PROVIDEMS Démenagement</span>
          <span class="section-heading-lower">Description de la société</span>
        </h2>
        <p class="mb-3">Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d'attente. L'avantage de le mettre en latin est que l'opérateur sait au premier coup d'oeil que la page contenant ces lignes n'est pas valide, et surtout l'attention du client n'est pas dérangée par le contenu, il demeure concentré seulement sur l'aspect graphique.
        </p>
        <div class="intro-button mx-auto">
          <a class="btn btn-primary btn-xl" href="#">Demander un devis</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section cta">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="cta-inner text-center rounded">
          <h2 class="section-heading mb-4">
           <span class="section-heading-lower">Nos valeurs</span>
          </h2>
          <p class="mb-0"><div class="container values">
            <div class="row">
              <div class="col-sm">
                Courtoisie
              </div>
              <div class="col-sm">
                Professionnalisme
              </div>
              <div class="col-sm">
                Efficacité
              </div>
            </div>
          </div></p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
