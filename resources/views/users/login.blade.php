<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto my-8">
        <header class="text-center">
            <h2 class="text-3xl font-bold uppercase mb-1">
                Login
            </h2>
            <p class="mb-4 text-lg">Log in to your account</p>
        </header>

        <form action="/users/authenticate" method="POST">
            {{ csrf_field() }}

            <div class="mb-6">
                <label for="email" class="inline-block text-sm mb-2">Email</label>
                <input value="{{old('email')}}" type="email" class="border border-gray-200 rounded p-2 w-full" name="email" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-sm mb-2">
                    Password
                </label>
                <input id="password" type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
                <input id="checkbox" type="checkbox" id="checkbox"> <span class="text-xs"> Show Password</span>
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-aven text-white rounded py-2 px-4 hover:bg-black">
                    Sign In
                </button>
            </div>

            <div class="mt-8">
                <p class="text-sm">
                    Don't have an account?
                    <a href="/register" class="text-aven">Register</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>

<script>
    $(document).ready(function(){
        $('#checkbox').on('change', () => {
            $('#password').attr('type', $('#checkbox').prop('checked') ? "text" : "password"); 
        });
    });
</script>
