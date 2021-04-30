@extends('template')

@section('contenu')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-lg-4">
            <select class="form-select">
                <option selected>Veuillez choisir une companie</option>
            </select>
        </div>
    </div>
    <div class="justify-content-center row">
        <button type="button" class="btn btn-danger col-2" id="DeleteButton" data-bs-toggle="modal" data-bs-target="#WarningModal">Supprimer</button>
    </div>
    
    <div class="modal fade" id="WarningModal" tabindex="-1" aria-labelledby="WaringModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="WaringModalLabel">Êtes-vous sur de vouloir supprimer cette companie?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <p>Cette action est irréversible!</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fermer</button>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection