@seoTitle(__('Новая заявка'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новый товар') }}
            </h2>
            <a href="{{ route('applications.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку заявок') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form action="{{route('applications.store')}}">
                <x-splade-select label="Статус заявки" name="status_id" :options="$statuses"/>
                <x-splade-input name="title" label="{{__('ФИО')}}" placeholder="{{__('Есть пробитие')}}"/>
                <x-splade-input class="mt-5" name="phone" label="{{__('Номер телефона')}}" placeholder="{{__('Пробитие туза')}}"/>
                <x-splade-input name="email" label="{{__('Электронный адрес')}}"/>
                <x-splade-input date name="date_call" label="{{__('Дата вызова')}}" placeholder="{{__('Смысла нет')}}"/>
                <x-splade-select name="room_type" label="{{__('Тип помещения')}}">
                    <option value="0">{{__('Квартира')}}</option>
                    <option value="1">{{__('Частный дом')}}</option>
                </x-splade-select>
                <x-splade-input date name="time_create" label="{{__('Дата создания')}}" placeholder="{{__('')}}"/>
{{--                <x-splade-select name="isStatus" label="{{__('Статус заявки')}}">--}}
{{--                    <option value="0">{{__('Отклонено')}}</option>--}}
{{--                    <option value="1">{{__('Выполнено')}}</option>--}}
{{--                    <option value="2">{{__('Принято на работу')}}</option>--}}
{{--                    <option value="3">{{__('Ожидание')}}</option>--}}
{{--                </x-splade-select>--}}

                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
