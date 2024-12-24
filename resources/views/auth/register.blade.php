<x-layout>

    <div class="h-[105vh] pl-[5vw] relative overflow-hidden">

        <div
            class="w-[40vw] h-[95vh] relative pt-[5vh] pl-[5vw] pr-[5vw] rounded-[2vw] border-[0.3vw] shadow-inset-register">

            <form class="rounded-[2vw]" method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mt-[4vh]">
                    <x-input-label class="text-xl font-afacad" for="name" :value="__('Full Name')" />
                    <x-text-input id="name"
                        class="block mt-[1vh] h-[4vh] w-full pl-[0.5vw] font-afacad border-b-[0.3vh] border-black"
                        type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-[5.8vh]">
                    <x-input-label class="font-afacad text-xl" for="email" :value="__('Email')" />
                    <x-text-input id="email"
                        class="block mt-[1vh] h-[4vh] w-full pl-[0.5vw] font-afacad border-b-[0.3vh] border-black"
                        type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Phone Number -->
                <div class="mt-[5.8vh]">
                    <x-input-label class="font-afacad text-xl" for="phone_number" :value="__('Phone Number')" />
                    <x-text-input id="phone_number"
                        class="block mt-[1vh] h-[4vh] w-full pl-[0.5vw] font-afacad border-b-[0.3vh] border-black"
                        type="phone_number" name="phone_number" :value="old('phone_number')" required
                        autocomplete="phone_number" />
                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-[5.8vh]">
                    <x-input-label class="font-afacad text-xl" for="password" :value="__('Password')" />

                    <x-text-input id="password"
                        class="block mt-[1vh] h-[4vh] w-full pl-[0.5vw] font-afacad border-b-[0.3vh] border-black"
                        type="password" name="password" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-[5.8vh]">
                    <x-input-label class="font-afacad text-xl" for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation"
                        class="block mt-[1vh] h-[4vh] w-full pl-[0.5vw] font-afacad border-b-[0.3vh] border-black"
                        type="password" name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-[4vh]">
                    <a wire:navigate
                        class="text-[1.2vw] text-black font-bold hover:underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-afacad"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button
                        class="ml-[1vw] font-afacad h-[7vh] rounded-[2.1vw] hover:brightness-[60%] bg-[radial-gradient(223.16%_67.62%_at_50%_50%,_#698531_26.24%,_#90B042_100%)]">
                        <div wire:navigate class="text-[1.2vw]">
                            {{ __('Sign Up') }}
                        </div>
                    </x-primary-button>
                </div>
            </form>
        </div>

        <img class="mt-[-100vh] ml-[35vw] relative z-[-10]" src="{{ asset('images/sign-up-hiasan.svg') }}"
            alt="Sign Up Hiasan">

    </div>

</x-layout>
