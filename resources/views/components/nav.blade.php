<header class="bg-white">
    <div class="container mx-auto px-4 py-8 flex items-center">

        <!-- logo -->
        <a href="/">
            <div class="flex items-center mr-auto md:w-48 flex-shrink-0">
                <img class="h-8 md:h-10" src="{{ asset('images/aven.png') }}" alt="">
                <span class="pl-2 text-2xl font-bold text-aven">AVEN</span>
            </div>
        </a>

        <!-- search -->
        @include('partials._search')

        <!-- phone number -->
        <div class="ml-auto md:w-48 hidden sm:flex flex-col place-items-end">
            <span class="font-bold md:text-xl">+63 963 515 7249</span>
            <span class="font-semibold text-sm text-gray-400">Support 24/7</span>
        </div>

        <!-- buttons -->
        @auth
            <nav class="contents">
                <ul class="ml-4 xl:w-48 flex items-center justify-end">
                    <li class="ml-2 lg:ml-4 relative inline-block">
                        <a class="" href="">
                            <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false"
                                data-prefix="far" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-9x">
                                <path fill="currentColor"
                                    d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="ml-2 lg:ml-4 relative inline-block">
                        <a class="" href="">
                            <div
                                class="absolute -top-1 right-0 z-10 bg-yellow-400 text-xs font-bold px-1 py-0.5 rounded-sm">
                                {{ $cart->count() }}</div>
                            <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false"
                                data-prefix="far" data-icon="shopping-cart" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                class="svg-inline--fa fa-shopping-cart fa-w-18 fa-9x">
                                <path fill="currentColor"
                                    d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- cart count -->
            <div class="ml-4 hidden sm:flex flex-col font-bold mr-3">
                <span class="text-xs text-gray-400">Your Cart</span>
                <span>${{ $totalCartAmount }}</span>
            </div>
            <form action="/logout" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="text-white rounded-lg bg-aven hover:bg-black py-1 px-3"><i
                        class="fa-solid fa-right-from-bracket fa-fw"></i> Logout</button>
            </form>
        @else
            <div class="flex ml-10">
                <a href="/register"
                    class="hover:text-laravel mr-3 bg-gray-200 rounded-lg px-4 py-2 hover:text-white hover:bg-black"><i
                        class="fa-solid fa-user-plus"></i> Sign Up</a>

                <a href="/login"
                    class="hover:text-laravel bg-aven px-4 py-2 rounded-lg text-white hover:text-white hover:bg-black"><i
                        class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </div>
        @endauth

    </div>

    <hr>
</header>
