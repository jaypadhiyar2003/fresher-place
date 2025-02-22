@php
$classes = "p-4 bg-white/5 rounded-xl hover:border border-blue-600 group transition-colors duration-500";
@endphp
<div {{$attributes(['class' => $classes])}}>
    {{$slot}}
</div>
