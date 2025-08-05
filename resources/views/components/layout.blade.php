<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inventory Project</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- Generic layout file for both users and admins  --}}
</head>
<body class="pb-10 bg-gray-100 ">


  
<nav class="flex justify-between items-center pl-18 pr-18 px-10 py-4 bg-gray-900 text-sm text-white">
        @guest
               <x-logo route="/login"></x-logo>
              
            <x-anchor href="/login">About Us</x-anchor>
            <x-anchor href="/login">Contact Us</x-anchor>
          <div class="space-x-5">
              <x-anchor href="/register">Sign Up</x-anchor>
                <x-anchor href="/login">Log In</x-anchor>
          </div>
        @endguest


        @auth
        {{-- If its an admin view  --}}
         {{-- <div class="space-x-5 flex">      --}}
         @if (Auth::user()->is_admin)
         <x-logo route="/categories"></x-logo>
          <x-anchor href="/categories">All Categories</x-anchor>
          <x-anchor href="/all-products">All Products</x-anchor>
          <x-anchor href="/all-users">All Users</x-anchor>
           <x-anchor href="/categories/create">Create a Category</x-anchor>
          @else
          {{-- to display logo here --}}
           <x-logo route="/products"></x-logo>
          <x-anchor href="/products">My Products</x-anchor>

          <x-anchor href="/products/create">Create a Product</x-anchor>
         @endif
          
                <form action="/logout" method="POST">
                  @csrf
                  <button>Log Out</button>
                </form>
          {{-- </div> --}}
        @endauth

</nav>

<main>

  {{ $slot }}

</main>

  
</body>
</html>