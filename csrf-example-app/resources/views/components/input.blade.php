@props(['class' => ''])

<input {{ $attributes->merge(['class' => 'block w-full px-4 py-2 border border-gray-300 rounded-md ' . $class]) }}>
