@seoTitle(__('Заявки'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Заявки') }}
            </h2>
            <a href="{{ route('applications.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новая заявка') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white rounded-md max-w-4xl mx-auto">
            <x-splade-table :for="$applications" >
                @cell('image', $applications)
                <img src="" class="" alt="">
                @endcell
                @cell('action', $applications)
                <div class="flex gap-2">
                    <Link href="{{ route('applications.destroy', $applications->id) }}" class="p-2 rounded-md bg-gray-100" confirm="Внимание!" confirm-text="Вы действительно хотите удалить запись?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{__('Удалить')}}</Link>
                    <Link href="{{ route('applications.edit', $applications->id) }}" class="p-2 rounded-md bg-gray-100">{{__('Редактировать')}}</Link>
                </div>

                @endcell
                @cell('room_type', $applications)
                @if($applications->room_type == 0)
                    <div class="">
                        {{ __('Квартира') }}
                    </div>
                @elseif($applications->room_type == 1)
                    <div class="">
                        {{ __('Частный дом') }}
                    </div>

                @endif

                @endcell


            </x-splade-table>
        </div>

</x-app-layout>
