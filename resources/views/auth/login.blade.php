<x-layout>


    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <x-heading>Welcome Back</x-heading>


    <x-forms.frame method="POST" action="/login">



        <x-forms.label for="email">Email Address </x-forms.label>

        <x-forms.input type="email" id="email" name="email" required value="{{ old('email') }}"> </x-forms.input>

        <x-forms.error error_name="email" />



        <x-forms.label for="password">Password</x-forms.label>

        <x-forms.input type="password" id="password" name="password" required> </x-forms.input>

        <x-forms.error error_name="password" />


        <x-forms.button>Log In</x-forms.button>



    </x-forms.frame>

</x-layout>
