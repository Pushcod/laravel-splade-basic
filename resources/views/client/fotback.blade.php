@extends('client.layout.layout')
@section('title') {{ __('Главная страница') }} @endsection

@section('content')

    <section class="banner-section d-flex justify-content-center align-items-end">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <h1 class="text-white mb-lg-0">Обратная связь</h1>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">fotback</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>



            <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
                <x-splade-form action="{{route('client.FotbackStorаe')}}">

                    <x-splade-input name="title" label="{{__('ФИО')}}" placeholder="{{__('Фамилия Имя Отчество')}}"/>
                    <x-splade-input name="phone" label="{{__('Сообщение')}}" placeholder="{{__('...')}}"/>
                    <x-splade-input name="email" label="{{__('Электронный адрес')}}"/>
                    <x-splade-input date name="date_call" label="{{__('Дата вызова')}}" placeholder="{{__('Смысла нет')}}"/>
                    <x-splade-select name="room_type" label="{{__('Тип помещения')}}">
                        <option value="0">{{__('Квартира')}}</option>
                        <option value="1">{{__('Частный дом')}}</option>
                    </x-splade-select>

                    <x-splade-submit label="Сохранить" class="mt-3"/>
                </x-splade-form>

            </div>


@endsection
