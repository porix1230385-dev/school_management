
@extends('layouts.master')

@section('page_title', 'Tableau De Bord')

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Tableau De Bord</h3>
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
                                            <input type="text" placeholder="Search.." data-bs-original-title=""
                                                title="">
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
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-database">
                                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                    </svg></div>
                                <div class="media-body">
                                    <span class="m-0">Elèves</span>
                                    <h4 class="mb-0 counter">4</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-database icon-bg">
                                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-secondary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-shopping-bag">
                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                    </svg></div>
                                <div class="media-body">
                                    <span class="m-0">Enseignants</span>
                                    <h4 class="mb-0 counter">5</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-shopping-bag icon-bg">
                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-message-circle">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                        </path>
                                    </svg></div>
                                <div class="media-body">
                                    <span class="m-0">Classes</span>
                                    <h4 class="mb-0 counter">50</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-message-circle icon-bg">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user-plus">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg></div>
                                <div class="media-body">
                                    <span class="m-0">Parents</span>
                                    <h4 class="mb-0 counter">4</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-user-plus icon-bg">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 xl-100 box-col-12">
                    <div class="card">
                        <div class="cal-date-widget card-body">
                            <div class="row">
                                <div class="col-xl-4 col-xs-6 col-md-4 col-sm-4">
                                    <div class="cal-info text-center">
                                        <div>
                                            <p hidden>{{ setlocale(LC_TIME, 'french') }}</p>
                                            <h2>{{ date('d') }}</h2>
                                            <div class="d-inline-block"><span
                                                    class="b-r-dark pe-3">{{ ucfirst(strftime('%B', time())) }}</span><span
                                                    class="ps-3">{{ date('Y') }}</span></div>
                                            <p class="f-16">Nous sommes le {{ strftime('%A %d %B %Y', time()) }},
                                                bienvenue sur Folo
                                                Education !</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-xs-8 col-md-8 col-sm-8">
                                    <div class="cal-datepicker" >
                                        <div class="datepicker-here float-sm-end" data-language="en">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 box-col-12">
                    <div>
                        <div class="card card-activity">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h5 class="text-uppercase">Annonces</h5>
                                <div class="setting-list">
                                    <ul class="list-unstyled setting-option">
                                        <li>
                                            <div class="setting-primary"><i class="icon-settings"></i></div>
                                        </li>
                                        <li><i class="fa fa-minus minimize-card font-primary"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="crm-activity">
                                    <li class="media">
                                        <span class="me-3 font-primary">A</span>
                                        <div class="align-self-center media-body">
                                            <h6 class="mt-0">Any desktop publishing.</h6>
                                            <ul class="dates">
                                                <li>25 July 2017</li>
                                                <li>20 hours ago</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="me-3 font-secondary">C</span>
                                        <div class="align-self-center media-body">
                                            <h6 class="mt-0">Contrary to popular belief. </h6>
                                            <ul class="dates">
                                                <li>25 July 2017</li>
                                                <li>20 hours ago </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="me-3 font-primary">E</span>
                                        <div class="align-self-center media-body">
                                            <h6 class="mt-0">Established fact that a reader.</h6>
                                            <ul class="dates">
                                                <li>25 July 2017</li>
                                                <li>20 hours ago</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="me-3 font-secondary">H</span>
                                        <div class="align-self-center media-body">
                                            <h6 class="mt-0">H-Code - A premium portfolio.</h6>
                                            <ul class="dates">
                                                <li>25 July 2017</li>
                                                <li>20 hours ago </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="me-3 font-primary">T</span>
                                        <div class="align-self-center media-body">
                                            <h6 class="mt-0">There isn't any hidden.</h6>
                                            <ul class="dates">
                                                <li>25 July 2017</li>
                                                <li>20 hours ago</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 xl-100 box-col-12">
                    <div class="widget-joins card">
                        <div class="row">
                            <div class="col-sm-6 pe-0">
                                <div class="media border-after-xs">
                                    <div>
                                        <a href=""><button class="btn btn-primary" type="button">Voir</button></a>
                                        <i class="ms-3"></i>
                                    </div>
                                    <div class="media-body details ps-3">
                                        <span class="mb-1">Annonces</span>
                                        <h5 class="mb-0 counter">61</h5>
                                    </div>
                                    <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-shopping-bag font-primary float-end ms-2">
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="col-sm-6 ps-0">
                                <div class="media">
                                    <div>
                                        <a href=""><button class="btn btn-primary" type="button">Voir</button></a>
                                        <i class="ms-3"></i>
                                    </div>
                                    <div class="media-body details ps-3">
                                        <span class="mb-1">Utilisateurs</span>
                                        <h5 class="mb-0 counter">30</h5>
                                    </div>
                                    <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-layers font-primary float-end ms-3">
                                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                            <polyline points="2 17 12 22 22 17"></polyline>
                                            <polyline points="2 12 12 17 22 12"></polyline>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="col-sm-6 pe-0">
                                <div class="media border-after-xs">
                                    <div>
                                        <a href=""><button class="btn btn-primary" type="button">Voir</button></a>
                                        <i class="ms-3"></i>
                                    </div>
                                    <div class="media-body details ps-3 pt-0">
                                        <span class="mb-1">Versements</span>
                                        <h5 class="mb-0 counter">100000 </h5>FCFA
                                    </div>
                                    <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-shopping-cart font-primary float-end ms-2">
                                            <circle cx="9" cy="21" r="1"></circle>
                                            <circle cx="20" cy="21" r="1"></circle>
                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                            </path>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="col-sm-6 ps-0">
                                <div class="media">
                                    <div>
                                        <a href=""><button class="btn btn-primary" type="button">Voir</button></a>
                                        <i class="ms-3"></i>
                                    </div>
                                    <div class="media-body details ps-3 pt-0">
                                        <span class="mb-1">A payer</span>
                                        <h5 class="mb-0 counter">55000 </h5>FCFA
                                    </div>
                                    <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-dollar-sign font-primary float-end ms-2">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 xl-100 box-col-12">
                    <div class="card">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h5>Les Meilleures Elèves</h5>
                            <div class="setting-list">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-status table-responsive">
                                <table class="table table-bordernone">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nom & Prénoms</th>
                                            <th scope="col">Classe</th>
                                            <th scope="col">Moyenne</th>
                                            <th scope="col">Matière de Base</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size">
                                                    <img class="img-radius align-top m-r-15 rounded-circle"
                                                        src="https://laravel.pixelstrap.com/viho/assets/images/user/4.jpg"
                                                        alt="">
                                                    <div class="d-inline-block">
                                                        <h6>John Deo <span class="text-muted"></span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>CP1 A</td>
                                            <td>
                                                17/20
                                            </td>
                                            <td>Science</td>
                                        </tr>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size">
                                                    <img class="img-radius align-top m-r-15 rounded-circle"
                                                        src="https://laravel.pixelstrap.com/viho/assets/images/user/4.jpg"
                                                        alt="">
                                                    <div class="d-inline-block">
                                                        <h6>John Deo <span class="text-muted"></span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>CP1 A</td>
                                            <td>
                                                17/20
                                            </td>
                                            <td>Science</td>
                                        </tr>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size">
                                                    <img class="img-radius align-top m-r-15 rounded-circle"
                                                        src="https://laravel.pixelstrap.com/viho/assets/images/user/4.jpg"
                                                        alt="">
                                                    <div class="d-inline-block">
                                                        <h6>John Deo <span class="text-muted"></span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>CP1 A</td>
                                            <td>
                                                17/20
                                            </td>
                                            <td>Science</td>
                                        </tr>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size">
                                                    <img class="img-radius align-top m-r-15 rounded-circle"
                                                        src="https://laravel.pixelstrap.com/viho/assets/images/user/4.jpg"
                                                        alt="">
                                                    <div class="d-inline-block">
                                                        <h6>John Deo <span class="text-muted"></span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>CP1 A</td>
                                            <td>
                                                17/20
                                            </td>
                                            <td>Science</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Container-fluid Ends-->
    </div>
@endsection
