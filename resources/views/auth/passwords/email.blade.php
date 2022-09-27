@extends('layouts.app')

@section('page_title', 'Réinitialiser le mot de passe')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7"><img class="bg-img-cover bg-center" src="../assets/images/login/2.jpg" alt="looginpage">
                </div>
                <div class="col-xl-5 p-0">
                    <div class="login-card">

                        <form class="theme-form login-form" action="{{route('login')}}">
                            <h4 class="mb-3">Reset Your Password</h4>
                            <div class="form-group">
                                <label>Email Address</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    <input class="form-control" type="email" required="" placeholder="Test@gmail.com">
                                </div>
                            </div>
                            <h6>Create Your Password</h6>
                            <div class="form-group">
                                <label>New Password</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-lock"></i></span>
                                    <input class="form-control" type="password" name="login[password]" required=""
                                        placeholder="*********">
                                    <div class="show-hide"><span class="show"></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Retype Password</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-user"></i></span>
                                    <input class="form-control" type="password" name="login[password]" required=""
                                        placeholder="*********">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Done </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
