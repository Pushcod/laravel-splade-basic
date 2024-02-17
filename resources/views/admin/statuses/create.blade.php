@seoTitle(__('Новый статус'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новый статус') }}
            </h2>
            <a href="{{ route('statuses.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку заявок') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form action="{{route('statuses.store')}}">
{{--                <x-splade-select label="Категория товара" name="category_id" :options="$categories"/>--}}
                <x-splade-input name="name" label="{{__('Название')}}" placeholder="{{__('Есть пробитие')}}"/>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
