@props(['name', 'label' => null, 'required' => false, 'disabled' => false, 'readonly' => false])
<div class="form-floating  mb-3">
    <select class="form-select" id="{{ $name }}" name="{{ $name }}"
        aria-label="{{ $required ? '* ' : '' }}{{ $label ?? $name }}" @if ($required) required @endif
        @if ($disabled) disabled @endif @if ($readonly) readonly @endif>
        {{ $slot }}
    </select>
    <label for="floatingSelect">{{ $required ? '* ' : '' }}{{ $label ?? $name }}</label>
</div>
