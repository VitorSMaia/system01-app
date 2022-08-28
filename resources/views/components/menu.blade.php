<div class="h-screen w-screen flex">
    <!-- container -->

    <aside
        class="flex flex-col items-center bg-white text-gray-700 shadow h-full">
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
                    href="{{ route('adm.config.index') }}"
                    class="h-16 px-6 flex flex justify-center items-center w-full
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

    </aside>
    <div class="grow overflow-hidden">
        {{ $slot }}
    </div>
</div>
