<div>
    <div class="font-primary text-2xl font-semibold">
        Clothes
    </div>
    <div class="flex">
        <section>
            <div class="pb-4 border-b-1 border-black06">
                <div class="font-primary font-semibold text-black88 text-base">Категорія</div>
                <ul>
                    <li class="w-max mt-4">
                        <label class="flex items-center font-primary text-black88 text-base cursor-pointer">
                            <input wire:model.live="type" type="checkbox" value="clothes"
                                   class="w-4 h-4 border-black15 rounded mr-2"/>
                            Одяг
                        </label>
                    </li>
                    <li class="w-max mt-2">
                        <label class="flex items-center font-primary text-black88 text-base cursor-pointer">
                            <input wire:model.live="type" type="checkbox" value="shoes"
                                   class="w-4 h-4 border-black15 rounded mr-2"/>
                            Взуття
                        </label>
                    </li>
                    <li class="w-max mt-2 cursor-pointer">
                        <label class="flex items-center font-primary text-black88 text-base cursor-pointer">
                            <input wire:model.live="type" type="checkbox" value="accessories"
                                   class="w-4 h-4 border-black15 rounded mr-2"/>
                            Аксесуари
                        </label>
                    </li>
                </ul>
            </div>
            <div class="py-4 border-b-1 border-black06">
                <div class="font-primary font-semibold text-black88 text-base">Стать</div>
                <ul>
                    <li class="w-max mt-4">
                        <label class="flex items-center font-primary text-black88 text-base cursor-pointer">
                            <input wire:model.live="gender" type="checkbox" value="female"
                                   class="w-4 h-4 border-black15 rounded mr-2"/>
                            Жінки
                        </label>
                    </li>
                    <li class="w-max mt-2">
                        <label class="flex items-center font-primary text-black88 text-base cursor-pointer">
                            <input wire:model.live="gender" type="checkbox" value="male"
                                   class="w-4 h-4 border-black15 rounded mr-2"/>
                            Чоловіки
                        </label>
                    </li>
                    <li class="w-max mt-2 cursor-pointer">
                        <label class="flex items-center font-primary text-black88 text-base cursor-pointer">
                            <input wire:model.live="gender" type="checkbox" value="unisex"
                                   class="w-4 h-4 border-black15 rounded mr-2"/>
                            Unisex
                        </label>
                    </li>
                </ul>
            </div>
            {{--            <div>--}}
            {{--                <div>Category:</div>--}}
            {{--                <div>--}}
            {{--                    <input type="checkbox" value="originals" id="originals"/>--}}
            {{--                    <label for="originals">originals</label>--}}
            {{--                </div>--}}
            {{--                <div>--}}
            {{--                    <input type="checkbox" value="jackets_and_vests" id="jackets_and_vests"/>--}}
            {{--                    <label for="jackets_and_vests">jackets + vests</label>--}}
            {{--                </div>--}}
            {{--            </div>--}}

        </section>
        <div class="flex justify-center xl:justify-normal flex-wrap gap-y-6 tablet:gap-x-6">
            @foreach($products as $product)
                <div>
                    <img class="w-[20.5rem] h-[20.5rem] tablet:w-[17.375rem] tablet:h-[17.375rem] border-md"
                         src="{{ isset($product->preview_image) ?  url('storage/images/' . $product->preview_image) : url('assets/images/product-not-found.png') }}"
                         alt="{{ $product->name }}"
                    />
                    <div class="mt-4 font-primary font-semibold text-sm">
                        {{ $product->name }}
                    </div>
                    <div class="flex items-end mt-2">
                        <div class="font-primary font-semibold text-base">
                            ₴{{ $product->price }}
                        </div>
                        @isset($product->price_old)
                            <div class="ml-1 font-primary font-semibold text-sm text-light-grey line-through">
                                ₴{{ $product->price_old }}
                            </div>
                        @endisset
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
