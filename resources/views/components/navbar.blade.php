<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{ URL::route('app') }}"class="navbar-brand" href="#">Logistics</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link link-dark @if($active == 'return') active @endif" href="{{ URL::route('return') }}">Return</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-dark @if($active == 'delivery') active @endif" href="{{ URL::route('deliveries') }}">Delivery</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::route('transportation') }}" class="nav-link link-dark @if($active == 'transportation') active @endif" >Transportation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if($active == 'distribution') active @endif" href="{{ URL::route('distribution') }}">Distribution</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if($active == 'asset') active @endif" href="{{ URL::route('assets') }}">Asset</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if($active == 'storage') active @endif" href="{{ URL::route('storage') }}">Storage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if($active == 'supplier') active @endif" href="{{ URL::route('supplier') }}">Supplier</a>
                    </li>
                    
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ URL::route('logout') }}">Logout</a>
                    </li> -->
                </ul>
                <form class="d-flex">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <a class="btn btn-outline-dark" href="{{ URL::route('logout') }}" type="submit">Logout</a>
                </form>
            </div>
        </div>
    </nav>