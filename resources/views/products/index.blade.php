<x-layout>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <x-heading>
        Products
    </x-heading>



    <p class="text-center text-sm text-gray-900 italic mt-2">
        Explore all available products in the system.
    </p>


    <hr class="my-6 border-gray-900/20">

    {{-- name , description , price, category  --}}

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


                          <x-display.action route="/products/{{$product->id}}/edit">Edit</x-display.action>
                            <x-display.delete_item route="/products/{{ $product->id }}"
                                :item="$product">Delete</x-display.action>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layout>
