
@props(['employer', 'width' => 90])

@php
    $logoUrl = '';

    if (isset($employer) && $employer->logo) {
        if (Str::startsWith($employer->logo, ['http://', 'https://'])) {
            // Case 2: External URL (like from an API or another site)
            $logoUrl = $employer->logo;
        } elseif (Storage::exists($employer->logo)) {
            // Case 1: Local file in public storage
            $logoUrl = Storage::url($employer->logo);
        } else {
            // Fallback
            $logoUrl = 'https://picsum.photos/id/' . rand(200, 500) . '/' . $width;
        }
    } else {
        // Case 3: No logo at all
        $logoUrl = 'https://picsum.photos/id/' . rand(200, 500) . '/' . $width;
    }
@endphp

<img src="{{ $logoUrl }}" alt="employer logo" class="rounded-xl" width="{{ $width }}">
