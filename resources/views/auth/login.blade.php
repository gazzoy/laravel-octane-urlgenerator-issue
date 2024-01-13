<app-layout>
    <h1>login page for {{$userName}}</h1>
    <form method="POST" action="{{ route('sample.login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button class="ms-3">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</app-layout>
