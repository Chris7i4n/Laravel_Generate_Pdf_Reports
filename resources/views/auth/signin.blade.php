<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Favicon icon -->

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<form method="POST" class="form-login" action="{{ route('login') }}">
    @csrf
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="row align-items-center text-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            {{-- <img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4"> --}}
                            <h4 class="mb-3 f-w-400">Login</h4>

                            @if ($errors->has('email'))
                                <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                <br>
                            @endif

                            @if ($errors->has('password'))
                                <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                <br>
                            @endif

                            <div class="form-group mb-3">
                                <label class="floating-label" for="Email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="">
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="password">Senha</label>
                                <input type="password" class="form-control" name= "password" id="password" placeholder="">
                            </div>
                            <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Lembrar-me</label>
                            </div>
                            <button type = "submit" class = "btn btn-block btn-primary mb-4">Entrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Required Js -->
<script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/ripple.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>


</body>

</html>
