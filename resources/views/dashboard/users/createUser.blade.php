<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">



</head>
<body class="">
    @include('dashboard.menu-lateral.menu-lateral')

	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
	    @include('dashboard.header.header')
	</header>
	<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Usuários</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Cadastro de Usuários</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" class="form-login" action="{{ route('users.store') }}" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="name" placeholder="Nome">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Senha</label>
                                        <input type="password" class="form-control" name="password" placeholder="Senha">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Admin</label>
                                        <div class="switch m-r-10">
                                            <input type="checkbox" class="switcher-input" name="perfil" id="switch-1">
                                            <label for="switch-1" class="cr"></label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>

                        <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Notification Position</h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Change data-type : <code> data-type="inverse"</code> to change notification color</p>
                                        <button class="btn notifications btn-primary" data-type="primary" data-from="top" data-align="right" data-notify-icon="feather icon-layers">Primary</button>
                                        <button class="btn notifications btn-info" data-type="info" data-from="top" data-align="right" data-notify-icon="feather icon-shopping-cart">Info</button>
                                        <button class="btn notifications btn-success" data-type="success" data-from="top" data-align="right">success</button>
                                        <button class="btn notifications btn-warning" data-type="warning" data-from="top" data-align="right">Warning</button>
                                        <button class="btn notifications btn-danger" data-type="danger" data-from="top" data-align="right">Danger</button>
                                        <button class="btn notifications btn-secondary" data-type="secondary" data-from="top" data-align="right" data-notify-icon="feather icon-bell">secondary</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Form Validation ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ripple.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset("assets/js/pages/ac-notification.js") }}"></script>

<!-- jquery-validation Js -->
<script src="{{ asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
<!-- form-picker-custom Js -->
<script src="{{ asset('assets/js/pages/form-validation.js') }}"></script>



</body>
</html>
