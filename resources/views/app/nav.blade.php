<nav class="navbar navbar-expand-lg navbar-dark bg-black" aria-label="Navbar">
    <div class="container-xl">
        <a class="navbar-brand" href="{{ route('home') }}"><i class="bi-cart"></i> Ynamdar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto">
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Brand</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--@foreach($brands as $brand)--}}
                            {{--<li>--}}
                                {{--<a class="dropdown-item" href="{{route('brands.show', $brand->id)}}" class="small link-light stretched-link text-decoration-none">--}}
                                    {{--{{ $brand->name }}--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Category</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--@foreach($categories as $category)--}}
                            {{--<li>--}}
                                {{--<a class="dropdown-item" href="">--}}
                                    {{--{{ $category->name }}--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts.create') }}">
                        Contact
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-person-circle"></i> {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end"><li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout').submit();">
                                    <i class="bi-box-arrow-right"></i> Logout
                                </a>
                        </ul>
                        <form id="logout" action="{{ route('logout') }}" method="post" class="d-none">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link link-warning" href="{{ route('login') }}">
                            <i class="bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-warning" href="{{ route('register') }}">
                            <i class="bi-person-add"></i> Register
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>