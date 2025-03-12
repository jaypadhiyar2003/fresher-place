@props(['tag','size' => 'base'])

@php
$classes ="bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300";
if($size == 'base'){
    $classes .= " px-5 py-1 text-sm";
}
if($size == 'small'){
    $classes .= " px-3 py-1 text-xs";
}
@endphp
<a href="/tags/{{$tag->name}}" class="{{ $classes }}">{{ $tag->name }}</a>
