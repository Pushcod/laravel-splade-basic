@seoTitle(__('Услуги'))

<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Услуги') }}
        </h2>
        </x-slot>

        <x-splade-table :for="$services" />
</x-app-layout>
