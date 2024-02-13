@seoTitle(__('Новая работа'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новая категория') }}
            </h2>
            <a href="{{ route('categories.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку категории') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form action="{{route('categories.store')}}">
                <x-splade-input name="title" label="{{__('Название категории')}}" placeholder="{{__('Есть пробитие')}}"/>
                <x-splade-textarea class="mt-5" name="description" label="{{__('Описание категории')}}" placeholder="{{__('Пробитие туза')}}"/>
                <x-splade-file name="image" label="{{__('Изображение категории')}}"/>
                <x-splade-select name="isActive" label="{{__('Статус категории')}}">
                    <option value="0">{{__('Не активен')}}</option>
                    <option value="1">{{__('Активен')}}</option>
                </x-splade-select>
                <x-splade-select name="isPopular" label="{{__('Популярность категории')}}">
                    <option value="0">{{__('Не популярна')}}</option>
                    <option value="1">{{__('Популярна')}}</option>
                </x-splade-select>
                <x-splade-select name="isNew" label="{{__('Новинка категории')}}">
                    <option value="0">{{__('Старый')}}</option>
                    <option value="1">{{__('Новый')}}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
