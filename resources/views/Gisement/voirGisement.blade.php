@extends('template')

@section('contenu')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-lg-4">
            <select class="form-select" onchange="ChangeVisbility()">
                <option selected>Veuillez choisir un gisement</option>
            </select>
        </div>
    </div>
    <div class="row justify-content-lg-center hidden-content">
        <!-- mettre contenu ici-->
    </div>
</div>
@endsection