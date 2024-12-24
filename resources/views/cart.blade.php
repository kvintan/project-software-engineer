<x-layout>

    <img class="ml-[25vw] w-[50vw]" src="{{ asset('images/cart-tagline.svg') }}" alt="Cart Tagline">
    <p
        class="ml-[20vw] rounded-[0.7vw] bg-[radial-gradient(87.89%_47.34%_at_66.62%_61.78%,_#B1D93A_0%,_#86B215_65%)] w-[60vw] h-[5vh] font-afacad text-white font-bold text-[1.5vw] flex items-center justify-center">
        Order</p>

    <section class="py-8 antialiased md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0 mt-[-7vh]">
            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex-col lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl mb-[5vh]">
                    <div class="space-y-6">
                        <div class="text-black bg-transparent p-4 shadow-sm md:p-6 w-[70vw] ml-[-10vw]">
                            <div
                                class="space-y-4 w-[77vw] md:flex md:items-center md:justify-between md:gap-6 md:space-y-0 border-t-[0.2vh] border-b-[0.2vh] border-black pt-[2vh] pb-[2vh] h-[15vh]">
                                <!-- Image Section -->
                                <a href="#" class="shrink-0 md:order-1">
                                    <img class="h-[12vh] w-[6vw] border-[0.2vw] border-[#698531] rounded-[0.7vw]"
                                        src="{{ asset('images/cart-kiwi.svg') }}" alt="Cart Kiwi">
                                </a>

                                <!-- Product Info Section -->
                                <div class="flex-1 space-y-1 md:order-2 md:max-w-md">
                                    <a href="#"
                                        class="font-bold text-2xl text-black hover:underline ml-[-10vw]">Kiwi
                                        Juice</a>
                                    <p class="text-lg text-black ml-[-10vw] font-afacad">notes</p>
                                </div>

                                <!-- Quantity and Price Section -->
                                <div class="flex items-center gap-4 md:order-3">
                                    <p class="text-base font-bold text-black ml-[-30vw]">$500</p>
                                    <!-- Quantity Control -->
                                    <div
                                        class="flex items-center w-[7.3vw] h-[4vh] pl-[1vw] rounded-[0.7vw] border border-black ml-[10vw]">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="counter-input"
                                            class="inline-flex h-5 w-5 items-center justify-center rounded-full border border-black bg-slate-300 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                                            <svg class="h-2.5 w-2.5 text-black" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <input type="text" id="counter-input" data-input-counter
                                            class="w-10 border-0 bg-transparent text-center text-sm font-medium text-black focus:outline-none focus:ring-0"
                                            value="2" required />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="counter-input"
                                            class="inline-flex h-5 w-5 items-center justify-center rounded-full border border-black bg-slate-300 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                                            <svg class="h-2.5 w-2.5 text-black" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Price -->
                                    <p class="text-base font-bold text-black ml-[10vw] mr-[-5vw]">$1,499</p>
                                </div>

                                <!-- Remove Button Section -->
                                <div class="flex justify-end md:order-4">
                                    <button type="button"
                                        class="inline-flex items-center text-sm font-medium text-red-600 hover:underline">
                                        <img class="w-6 h-auto" src="{{ asset('images/cart-trashcan.svg') }}"
                                            alt="Cart Trashcan">
                                    </button>
                                </div>
                            </div>

                            <div
                                class="space-y-4 w-[77vw] md:flex md:items-center md:justify-between md:gap-6 md:space-y-0 border-t-[0.2vh] border-b-[0.2vh] border-black pt-[2vh] pb-[2vh] h-[15vh]">
                                <!-- Image Section -->
                                <a href="#" class="shrink-0 md:order-1">
                                    <img class="h-[12vh] w-[6vw] border-[0.2vw] border-[#698531] rounded-[0.7vw]"
                                        src="{{ asset('images/cart-mango.svg') }}" alt="Cart Mango">
                                </a>

                                <!-- Product Info Section -->
                                <div class="flex-1 space-y-1 md:order-2 md:max-w-md">
                                    <a href="#"
                                        class="font-bold text-2xl text-black hover:underline ml-[-10vw]">Mango
                                        Juice</a>
                                    <p class="text-lg text-black ml-[-10vw] font-afacad">notes</p>
                                </div>

                                <!-- Quantity and Price Section -->
                                <div class="flex items-center gap-4 md:order-3">
                                    <p class="text-base font-bold text-black ml-[-30vw]">$500</p>
                                    <!-- Quantity Control -->
                                    <div
                                        class="flex items-center w-[7.3vw] h-[4vh] pl-[1vw] rounded-[0.7vw] border border-black ml-[10vw]">
                                        <button type="button" id="decrement-button"
                                            data-input-counter-decrement="counter-input"
                                            class="inline-flex h-5 w-5 items-center justify-center rounded-full border border-black bg-slate-300 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                                            <svg class="h-2.5 w-2.5 text-black" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <input type="text" id="counter-input" data-input-counter
                                            class="w-10 border-0 bg-transparent text-center text-sm font-medium text-black focus:outline-none focus:ring-0"
                                            value="2" required />
                                        <button type="button" id="increment-button"
                                            data-input-counter-increment="counter-input"
                                            class="inline-flex h-5 w-5 items-center justify-center rounded-full border border-black bg-slate-300 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                                            <svg class="h-2.5 w-2.5 text-black" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Price -->
                                    <p class="text-base font-bold text-black ml-[10vw] mr-[-5vw]">$1,499</p>
                                </div>

                                <!-- Remove Button Section -->
                                <div class="flex justify-end md:order-4">
                                    <button type="button"
                                        class="inline-flex items-center text-sm font-medium text-red-600 hover:underline">
                                        <img class="w-6 h-auto" src="{{ asset('images/cart-trashcan.svg') }}"
                                            alt="Cart Trashcan">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mx-auto relative max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                        <div class="space-y-4 ml-[40vw] mt-[2vh] mr-[-9vw] p-4 shadow-sm sm:p-6">
                            <div
                                class="flex justify-center bg-black relative bg-[radial-gradient(87.89%_47.34%_at_66.62%_61.78%,_#B1D93A_0%,_#86B215_65%)] rounded-[0.5vw] h-[6vh] pt-[1vh]">
                                <p class="text-2xl font-semibold text-white font-afacad">
                                    Cart total</p>
                            </div>

                            <div class="space-y-4">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-[2vw] font-bold text-black font-afacad ml-[3vw]">Subtotal
                                    </dt>
                                    <dd class="text-[2vw] font-bold text-black font-afacad mr-[3vw]">125.000</dd>
                                </dl>
                            </div>

                            <div
                                class="flex justify-center bg-black relative bg-[radial-gradient(87.89%_47.34%_at_66.62%_61.78%,_#B1D93A_0%,_#86B215_65%)] rounded-[0.5vw] h-[6vh] pt-[1vh]">
                                <p class="text-2xl font-semibold text-white font-afacad">
                                    Choose payment method</p>
                            </div>

                            <div class="w-[26vw] h-[5vh] gap-[1.2vw] flex flex-row">
                                <img class="h-[6vh] hover:opacity-[70%]"
                                    src="{{ asset('images/cart-mastercard.svg') }}" alt="Cart Mastercard">
                                <img class="h-[6vh] hover:opacity-[70%]" src="{{ asset('images/cart-visa.svg') }}"
                                    alt="Cart Visa">
                                <img class="h-[6vh] hover:opacity-[70%]" src="{{ asset('images/cart-bca.svg') }}"
                                    alt="Cart BCA">
                                <img class="h-[6vh] hover:opacity-[70%]" src="{{ asset('images/cart-mandiri.svg') }}"
                                    alt="Cart Mandiri">
                                <img class="h-[6vh] hover:opacity-[70%]" src="{{ asset('images/cart-bri.svg') }}"
                                    alt="Cart BRI">
                            </div>
                        </div>



                        <a href="/history"
                            class="flex w-[26vw] h-[6vh] ml-[41.3vw] font-afacad  items-center justify-center rounded-lg bg-[radial-gradient(87.89%_47.34%_at_66.62%_61.78%,_#B1D93A_0%,_#86B215_65%)] px-5 py-2.5 font-bold text-[1.5vw] text-white focus:outline-none focus:ring-4 focus:ring-primary-300">Checkout</a>

                        <div class="flex items-center justify-center gap-2">
                            <a href="/menu" title=""
                                class="flex w-[20vw] h-[6vh] ml-[-55vw] mt-[-11vh] font-afacad  items-center justify-center rounded-lg bg-[radial-gradient(87.89%_47.34%_at_66.62%_61.78%,_#B1D93A_0%,_#86B215_65%)] px-5 py-2.5 font-bold text-[1.5vw] text-white focus:outline-none focus:ring-4 focus:ring-primary-300">
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 19l-7-7 7-7M5 12h14" />
                                </svg>
                                Continue Shopping
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
