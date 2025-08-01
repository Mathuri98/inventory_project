<x-layout>

  <x-heading >Create a New Product</x-heading>


<x-forms.frame method="POST" action="/products">



  <x-forms.label for="name"> Product Name </x-forms.label>

   <x-forms.input  id="name" name="name"  value="{{old('name')}}"> </x-forms.input>

     <x-forms.error error_name="name"/>


     <x-forms.label for="category"> Select a category</x-forms.label>

   <select id="category_id" name="category_id" class="border border-black/20 rounded-md p-1" > 
    @foreach ($categories as $category)
    {{-- pass in the category id here --}}
      <option value="{{$category->id}}">{{$category->name}}</option>
        
    @endforeach



   </select>

     <x-forms.error error_name="category_id"/>


   
   <x-forms.label for="description">Description</x-forms.label>

   <x-forms.input id="description" name="description"  value="{{old('description')}}"> </x-forms.input>

    <x-forms.error error_name="price"/>

     <x-forms.label for="price">Price (in $)</x-forms.label>

   <x-forms.input id="price" name="price" type="number" value="{{old('price')}}"> </x-forms.input>

    <x-forms.error error_name="price"/>



   <div class="flex items-center gap-2">
     <x-forms.label for="active">Active</x-forms.label>

    <x-forms.input 
        id="active" 
        name="active" 
        type="checkbox" 
        value="1"
        :checked="old('active', $item->active ?? false)"  
        class="h-5 w-5 mt-3" 
    />

   {{-- <x-forms.error error_name="is_active"/> --}}
</div>

  






   <x-forms.button>Create Product</x-forms.button>
   
   
</x-forms.frame>

</x-layout>