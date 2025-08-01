@props(['route', 'item'])
  
  
  <form action="{{$route}}" method="POST" onsubmit="return confirm('Are you sure you want to delete {{$item->name}} ?')">
          @csrf
          @method('DELETE')
 <button class="text-red-500 text-xs font-bold hover:text-gray-900 ">Delete</button>

</form>


