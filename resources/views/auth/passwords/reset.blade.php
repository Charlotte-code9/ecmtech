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

                                 <img src="{{ asset('-admin/img/alot.png')}}" width="360px" height="80px">
                                 <h1 class="h3 text-gray-900 mb-4"><b>BSIT DEPARTMENT<b></h1>
                                 <h2 class="h3 text-gray-900 mb-4">Reset Password</h2>
                                 <hr>

        	                     </div>
                                    <form method="POST" action="{{ route('password.update') }}">
                        		@csrf

                        	<input type="hidden" name="token" value="{{ $token }}">


                        <div class="form-group ">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                <span class="invalid-feedback" role="alert">
                                    @error('email')
                                            <strong>{{ $message }}</strong>
                                    @enderror
                                    </span>


                        </div>

 			                <div class="form-group">

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" data-toggle="password" name="password" required autocomplete="new-password" placeholder="New Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group ">


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" data-toggle="password"required autocomplete="new-password" placeholder="Confirm New Password">

                        </div>


                        <hr>

                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Reset Password') }}
                                </button>

                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>
</div>

</div>

</div>


@endsection
