<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="flex h-screen pt-16 flex-col md:flex-row p-2">
        @livewire('pos.product')
        @livewire('pos.billing')
    </div>
</x-app-layout>