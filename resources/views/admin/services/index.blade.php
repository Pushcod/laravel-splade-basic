@seoTitle(__('Услуги'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Услуги') }}
            </h2>
            <a href="{{ route('services.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новая услуга') }}</a>
        </div>
        </x-slot>

        <x-splade-table :for="$services" />
</x-app-layout>
