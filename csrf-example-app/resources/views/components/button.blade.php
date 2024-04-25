@props(['class' => ''])

<button {{ $attributes->merge(['class' => 'bg-gray-700 text-white py-2 px-4 rounded-md ' . $class]) }}>
    {{ $slot }}
</button>
