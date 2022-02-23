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
                                 <h2 class="h3 text-gray-900 mb-4">Forgot Password</h2>
                                 <hr>

        	                     </div>
                                    <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status')}}
                                    </div>

                                    @endif
                                <div class="form-group">
                                <input type="email" type="email" class="input form-control
                            form-control-user @error('email') is-invalid @enderror"
                            name="email" required
                            autocomplete="email" placeholder="Email" value="{{ $email ?? old('email') }}">

                            <span class="invalid-feedback" role="alert">
                            @error('email')
                                    <strong>{{ $message }}</strong>
                            @enderror
                            </span>

                                </div>

                               <!-- <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                    </div>
                                </div>-->


                                         <button type="submit" class="btn btn-primary btn-user btn-block">
                                         Send Password Reset Link
                                        </button>


                                        <hr>
                                        <hr>

                                </form>
                                 <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">Login Here!</a>
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

</div>


@endsection
