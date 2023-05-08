{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="grid grid-cols-2 overflow-hidden bg-primary font-raleway"
    style="background-image: url('{{ asset('./images/maze-black.png') }}')">
    <div class="max-w-[450px] mx-auto flex flex-col justify-center items-start">
        <div>
            <h1 class="mb-5 text-6xl font-bold text-white">Elecciones 2023</h1>
            @if ($errors->any())
                <div role="alert">
                    <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
                        Error!
                    </div>
                    <div class="px-4 py-3 text-red-700 bg-red-100 border border-t-0 border-red-400 rounded-b">
                        <p>{{ $errors->first() }}</p>
                    </div>
                </div>
            @else
                <h2 class="text-lg text-white">Inicia sesión para continuar</h2>
            @endif
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="gap-4">
                <div class="mt-10">
                    <div class="relative">
                        <input type="email" id="floating_outlined" id="email" :value="old('email')"
                            name="email" required
                            class="block w-[350px] px-2.5 pb-2.5 pt-4 text-sm bg-transparent rounded-lg border-1 appearance-none text-white border-secondary focus:border-primary-light focus:outline-none focus:ring-0 peer"
                            placeholder=" " value="{{ old('email') }}">
                        <label for="floating_outlined"
                            class="absolute text-sm text-white duration-300 transform -translate-y-7 scale-75 top-2 z-10 origin-[0] bg-transparent px-2 peer-focus:px-2 peer-focus:text-prborder-primary_light peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-7 left-1">Correo
                            Electrónico</label>
                            
                    </div>
                </div>

                <div class="mt-10">
                    <div class="relative">
                        <input type="password" id="floating_outlined" name="password" required
                            class="block w-[350px] px-2.5 pb-2.5 pt-4 text-sm bg-transparent  rounded-lg border-1 appearance-none text-white border-secondary focus:border-primary-light focus:outline-none focus:ring-0 peer"
                            placeholder=" " />
                        <label for="floating_outlined"
                            class="absolute text-sm text-white duration-300 transform -translate-y-7 scale-75 top-2 z-10 origin-[0] bg-transparent  px-2 peer-focus:px-2 peer-focus:text-prborder-primary_light peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-7 left-1">Contraseña</label>
                    </div>
                </div>
            </div>


            <div class="flex items-center justify-between w-full mt-10">

                <div class="block">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                        <span class="ml-2 text-sm text-white">{{ __('Recordarme') }}</span>
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <a class="text-sm underline text-white hover:text-white"
                        href="{{ route('password.request') }}">
                        {{ __('¿Ovidaste tu contraseña?') }}
                    </a>
                @endif
            </div>

            <button class="block w-[150px] px-2.5 pb-2.5 pt-3 group relative overflow-hidden rounded-lg bg-white text-sm shadow mt-5">
                <div class="absolute inset-0 w-3 bg-button transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                <span class="relative text-black group-hover:text-white"> Iniciar sesión</span>
              </button>

        </form>
    </div>

    <img class="hidden w-full h-screen md:block" src="{{ asset('images/elecciones.jpeg') }}" alt="Imagen de Banner">


</div>




</x-guest-layout>
