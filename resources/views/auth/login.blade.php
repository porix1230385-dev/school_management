@extends('layouts.app')

@section('page_title', 'Connexion')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{asset('assets/images/login/2.jpg')}}" alt="looginpage">
                </div>
                <div class="col-xl-5 p-0">
                    <div class="login-card">
                        <form method="post" class="theme-form login-form" action="{{route('login')}}">
                            @csrf
                            <h4>Login</h4>
                            <h6>Welcome back! Log in to your account.</h6>
                            @if(session()->has('error'))
                            <h6 class="alert alert-danger">{{session()->get('error')}}</h6>
                            @endif
                            <div class="form-group">
                            <label>User Type</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-user"></i></span>
                                    <select class="form-control  @error('profile') is-invalid @enderror" name="profile" id="profile" >
                                        <option value=""></option>
                                        @foreach(Qs::getAllProfiles() as $profile)
                                            <option value="{{$profile->id}}">{{$profile->lib_profil}}</option>
                                        @endforeach
                                    </select> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Identity</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    <input class="form-control @error('identity') 
                                        is-invalid @enderror" type="text" 
                                        name="identity" id="identity" 
                                        ="" placeholder="email or matricule" value="{{ old('email') }}"
                                        autocomplete="identity" autofocus>
                                </div>
                                @error('identity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-lock"></i></span>
                                    <input class="form-control  @error('password') is-invalid @enderror" type="password" name="password"
                                        placeholder="*********"
                                        >
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                            </div>
                            <p>
                                <a class="link" href="{{-- route('password.request') --}}">Forgot password?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
