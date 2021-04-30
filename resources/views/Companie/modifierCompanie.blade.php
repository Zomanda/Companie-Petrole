@extends('template')

@section('contenu')
<script>
     function ChangeVisbility(){
        document.getElementsByClassName("hidden-content").style.visibility = "visible";
    }
</script>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-4">
                <select class="form-select" onchange="ChangeVisbility()">
                    <option selected>Veuillez choisir une companie</option>
                </select>
            </div>
        </div>
        <form method="POST" enctype="multipart/form-data" action="" class="row justify-content-md-center hidden-content">
            @csrf
            <div class="form-group col-md-4">
                <label for="nom">Nom de la companie</label>
                <input type="text" class="form-control" name="nom" required>
            </div>
            <div class="form-group col-md-4">
                <label for="numEmploye">Nombre d'employé(s)</label>
                <input type="number" class="form-control" name="numEmploye" min="1" required>
            </div>
            <div class="form-group col-md-4">
                <label for="cartel">Cartel</label>
                <input type="text" class="form-control" name="cartel" required>
            </div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-primary">Confirmer</button>
            </div>
        </form>
    </div>
    
    
@endsection