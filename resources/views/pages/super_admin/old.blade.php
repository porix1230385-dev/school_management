<div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-semibold">Ajouter un nouvel établissement </h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <form enctype="multipart/form-data" method="post" action="{{ route('settings.update') }}">
                @csrf @method('PUT')
                <div class="row">
                    <div class="col-md-6 border-right-2 border-right-blue-400">
                        <!--NAME-->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Nom de l'établissemnt <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="system_name" value="{{ $s['school_name'] }}" required type="text"
                                    class="form-control" placeholder="Name of School">
                            </div>
                        </div>
                        <!--END NAME-->

                        <!--ADRESS MAIL-->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Adresse mail de
                                l'établissement</label>
                            <div class="col-lg-9">
                                <input name="system_email" value="{{ $s['school_email'] }}" type="email"
                                    class="form-control" placeholder="School Email">
                            </div>
                        </div>

                        <!-- END ADRESS MAIL-->
  
                        <!--PAYS-->
                        <div class="form-group row">
                            <label for="current_session" class="col-lg-3 col-form-label font-weight-semibold">Pays
                                <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <select data-placeholder="Choose..." required name="contry" id="contry"
                                    class="select-search form-control">
                                    <option value="">....</option>
                                </select>
                            </div>
                        </div>
                        <!--END PAYS-->

                        <!--VILLES-->
                        <div class="form-group row">
                            <label for="current_session" class="col-lg-3 col-form-label font-weight-semibold">Villes
                                <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <select data-placeholder="Choose..." required name="villes" id="villes"
                                    class="select-search form-control">
                                    <option value="">....</option>
                                </select>
                            </div>
                        </div>
                        <!--END VILLES-->

                          <!--COMMUNES-->
                          <div class="form-group row">
                            <label for="current_session" class="col-lg-3 col-form-label font-weight-semibold">Communes
                                <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <select data-placeholder="Choose..." required name="contry" id="contry"
                                    class="select-search form-control">
                                    <option value="">....</option>
                                </select>
                            </div>
                        </div>
                        <!--END COMMUNES-->

                        <!-- PHONE-->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Téléphone</label>
                            <div class="col-lg-9">
                                <input name="phone" value="{{ $s['school_phone'] }}" type="text" class="form-control"
                                    placeholder="Phone">
                            </div>
                        </div>
                        <!--END PHONE-->
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Adresse postale de l'établissemnt
                                <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input required name="address" value="{{ $s['school_address'] }}" type="text"
                                    class="form-control" placeholder="School Address">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="lock_exam" class="col-lg-3 col-form-label font-weight-semibold">Lock Exam</label>
                            <div class="col-lg-3">
                                <select class="form-control select" name="lock_exam" id="lock_exam">
                                    <option {{ $s['lock_exam'] ? 'selected' : '' }} value="1">Yes</option>
                                    <option {{ $s['lock_exam'] ?: 'selected' }} value="0">No</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <span class="font-weight-bold font-italic text-info-800">{{ __('msg.lock_exam') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{-- Fees --}}
                        <fieldset>
                            <legend><strong>Next Term Fees</strong></legend>
                            
                            {{--@foreach ($class_types as $ct)--}}
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">site_internet</label>
                                    <div class="col-lg-9">
                                        <input class="form-control"
                                            value="{{$s['site_internet']}}"
                                            name="website"
                                            placeholder="school website" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">DRENET_DDENET</label>
                                    <div class="col-lg-9">
                                        <input class="form-control"
                                            value="{{$s['DRENET_DDENET']}}"
                                            name="website"
                                            placeholder="school website" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Réference</label>
                                    <div class="col-lg-9">
                                        <input class="form-control"
                                            value="{{$s['school_code_ref']}}"
                                            name="website"
                                            placeholder="school website" type="text">
                                    </div>
                                </div>
                            {{--@endforeach--}}
                            
                        
                        </fieldset>
                        <hr class="divider">

                        {{-- Logo --}}
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Change Logo:</label>
                            <input name="logo" accept="image/*" type="file" class="file-input" data-show-caption="false"
                                data-show-upload="false" data-fouc />
                            {{-- <img style="width: 100px" height="100px" src="{{ $s['logo'] }}" alt=""> --}}
                            {{-- ANCHOR DEBUG SCHOOL PICTURE --}}
                            {{-- <script>
                                        alert('change_logo_path -> {{ $s['logo'] }}')
                                    </script> --}}
                            {{-- DEBUG SCHOOL PICTURE --}}
                        </div>
                    </div>
                </div>

                <hr class="divider">

                <div class="text-right">
                    <button type="submit" class="btn btn-danger">Valider <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>