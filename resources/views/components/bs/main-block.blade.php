@props(['space' => 12])
<div class="py-{{ $space }}">
    <div class="container">
        <div class="row">
            {{ $slot }}
        </div>
    </div>
</div>
