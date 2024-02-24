@seoTitle(__('Заявки'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Отзывы') }}
            </h2>
            <a href="{{ route('reviews.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новый Отзыв') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white rounded-md max-w-4xl mx-auto">
            <x-splade-table :for="$reviews" >
                @cell('image', $reviews)
                <img src="{{ Storage::url($reviews->image) }}" class="" alt="">
                @endcell
                @cell('action', $reviews)
                <div class="flex gap-2">
                    <Link href="{{ route('reviews.destroy', $reviews->id) }}" class="p-2 rounded-md bg-gray-100" confirm="Внимание!" confirm-text="Вы действительно хотите удалить отзыв?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{__('Удалить')}}</Link>
                    <Link href="{{ route('reviews.edit', $reviews->id) }}" class="p-2 rounded-md bg-gray-100">{{__('Редактировать')}}</Link>
                </div>

                @endcell
                @cell('rating', $reviews)
                @if($reviews->rating == 0)
                    <div class="">
                        {{ __('нет оценок') }}
                    </div>
                @elseif($reviews->rating == 1)
                    <div class="">
                        {{ __('⭐') }}
                    </div>
                @elseif($reviews->rating == 2)
                    <div class="">
                        {{ __('⭐⭐') }}
                    </div>
                @elseif($reviews->rating == 3)
                    <div class="">
                        {{ __('⭐⭐⭐') }}
                    </div>
                @elseif($reviews->rating == 4)
                    <div class="">
                        {{ __('⭐⭐⭐⭐') }}
                    </div>
                @elseif($reviews->rating == 5)
                    <div class="">
                        {{ __('⭐⭐⭐⭐⭐') }}
                    </div>

                @endif

                @endcell
                @cell('isActive', $reviews)
                @if($reviews->isActive == 0)
                    <div class="">
                        {{ __('Не активна') }}
                    </div>
                @elseif($reviews->isActive == 1)
                    <div class="">
                        {{ __('Активна') }}
                    </div>

                @endif

                @endcell


            </x-splade-table>
        </div>

</x-app-layout>
