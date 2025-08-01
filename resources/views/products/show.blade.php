<x-layout>

    <x-heading>
        {{ $product->name }}
    </x-heading>

    <p class="text-center text-sm text-gray-900 italic mt-2">
        {{ $product->description }}
    </p>

   

       <div class="flex justify-center space-x-12 mt-2">
        <a href="/products/{{$product->id}}/edit" class="text-red-500 text-xs font-bold hover:text-gray-900 mt-1">
        Edit</a>
{{-- to display the delete button --}}
        <x-cards.delete_item :route="'/products/' . $product->id" :item="$product" ></x-cards.delete_item>
         
       </div>
   
    <hr class="my-6 border-gray-900/20">

    

    
</x-layout>
