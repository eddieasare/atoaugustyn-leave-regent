<x-auth-section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="vendors/images/login-page-img.png" alt="">
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Please Login</h2>
                    </div>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        @error('email')
                        <div class="text-danger pb-2" role="alert">
                            {{ $message}}
                        </div>
                        @enderror
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                name="email" placeholder="Email">
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                            </div>
                        </div>
                        @error('password')
                        <div class="text-danger pb-2" role="alert">
                            {{ $message}}
                        </div>
                        @enderror
                        <div class="input-group custom">
                            <input type="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                name="password" placeholder="Password">
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="forgot-password"><a href="{{ url('forgot-password') }}">Forgot Password</a>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-xs btn-block">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-auth-section>