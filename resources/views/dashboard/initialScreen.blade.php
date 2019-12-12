<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >

				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Formulários</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Formulários</span></a>
						<ul class="pcoded-submenu">
							<li><a href="{{ route('register') }}">Cadastro de Usuário</a></li>
							{{-- <li><a href="form-elements-advance.html">Form advance</a></li>
							<li><a href="form-validation.html">Form validation</a></li>
							<li><a href="form-masking.html">Form masking</a></li>
							<li><a href="form-wizard.html">Form wizard</a></li>
							<li><a href="form-picker.html">Form picker</a></li>
							<li><a href="form-select.html">Form select</a></li> --}}
						</ul>
					</li>
				</ul>

			</div>
		</div>
    </nav>

	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>

					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">

					</ul>
					<ul class="navbar-nav ml-auto">
						<li>

						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										{{-- <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image"> --}}
										<span>Yasmin</span>
										<a href="{{ route('logout') }}"  class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
	</header>

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- amount start -->
            <div class="col-md-6 col-xl-4">
                <div class="card amount-card overflow-hidden">
                    <div class="card-body">
                        <h2 class="f-w-400">23</h2>
                        <p class="text-muted f-w-600 f-16"><span class="text-c-blue">Relatorios</span> Esperando Aprovação</p>
                    </div>
                    <div id="amount-processed"></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card amount-card overflow-hidden">
                    <div class="card-body">
                        <h2 class="f-w-400">4</h2>
                        <p class="text-muted f-w-600 f-16"><span class="text-c-green">Relatorios</span> Aprovados</p>
                    </div>
                    <div id="amount-spent"></div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card amount-card overflow-hidden">
                    <div class="card-body">
                        <h2 class="f-w-400">31</h2>
                        <p class="text-muted f-w-600 f-16"><span class="text-c-yellow">Usuários</span> Cadastrados
                        </p>
                    </div>
                    <div id="profit-processed"></div>
                </div>
            </div>


        </div>
        <!-- [ Main Content ] end -->

    </div>
</div>

    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ripple.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset("assets/js/plugins/apexcharts.min.js") }}"></script>

<!-- custom-chart js -->
<script src="{{ asset("assets/js/pages/dashboard-analytics.js") }}"></script>

</body>

</html>
