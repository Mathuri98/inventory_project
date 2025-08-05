<x-layout>

    <x-heading>
        {{ $category->name }}
    </x-heading>

    <p class="text-center text-sm text-gray-900 italic mt-2">
        {{ $category->description }}
    </p>



    <div class="flex justify-center space-x-12 mt-2">
        <a href="/categories/{{ $category->id }}/edit" class="text-red-500 text-xs font-bold hover:text-gray-900 mt-1">
            Edit</a>
        {{-- to display the delete button --}}
        <x-cards.delete_item :route="'/categories/' . $category->id" :item="$category"></x-cards.delete_item>

    </div>

    <hr class="my-6 border-gray-900/20">



    @php
        $products = $category->products;
    @endphp

    @if ($products->isNotEmpty())
        <x-heading class="mt-12 mb-10">Products list</x-heading>

        <x-cards.layout>
            @foreach ($products as $product)
                <x-cards.frame>
                    <x-cards.action_row :items="$products" :item="$product">

                        <x-cards.delete_item :route="'/categories/' . $category->id" :item="$product"> </x-cards.delete_item>

                    </x-cards.action_row>
                    <p class="text-sm text-gray-500 italic mb-2">{{ $product->description }}</p>
                    <p class="text-sm text-gray-700 font-semibold">Price: {{ $product->price }}</p>
                </x-cards.frame>
            @endforeach
        </x-cards.layout>
    @else
        <p class="text-center text-gray-500 italic">No products available in this category.</p>
    @endif

</x-layout>
