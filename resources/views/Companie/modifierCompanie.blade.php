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
        <form method="POST" action="" class="row justify-content-lg-center">
            @csrf
        </form>
    </div>
    
    
@endsection