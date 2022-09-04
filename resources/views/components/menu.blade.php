<div class="flex"   x-data="{ open: false }">
    <!-- container -->

    <div
        class="flex flex-col min-h-screen items-center bg-white text-gray-700 shadow-xl">
        <!-- Side Nav Bar-->

        <div class="h-16 flex items-center w-full">
            <!-- Logo Section -->
            <a class="h-6 w-6 mx-auto" href="http://svelte.dev/">
                <img
                    class="h-6 w-6 mx-auto"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Svelte_Logo.svg/512px-Svelte_Logo.svg.png"
                    alt="svelte logo" />
            </a>
        </div>

        <ul>
            <!-- Items Section -->
            <li class="hover:bg-gray-100">

                <a
                    href="{{ route('adm.home.index') }}"
                    class="h-16 px-6 flex flex justify-center items-center w-full
                    focus:text-orange-500 {{ Route::currentRouteName() === 'adm.home.index' ? 'text-orange-500' : 'text-black' }}">
                    <span class="material-symbols-outlined">
                        home
                    </span>
                </a>
            </li>

            <li class="hover:bg-gray-100">
                <a
                    href="{{ route('adm.user.index') }}"
                    class="h-16 px-6 flex flex justify-center items-center w-full
                        focus:text-orange-500 {{ Route::currentRouteName() === 'adm.user.index' ? 'text-orange-500' : 'text-black' }}">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                </a>
            </li>

            <li class="hover:bg-gray-100">
                <a
                    x-on:click="open = ! open"
                    @click.outside="open = false"
{{--                    href="{{ route('adm.config.index') }}"--}}
                    class="h-16 px-6 flex flex justify-center items-center w-full cursor-pointer
                        focus:text-orange-500 {{ Route::currentRouteName() === 'adm.config.index' ? 'text-orange-500' : 'text-black' }}">
                    <span class="material-symbols-outlined">
                        settings
                    </span>

                </a>
            </li>

        </ul>

        <div class="mt-auto h-16 flex items-center w-full">
            <!-- Action Section -->
            <a
                class="h-16 w-full mx-auto flex flex justify-center items-center
                    w-full focus:text-orange-500 hover:bg-red-200 focus:outline-none"
                href="{{ route('login') }}">
                <span class="material-symbols-outlined">
                    logout
                </span>

            </a>
        </div>

    </div>
    <div  class="absolute flex flex-col flex justify-center items-center">
        <div class="h-48"></div>
        <div x-show="open" x-transition:enter="transition ease-out duration-100"
             x-transition:enter-start="transform opacity-0 scale-95"
             x-transition:enter-end="transform opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-75"
             x-transition:leave-start="transform opacity-100 scale-100"
             x-transition:leave-end="transform opacity-0 scale-95"
             class="flex flex-col justify-center bg-gray-100 w-full rounded rounded-b-lg">
            <a href="{{ route('adm.position.index') }}" class="hover:bg-gray-200 px-2 w-full">Cargos</a>
            <a href="{{ route('login') }}" class="hover:bg-gray-200 px-2 w-full">Setores</a>
            <a href="{{ route('login') }}" class="hover:bg-gray-200  hover:rounded-b-lg px-2 w-full">Empresas</a>
        </div>

    </div>
    <div class="grow">
        {{ $slot }}
    </div>
</div>
