@seoTitle(__('Новая работа'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новая работа') }}
            </h2>
            <a href="{{ route('settings.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку работ') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form action="{{route('settings.store')}}">
                <x-splade-file name="logo" label="{{__('Изображение лого')}}"/>
                <x-splade-input name="name" label="{{__('Название компании')}}" placeholder="{{__('Есть пробитие')}}"/>
                <x-splade-input class="mt-5" name="address" label="{{__('Адресс')}}" placeholder="{{__('Пробитие туза')}}"/>
                <x-splade-input name="schedule" label="{{__('График работы')}}" placeholder="{{__('Смысла нет')}}"/>

                <x-splade-input name="phone_number" label="{{__('Номер телефона')}}" placeholder="{{__('Смысла нет')}}"/>
                <x-splade-input name="email" label="{{__('Электронный адрес')}}" placeholder="{{__('Смысла нет')}}"/>

                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
