<x-layout>

    <x-heading>
        Categories
    </x-heading>

    <p class="text-center text-sm text-gray-900 italic mt-2">
        Browse through the available categories.
    </p>

    <hr class="my-6 border-gray-900/20">

<x-cards.layout>
    
    @foreach ($categories as $category)
           <x-cards.frame>
                <x-cards.action_row :items="$categories" :item="$category">

                    <a href="/categories/{{ $category->id }}" class="text-red-500  text-xs font-bold hover:text-gray-900">Action</a>
                </x-cards.action_row>
                
                <x-cards.description :item="$category"></x-cards.description>
           </x-cards.frame>
        @endforeach
</x-cards.layout>


</x-layout>
