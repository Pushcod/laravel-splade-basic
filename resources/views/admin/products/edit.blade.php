@seoTitle(__('Редактировать товара'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Редактирование услуги') }} "{{ $product->title }}"
            </h2>
            <a href="{{ route('products.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку товаров') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form method="PUT" action="{{route('products.update', $product->id)}}" :default="$product">
                <x-splade-select label="Категория товара" name="category_id" :options="$categories"/>
                <x-splade-input name="title" label="{{__('Название товара')}}" placeholder="{{__('Есть пробитие')}}"/>
                <x-splade-textarea class="mt-5" name="content" label="{{__('Описание товара')}}" placeholder="{{__('Пробитие туза')}}"/>
                <x-splade-file name="image" label="{{__('Изображение товара')}}"/>
                <x-splade-input name="price" label="{{__('Цена товара')}}" placeholder="{{__('Смысла нет')}}"/>
                <x-splade-select name="isActive" label="{{__('Статус товара')}}">
                    <option value="0">{{__('Не активен')}}</option>
                    <option value="1">{{__('Активен')}}</option>
                </x-splade-select>
                <x-splade-select name="isPopular" label="{{__('Популярность товара')}}">
                    <option value="0">{{__('Не популярна')}}</option>
                    <option value="1">{{__('Популярна')}}</option>
                </x-splade-select>
                <x-splade-select name="isNew" label="{{__('Новизна товара')}}">
                    <option value="0">{{__('Старая')}}</option>
                    <option value="1">{{__('Новая')}}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
