<picture>
    <source srcset="{{ $slot }}.webp" type="image/webp">
    <source srcset="{{ $slot }}" type="image/jpeg">
    <img src="{{ $slot }}" alt="{{ $alt }}">
</picture>
