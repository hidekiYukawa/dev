<main style="padding-bottom: 10em;">


    {{$slot}}

</main>
<footer style="z-index: 5;"
        class="hide-footer fixed bottom-0 left-0 w-full  justify-start font-bold bg-red-500 text-white opacity-90 md:justify-center">



        @auth
                    <span class="text-white font-bold uppercase">
                        Welcome {{auth()->user()->name}} |
                    </span>

                    <a href="/properties/create" class="hover:text-red" style="color: white;">
                        Post Real Estate |
                    </a>
{{--                <a style="color: white;" href="/properties/create"--}}
{{--                   class="absolute top-1/3 right-5 bg-white text-black py-2 rounded-lg px-4 hover:bg-red">--}}
{{--                    Post Real Estate--}}
{{--                </a>--}}

                <a href="/properties/manage" class="hover:text-red" style="color: white;">
                    <i class="fa-solid fa-gear"></i>
                    Manage Objects | </a>

                <form id="logout-form" class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="text-white">
                        <i class="fa-solid fa-door-closed"></i> Logout
                    </button>
                </form>
        @else
                <a href="/register" class="ml-2 hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
                <a href="/login" class="hover:text-laravel">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            <p class="mx-auto">&copy; 2022, JKlaassen.com </p>
    @endauth

</footer>
<x-flash-message/>



