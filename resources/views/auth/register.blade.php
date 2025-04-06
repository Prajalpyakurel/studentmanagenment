<x-guest-layout>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f8f9fa;">
        <div style="background-color: #ffffff; padding: 40px 50px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 100%; max-width: 450px;">
            <h2 style="text-align: center; font-size: 26px; font-weight: 600; color: #333;">Create an Account</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div style="margin-bottom: 20px;">
                    <x-input-label for="name" :value="__('Name')" style="font-size: 16px; font-weight: 500; color: #333;" />
                    <x-text-input
                        id="name"
                        class="block mt-1 w-full"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        autocomplete="name"
                        style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #ccc; font-size: 14px; background-color: #f9fafb; color: #333;"
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" style="color: red; font-size: 14px;" />
                </div>

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
                        autocomplete="username"
                        style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #ccc; font-size: 14px; background-color: #f9fafb; color: #333;"
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
                        autocomplete="new-password"
                        style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #ccc; font-size: 14px; background-color: #f9fafb; color: #333;"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red; font-size: 14px;" />
                </div>

                <!-- Confirm Password -->
                <div style="margin-bottom: 20px;">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" style="font-size: 16px; font-weight: 500; color: #333;" />
                    <x-text-input
                        id="password_confirmation"
                        class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #ccc; font-size: 14px; background-color: #f9fafb; color: #333;"
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: red; font-size: 14px;" />
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <a href="{{ route('login') }}" style="font-size: 14px; color: #007bff; text-decoration: none;">Already registered?</a>

                    <x-primary-button class="ms-4" style="padding: 12px 25px; font-size: 16px; border-radius: 8px; background-color: #007bff; color: white; border: none; cursor: pointer;">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>

            </form>

            <div style="text-align: center; margin-top: 20px;">
                <p style="font-size: 14px; color: #555;">By creating an account, you agree to our <a href="#" style="color: #007bff;">Terms of Service</a> and <a href="#" style="color: #007bff;">Privacy Policy</a>.</p>
            </div>
        </div>
    </div>
</x-guest-layout>
