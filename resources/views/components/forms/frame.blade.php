@props(['applied_method' => null])

<div class=" flex items-center justify-center mt-10  ">
  <form {{$attributes-> merge(['class'=> "flex flex-col items-start max-w-xl w-full bg-white p-6  rounded-lg shadow-md "])}}>
    @csrf
    
    @if ($applied_method)
        @method($applied_method)
    @endif
    {{ $slot}}

   </form>
</div>