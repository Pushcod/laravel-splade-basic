@seoTitle(__('Товары'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Продукты') }}
            </h2>
            <a href="{{ route('products.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новый товар') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white rounded-md max-w-4xl mx-auto">
            <x-splade-table :for="$products" >
                @cell('image', $products)
                <img src="" class="" alt="">
                @endcell
                @cell('action', $products)
                <div class="flex gap-2">
                    <Link href="{{ route('products.destroy', $products->id) }}" class="p-2 rounded-md bg-gray-100" confirm="Внимание!" confirm-text="Вы действительно хотите удалить запись?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{__('Удалить')}}</Link>
                    <Link href="{{ route('products.edit', $products->id) }}" class="p-2 rounded-md bg-gray-100">{{__('Редактировать')}}</Link>
                </div>

                @endcell
                @cell('isActive', $products)
                @if($products->isActive == 0)
                    <div class="p-2 rounded-md bg-red-100">
                        {{ __('Не активна') }}
                    </div>
                @elseif($products->isActive == 1)
                    <div class="p-2 rounded-md bg-green-100">
                        {{ __('Активна') }}
                    </div>

                @endif

                @endcell
                @cell('isPopular', $products)
                @if($products->isPopular == 0)
                    <div class="p-2 rounded-md bg-red-100">
                        {{ __('Не популярна') }}
                    </div>
                @elseif($products->isPopular == 1)
                    <div class="p-2 rounded-md bg-green-100">
                        {{ __('Популярна') }}
                    </div>

                @endif

                @endcell
                @cell('isNew', $products)
                @if($products->isNew == 0)
                    <div class="p-2 rounded-md bg-red-100">
                        {{ __('Старый') }}
                    </div>
                @elseif($products->isNew == 1)
                    <div class="p-2 rounded-md bg-green-100">
                        {{ __('Новый') }}
                    </div>

                @endif

                @endcell
                @cell('show', $products)
                <Link href="{{ route('products.show', $products->id) }}" class="p-2 rounded-md bg-gray-100">{{__('Подробнее')}}</Link>
                @endcell
            </x-splade-table>
        </div>

</x-app-layout>
