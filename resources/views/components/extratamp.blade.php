@foreach($tags as $tag)
    <!--<x-tag :tag="$tag"> or -->
    <x-tag :$tag />
@endforeach

<!--<x-tag :tag="$tag"> or --> this generate error beacuse comment doesn't work here .
