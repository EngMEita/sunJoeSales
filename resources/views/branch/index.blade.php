<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }} / {{ $branch->id }}. {{ $branch->name }} {{ $branch->is_head ? ' ( * )' : '' }}
            <span class="float-end">
                <a href="{{ route('home.index') }}" class="btn btn-primary">{{ __('Back To Workorders') }}</a>
            </span>
        </h2>
    </x-slot>
    @if ($workorders->count() > 0)
        <x-bs.main-block space="6">
            <x-bs.sub-block space="12">
                @include('workorders.index')
            </x-bs.sub-block>
        </x-bs.main-block>
    @endif
</x-app-layout>
