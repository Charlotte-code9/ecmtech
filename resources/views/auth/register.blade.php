@extends('layouts.master')

@section('content')
<div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                <div class="text-center">

                                 <img src="-admin/img/alot.png" width="360px" height="80px">
                                 <h1 class="h3 text-gray-900 mb-4"><b>BSIT DEPARTMENT<b></h1>
                                 <h2 class="h3 text-gray-900 mb-4">Registration</h2>
                                 <hr>
        	                     </div>
                                <form class="px-3" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror

                                </div>

                                <div class="form-group col-md-6">
                                <input id="mobile" type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="Phone Number">

                                                            @error('mobile')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                </div>
                                </div>

                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                </div>

                                <div class="form-group">
                                     <input id="password" type="password" class=" form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" data-toggle="password" placeholder="Password">
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                

                                </div>

                                 <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control @error('confirmed')
                                     is-invalid @enderror" name="password_confirmation"
                                    required autocomplete="current-password" placeholder="Confirm Password" data-toggle="password"  >

                                </div>

                                <div class="form-group">
                                    <select class="form-control @error('u_category')
                                     is-invalid @enderror" name="u_category" id="u_category" required>
                                    <option selected disabled>Register As:</option>
                                    <option value="Faculty">Faculty</option>
                                    <option value="Student">Student</option>
                                    </select>

                                    @error('u_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            <div class="form-row hidden" id="pDetails">
                            <div class="form-group col-md-6">
                                     <select class="form-control @error('uyear') 
                                        is-invalid @enderror" name="uyear" id="uyear">
                                        <option selected disabled>Year</option>
                                        <option value="First year">First Year</option>
                                        <option value="Second Year">Second Year</option>
                                        <option value="Third Year">Third Year</option>
                                        <option value="Fourth Year">Fourth Year</option>
                                    </select>

                            @error('uyear')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            </div>
                            <div class="form-group col-md-6">
                            <input id="usec" type="text" class=" input form-control @error('usec')
                            is-invalid @enderror" name="usec" placeholder="Section" >

                            @error('usec')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            </div>

                            </div>
                               <!-- <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                    </div>
                                </div>-->


                                        <button class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                        <hr>

                                </form>

                                    <div class="text-center">
                                        <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">Already have an account? Login Here!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


@endsection
