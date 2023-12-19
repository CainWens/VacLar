<div class="pc" id="pc">
    <nav>
        <ul class="nav nav-underline">
            <li class="col-1 d-flex justify-content-end">
                <a class="navbar-brand " href="{{route('home')}}">
                    <img src="storage/img_res/logo1.png" class="logo" alt="EcoService">
                </a>
            </li>
            <li class="col-1"></li>
            <li class="col-1"></li>
            <li class="col-1"></li>


            <li class="col-1"></li>
            <div  class="col-2 d-flex justify-content-center">
                <h1 class=" ecos display-6">EcoS</h1>
            </div>
            <li class="col-1"></li>
            <li class="col-1">
{{--                <a class="nav-link" href="tel:+79915028243">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">--}}
{{--                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5"/>--}}
{{--                    </svg>--}}
{{--                    Позвонить--}}
{{--                </a>--}}
            </li>
            <li class="col-1 nav-item">
                <a class="nav-link" href="{{route('home')}}">Главная</a>
            </li>
            <li class="col-1 nav-item">
                @guest()
                    <a class="nav-link" href="{{route('auth')}}">Профиль</a>
                @endguest
                @auth()
                        <a class="nav-link" href="{{route('profile')}}">Профиль</a>
                @endauth
            </li>
            <li class="col-1">
                @auth()
                    <a class="nav-link" href="{{route('logout')}}">Выход</a>
                @endauth
            </li>
        </ul>
    </nav>
</div>


<div class="mob" id="mob">
    <nav class="navbar bg-body-tertiary">
        <div class="container d-flex">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="storage/img_res/logo1.png" class="logo" alt="Bootstrap" width="60">
            </a>
            <h1 class="justify-content-center ecos display-6">EcoS</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
</svg></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">@yield('title')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('home')}}">Главная</a>
                        </li>
                        <li class="nav-item">
                            @guest()
                                <a class="nav-link" aria-current="page" href="{{route('auth')}}">Профиль</a>
                            @endguest
                            @auth()
                                    <a class="nav-link" aria-current="page" href="{{route('profile')}}">Профиль</a>
                            @endauth

                        </li>
                        <li class="nav-item">
                            @auth()
                                <a class="nav-link logout" aria-current="page" href="{{route('logout')}}">Выход</a>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
