<x-layout>

  <x-heading>Create an Account</x-heading>


<x-forms.frame method="POST" action="/register">


  
   <x-forms.label for="name">Name </x-forms.label>

   <x-forms.input type="text" id="name" name="name" required value="{{old('name')}}"> </x-forms.input>

  <x-forms.error error_name="name"/>
 


   <x-forms.label for="email">Email Address </x-forms.label>

   <x-forms.input type="email" id="email" name="email" required value="{{old('email')}}"> </x-forms.input>
     <x-forms.error error_name="email"/>


   
   <x-forms.label for="password">Password</x-forms.label>

   <x-forms.input type="password" id="password" name="password" required> </x-forms.input>
        <x-forms.error error_name="password"/>

    
 
   <x-forms.label for="password_confirmation">Confirm Password</x-forms.label>

   <x-forms.input type="password" id="password_confirmation" name="password_confirmation" required> </x-forms.input>
        <x-forms.error error_name="password_confirmation"/>

   
 
  

    <x-forms.button>Create Account</x-forms.button>
   
   
   
</x-forms.frame>

</x-layout>