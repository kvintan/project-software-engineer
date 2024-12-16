<section class="relative">
    <header class="relative">
        <img class="mt-[-9vh] relative" src="{{ asset('images/profile-my-profile.svg') }}" alt="Profile My Profile">
        <p class="mt-[1vh] text-xl text-white font-afacad">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <img class="mt-[1vh]" src="{{ asset('images/profile-line.svg') }}" alt="Profile Line">

    <form method="post" action="{{ route('profile.update') }}" class="mt-[-1vh] space-y-6">
        @csrf
        @method('patch')

        <div class="relative">
            <x-input-label class="font-afacad text-xl text-white" for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full pl-[0.3vw]"
                :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label class="font-afacad text-xl text-white" for="phone_number" :value="__('Phone Number')" />
            <x-text-input id="phone_number" name="phone_number" type="text" class="mt-1 block w-full pl-[0.3vw]"
                :value="old('phone_number', $user->phone_number)" required autofocus autocomplete="phone_number" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
        </div>

        <div>
            <x-input-label class="font-afacad text-xl text-white" for="name" :value="__('Name')" for="email"
                :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full pl-[0.3vw]"
                :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-lg text-white">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
