<section class="relative h-72 bg-aven flex flex-col justify-center align-center text-center space-y-4">
    <div class="absolute top-0 left-0 w-full h-full opacity-70 bg-no-repeat bg-center"
        style="background-image: url('{{ asset('images/aven.png') }}')"></div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white mt-4 animate__animated animate__jello">
            AVEN
        </h1>

        <p class="text-xl text-orange-300 font-bold my-4">
            @auth
                <span class="font-bold uppercase text-xl text-white">
                    Welcome, {{ auth()->user()->name }}!
                </span> <br>
            @endauth
            Enjoy shopping!
        </p>
        @auth
        @else
            <div>
                <a href="/register"
                    class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:bg-black hover:border-black animate__animated animate__rubberBand animate__delay-1s">Sign
                    Up to Shop</a>
            </div>
        @endauth
    </div>
</section>
