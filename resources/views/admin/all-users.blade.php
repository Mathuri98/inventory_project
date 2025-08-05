<x-layout>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif


    <x-heading>
        All Users
    </x-heading>

    <hr class="my-6 border-gray-900/20">
    @if ($users->count())

        <div class="px-6 py-4"> <!-- Adds spacing from browser edges -->
            <table class="w-full max-w-7xl mx-auto text-left  border-separate border-spacing-y-4">
                <thead>
                    <tr class="text-gray-600 font-semibold">
                        <th class="px-4 py-2">User Name</th>


                        <th class="px-4 py-2">More</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-transparent">
                    @foreach ($users as $user)
                        <tr class="bg-white rounded-xl shadow-md hover:shadow-xl transition cursor-pointer"
                            onclick="">
                            <td class="px-4 py-3">{{ $user->name }}</td>



                            <td class="px-4 py-3">



                                <x-display.delete_item route="/all-users/{{ $user->id }}"
                                    :item="$user">Delete</x-display.action>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-center">No content to display</p>

    @endif



</x-layout>
