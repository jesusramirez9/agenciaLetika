<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('admin.notice.index') }}" :active="request()->routeIs('admin.notice.index')">
                        Categorías
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{route('admin.posts.index')}}"
                        :active="request()->routeIs('admin.posts.*')">
                        Crear nuevo post
                    </x-jet-nav-link>
                  
                </div>
            </div>

        </div>
    </div>

</nav>