<x-layout>

  <x-heading >Edit Category: {{$category->name}}</x-heading>


  {{-- posted to the specific category page --}}
<x-forms.frame method="POST" action="/categories/{{$category->id}}" applied_method="PATCH">
  
  <x-forms.label for="name">Name </x-forms.label>

   <x-forms.input  id="name" name="name"  value="{{ $category->name}}"> </x-forms.input>

     <x-forms.error error_name="name"/>


   
   <x-forms.label for="description">Description</x-forms.label>

   <x-forms.input id="description" name="description"  value="{{$category->description}}"> </x-forms.input>

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

  






   <x-forms.button>Edit Category</x-forms.button>
   
   
</x-forms.frame>

</x-layout>