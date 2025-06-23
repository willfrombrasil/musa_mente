<p></p>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link disabled">
                    {{-- <span data-feather="shopping-cart" class="align-text-bottom"></span> --}}
                    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 disabled text-capitalize">Olá <b>{{$usuario}}</b></a>
                </a>
            </li>
            <li class="nav-item text-uppercase">
                <a class="nav-link" aria-current="page" href="{{ route('admin') }}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Resultados
                </a>
            </li>
            <li class="nav-item text-uppercase">
                <a class="nav-link" aria-current="page" href="{{ route('relatorio') }}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Relatório
                </a>
            </li>
            <li class="nav-item text-uppercase">
                <a class="nav-link" aria-current="page" href="{{ route('cliente.index') }}" target="_blank">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Teste
                </a>
            </li>
            <li class="nav-item text-uppercase">
                <a class="nav-link disabled">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Site
                </a>
            </li>
            <li class="nav-item text-uppercase">
                <a class="nav-link disabled">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Suporte
                </a>
            </li>
            <li class="nav-item text-uppercase">
                <a class="nav-link" href="{{route('logout')}}">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Sair
                </a>
            </li>
        </ul>
        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Redes Sociais</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
        </h6>
        <span class="navbar-text">
            <ul class="list-unstyled d-flex">
                <li class="ms-3">
                    <a class="text-muted" href="#">
                        <i class="bi bi-facebook"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="text-muted" href="#">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="text-muted" href="#">
                        <i class="bi bi-youtube"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="text-muted" href="#">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="text-muted" href="#">
                        <i class="bi bi-envelope-open"></i>
                    </a>
                </li>
            </ul>
        </span>
    </div>
</nav>
