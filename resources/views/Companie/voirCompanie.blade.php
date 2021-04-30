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
    <div class="row justify-content-lg-center hidden-content">
        <!-- mettre contenu ici-->
        <h1>test</h1>
    </div>
</div>
@endsection