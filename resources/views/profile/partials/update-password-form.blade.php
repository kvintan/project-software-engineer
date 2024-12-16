<section>
    <header>
        <h2 class="text-3xl text-white font-afacad">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-[1vh] text-xl text-white font-afacad">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>

        <img class="mt-[1vh]" src="{{ asset('images/profile-line.svg') }}" alt="Profile Line">
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label class="font-afacad text-xl text-white" for="update_password_current_password"
                :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password"
                class="mt-1 block w-full pl-[0.3vw]" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label class="font-afacad text-xl text-white" for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password"
                class="mt-1 block w-full pl-[0.3vw]" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label class="font-afacad text-xl text-white" for="update_password_password_confirmation"
                :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full pl-[0.3vw]" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
