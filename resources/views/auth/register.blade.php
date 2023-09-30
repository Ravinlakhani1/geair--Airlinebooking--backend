<x-layout.master>
    <!-- contact-area -->
    <section class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-40 text-center section-title">
                        <h2 class="title">Register</h2>
                    </div>
                    <div class="contact-form">
                        <div class="mx-auto row">
                            <div class="mx-auto col-6">

                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-grp">
                                                {{-- <input type="email" name="email" placeholder="Your Email *"> --}}
                                                <x-text-input id="name" type="text" placeholder="Enter name"
                                                    name="name" value="{{ old('name') }}" required />
                                                <x-input-error :messages="$errors->get('name')" class="" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-grp">
                                                {{-- <input type="email" name="email" placeholder="Your Email *"> --}}
                                                <x-text-input id="email" type="email" placeholder="Enter Email"
                                                    name="email" value="{{ old('email') }}" required />
                                                <x-input-error :messages="$errors->get('email')" class="" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-grp">
                                                <x-text-input id="Password" type="password"
                                                    placeholder="Enter Password" name="password" required />
                                                {{-- <input type="Password" name="password" placeholder="Your Password"> --}}
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <x-text-input id="password_confirmation" type="password"
                                                    placeholder="Confirmation Password" name="password_confirmation"
                                                    required autocomplete="new-password" />
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center submit-btn">
                                        <button type="submit" class="btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- contact-area-end -->
</x-layout.master>

{{--
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
