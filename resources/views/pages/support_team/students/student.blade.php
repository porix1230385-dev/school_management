@extends('layouts.app')

@section('page_title', 'Tableau De Bord')

@section('content')




<div class="page-body">
    <div class="container-fluid">
        <div class="col-sm-12">
    <div class="card">
        <div class="card-header pb-0">

            <h5> </h5>

        </div>
        <div class="card-body">
            <form class="needs-validation" method="POST" action="{{route('students.store')}}" >
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label" for="validationCustom01">Nom</label>
                        <input class="form-control" id="nom" type="text" required="" placeholder="papa" name="nom">

                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="validationCustom02">Prénoms</label>
                        <input class="form-control" id="prénom" type="text" placeholder="yapo" required="" name="prénom">
                        {{-- f --}}
                    </div>
                    <div class="col-md-4 mb-3">

                        <label class="form-label">Contact</label>
                        <input class="form-control"  type="text" placeholder="0102207540" required="" name="contact" id="contact">
                        {{-- <div class="valid-feedback">Looks good!</div> --}}

                    </div>

                </div>

                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label" for="validationCustom01">Nationalité</label>
                        <input class="form-control" id="nationalité" name="nationnalité" type="text" required="" placeholder="Ivoirienne">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="validationCustom01">Addresse</label>
                        <input class="form-control" id="addresse"  name="addresse" type="text" required="" placeholder="Abobo">

                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="validationCustom01">Genre</label>

                        <select class="form-select" required="" aria-label="select example">
                            <option value="">...</option>
                            <option value="1">homme</option>
                            <option value="2">femme</option>
                            <option value="3">non binaire</option>

                        </select>

                    </div>

                </div> <br>


                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label" for="validationCustom01">Matricule</label>
                        <input class="form-control" id="matricule" type="text" required="" placeholder="7T1C8H05564" name="email">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="validationCustom01" for="email">Email</label>
                        <input class="form-control"  name="email" id="email" type="email" required="" placeholder="foloschool37@gmail.com" >

                    </div><br>

                    <div class="col-md-4">

                        <label for="dnaiss" class="form-label" >Date de naissance</label>

                        <input class="form-control "type="date" name="dnais" id="dnaiss"
                               value="2022-02-20"
                               min="31-02-1900" max="31-12-2300">
                    </div>

                </div><br><br>


                <select class="form-select" required="" aria-label="select example">
                    <option value="">...</option>
                    <option value="1">Parent</option>
                    <option value="2">Professeur</option>
                    <option value="3">Eleve</option>

                </select> <br><br>

                <button class="btn btn-primary pull-right"  type="submit">Submit form</button>
            </form>
        </div>
    </div>
</div>
    </div>
</div>






@endsection
