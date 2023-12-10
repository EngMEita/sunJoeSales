<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Workorders') }}
        </h2>
    </x-slot>
    <x-bs.main-block space="6">
        @if ($branches->count() > 0)
            <x-bs.sub-block space="6">
                @include('workorders.create')
            </x-bs.sub-block>
        @endif
        <x-bs.sub-block space="6">
            @include('branches.index')
        </x-bs.sub-block>
    </x-bs.main-block>
    @if ($workorders->count() > 0)
        <x-bs.main-block space="6">
            <x-bs.sub-block space="12">
                @include('workorders.index')
            </x-bs.sub-block>
        </x-bs.main-block>
    @endif
</x-app-layout>
