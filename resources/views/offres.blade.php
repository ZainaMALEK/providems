@extends('layouts.master')

@section('title', 'Offres')

@section('content')

  <div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Nos formules</h2>
    <h4>Choisissez la formule la mieux adaptée à vos besoins</h4>
  </div>
  <div class="row slideanim">
    <div class="col-md-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Formule</br> économique</h1>
        </div>
        <div class="panel-body">
          <p>Haec ubi latius fama vulgasset missaeque
            Et interdum acciderat, ut siquid in penetrali
            Quid enim tam absurdum quam delectari multis
            Primi igitur omnium statuuntur Epigonus et
            Omitto iuris dictionem in libera civitate contra</p>
        </div>

        <div class="panel-footer">
          
          <button class="btn btn-lg"><a href="#formule1" style="color:black"> Cette formule me convient!</a></button>
        </div>
      </div>      
    </div>     
    <div class="col-md-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Formule</br> standard</h1>
        </div>
          <div class="panel-body">
            <p>Haec ubi latius fama vulgasset missaeque
            Et interdum acciderat, ut siquid in penetrali
            Quid enim tam absurdum quam delectari multis
            Primi igitur omnium statuuntur Epigonus et
            Omitto iuris dictionem in libera civitate contra</p>
          </div>
        
        <div class="panel-footer">
          <button class="btn btn-lg"><a href="#formule2" style="color:black" > Cette formule me convient!</a></button>       
        </div>
      </div>      
    </div>       
    <div class="col-md-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Formule</br> luxe</h1>
        </div>
        <div class="panel-body">
          <p>Haec ubi latius fama vulgasset missaeque
          Et interdum acciderat, ut siquid in penetrali
          Quid enim tam absurdum quam delectari multis
          Primi igitur omnium statuuntur Epigonus et
          Omitto iuris dictionem in libera civitate contra</p>
        </div>

        <div class="panel-footer">          
          <button class="btn btn-lg"><a href="#formule3" style="color:black"> Cette formule me convient!</a></button>
        </div>
      </div>      
    </div>    
  </div>
</div>


  <div classe="economique">
    <h1 id="formule1">La formule économique</h1>
      <p>
          <ul>
            <li>Et olim licet otiosae sint tribus pacataeque</li>
            <li>Et quoniam inedia gravi adflictabantur, locum</li>
            <li>Circa hos dies Lollianus primae lanuginis</li>
            <li>Cum saepe multa, tum memini domi in hemicyclio</li>
            <li>Orientis vero limes in longum protentus et rectum</li>
            <li>Sin autem ad adulescentiam perduxissent, dirimi</li>
            <li>Haec igitur lex in amicitia sanciatur, ut neque</li>
            <li>Et quia Mesopotamiae tractus omnes crebro</li>
            <li>Quo cognito Constantius ultra mortalem modum</li>
            <li>Latius iam disseminata licentia onerosus bonis</li>
          </ul>
        </p>
  </div> 

  <div classe="standard">
    <h1 id="formule2">La formule standard</h1>
      <p>
        <ul>
          <li>Et olim licet otiosae sint tribus pacataeque</li>
          <li>Et quoniam inedia gravi adflictabantur, locum</li>
          <li>Circa hos dies Lollianus primae lanuginis</li>
          <li>Cum saepe multa, tum memini domi in hemicyclio</li>
          <li>Orientis vero limes in longum protentus et rectum</li>
          <li>Sin autem ad adulescentiam perduxissent, dirimi</li>
          <li>Haec igitur lex in amicitia sanciatur, ut neque</li>
          <li>Et quia Mesopotamiae tractus omnes crebro</li>
          <li>Quo cognito Constantius ultra mortalem modum</li>
          <li>Latius iam disseminata licentia onerosus bonis</li>
        </ul>
      </p>
  </div>

  <div classe="luxe">
    <h1 id="formule3">La formule luxe</h1>
      <p>
        <ul>
          <li>Et olim licet otiosae sint tribus pacataeque</li>
          <li>Et quoniam inedia gravi adflictabantur, locum</li>
          <li>Circa hos dies Lollianus primae lanuginis</li>
          <li>Cum saepe multa, tum memini domi in hemicyclio</li>
          <li>Orientis vero limes in longum protentus et rectum</li>
          <li>Sin autem ad adulescentiam perduxissent, dirimi</li>
          <li>Haec igitur lex in amicitia sanciatur, ut neque</li>
          <li>Et quia Mesopotamiae tractus omnes crebro</li>
          <li>Quo cognito Constantius ultra mortalem modum</li>
          <li>Latius iam disseminata licentia onerosus bonis</li>
        </ul>
      </p>
  </div>
@endsection
