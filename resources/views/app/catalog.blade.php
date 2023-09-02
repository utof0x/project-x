<x-base-layout>
    <div class="font-primary text-2xl font-semibold">
        Clothes
    </div>
    <div class="flex">
        {{--        <x-search-bar/>--}}
        @livewire('search-bar')
        <div class="flex justify-center xl:justify-normal flex-wrap gap-y-6 tablet:gap-x-6">
            @foreach($clothes as $item)
                <div>
                    <img class="w-[20.5rem] h-[20.5rem] tablet:w-[17.375rem] tablet:h-[17.375rem] border-md"
                         src="{{ $item->preview_image ?  url('storage/images/' . $item->preview_image) : url('assets/images/product-not-found.png') }}"
                         alt="{{ $item->name }}"
                    />
                    <div class="mt-4 font-primary font-semibold text-sm">
                        {{ $item->name }}
                    </div>
                    <div class="flex items-end mt-2">
                        <div class="font-primary font-semibold text-base">
                            ₴{{ $item->price }}
                        </div>
                        @isset($item->price_old)
                            <div class="ml-1 font-primary font-semibold text-sm text-light-grey line-through">
                                ₴{{ $item->price_old }}
                            </div>
                        @endisset
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-base-layout>
