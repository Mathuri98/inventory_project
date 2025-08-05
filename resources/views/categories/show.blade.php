<x-layout>

    <x-heading>
        {{ $category->name }}
    </x-heading>

    <p class="text-center text-sm text-gray-900 italic mt-2">
        {{ $category->description }}
    </p>



    
    <hr class="my-6 border-gray-900/20">



    @php
        $products = $category->products;
    @endphp

    @if ($products->isNotEmpty())
        <x-heading class="mt-12 mb-10">Products list</x-heading>
  <div class="px-6 py-4"> <!-- Adds spacing from browser edges -->
        <table class="w-full max-w-7xl mx-auto text-left  border-separate border-spacing-y-4">
            <thead>
                <tr class="text-gray-600 font-semibold">
                    <th class="px-4 py-2">Product Name</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Product Price</th>
                    <th class="px-4 py-2">Category Name</th>



                    <th class="px-4 py-2">More</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-transparent">
                @foreach ($products as $product)
                    <tr class="bg-white rounded-xl shadow-md hover:shadow-xl transition cursor-pointer"
                        onclick="window.location='/products/{{ $product->id }}';">
                        <td class="px-4 py-3">{{ $product->name }}</td>
                        <td class="px-4 py-3">{{ $product->description }}</td>
                        <td class="px-4 py-3">{{ $product->price }}</td>

                        <td class="px-4 py-3">{{ $product->category->name }}</td>


                        <td class="px-4 py-3">


                        
                            <x-display.delete_item route="/products/{{ $product->id }}"
                                :item="$product">Delete</x-display.action>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <p class="text-center text-gray-500 italic">No products available in this category.</p>
    @endif

</x-layout>
