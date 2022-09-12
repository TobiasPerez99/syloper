    <div class=" header-bg p-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a class="navbar-brand" href="#">
                    <img src="/assets/images/logo.png" width="90" height="50" class="d-inline-block align-top"
                        alt="">
                </a>

                <ul class="nav col-12 p-2 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">HOME</a></li>
                    <li><a href="{{ route('contact.form') }}" class="nav-link px-2 text-white">CONTACT</a></li>
                </ul>
                <div class="text-end">

                    @if (!Auth::check())
                        <a href="{{ route('login') }}" alt="{{ __('') }}">
                            <button type="button" class="btn btn-outline-light me-2">
                                Iniciar Sesion
                            </button>
                        </a>

                        <a href="{{ route('register') }}" alt="{{ __('') }}">
                            <button type="button" class="btn btn-outline-light me-2">
                                Registrar
                            </button>
                        </a>
                    @endif
                    @if (Auth::check())
                        
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        btn
                                                                <button type="button" class="btn btn-outline-light me-2">
                                Cerrar Sesion
                            </button>
                                    </form>
                                </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
