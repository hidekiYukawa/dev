<header id="headernav" class="">
    <div class="container">
        <nav id="navigation">
            <a href="/properties" class="logo">HG Estate</a>
            <a aria-label="mobile menu" class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <ul class="menu-left">


                @auth
                    {{--        <div id="one" class="button absolute top-1/3 left-5 bg-black text-white rounded-lg py-2 px-4 hover:bg-red">Modal</div>--}}
                    <li>
                    <span class="text-white font-bold uppercase">
                        Welcome {{auth()->user()->name}}
                    </span>
                    </li>
                    <li>
                        <a href="/properties/create"
                           class="">
                            Post Real Estate
                        </a>
                    </li>
                    <li>
                        <a href="/properties/manage" class="hover:text-red text-black">
                            <i class="fa-solid fa-gear"></i>
                            Manage Objects</a>
                    </li>
                    <li>
                        <form class="inline" method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="text-black">
                                <i class="fa-solid fa-door-closed"></i> <a style="color: black;"> Logout</a>
                            </button>
                        </form>
                    </li>
                @else

                    <li><a href="#about">Property</a></li>
                    <li><a href="#exp">About</a></li>
                    <li><a href="#skills">Services</a></li>
                    {{--                <li><a href="#projects">Portfolio</a></li>--}}
                    <li><a href="#contact">Contact</a></li>
                @endauth
            </ul>
        </nav>
    </div>
</header>
