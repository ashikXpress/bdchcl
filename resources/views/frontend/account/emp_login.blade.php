@extends('frontend.mainlayout')

@section('title')
    BCHCL Login
@endsection

@section('content')
    <section id="content" role="main">
        <div class="breadcrumb-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="index-2.html" title="Home">Home</a></li>
                            <li class="active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="xs-margin half"></div>
        <div class="container">
            <div class="row">
{{--                <div class="col-sm-6 padding-right-md">--}}
{{--                    <h2 class="color2">New customer</h2>--}}
{{--                    <p>If you are not a member, you need to go to register page and create an account.</p>--}}
{{--                    <div class="xs-margin"></div>--}}
{{--                    <a href="#" class="btn btn-custom btn-lg">Create Account</a></div>--}}
{{--                <div class="xlg-margin visible-xs clearfix"></div>--}}
                <div class="col-sm-6 padding-left-md">
                    <form action="{{ route('emp.login.success') }}" id="login-form" method="post">
                        @csrf
                        @if(session()->has('message'))
                            <div class="alert alert-danger">
                                {{ session('message') }}
                            </div>
                        @endif
                        <h2 class="color2">Your Login</h2>
                        <div class="form-group"><label for="email" class="form-label">Enter your e-mail<span
                                        class="required">*</span></label>
                            <input type="email" name="email" id="email" value=" {{ old('email') }}"
                                   class="form-control input-lg" required
                                   autofocus>
                        </div>
                        <div class="form-group"><label for="password" class="form-label">Enter your password<span
                                        class="required">*</span></label>
                            <input type="password" name="password" id="password"
                                   class="form-control input-lg required">
                        </div>
                        <span class="help-block text-right"><a href="#">Forgot your password?</a></span>
                        <div class="xs-margin"></div>
                        <button type="submit"  class="btn btn-custom btn-lg min-width">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="lg-margin2x"></div>
    </section>
@endsection
