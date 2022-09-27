@extends('layouts.master')

@section('page_title', 'Tableau De Bord')
@section('content')
<div class="page-body">
<div class="card" id="default">
    <div class="card-header pb-0">
    <h5>Choice</h5>
    <div class="setting-list">
        <ul class="list-unstyled setting-option">
        <li>
            <div class="setting-primary"><i class="icon-settings"></i></div>
        </li>
        <li><i class="view-html fa fa-code font-primary"></i></li>
        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
        <li><i class="icofont icofont-error close-card font-primary"></i></li>
        </ul>
    </div><span>Make your choice</span>
    </div>
    <div class="card-body btn-showcase">
        <!-- <button class="btn btn-primary" type="button">Primary Button</button> -->
        <!-- <button class="btn btn-secondary" type="button">Secondary Button</button> -->
        <button class="btn btn-success" type="button">Inscription(s)</button>
        <button class="btn btn-secondary" type="button">Réinscription(s)</button>
        <button class="btn btn-light" type="button">Versement(s)</button>
        <!-- <button class="btn btn-danger" type="button">Danger Button</button> -->
        <!-- <button class="btn btn-light" type="button">Light Button</button> -->
    </div>
     </div>
</div>
@endsection