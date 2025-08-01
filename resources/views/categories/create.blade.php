<x-layout>

  <x-heading >Create a New Category</x-heading>


<x-forms.frame method="POST" action="/categories">



  <x-forms.label for="name">Name </x-forms.label>

   <x-forms.input  id="name" name="name"  value="{{old('name')}}"> </x-forms.input>

     <x-forms.error error_name="name"/>


   
   <x-forms.label for="description">Description</x-forms.label>

   <x-forms.input id="description" name="description"  value="{{old('description')}}"> </x-forms.input>

    <x-forms.error error_name="description"/>

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

  






   <x-forms.button>Create Category</x-forms.button>
   
   
</x-forms.frame>

</x-layout>