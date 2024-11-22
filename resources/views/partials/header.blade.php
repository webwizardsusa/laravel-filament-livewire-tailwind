<header class="relative border-b border-gray-300/60 bg-transparent" x-data="{ mobileMenuOpen: false }">
    <nav class="mx-auto flex h-20 max-w-7xl items-center px-4 sm:px-6 lg:px-8">
        <!-- Main navbar for large screens -->
        <div class="flex w-full items-center justify-between">
            <!-- Logo-->
            <div class="flex shrink-0 items-center">
                <a href="index.html" class="lg:hidden">
                    <img src="{{ asset('/assets/images/banter-icon-logo.png') }}" class="h-9 w-auto" />
                </a>
                <a href="{{ url('/') }}" class="hidden lg:block">
                    <img src="{{ asset('/assets/images/banter-logo.png') }}" class="h-9 w-auto" />
                </a>
            </div>

            <!-- Navigation for large screens -->
            <div class="ml-6 hidden items-center justify-between text-xl md:flex md:space-x-0.5 md:text-base lg:space-x-2">
                <!-- Current: "text-red-700", Default: "text-gray-800 hover:text-red-700 transition duration-300 ease-in-out" -->
                <a href="category.html" class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700"> Technology</a>
                <a href="category.html" class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700"> Startup</a>
                <a href="category.html" class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700"> Design</a>
                <a href="category.html" class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700"> Innovation</a>

            <!-- Template pages dropdown container -->
                <div class="relative" x-data="{ open: false }">
                    <!-- Pages dropdown button -->
                    <button type="button" class="group flex items-center px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700" @click="open = true">
                        <span :class="{'text-red-700': open}">Pages</span>

                        <!-- Heroicon name: solid/chevron-down -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5 transform text-gray-600 duration-300 group-hover:text-red-700" :class="{'rotate-180 text-red-700': open}" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Pages dropdown -->
                    <div style="display: none" class="absolute right-0 z-20 mt-3 w-52 space-y-1 rounded-xl bg-white p-2.5 outline-none drop-shadow filter focus:outline-none" x-show.transition="open" @click.away="open = false">
                        <a href="index.html" class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Home</a>
                        <a href="category.html" class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Category page</a>
                        <a href="post.html" class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Post</a>
                        <a href="author.html" class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Author page</a>
                        <a href="tag.html" class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Tag page</a>
                        <a href="about.html" class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">About us</a>
                        <a href="contact.html" class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Contact us </a>
                        <a href="privacy-policy.html" class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Privacy policy</a>
                        <a href="404.html" class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"> 404 page </a>
                    </div>
                </div>
            </div>

            <!-- Search -->
            <div class="relative ml-6 h-10 w-full max-w-xxs rounded-3xl">
                <form class="group rounded-3xl transition duration-300 ease-in-out">
                    <div class="absolute inset-y-0 left-3 flex items-center">
                        <!-- Heroicon name: solid/search -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <input type="email" class="h-10 w-full rounded-3xl border border-gray-200 bg-white px-10 py-3 text-sm leading-5 text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-100" required placeholder="Search..." ,autocomplete="email" />
                </form>
            </div>

            <!-- Hamburger menu button -->
            <button class="group relative ml-6 flex cursor-pointer items-center justify-center rounded-xl bg-gray-50 p-3 transition duration-300 ease-in-out hover:bg-gray-100 focus:outline-none md:hidden" aria-label="Toggle Navigation" @click="mobileMenuOpen = !mobileMenuOpen">
                <span class="relative h-3.5 w-4 transform transition duration-500 ease-in-out">
                    <span class="absolute block h-0.5 rotate-0 transform rounded-full bg-gray-600 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900" :class="mobileMenuOpen ? 'w-0 top-1.5 left-1/2': 'top-0 left-0 w-full'"></span>
                    <span class="absolute left-0 top-1.5 block h-0.5 w-full transform rounded-full bg-gray-600 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900" :class="mobileMenuOpen ? 'rotate-45': 'rotate-0'"></span>
                    <span class="absolute left-0 top-1.5 block h-0.5 w-full transform rounded-full bg-gray-600 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900" :class="mobileMenuOpen ? '-rotate-45': 'rotate-0'" ></span>
                    <span class="absolute block h-0.5 rotate-0 transform rounded-full bg-gray-600 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900" :class="mobileMenuOpen ? 'top-1.5 left-1/2 w-0': 'left-0 top-3 w-full'"></span>
                </span>
            </button>
        </div>
    </nav>

    <!-- Mobile menu -->
    <nav class="md:hidden" aria-label="Global" id="mobile-menu" x-show="mobileMenuOpen" @keydown.escape.window="mobileMenuOpen = false">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-50 text-red-700", Default: "text-gray-800 hover:bg-gray-50 hover:text-red-700 transition duration-300 ease-in-out" -->
            <a href="category.html" class="block rounded-lg bg-gray-50 px-4 py-3 font-medium text-red-700" aria-current="page">Technology</a>
            <a href="category.html" class="block rounded-lg px-4 py-3 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Startup</a>
            <a href="category.html" class="block rounded-lg px-4 py-3 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Design</a>
            <a href="category.html" class="block rounded-lg px-4 py-3 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Innovation</a>
            <a href="category.html" class="block rounded-lg px-4 py-3 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Science</a>
        </div>
        <div class="border-t border-gray-300/70 pb-3 pt-4">
            <div class="mt-2 px-6 text-xs font-medium uppercase tracking-widest text-gray-500"> Pages</div>
            <div class="mt-3 space-y-1 px-2">
                <!-- Current: "bg-gray-50 text-red-700", Default: "text-gray-600 hover:bg-gray-50 hover:text-red-700 transition duration-300 ease-in-out" -->
                <a href="index.html" class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Home</a>
                <a href="category.html" class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Post archive</a>
                <a href="post.html" class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Post</a>
                <a href="author.html" class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"> Author page </a>
                <a href="tag.html" class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Tag page</a>
                <a href="about.html" class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">About us</a>
                <a href="contact.html" class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"> Contact us </a>
                <a href="privacy-policy.html" class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"> Privacy policy </a>
                <a href="404.html" class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"> 404 page </a>
            </div>
        </div>
    </nav>
</header>