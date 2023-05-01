<x-layout>
    <div class="container">
        @include('partials._hero')
        
        <div class="lg:grid lg:grid-cols-4 gap-4 space-y-4 md:space-y-0 mx-4 mt-4">
            @foreach ($products as $item)
                <x-product-card :item="$item" />
            @endforeach
        </div>
        <div class="mt-6 p-4 w-full">
            {{ $products->links() }}
        </div>

    </div>
</x-layout>