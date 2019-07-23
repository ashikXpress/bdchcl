@extends('frontend.mainlayout')
@section('title')
    BCHCL Reg
@endsection

@section('content')

    <section id="content" role="main">
        <div class="breadcrumb-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('frontend.index') }}" title="Home">Home</a></li>
                            <li class="active">Member Register Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="xs-margin half"></div>
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <form action="{{ route('register') }}" id="register-form" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6 padding-right-md">
                        <h3 class="color2">Your Personal Details / আপনার ব্যক্তিগত তথ্য</h3>
                        <div class="form-group"><label for="firstname" class="form-label">First name / নামের প্রথম
                                অংশ<span
                                        class="required">*</span></label><input type="text" name="firstname"
                                                                                id="firstname"
                                                                                class="form-control input-lg" required>
                        </div>
                        <div class="form-group"><label for="lastname" class="form-label">Last name / নামের শেষাংশ<span
                                        class="required">*</span></label><input type="text" name="lastname"
                                                                                id="lastname"
                                                                                class="form-control input-lg" required>
                        </div>
                        <div class="form-group"><label for="email" class="form-label">House No / বাসা নং <span
                                        class="required">*</span></label><input type="email" name="email" id="email"
                                                                                class="form-control input-lg" required>
                        </div>
                        <div class="form-group"><label for="telephone" class="form-label">Village or Road No / গ্রাম বা
                                রাস্তা নং<span
                                        class="required">*</span></label><input type="text" name="telephone"
                                                                                id="telephone"
                                                                                class="form-control input-lg" required>
                        </div>
                        <div class="form-group"><label for="fax" class="form-label">Post Office / ডাকঘর<span
                                        class="required">*</span></label><input type="text" name="fax" id="fax"
                                                                                class="form-control input-lg" required>
                        </div>
                        <div class="form-group"><label for="fax" class="form-label">Sub District / উপজেলা<span
                                        class="required">*</span></label><input type="text" name="fax" id="fax"
                                                                                class="form-control input-lg" required>
                        </div>
                        <div class="form-group"><label for="fax" class="form-label">District / জেলা<span
                                        class="required">*</span></label><input type="text" name="fax" id="fax"
                                                                                class="form-control input-lg" required>
                        </div>

                    </div>
                    <div class="md-margin visible-xs clearfix"></div>
                    <div class="col-sm-6 padding-left-md">
                        <h3 class="color2"> . </h3>
                        <div class="form-group"><label for="company" class="form-label">NID or Birth Certificate ID /
                                এনআইডি বা জন্ম সনদ<span
                                        class="required">*</span></label><input type="text" name="company" id="company"
                                                                                class="form-control input-lg" required>
                        </div>
                        <div class="form-group"><label for="address1" class="form-label">Phone Number / ফোন নম্বর <span
                                        class="required">*</span>
                            </label><input type="text" name="address1" id="address1" class="form-control input-lg">
                        </div>
                        <div class="form-group"><label for="address2" class="form-label">Education Qualification /
                                শিক্ষাগত যোগ্যতা
                            </label><input type="text" name="address2" id="address2" class="form-control input-lg">
                        </div>
                        <div class="form-group"><label for="city" class="form-label">Occupation / পেশা<span
                                        class="required">*</span></label><input type="text" name="city" id="city"
                                                                                class="form-control input-lg" required>
                        </div>
                        <div class="form-group"><label for="postcode" class="form-label">Enter your post
                                code</label><input type="text" name="postcode" id="postcode"
                                                   class="form-control input-lg" required>
                        </div>
                    </div>
                </div>
                <div class="lg-margin2x"></div>
                <div class="row">
                    <div class="col-sm-6 padding-right-md">
                        <input type="submit" class="btn btn-custom btn-lg" value="Create Account">
                    </div>
                </div>
            </form>
        </div>
        <div class="xlg-margin"></div>
    </section>

@endsection
