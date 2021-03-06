@extends('layouts.app')

@section('content')
    <div class="main">
        <!-- Sign in form -->
        <section class="signup">
            <div class="container">
                <div id="logo" class="pull-left">
                    <h1><a href="index.html">HomA<span>ssist</span></a></h1>
                </div>
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign in</h2>
                        <form action="{{ route('login') }}" method="POST" class="register-form" id="register-form">
                            @csrf
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Forgot your password?
                                    <a href="{{'password.reset'}}" class="term-service">Click here</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure>
                            <img src="homa-ui/assets/img/login.png" alt="sing up image" />
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
