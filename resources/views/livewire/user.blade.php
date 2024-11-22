<div>
    <!-- Category Header -->
    <section class="bg-gray-50 py-12 sm:py-10 lg:py-14">
        <!-- Conatiner -->
        <div class="mx-auto max-w-xl px-4 sm:px-12 md:max-w-3xl lg:max-w-screen-xl lg:px-8">
            <div class="flex w-full flex-col items-center md:flex-row md:justify-between">
                <!-- Category -->
                <div class="order-2 mt-8 flex flex-col items-center md:order-1 md:mt-0 md:flex-row">
                    <div class="mt-6 text-center md:ml-5 md:mt-0 md:text-left">
                        <p class="text-xs uppercase tracking-widest text-red-700">Recent in</p>
                        <h1 class="mt-1.5 text-3xl font-medium tracking-normal text-gray-900 sm:text-4xl md:tracking-tight lg:text-5xl lg:leading-tight">
                            Users List
                        </h1>
                    </div>
                </div>
                <!-- Breadcrumb -->
                <div class="order-1 md:order-2">
                    <nav aria-label="breadcrumb" class="flex items-center space-x-1.5 text-[15px] sm:space-x-4">
                        <span>
                            <a href="home.html" class="group flex items-center text-gray-500 no-underline transition duration-300 ease-in-out hover:text-gray-900 hover:no-underline">
                                <!-- Heroicon name: solid/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-[1.125rem] w-[1.125rem] flex-shrink-0 text-gray-400 transition duration-300 ease-in-out group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                                </svg>
                                Home
                            </a>
                        </span>
                        <span class="text-gray-400">
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" >
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                        <span class="text-red-700">User list</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section -->
    <section class="bg-gray-50 py-4 sm:py-4 lg:py-6">       
        <div class="mx-auto max-w-xl px-4 sm:max-w-3xl sm:px-6 md:px-8 lg:max-w-screen-xl">            
            <div class="mx-auto mt-12 max-w-screen-xl sm:mt-16">
                    
                <!-- Search -->
                <div class="relative h-10 w-full rounded-3xl mb-4">
                    <div class="group rounded-3xl transition duration-300 ease-in-out">
                        <div class="absolute inset-y-0 left-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <input type="text" wire:model.live="search"
                            class="h-10 w-full rounded-3xl border border-gray-200 bg-white px-10 py-3 text-sm leading-5 text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-100"
                            placeholder="Search users..." />
                    </div>
                </div>
                   
                <ul class="flex flex-wrap gap-4">
                    @forelse($users as $user)
                        <li wire:key="{{ $user->id }}" class="flex-auto">
                            <footer class="mt-5 flex items-center sm:mt-7 rounded-3xl border border-gray-300/70 px-5 py-1">
                                <a href="#" class="relative mr-3 rounded-lg bg-gray-50">
                                    <img class="h-7 w-7 flex-shrink-0 rounded-lg object-cover object-center"
                                         src="{{ asset('/assets/images/author-01.jpeg') }}" alt="{{ $user->name }}" />
                                </a>
                                <h5 class="text-sm font-medium text-gray-900">
                                    <a href="#">{{ $user->name }}</a>
                                </h5>
                            </footer>
                        </li>
                    @empty
                        <p class="text-gray-500">No users found.</p>
                    @endforelse
                </ul>           
               
            </div>
        </div>
    </section>
</div>



