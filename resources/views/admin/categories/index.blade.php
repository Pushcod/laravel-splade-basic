@seoTitle(__('Категория'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Категория') }}
            </h2>
            <a href="{{ route('categories.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новая категория') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white rounded-md max-w-4xl mx-auto">
            <x-splade-table :for="$categories" >
                @cell('image', $category)
                <img src="{{ Storage::url($category->image) }}" class="h-16" alt="">
                @endcell
                @cell('action', $category)
                <div class="flex gap-2">
                    <Link href="{{ route('categories.destroy', $category->id) }}" class="p-2 rounded-md bg-gray-100" confirm="Внимание!" confirm-text="Вы действительно хотите удалить запись?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{__('Удалить')}}</Link>
                    <Link href="{{ route('categories.edit', $category->id) }}" class="p-2 rounded-md bg-gray-100">{{__('Редактировать')}}</Link>
                </div>

                @endcell
                @cell('isActive', $category)
                    @if($category->isActive == 0)
                        <div class="p-2 rounded-md bg-red-100">
                            {{ __('Не активна') }}
                        </div>
                    @elseif($category->isActive == 1)
                        <div class="p-2 rounded-md bg-green-100">
                            {{ __('Активна') }}
                        </div>

                    @endif

                @endcell
                @cell('isPopular', $category)
                @if($category->isPopular == 0)
                    <div class="p-2 rounded-md bg-red-100">
                        {{ __('Не популярна') }}
                    </div>
                @elseif($category->isPopular == 1)
                    <div class="p-2 rounded-md bg-green-100">
                        {{ __('Популярна') }}
                    </div>

                @endif

                @endcell
                @cell('isNew', $category)
                @if($category->isNew == 0)
                    <div class="p-2 rounded-md bg-red-100">
                        {{ __('Старый') }}
                    </div>
                @elseif($category->isNew == 1)
                    <div class="p-2 rounded-md bg-green-100">
                        {{ __('Новый') }}
                    </div>

                @endif

                @endcell

            </x-splade-table>
        </div>

</x-app-layout>
