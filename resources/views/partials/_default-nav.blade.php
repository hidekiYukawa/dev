<nav class="flex text-white justify-between items-center mb-4">
    <a href="/"><img class="logo w-24" src="{{asset('images/logo.png')}}" alt="" /></a>
    <ul class="flex space-x-6 mr-6 text-lg">
        @auth
            <li>
                    <span class="text-black font-bold uppercase">
                        Welcome {{auth()->user()->name}}
                    </span>
            </li>
            <li>
                <a href="/listings/manage" class="hover:text-red text-black">
                    <i class="fa-solid fa-gear"></i>
                    Manage Objects</a>
            </li>
            <li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="text-white">
                        <i class="fa-solid fa-door-closed"></i> Logout
                    </button>
                </form>
            </li>
        @else
            <li>
                <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        @endauth
    </ul>
</nav>
