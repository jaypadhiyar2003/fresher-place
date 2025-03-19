@props(['label', 'name', 'value'])

@php
    $defaults = [
        'type' => 'radio',
        'id' => $name . '-' . $value, // Unique ID for each radio option
        'name' => $name,
        'value' => $value,
    ];
@endphp


<div class="inline-flex ml-3">
    <input {{ $attributes->merge($defaults) }} {{ old($name) == $value ? 'checked' : '' }}>
    <span class="pl-1 ml-1">{{ $label }}</span>
</div>

