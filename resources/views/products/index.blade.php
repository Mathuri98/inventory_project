<x-layout>
    <x-heading>
        Products
    </x-heading>

    <p class="text-center text-sm text-gray-900 italic mt-2">
        Explore all available products in the system.
    </p>

    <hr class="my-6 border-gray-900/20">

    <x-cards.layout>
        @foreach ($products as $product)
            <x-cards.frame>
                <x-cards.action_row :items="$products" :item="$product">
                   

                 <a href="/products/{{ $product->id }}" class="text-red-500  text-xs font-bold hover:text-gray-900">Action</a>
                </x-cards.action_row>

                <x-cards.description :item="$product"></x-cards.description>

                @if (isset($product->price))
                    <p class="text-sm text-gray-700 font-semibold">Price: ${{ $product->price }}</p>
                @endif

                <p class="text-xs mt-2 text-gray-700 font-semibold">Category: {{$product->category->name}}</p>


            </x-cards.frame>
        @endforeach
    </x-cards.layout>
</x-layout>
