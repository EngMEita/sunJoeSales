<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Production') }}
        </h2>
    </x-slot>
    <x-bs.main-block space="6">
        @if ($categories->count() > 0)
            <x-bs.sub-block space="6">
                @include('production.create')
            </x-bs.sub-block>
        @endif
        <x-bs.sub-block space="6">
            @include('categories.index')
        </x-bs.sub-block>
    </x-bs.main-block>
    @if ($productions->count() > 0)
        <x-bs.main-block space="6">
            <x-bs.sub-block space="12">
                @include('production.list')
            </x-bs.sub-block>
        </x-bs.main-block>
    @endif
</x-app-layout>
