<div class="w-full text-center mt-5">
  <button type="submit" {{$attributes->merge([
    'class'=> "bg-gray-900 text-white px-4 py-1 rounded-md "
  ])}}>{{$slot}}</button>
</div>