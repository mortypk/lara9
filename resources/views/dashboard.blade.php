<x-app-layout>
    <x-slot name="header">
        <h2 class="mx-auto max-w-7xl bg-white shadow text-xl px-2 py-1 font-bold border-l-8 rounded-l-md border-blue-300 truncate">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-1">
        <div class="bg-white overflow-hidden shadow-sm">
            <div class="p-3 bg-white border-b border-gray-200">
                You're logged in!
                @include('icons')
            </div>
        </div>
    </div>
</x-app-layout>
