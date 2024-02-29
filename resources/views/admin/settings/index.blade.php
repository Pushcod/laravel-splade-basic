@seoTitle(__('Настройка сайта'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Настройка сайта') }}
            </h2>
            <a href="{{ route('settings.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новая работа') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white rounded-md max-w-4xl mx-auto">
            <x-splade-table :for="$settings" >
                @cell('logo', $settings)
                <img src="{{ Storage::url($settings->logo) }}" class="h-16" alt="">
                @endcell
{{--                @cell('action', $settings)--}}
{{--                <div class="flex gap-2">--}}
{{--                    <Link href="{{ route('settings.destroy', $casee->id) }}" class="p-2 rounded-md bg-gray-100" confirm="Внимание!" confirm-text="Вы действительно хотите удалить запись?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{__('Удалить')}}</Link>--}}
{{--                    <Link href="{{ route('settings.edit', $casee->id) }}" class="p-2 rounded-md bg-gray-100">{{__('Редактировать')}}</Link>--}}
{{--                </div>--}}

{{--                @endcell--}}
            </x-splade-table>
        </div>

</x-app-layout>
