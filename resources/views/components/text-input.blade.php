@props(['disabled' => false])

<input 
    {{ $disabled ? 'disabled' : '' }} 
    {!! $attributes->merge([
        'class' => 'border-gray-600 
                   dark:border-gray-600  
                   dark:text-gray-00 
                   focus:border-indigo-500 
                   dark:focus:border-indigo-600 
                   focus:ring-indigo-500 
                   dark:focus:ring-indigo-600 
                   rounded-3xl
                   shadow-md'
    ]) !!}
>