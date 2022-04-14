<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center">
    <a class="navbar-brand " href="{{ url('/') }}">Telefonos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
            <a class="nav-link" href="{{ url('mar') }}">Marcas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('tel') }}">Telefonos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('acc') }}">Accesorios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('ref') }}">Refacciones</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto my-2 my-lg-0">
            <li>
                <a id="" class="nav-link " href="#">
                    {{ Auth::user()->name }}
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" hidden>
                @csrf
            </form>
        </ul>
    </div>
</nav>
<div class=" alert">
    @include('flash::message')
</div>
