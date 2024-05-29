@extends('layouts.app')

@section('content')
<div class="container ps-0 md:ps-56">
    <div class="row justify-center">
        <section style="background-image: url('/images/auth_cameras.jpg')"
            class="bg-cover bg-center bg-no-repeat bg-gray-100 bg-blend-multiply">
            <div class="flex flex-col items-center justify-center p-8 mx-auto md:h-full lg:py-0">
                <div class="mt-32 mb-24 w-full rounded-lg shadow sm:max-w-md xl:p-0 bg-neutral-950">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-white">
                            Sign up
                        </h1>

                        <form method="POST" action="{{ route('register') }}" class="space-y-4 md:space-y-6"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="flex flex-row gap-4">
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-white">Name</label>
                                    <input type="text" name="name" id="name"
                                        class="{{ $errors->has('name') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-green-400 text-gray-900 placeholder-gray-400  focus:ring-green-400 focus:border-green-400' }} rounded-lg border-1 text-sm mt-3 block w-full p-2.5"
                                        placeholder="" value="{{ old('name') }}" required autocomplete="name"
                                        autofocus>
                                    @error('name')
                                        <p class="mt-2 text-sm text-red-500"><span class="font-medium">{{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="phone_number" class="block mb-2 text-sm font-medium text-white">Phone
                                        number</label>
                                    <input type="text" name="phone_number" id="phone_number"
                                        class="{{ $errors->has('phone_number') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-green-400 text-gray-900 placeholder-gray-400  focus:ring-green-400 focus:border-green-400' }} rounded-lg border-1 text-sm mt-3 block w-full p-2.5"
                                        placeholder="" value="{{ old('phone_number') }}" required
                                        autocomplete="phone_number" autofocus>
                                    @error('phone_number')
                                        <p class="mt-2 text-sm text-red-500"><span class="font-medium">{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                                <input type="email" name="email" id="email"
                                    class="{{ $errors->has('email') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-green-400 text-gray-900 placeholder-gray-400  focus:ring-green-400 focus:border-green-400' }} rounded-lg border-1 text-sm mt-3 block w-full p-2.5"
                                    placeholder="" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <p class="mt-2 text-sm text-red-500"><span class="font-medium">{{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="flex flex-row gap-4">

                                <div>
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-white">Password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="{{ $errors->has('password') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-green-400 text-gray-900 placeholder-gray-400 focus:ring-green-400 focus:border-green-400' }} rounded-lg border-1 text-sm mt-3 block w-full p-2.5"
                                        required autocomplete="new-password">
                                    @error('password')
                                        <p class="mt-2 text-sm text-red-500"><span class="font-medium">{{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-sm font-medium text-white">Confirm
                                        password</label>
                                    <input type="password" name="password_confirmation" id="confirm-password"
                                        placeholder="••••••••"
                                        class="{{ $errors->has('address') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-green-400 text-gray-900 placeholder-gray-400 focus:ring-green-400 focus:border-green-400' }} rounded-lg border-1 text-sm mt-3 block w-full p-2.5"
                                        required>
                                    @error('confirm-password')
                                        <p class="mt-2 text-sm text-red-500"><span class="font-medium">{{ $message }}
                                        </p>
                                    @enderror
                                </div>

                            </div>

                            <button type="submit"
                                class="w-full text-white bg-green-500 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Register
                            </button>

                            <p class="text-center text-sm font-light text-gray-400">
                                Already got an account? <a href="{{ route('login') }}"
                                    class="font-medium text-green-400 hover:underline">Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection
