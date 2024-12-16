<x-layout>

    <img class="mt-[-12.5vh] w-full scale-y-[106%] relative z-[-50]" src="{{ asset('images/profile-background.svg') }}"
        alt="">
    <div class="relative">
        <div class="mt-[-150vh] relative">
            <x-app-layout class="mt-[10vh]">
                <div class="py-12 relative">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 w-[60vw]">
                        <div
                            class="p-4 sm:p-8 shadow rounded-[1.5vw] bg-[radial-gradient(87.89%_47.34%_at_66.62%_61.78%,_#B1D93A_0%,_#86B215_65%)]">
                            <div class="max-w-xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>

                        <div
                            class="p-4 sm:p-8 shadow rounded-[1.5vw] bg-[radial-gradient(87.89%_47.34%_at_66.62%_61.78%,_#B1D93A_0%,_#86B215_65%)]">
                            <div class="max-w-xl">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>

                        <div
                            class="p-4 sm:p-8 shadow rounded-[1.5vw] bg-[radial-gradient(87.89%_47.34%_at_66.62%_61.78%,_#B1D93A_0%,_#86B215_65%)]">
                            <div class="max-w-xl">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>
            </x-app-layout>
        </div>

    </div>


</x-layout>
