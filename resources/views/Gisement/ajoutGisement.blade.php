@extends('template')

@section('contenu')
<div class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="row justify-content-md-center">
        @csrf
        <div class="form-group col-md-4">
            <label for="pays">Pays</label>
            <input type="text" class="form-control" name="pays" required>
        </div>
        <div class="form-group col-md-4">
            <label for="capaciteEst">Capacité estimée</label>
            <input type="number" class="form-control" name="capaciteEst" required>
        </div>
        <div class="form-group col-md-4">
            <label for="capaciteConf">Capacité confirmée</label>
            <input type="number" class="form-control" name="capaciteConf" required>
        </div>
        <div class="form-group col-md-4">
            <label for="composition">Composition</label>
            <input type="text" class="form-control" name="composition" required>
        </div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
</div>
@endsection