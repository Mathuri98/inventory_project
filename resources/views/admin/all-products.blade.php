<x-layout>
    <x-heading>
        All Products
    </x-heading>

    <hr class="my-6 border-gray-900/20">

<x-cards.layout>
    
    @foreach ($products as $product)
            <x-cards.frame>


                <x-cards.action_row :items="$products" :item="$product">

                    <x-cards.delete_item :route="'/products/' . $product->id" :item="$product"></x-cards.delete_item>
                </x-cards.action_row>

                <x-cards.description :item="$product" ></x-cards.description>
                 
                 <a href="/products/{{ $product->id }}" class="text-xs
                    text-blue-800 font-bold hover:underline block mb-1 ">
                   {{ $product->user->name }}
                </a>
                
                

                @if (isset($product->price))
                    <p class="text-sm text-gray-700 font-semibold">${{ $product->price }}</p>
                @endif

                 <p class="text-xs mt-2 text-gray-700 font-semibold">Category: {{$product->category->name}}</p>


            </x-cards.frame>
        @endforeach

        </x-cards.layout>
</x-layout>
