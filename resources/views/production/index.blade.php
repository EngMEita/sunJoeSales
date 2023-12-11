<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Production') }}
        </h2>
    </x-slot>


    <x-bs.main-block space="6">
        <x-bs.sub-block space="12">
            @include('production.list')
        </x-bs.sub-block>
    </x-bs.main-block>

    <x-bs.main-block space="6">
        <x-bs.sub-block space="12">
            @include('categories.index')
        </x-bs.sub-block>
    </x-bs.main-block>

</x-app-layout>
