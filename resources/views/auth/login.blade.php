<x-guest-layout>
    <x-auth-gradient-bg>

        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-slot name="formcard">
            <x-auth-card>

                <div class="block font-medium text-xl text-blue-400">
                    Sign In
                </div>

                <div class="h-0.5 w-10 rounded bg-gradient-to-r from-sky-500 to-indigo-500 mb-6 mt-2">
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- User Name -->
                    <div>
                        <x-label for="username" class="text-zinc-400" :value="__('Username')" />

                        <x-input id="username" class="block mt-1 w-full" type="text" name="username"
                            :value="old('username')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" class="text-zinc-400" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>

                    <div class="flex items-center justify-end">
                        <div class="flex items-center mt-4">
                            <input id="remember_me" name="remember_me" type="checkbox"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-blue-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-indigo-400">
                                Remember me
                            </label>
                        </div>
                        <div class="flex justify-end mt-4 ml-11">
                            @if (Route::has('password.request'))
                                <a class="text-sm text-indigo-400 hover:text-indigo-900"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot password?') }}
                                </a>
                            @endif

                        </div>
                    </div>

                    <x-auth-button class="mt-9 group relative w-full flex justify-center">
                        {{ __('Log in') }}
                    </x-auth-button>

                </form>
            </x-auth-card>
        </x-slot>

    </x-auth-gradient-bg>
</x-guest-layout>
