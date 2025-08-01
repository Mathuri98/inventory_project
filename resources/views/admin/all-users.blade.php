<x-layout>
    <x-heading>
        All Users 
    </x-heading>



    <hr class="my-6 border-gray-900/20">

<x-cards.layout>
            @foreach ($users as $user)
         @if (!($user->is_admin))
         <x-cards.frame>

            <x-cards.action_row :items="$users" :item="$user">

                <x-cards.delete_item :route="'/all-users/' . $user->id" :item="$user" >
                    
                </x-cards.delete_item>

            </x-cards.action_row>
               
         </x-cards.frame>
           
         @endif
            
        @endforeach
</x-cards.layout>
</x-layout>
