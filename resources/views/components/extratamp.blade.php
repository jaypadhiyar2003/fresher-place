@foreach($tags as $tag)
    <!--<x-tag :tag="$tag"> or -->
    <x-tag :$tag />
@endforeach

<!--<x-tag :tag="$tag"> or --> this generate error beacuse comment doesn't work here .


@props(['employer','width' => 90])

@php
    $logoUrl = isset($employer) && $employer->logo
        ? Storage::url($employer->logo)
        : 'https://picsum.photos/id/' . rand(200, 500) . '/' . $width;
@endphp

<img src="{{ $logoUrl }}" alt="" class="rounded-xl" width="{{ $width }}">
