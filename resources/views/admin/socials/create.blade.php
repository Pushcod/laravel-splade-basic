@seoTitle(__('Новая социалка'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новая социалка') }}
            </h2>
            <a href="{{ route('socials.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку работ') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form action="{{route('socials.store')}}">
                <x-splade-file name="icon" label="{{__('Изображение соц сети')}}"/>
                <x-splade-input name="name" label="{{__('Название соц сети')}}" placeholder="{{__('Есть пробитие')}}"/>
                <x-splade-input class="mt-5" name="link" label="{{__('Ссылка')}}" placeholder="{{__('Пробитие туза')}}"/>
                <x-splade-select name="isActive" label="{{__('Статус социалки')}}">
                    <option value="0">{{__('Не активен')}}</option>
                    <option value="1">{{__('Активен')}}</option>
                </x-splade-select>

                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
