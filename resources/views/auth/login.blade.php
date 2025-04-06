<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f0f4f8;">
        <div style="background-color: #ffffff; padding: 40px 50px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 100%; max-width: 400px;">
            <h2 style="text-align: center; font-size: 24px; font-weight: 600; color: #333;">Log In to Your Account</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div style="margin-bottom: 20px;">
                    <x-input-label for="email" :value="__('Email')" style="font-size: 16px; font-weight: 500; color: #333;" />
                    <x-text-input
                        id="email"
                        class="block mt-1 w-full"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username"
                        style="width: 100%; padding: 10px 12px; border-radius: 8px; border: 1px solid #ccc; font-size: 14px; background-color: #f9fafb; color: #333;"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red; font-size: 14px;" />
                </div>

                <!-- Password -->
                <div style="margin-bottom: 20px;">
                    <x-input-label for="password" :value="__('Password')" style="font-size: 16px; font-weight: 500; color: #333;" />
                    <x-text-input
                        id="password"
                        class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        style="width: 100%; padding: 10px 12px; border-radius: 8px; border: 1px solid #ccc; font-size: 14px; background-color: #f9fafb; color: #333;"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red; font-size: 14px;" />
                </div>

                <!-- Remember Me -->
                <div style="margin-bottom: 20px; display: flex; align-items: center;">
                    <label for="remember_me" class="inline-flex items-center" style="font-size: 14px; color: #555;">
                        <input
                            id="remember_me"
                            type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"
                            style="margin-right: 8px;"
                        />
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <a href="{{ route('password.request') }}" style="font-size: 14px; color: #007bff;">Forgot your password?</a>
                    <x-primary-button class="ms-3" style="padding: 12px 25px; font-size: 16px; border-radius: 8px; background-color: #007bff; color: white; border: none; cursor: pointer;">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                <div style="text-align: center; margin-top: 20px;">
                    <p style="font-size: 14px; color: #555;">Don't have an account? <a href="{{ route('register') }}" style="color: #007bff;">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
