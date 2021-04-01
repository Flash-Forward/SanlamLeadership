
<div class="container">
    <link rel="stylesheet" href="{{ asset('fonts') }}/material-icon/css/material-design-iconic-font.min.css">
    <!-- <script>
        let form = document.getElementById('register');
        form.innerHTML += '<input name="inputs" value="test">';
    </script> -->
<!-- Main css -->
<link rel="stylesheet" href="{{ asset('css') }}/style.css">
    <div class="signup-content">
                <div class="signup-img">
                    <img src="{{ asset('img') }}/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="{{ route('login') }}">
                    @csrf
                        <h2>LOGIN</h2>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="LOGIN" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
</div>

