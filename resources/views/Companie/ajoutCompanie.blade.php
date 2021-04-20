@extends('template')

@section('contenu')
    <form method="POST" action="" enctype="multipart/form-data" class="row justify-content-md-center">
        @csrf
        <div class="form-group col-xl-4">
            <label for="nom">Nom de la companie</label>
            <input type="text" class="form-control" name="nom" required>
        </div>
        <div class="form-group col-xl-4">
            <label for="numEmploye">Nombre d'employé(s)</label>
            <input type="number" class="form-control" name="numEmploye" min="1" required>
        </div>
        <div class="form-group col-xl-4">
            <label for="cartel">Cartel</label>
            <input type="text" class="form-control name="cartel" required>
        </div>
        <div class="form-group col-xl-4">
            <button type="submit" class="btn btn-primary">Confirmer</button>
        </div>
    </form>
@endsection