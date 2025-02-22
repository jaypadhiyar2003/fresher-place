@props(['employer','width'=>90])
<img src="{{ isset($employer) && $employer->logo ? asset($employer->logo) : 'https://picsum.photos/id/' . rand(200, 500) . '/' . $width }}" alt="" class="rounded-xl" width="{{$width}}">
