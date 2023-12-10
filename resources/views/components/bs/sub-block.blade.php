@props(['space' => 3])
<div class="col-{{ $space }}">
    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

        {{ $slot }}

    </div>
</div>
