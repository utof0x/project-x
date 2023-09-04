<header class="relative flex flex-col">
    <div
        class="flex items-center justify-center h-[1.75rem] tablet:h-[2.375rem] bg-blue font-primary font-medium text-sm tablet:text-base text-white">
        Безкоштовна доставка замовлень від ₴2500
    </div>
    <div class="relative hidden tablet:flex justify-between items-center self-center py-4 px-12 max-w-7xl w-full z-10">
        <div class="">logo</div>
        <div class="absolute flex left-2/4 translate-x-[-50%]">
            <div
                class="show-additional-header-content group relative flex items-center h-16 font-primary text-base cursor-pointer px-3"
                data-gender="female"
            >
                Жінки
                <div
                    class="absolute hidden w-[calc(100%-1.5rem)] h-[2px] bg-blue group-hover:block bottom-[-1px]"></div>
            </div>
            <div
                class="show-additional-header-content group relative flex items-center h-16 font-primary text-base cursor-pointer px-3"
                data-gender="male"
            >
                Чоловіки
                <div
                    class="absolute hidden w-[calc(100%-1.5rem)] h-[2px] bg-blue group-hover:block bottom-[-1px]"></div>
            </div>
        </div>
        <div class="flex">
            <div class="flex items-center justify-center h-8 w-8 mr-2">
                <img class="h-4 w-4" src="{{ url('/assets/icons/search.svg') }}" alt="search">
            </div>
            <div class="flex items-center justify-center h-8 w-8 mr-2">
                <img class="h-4 w-4" src="{{ url('/assets/icons/account.svg') }}" alt="account">
            </div>
            <div class="flex items-center justify-center h-8 w-8">
                <img class="h-4 w-4" src="{{ url('/assets/icons/cart.svg') }}" alt="cart">
            </div>
        </div>
    </div>
    <div class="additional-header-content absolute flex justify-between hidden top-[6.375rem] bg-white shadow-custom
        self-center p-12 max-w-7xl w-full border-t-1 border-solid border-lightest-grey">
        <div>
            <div class="font-primary font-semibold text-base text-black">Одяг</div>
            <div class="flex mt-3 border-t-1 border-solid border-lightest-grey">
                <ul class="max-w-[9.5rem] lg:max-w-[14rem] xl:max-w-[17.375rem] w-screen mr-6">
                    <li class="mt-3 font-primary text-base text-light-grey">
                        <a class="hover:underline" href="/catalog/?type=clothes&category=originals">
                            Originals
                        </a>
                    </li>
                    <li class="mt-3 font-primary text-base text-light-grey">
                        <a class="hover:underline" href="/catalog/?type=clothes&category=tracksuits">
                            Спортивні костюми
                        </a>
                    </li>
                    <li class="mt-3 font-primary text-base text-light-grey">
                        <a class="hover:underline" href="/catalog/?type=clothes&category=pants">
                            Штани
                        </a>
                    </li>
                    <li class="mt-3 font-primary text-base text-light-grey">
                        <a class="hover:underline" href="/catalog/?type=clothes&category=sweatshirts_and_hoodies">
                            Світшоти та худі
                        </a>
                    </li>
                    <li class="mt-3 font-primary text-base text-light-grey">
                        <a class="hover:underline" href="/catalog/?type=clothes&category=tshirts">
                            Футболки
                        </a>
                    </li>
                </ul>
                <ul class="max-w-[9.5rem] lg:max-w-[14rem] xl:max-w-[17.375rem] w-screen">
                    <li class="mt-3 font-primary text-base text-light-grey">
                        <a class="hover:underline" href="/catalog/?type=clothes&category=shorts">
                            Шорти
                        </a>
                    </li>
                    <li class="mt-3 font-primary text-base text-light-grey">
                        <a class="hover:underline" href="/catalog/?type=clothes&category=jackets_and_vests">
                            Куртки та жилети
                        </a>
                    </li>
                    <li class="female-only mt-3 font-primary text-base text-light-grey">
                        <a class="hover:underline" href="/catalog/?type=clothes&category=leggings_and_braces">
                            Легінси та бра
                        </a>
                    </li>
                    <li class="mt-3 font-primary text-base text-light-grey">
                        <a class="hover:underline" href="/catalog/?type=clothes&category=socks">
                            Шкарпетки
                        </a>
                    </li>
                    <li class="mt-3 font-primary text-base text-light-grey">
                        <a class="underline" href="/catalog/?type=clothes&category=all">
                            Весь одяг
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="max-w-[10rem] lg:max-w-[14rem] xl:max-w-[17.375rem] w-full">
            <div class="font-primary font-semibold text-base text-black">Взуття</div>
            <ul class="mt-3 border-t-1 border-solid border-lightest-grey">
                <li class="mt-3 font-primary text-base text-light-grey">
                    <a class="hover:underline" href="/catalog/?type=shoes&category=originals">
                        Originals
                    </a>
                </li>
                <li class="mt-3 font-primary text-base text-light-grey">
                    <a class="hover:underline" href="/catalog/?type=shoes&category=sneakers">
                        Кросівки
                    </a>
                </li>
                <li class="mt-3 font-primary text-base text-light-grey">
                    <a class="hover:underline" href="/catalog/?type=shoes&category=sandals_and_flip_flops">
                        Сандалі та пантолети
                    </a>
                </li>
                <li class="mt-3 font-primary text-base text-light-grey">
                    <a class="underline" href="/catalog/?type=shoes&category=all">
                        Все взуття
                    </a>
                </li>
            </ul>
        </div>
        <div class="max-w-[10rem] lg:max-w-[14rem] xl:max-w-[17.375rem] w-full">
            <div class="font-primary font-semibold text-base text-black">Аксесуари</div>
            <ul class="mt-3 border-t-1 border-solid border-lightest-grey">
                <li class="mt-3 font-primary text-base text-light-grey">
                    <a class="hover:underline" href="/catalog/?type=accessories&category=caps">
                        Кепки
                    </a>
                </li>
                <li class="mt-3 font-primary text-base text-light-grey">
                    <a class="hover:underline" href="/catalog/?type=accessories&category=bags_and_backpacks">
                        Сумки з рюкзаками
                    </a>
                </li>
                <li class="mt-3 font-primary text-base text-light-grey">
                    <a class="hover:underline" href="/catalog/?type=accessories&category=hats">
                        Шапки
                    </a>
                </li>
                <li class="mt-3 font-primary text-base text-light-grey">
                    <a class="hover:underline" href="/catalog/?type=accessories&category=water_bottles">
                        Пляшки для води
                    </a>
                </li>
                <li class="mt-3 font-primary text-base text-light-grey">
                    <a class="underline" href="/catalog/?type=accessories&category=all">
                        Всі аксесуари
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
