@props(['items', 'item'])


  <div class="flex justify-between space-x-12">
      <a href="/{{$items}}/{{ $item->id }}" class="text-sm font-semibold hover:underline block mb-2">
      {{ $item->name }}
  </a>
      {{$slot}}  {{-- this slot is for the action (either Action or delete product/ delete user) --}}
  </div>