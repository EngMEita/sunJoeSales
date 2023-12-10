@props(['type' => 'text', 'name', 'label' => null, 'required' => false, 'disabled' => false, 'readonly' => false])
<div class="form-floating mb-3">
    <input type="{{ $type }}" class="form-control" id="{{ $name }}" name="{{ $name }}"
        placeholder="{{ $required ? '* ' : '' }}{{ $label ?? $name }}" @if ($required) required @endif
        @if ($disabled) disabled @endif @if ($readonly) readonly @endif>
    <label for="floatingInput">{{ $required ? '* ' : '' }}{{ $label ?? $name }}</label>
</div>
