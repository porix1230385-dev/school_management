@extends('layouts.master')

@section('page_title', 'Tableau De Bord')
<script src="{{asset('assets/js/jquery-3.6.1.min.js')}}"></script>
@section('content')
<div class="page-body">
    <div class="card">
        <div class="card-header pb-0">
        <h5>School Information</h5>
        </div>
        <form class="form theme-form" enctype="multipart/form-data" method="post" action="{{ route('settings.update') }}">
        @csrf @method('PUT')
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nom de l'établissement </label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="{{ $s['school_name'] }}" placeholder="Name of School">
                        </div>
                    </div> 
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Current Session</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="{{ $s['current_session'] }}" placeholder="Current session">
                        </div>
                    </div> 
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">drenet_ddnet</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="{{ $s['DRENET_DDENET'] }}" placeholder="DRENET_DDENET">
                        </div>
                    </div> 
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">school code</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="{{ $s['school_code_ref'] }}" placeholder="Code of School">
                        </div>
                    </div> 
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">School phone Number</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="{{ $s['school_phone'] }}" placeholder="School phone Number">
                        </div>
                    </div> 
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">School Address</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="{{ $s['school_address'] }}" placeholder="School Address">
                        </div>
                    </div> 
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">School Email</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="{{ $s['school_email'] }}" placeholder="School Email">
                        </div>
                    </div> 
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Post Office Box</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="{{ $s['bp'] }}" placeholder="Post Office Box">
                        </div>
                    </div> 
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Change Logo:</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="logo" accept="image/*" type="file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <div class="col-sm-9 offset-sm-3">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalgetbootstrap" data-whatever="@getbootstrap">Add One School Info</button>
            <div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">School Settings</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" id="CloseModal"></button>
                          </div>
                          <div class="modal-body">
                            <form id="frmAddSetting">
                                @csrf
                              <div class="mb-3">
                                <label class="col-form-label" for="type">Type:</label>
                                <input class="form-control" type="text" name="type" id="type">
                              </div>
                              <div class="mb-3">
                                <label class="col-form-label" for="description">Description:</label>
                                <input class="form-control" type="text" name="description" id="description">
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <!-- <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button> -->
                            <button class="btn btn-primary" type="submit">Create</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <input class="btn btn-light" type="reset" value="Cancel">
            </div>
        </div>
        </form>
    </div>
</div>
<!-- <script>
    //script de soumission du modal
    // if ($("#frmAddSetting").length > 0) {}
    $("#frmAddSetting").submit(function(e) {
        e.preventDefault();
        let type = $('#type').val();
        let description = $("#description").val();
        let _token = $("input[name=_token]").val();

        $.ajax({
            url: "{{ route('settings.store') }}",
            type: "POST",
            data: {
                    type: type,
                    description:description,
                    _token: _token,
            },
            success: function(response) {

                if (response) {
                    $('#col').append('<div class="mb-3 row">'+
                                        '<label class="col-sm-3 col-form-label">'+response.type+'</label>'+
                                        '<div class="col-sm-9">'+
                                            '<input class="form-control" type="text" value="'+response.type+'">'+
                                        '</div>'+
                                        '</div>')
                    $('#frmAddSetting')[0].reset();
                    $('#CloseModal').trigger("click");

                }
            },
            error: function(response) {

                alert(response.responseJSON.message);
            }
        });

    });
</script> -->
{{-- Settings Edit Ends --}} 
@endsection
 