@extends('layouts.master')

@section('page_title', 'Inscription|student')

@section('content')
<!-- Container-fluid starts-->
<div class="page-body">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
            <h5>Inscription</h5><span>Informations Eleves</span>
            </div>
            @if(Session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
            @if(session()->has('fail'))
                <div class="alert alert-danger">
                {{session()->get('fail')}}
                </div>
            @endif
            <div class="card-body">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step"><a class="btn btn-primary" href="#step-1">1</a>
                    <p>Student Infos</p>
                </div>
                <div class="stepwizard-step"><a class="btn btn-light" href="#step-2">2</a>
                    <p>Inscription Infos</p>
                </div>
                <!-- <div class="stepwizard-step"><a class="btn btn-light" href="#step-3">3</a>
                    <p>Step 3</p>
                </div>
                <div class="stepwizard-step"><a class="btn btn-light" href="#step-4">4</a>
                    <p>Step 4</p>
                </div> -->
                </div>
            </div>
            <form  method="POST" action="{{route('payments.store')}}">
                @csrf
                <input type="hidden" name="student_id" value="{{$student->ID_Student}}">
                <div class="setup-content" id="step-1">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="control-label">Matricule</label>
                        <input class="form-control"  name="matricule" type="text" disabled  readonly value="{{$student->matricule}}" id="matricule">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label" for="validationCustom01">Nom</label>
                        <input class="form-control" id="nom" type="text" name="nom" disabled readonly value="{{$student->nom}}">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label" for="validationCustom02">Prénoms</label>
                        <input class="form-control" id="prenom" type="text" disabled readonly value="{{$student->prenom}}" name="prenom">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="control-label" for="statut">Statut</label>
                        <input class="form-control" type="text" disabled readonly value="{{$student->statut}}" name="statut" id="statut">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label" for="validationCustom01">Genre</label>
                        <input class="form-control" id="genre" type="text" disabled readonly value="{{$student->genre}}" name="genre">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Contact</label>
                        <input class="form-control"  type="text" disabled readonly value="{{$student->telephone1}}" name="contact" id="contact">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="control-label" for="validationCustom02">Adresse</label>
                        <input class="form-control" id="adresse" type="text" disabled readonly value="{{$student->adresse}}" name="adresse">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label" for="validationCustom02">Date_Naissance</label>
                        <input class="form-control" id="date_naissance" type="text" disabled readonly value="{{$student->date_naissance}}" name="date_naissance">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Lieu_Naissance</label>
                        <input class="form-control"  type="text" disabled readonly value="{{$student->lieu_naissance}}" id="lieu_naissance" name="lieu_naissance">
                    </div>
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>
                <div class="setup-content" id="step-2">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="control-label">Session courante</label>
                        <input class="form-control"  type="text" disabled  readonly value="{{$year}}" name="current_session" id="current_session">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label" for="validationCustom01">Niveau</label>
                        <select class="form-select"  aria-label="select example" name="level" id="level">
                            <option value="...">...</option>
                            @foreach($levels as $level)
                                <option value="{{$level->ID_level}}">{{$level->levelName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="control-label" for="classes">Classes</label>
                        <select class="form-select"  aria-label="select example" name="classes" id="classes"> 
                        </select>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="control-label" for="statut">Frais de Scolarite</label>
                        <input class="form-control"  type="text" disabled readonly  name="f_sco" id="f_sco">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Montant Total</label>
                        <input class="form-control"  type="text" disabled readonly  name="mtn_tt" id="mtn_tt">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label" for="validationCustom01">Montant</label>
                        <input class="form-control" id="mtn" type="text" name="mtn">
                    </div>
                </div>
                <button class="btn btn-secondary pull-right" type="submit">Finish!</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
</div>
    <!-- Container-fluid Ends-->
<script type="text/javascript">
    $(document).ready(function () {
        $("#level").change(function(){
            var level_id = $(this).val();
            let current_session = $("#current_session").val();
            let statut = $("#statut").val();
            // let f_sco = $("#f_sco").val();
                // current_session
                // f_sco
                // (mtn_tt)
            // alert(level_id);
            if(level_id && current_session && statut ){
                $.ajax({
                    type:'GET',
                    url:'{{ route("get_classes") }}',
                    data:{

                        "ID_level" : level_id,
                        "current_session": current_session,
                        "statut" : statut
                    },
                    success:function(res){
                        // console.log(res)
                        // alert(res);
                        let classes = res.classes;
                        let school_sco_info = res.scolarite_info
                        // console.log(classes);
                        $("#classes").empty();
                        $("#classes").append('<option value="...">---</option>');
                        $("#f_sco").val(school_sco_info.f_ins);
                        $("#mtn_tt").val(school_sco_info.mtn_tt);
                        $.each(classes,function(key,value){
                            // alert(key);
                            // ID_class,className
                            $("#classes").append('<option value="'+value.ID_class+'">'+value.className+'</option>');
                        });
                    },
                    error:function(e){
                        e.preventDefault();
                    }
                }); 
            }
           
        });
        // route 
       
    });
</script>
@endsection
 <!-- Plugins JS start-->
