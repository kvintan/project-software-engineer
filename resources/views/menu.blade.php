<x-layout>
    <div class="w-full h-[70vh] bg-[#FDF6E1] relative">
        <img class="relative ml-[15vw]" src="{{ asset('images/menu-tropical-sunny.svg') }}" alt="Menu Tropical Sunny">
        <img class="ml-[50vw] mt-[-53vh] relative" src="{{ asset('images/menu-best-seller.svg') }}" alt="Menu Best Seller">
        <img class="ml-[50vw] mt-[5vh] relative" src="{{ asset('images/menu-tropical-sunny-splash.svg') }}"
            alt="Menu Tropical Sunny Splash">
        <img class="ml-[50vw] mt-[5vh] relative" src="{{ asset('images/menu-tropical-desc.svg') }}"
            alt="Menu Tropical Description">
        <a href="/menu">
            <p
                class="bg-[#6FE20D] text-white font-afacad text-[1.2vw] w-[10vw] h-[7vh] relative mt-[3vh] flex items-center justify-center font-bold rounded-[0.5vw] ml-[50vw]">
                Order Now
            </p>
        </a>
    </div>

    <div class="w-full h-[3vh] bg-white relative">
    </div>

    <div class="w-full h-[70vh] bg-[#FFF1EB] relative">
        <img class="relative ml-[8vw]" src="{{ asset('images/menu-berry-banana.svg') }}" alt="Menu Berry Banana">
        <img class="relative ml-[60vw] mt-[-70vh]" src="{{ asset('images/menu-citrus-berry.svg') }}"
            alt="Menu Citrus Berry">
        <img class="relative ml-[37vw] mt-[-20vh]" src="{{ asset('images/menu-best-duo.svg') }}" alt="Menu Best Duo">
        <div class="w-[20vw] h-[8vh] relative ml-[39vw] mt-[15vh]">
            <img src="{{ asset('images/menu-berry-banana-bliss.svg') }}" alt="Menu Berry Banana Bliss">
            <p class="font-afacad text-[1.5vw] relative">Strawberry + Banana</p>
        </div>
        <div class="w-[20vw] h-[8vh] relative ml-[70vw] mt-[-10vh]">
            <img src="{{ asset('images/menu-citrus-berry-zing.svg') }}" alt="Menu Citrus Berry Zing">
            <p class="font-afacad text-[1.5vw] relative">Orange + Strawberry</p>
        </div>
    </div>

    <div class="w-full h-[50vh] relative">
        <img class="mt-[-5vh] ml-[35vw]" src="{{ asset('images/menu-our-menu.svg') }}" alt="Menu Our Menu Tag">
        <img class="relative ml-[55vw] mt-[-23vh] w-[45vw]" src="{{ asset('images/menu-kanan.svg') }}"
            alt="Menu Kanan">
        <img class="relative mt-[-37vh]" src="{{ asset('images/menu-kiri.svg') }}" alt="Menu Kiri">
        <div class="relative w-full">
            <img class="relative ml-[45vw]" src="{{ asset('images/menu-pick-yours.svg') }}" alt="Menu Pick Yours">
            <img class="relative ml-[37.5vw] mt-[3vh]" src="{{ asset('images/menu-signature-juice.svg') }}"
                alt="Menu Signature Juice">
        </div>
    </div>

    <section class="py-8 antialiased md:py-12 mt-[-6vh]">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                    <div class="h-[25vh] w-full relative mb-[2vh]">
                        <a href="#">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ asset('images/menu-botol-1.svg') }}"
                                alt="Menu Botol 1">
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>


                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Signature
                            Apple Juice</a>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Apple • Sugar
                                • Mineral
                                Water • Milk</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                            <p class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                25.</p>
                            <p class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                000</p>

                            <button type="button"
                                class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>


                <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                    <div class="h-[25vh] w-full relative mb-[2vh]">
                        <a href="#">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ asset('images/menu-botol-2.svg') }}"
                                alt="Menu Botol 2">
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>


                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Signature
                            Avocado Juice</a>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Avocado • Sugar •
                                Mineral Water • Milk</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                            <p
                                class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                25.</p>
                            <p class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                000</p>

                            <button type="button"
                                class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>


                <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                    <div class="h-[25vh] w-full relative mb-[2vh]">
                        <a href="#">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ asset('images/menu-botol-3.svg') }}"
                                alt="Menu Botol 3">
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>


                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Signature
                            Banana Juice</a>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Banana • Sugar
                                • Mineral
                                Water • Milk</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                            <p
                                class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                25.</p>
                            <p class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                000</p>

                            <button type="button"
                                class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>


                <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                    <div class="h-[25vh] w-full relative mb-[2vh]">
                        <a href="#">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ asset('images/menu-botol-4.svg') }}"
                                alt="Menu Botol 4">
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>


                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Signature
                            Grape Juice</a>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Grape • Sugar
                                • Mineral
                                Water • Milk</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                            <p
                                class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                25.</p>
                            <p class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                000</p>

                            <button type="button"
                                class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>


                <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                    <div class="h-[25vh] w-full relative mb-[2vh]">
                        <a href="#">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ asset('images/menu-botol-5.svg') }}"
                                alt="Menu Botol 5">
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>


                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Signature
                            Guava Juice</a>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Guava • Sugar
                                • Mineral
                                Water • Milk</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                            <p
                                class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                25.</p>
                            <p class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                000</p>

                            <button type="button"
                                class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>


                <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                    <div class="h-[25vh] w-full relative mb-[2vh]">
                        <a href="#">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ asset('images/menu-botol-6.svg') }}"
                                alt="Menu Botol 6">
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>


                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Signature
                            Mango Juice</a>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Mango • Sugar
                                • Mineral
                                Water • Milk</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                            <p
                                class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                25.</p>
                            <p class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                000</p>

                            <button type="button"
                                class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>


                <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                    <div class="h-[25vh] w-full relative mb-[2vh]">
                        <a href="#">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ asset('images/menu-botol-7.svg') }}"
                                alt="Menu Botol 7">
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>


                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-[1.4vw] font-semibold leading-tight text-black font-afacad hover:underline">Signature
                            Strawberry Juice</a>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Strawberry • Sugar
                                • Mineral
                                Water • Milk</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                            <p
                                class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                25.</p>
                            <p class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                000</p>

                            <button type="button"
                                class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>


                <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                    <div class="h-[25vh] w-full relative mb-[2vh]">
                        <a href="#">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ asset('images/menu-botol-8.svg') }}"
                                alt="Menu Botol 8">
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>


                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Signature
                            Kiwi Juice</a>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Kiwi • Sugar
                                • Mineral
                                Water • Milk</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                            <p
                                class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                25.</p>
                            <p class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                000</p>

                            <button type="button"
                                class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>


                <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                    <div class="h-[25vh] w-full relative mb-[2vh]">
                        <a href="#">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ asset('images/menu-botol-9.svg') }}"
                                alt="Menu Botol 9">
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>


                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Signature
                            Pineapple Juice</a>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Pineapple • Sugar
                                • Mineral
                                Water • Milk</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                            <p
                                class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                25.</p>
                            <p class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                000</p>

                            <button type="button"
                                class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>


                <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                    <div class="h-[25vh] w-full relative mb-[2vh]">
                        <a href="#">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ asset('images/menu-botol-10.svg') }}"
                                alt="Menu Botol 10">
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>


                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Signature
                            Melon Juice</a>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Melon • Sugar
                                • Mineral
                                Water • Milk</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                            <p
                                class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                25.</p>
                            <p class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                000</p>

                            <button type="button"
                                class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>


                <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                    <div class="h-[25vh] w-full relative mb-[2vh]">
                        <a href="#">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ asset('images/menu-botol-11.svg') }}"
                                alt="Menu Botol 11">
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>


                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Signature
                            Orange Juice</a>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Orange • Sugar
                                • Mineral
                                Water • Milk</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                            <p
                                class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                25.</p>
                            <p class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                000</p>

                            <button type="button"
                                class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>


                <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                    <div class="h-[25vh] w-full relative mb-[2vh]">
                        <a href="#">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ asset('images/menu-botol-12.svg') }}"
                                alt="Menu Botol 12">
                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>


                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="text-[1.4vw] font-semibold leading-tight text-black font-afacad hover:underline">Signature
                            Watermelon Juice</a>

                        <div class="mt-2 flex items-center gap-2">
                            <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Watermelon • Sugar
                                • Mineral
                                Water • Milk</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                            <p
                                class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                25.</p>
                            <p class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                000</p>

                            <button type="button"
                                class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                Add Item
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="bg-gradient-to-b from-transparent to-[#F9B401] min-screen h-[150vh] relative"></div>
            <div class="relative mt-[-150vh]">
                <img class="relative ml-[45vw] mt-[10vh]" src="{{ asset('images/menu-lets-try.svg') }}"
                    alt="Menu Lets Try">
                <img class="relative ml-[37vw] mt-[3vh]" src="{{ asset('images/menu-fresh-pair-juice.svg') }}"
                    alt="Menu Fresh Pair Juice">


                <div class="mx-auto max-w-screen-xl px-4 2xl:px-0 relative mt-[5vh]">
                    <!-- Heading & Filters -->
                    <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                        <div
                            class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 bg-white h-[55vh]">
                            <div class="h-[25vh] w-full relative mb-[2vh]">
                                <a href="#">
                                    <img class="relative ml-[2vw] mt-[-3vh]"
                                        src="{{ asset('images/menu-botol-13.svg') }}" alt="Menu Botol 13">
                                </a>
                            </div>
                            <div class="pt-6">
                                <div class="mb-4 flex items-center justify-between gap-4">
                                    <div class="flex items-center justify-end gap-1">
                                        <div id="tooltip-quick-look" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Quick look
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>


                                        <div id="tooltip-add-to-favorites" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Add to favorites
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                    class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Grapple
                                    Splash</a>

                                <div class="mt-2 flex items-center gap-2">
                                    <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Apple • Grape
                                        • Sugar • Mineral Water • Milk</p>
                                </div>

                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                                    <p
                                        class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                        45.</p>
                                    <p
                                        class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                        000</p>

                                    <button type="button"
                                        class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                        Add Item
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div
                            class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 bg-white h-[55vh]">
                            <div class="h-[25vh] w-full relative mb-[2vh]">
                                <a href="#">
                                    <img class="relative ml-[2vw] mt-[-3vh]"
                                        src="{{ asset('images/menu-botol-14.svg') }}" alt="Menu Botol 14">
                                </a>
                            </div>
                            <div class="pt-6">
                                <div class="mb-4 flex items-center justify-between gap-4">
                                    <div class="flex items-center justify-end gap-1">
                                        <div id="tooltip-quick-look" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Quick look
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>


                                        <div id="tooltip-add-to-favorites" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Add to favorites
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                    class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Avo-nana
                                    Smash</a>

                                <div class="mt-2 flex items-center gap-2">
                                    <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Avocado •
                                        Banana • Sugar • Mineral Water • Milk</p>
                                </div>

                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                                    <p
                                        class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                        45.</p>
                                    <p
                                        class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                        000</p>

                                    <button type="button"
                                        class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                        Add Item
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div
                            class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 bg-white h-[55vh]">
                            <div class="h-[25vh] w-full relative mb-[2vh]">
                                <a href="#">
                                    <img class="relative ml-[2vw] mt-[-3vh]"
                                        src="{{ asset('images/menu-botol-15.svg') }}" alt="Menu Botol 15">
                                </a>
                            </div>
                            <div class="pt-6">
                                <div class="mb-4 flex items-center justify-between gap-4">
                                    <div class="flex items-center justify-end gap-1">
                                        <div id="tooltip-quick-look" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Quick look
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>


                                        <div id="tooltip-add-to-favorites" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Add to favorites
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                    class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Tropical
                                    Twist</a>

                                <div class="mt-2 flex items-center gap-2">
                                    <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Banana • Kiwi
                                        • Sugar • Mineral Water • Milk</p>
                                </div>

                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                                    <p
                                        class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                        45.</p>
                                    <p
                                        class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                        000</p>

                                    <button type="button"
                                        class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                        Add Item
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div
                            class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 bg-white h-[55vh]">
                            <div class="h-[25vh] w-full relative mb-[2vh]">
                                <a href="#">
                                    <img class="relative ml-[2vw] mt-[-3vh]"
                                        src="{{ asset('images/menu-botol-16.svg') }}" alt="Menu Botol 16">
                                </a>
                            </div>
                            <div class="pt-6">
                                <div class="mb-4 flex items-center justify-between gap-4">
                                    <div class="flex items-center justify-end gap-1">
                                        <div id="tooltip-quick-look" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Quick look
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>


                                        <div id="tooltip-add-to-favorites" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Add to favorites
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                    class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Mango
                                    Mood Splash</a>

                                <div class="mt-2 flex items-center gap-2">
                                    <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Manggo •
                                        Orange • Sugar • Mineral Water • Milk</p>
                                </div>

                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                                    <p
                                        class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                        45.</p>
                                    <p
                                        class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                        000</p>

                                    <button type="button"
                                        class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                        Add Item
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div
                            class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 bg-white h-[55vh]">
                            <div class="h-[25vh] w-full relative mb-[2vh]">
                                <a href="#">
                                    <img class="relative ml-[2vw] mt-[-3vh]"
                                        src="{{ asset('images/menu-botol-17.svg') }}" alt="Menu Botol 17">
                                </a>
                            </div>
                            <div class="pt-6">
                                <div class="mb-4 flex items-center justify-between gap-4">
                                    <div class="flex items-center justify-end gap-1">
                                        <div id="tooltip-quick-look" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Quick look
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>


                                        <div id="tooltip-add-to-favorites" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Add to favorites
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                    class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Tropical
                                    Sunny Splash</a>

                                <div class="mt-2 flex items-center gap-2">
                                    <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Mango •
                                        Pineapple • Sugar • Mineral Water • Milk</p>
                                </div>

                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                                    <p
                                        class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                        45.</p>
                                    <p
                                        class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                        000</p>

                                    <button type="button"
                                        class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                        Add Item
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div
                            class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 bg-white h-[55vh]">
                            <div class="h-[25vh] w-full relative mb-[2vh]">
                                <a href="#">
                                    <img class="relative ml-[2vw] mt-[-3vh]"
                                        src="{{ asset('images/menu-botol-18.svg') }}" alt="Menu Botol 18">
                                </a>
                            </div>
                            <div class="pt-6">
                                <div class="mb-4 flex items-center justify-between gap-4">
                                    <div class="flex items-center justify-end gap-1">
                                        <div id="tooltip-quick-look" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Quick look
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>


                                        <div id="tooltip-add-to-favorites" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Add to favorites
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                    class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Citrus
                                    Berry Zing</a>

                                <div class="mt-2 flex items-center gap-2">
                                    <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Orange •
                                        Strawberry • Sugar •
                                        Mineral Water • Milk</p>
                                </div>

                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                                    <p
                                        class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                        45.</p>
                                    <p
                                        class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                        000</p>

                                    <button type="button"
                                        class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                        Add Item
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div
                            class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 bg-white h-[55vh]">
                            <div class="h-[25vh] w-full relative mb-[2vh]">
                                <a href="#">
                                    <img class="relative ml-[2vw] mt-[-3vh]"
                                        src="{{ asset('images/menu-botol-19.svg') }}" alt="Menu Botol 19">
                                </a>
                            </div>
                            <div class="pt-6">
                                <div class="mb-4 flex items-center justify-between gap-4">
                                    <div class="flex items-center justify-end gap-1">
                                        <div id="tooltip-quick-look" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Quick look
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>


                                        <div id="tooltip-add-to-favorites" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Add to favorites
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                    class="text-[1.4vw] font-semibold leading-tight text-black font-afacad hover:underline">Berry
                                    Banana Bliss</a>

                                <div class="mt-2 flex items-center gap-2">
                                    <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Strawberry •
                                        Banana • Sugar •
                                        Mineral Water • Milk</p>
                                </div>

                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                                    <p
                                        class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                        45.</p>
                                    <p
                                        class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                        000</p>

                                    <button type="button"
                                        class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                        Add Item
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div
                            class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 bg-white h-[55vh]">
                            <div class="h-[25vh] w-full relative mb-[2vh]">
                                <a href="#">
                                    <img class="relative ml-[2vw] mt-[-3vh]"
                                        src="{{ asset('images/menu-botol-20.svg') }}" alt="Menu Botol 20">
                                </a>
                            </div>
                            <div class="pt-6">
                                <div class="mb-4 flex items-center justify-between gap-4">
                                    <div class="flex items-center justify-end gap-1">
                                        <div id="tooltip-quick-look" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Quick look
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>


                                        <div id="tooltip-add-to-favorites" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Add to favorites
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                    class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">Melon
                                    Rush</a>

                                <div class="mt-2 flex items-center gap-2">
                                    <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">Melon •
                                        Pineapple • Sugar • Mineral Water • Milk</p>
                                </div>

                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                                    <p
                                        class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                        45.</p>
                                    <p
                                        class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                        000</p>

                                    <button type="button"
                                        class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                        Add Item
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
