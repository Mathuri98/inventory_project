@props([
    'type' => 'text'
])

@if($type === 'checkbox')
    <input 
        type="checkbox"
        checked
        {{ $attributes->merge([
            'class' => 'h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500'
        ]) }}
    >
@else
    <input 
        type="{{ $type }}" 
        {{ $attributes->merge([
            'class' => 'w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500'
        ]) }}
    >
@endif
