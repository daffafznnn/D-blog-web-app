@props(['active' => false])
<a {{ $attributes->class(['hover:text-accent', 'hidden' => $active, 'block' => !$active]) }} aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
