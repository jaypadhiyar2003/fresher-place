@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
        'value' => old($name),
        'rows' => 3,
        'cols' =>50
    ];
@endphp

<x-forms.field :$label :$name>
    <textarea {{ $attributes($defaults) }}> </textarea>
</x-forms.field>

