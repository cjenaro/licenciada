@props(['active'])

@php
$classes = ($active ?? false)
            ? 'w-1/4 border-b-2 px-1 py-4 text-center text-sm font-medium border-indigo-500 text-indigo-600 dark:text-indigo-300 dark:border-indigo-300'
            : 'w-1/4 border-b-2 border-transparent px-1 py-4 text-center text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
