@php
        if (empty($image)) {
            $image = 'default.jpg';
        }
        if (null !== $attrs) {
            $attrs = 'class="' . $attrs . '"';
        }

@endphp
<img src="{{ asset('images/products/' . $image) }}" {!! $attrs !!}>