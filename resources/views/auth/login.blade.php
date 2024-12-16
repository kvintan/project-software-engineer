@if (session('status'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold font-afacad">Success!</strong>
        <span class="block sm:inline">{{ session('status') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.remove();">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <title>Close</title>
                <path
                    d="M14.348 5.652a1 1 0 10-1.414-1.414L10 7.586 7.066 4.652a1 1 0 10-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 001.414 1.414L10 12.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934z" />
            </svg>
        </button>
    </div>
@endif

<x-layout>

    <div class="h-[100vh] pl-[5vw] mt-[5vh] relative">

        <div class="relative z-[-50]">
            <img class="ml-[-7vw] mt-[-7vh]" src="{{ asset('images/login-hiasan.svg') }}" alt="Hiasan Login">
        </div>

        <div
            class="z-[10] relative w-[45vw] h-[65vh] pt-[5vh] ml-[40vw] mt-[-120vh] pl-[5vw] pr-[5vw] rounded-[2vw] border-[0.3vw] shadow-inset-register">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label class="text-xl mt-[5vh]" for="email" :value="__('Email')" />
                    <x-text-input id="email"
                        class="block mt-[1vh] h-[4vh] w-full pl-[0.5vw] font-afacad border-b-[0.3vh] border-black"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-[8vh]">
                    <x-input-label class="text-xl" for="password" :value="__('Password')" />
                    <x-text-input id="password"
                        class="lock mt-[1vh] h-[4vh] w-full pl-[0.5vw] font-afacad border-b-[0.3vh] border-black"
                        type="password" name="password" required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-[1.2vw] text-black font-bold hover:underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-afacad"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button
                        class="ml-[1vw] text-3xl font-afacad h-[7vh] rounded-[2.1vw] hover:brightness-[60%] bg-[radial-gradient(223.16%_67.62%_at_50%_50%,_#698531_26.24%,_#90B042_100%)]">
                        <div class="text-[1.2vw]">
                            {{ __('Log in') }}
                        </div>
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
