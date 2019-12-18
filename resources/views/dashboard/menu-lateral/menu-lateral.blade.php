<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>

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
                        @if(Auth::user()->perfil)
                            <li><a href="{{ route('users.create') }}">Cadastro de Usuário</a></li>
                        @endif

                        @if(!Auth::user()->perfil)
                            <li><a href="{{ route('reports.create')}}">Gerar Relatório</a></li>

                            <li><a href="{{ route('reports.index')}}">Visualizar Relatórios</a></li>

                            <li><a href="{{ route('companies.index')}}">Adicionar Empresa Contratante</a></li>

                            <li><a href="{{ route('companies.contracted')}}">Adicionar Empresa Contratada</a></li>

                            <li><a href="{{ route('companies.unities')}}">Adicionar Unidades</a></li>
                        @endif
                    </ul>
                </li>
            </ul>

            @if(Auth::user()->perfil)
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Relatórios</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Relatórios</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{ route('reports') }}">Visualizar Relatórios</a></li>
                        </ul>
                    </li>
                </ul>
            @endif

        </div>
    </div>
</nav>
