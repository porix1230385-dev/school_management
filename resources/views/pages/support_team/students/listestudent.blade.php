@extends('layouts.master')


@section('page_title', 'Matières')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Elèves - Gestion des Elèves</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Session {{Qs::getCurrentSession()}}</li>
                        </ol>
                    </div>
                    <div class="col-lg-6">
                        <!-- Bookmark Start-->
                        <div class="bookmark">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-container="body" data-bs-toggle="popover"
                                        data-placement="top" title="" data-original-title="Tables"
                                        data-bs-original-title=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-inbox">
                                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                            <path
                                                d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-original-title="" title=""><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-star bookmark-search">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></a>
                                    <form class="form-inline search-form">
                                        <div class="form-group form-control-search">
                                            <input type="text" placeholder="Search.." data-bs-original-title="">
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!-- Bookmark Ends-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- Hover styles-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Liste des matières</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="hover" id="example-style-4">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Gmail</th>
                                            <th>Genre</th>
                                            <th>Adresse</th>
                                            <th>Téléphone1</th>
                                            <th>...</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students  as $student)
                                            <tr>
                                                <td>{{$student->nom}}</td>
                                                <td>{{$student->prenom}}</td>
                                                <td>{{$student->email}}</td>
                                                <td>{{$student->genre}}</td>
                                                <td>{{$student->adresse}}</td>
                                                <td>{{$student->telephone1}}</td>

                                                <td class="text-center">
                                                    <button class="btn btn-light dropdown-toggle" id="btnGroupDrop1"
                                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i class="fa fa-list"></i></button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"
                                                        style="margin: 0px;">
                                                        @if(Session('my_profile')->IDProfile == 2)
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-add"> </i>Inscription</a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa-sharp fa-solid fa-address-card"></i>(Ré)-inscription</a>
                                                        @endif
                                                        <a class="dropdown-item" href="#">

                                                            <i  class="fa fa-pencil"></i> Modifier</a>

                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal-1"><i class="fa fa-trash"></i>
                                                            Supprimer</a>
                                                        {{-- <a class="dropdown-item" href="{{ route('assignations.index') }}"> --}}
                                                            {{-- <i
                                                                class="fa fa-home"></i> Assignation (s)</a> --}}

                                                    </div>

                                                    <!-- start modal boo-->
                                                    <div class="modal fade" id="deleteModal-1" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header text-center">
                                                                    <h5 class=" row  modal-title w-100">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="50" height="50"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-alert-triangle">
                                                                            <path
                                                                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                                                            </path>
                                                                            <line x1="12" y1="9"
                                                                                x2="12" y2="13">
                                                                            </line>
                                                                            <line x1="12" y1="17"
                                                                                x2="12" y2="17">
                                                                            </line>
                                                                        </svg>
                                                                        <span>
                                                                            Attention</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form >
                                                                        <p>
                                                                            Etes-vous sûre de vouloir supprimer
                                                                            cette
                                                                            matière,
                                                                        </p>
                                                                        <div class="modal-footer">
                                                                            <button class="btn btn-secondary"
                                                                                type="button"
                                                                                data-bs-dismiss="modal">Non</button>
                                                                            <button class="btn btn-primary"
                                                                                type="submit">Oui</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end modal boo-->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hover Ends-->
            </div>
        </div>
    </div>
@endsection
