<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto my-8">
        <header class="mb-8">
            <h2 class="text-3xl font-bold uppercase mb-1">
                Register
            </h2>
            <p class="mb-4 text-lg">Create an account to start shopping!</p>
        </header>

        <form action="/users" method="POST">
            {{ csrf_field() }}
            <div class="mb-6">
                <label for="name" class="inline-block text-md mb-2">
                    Name
                </label>
                <input value="{{old('name')}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="name" />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-md mb-2">Email</label>
                <input value="{{old('email')}}" type="email" class="border border-gray-200 rounded p-2 w-full" name="email" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-md mb-2">
                    Password
                </label>
                <input value="{{old('password')}}" type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="inline-block text-md mb-2">
                    Confirm Password
                </label>
                <input value="{{old('password_confirmation')}}" type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-aven text-white rounded py-2 px-4 hover:bg-black">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p class="text-sm">
                    Already have an account?
                    <a href="/login" class="text-aven">Login</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
