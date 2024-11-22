<div>
    <!-- Team Section -->
    <section class="bg-gray-50 py-12 sm:py-20 lg:py-28">
        <div class="mx-auto max-w-xl px-4 sm:max-w-3xl sm:px-6 md:px-8 lg:max-w-screen-xl">
            <div class="mx-auto mt-12 max-w-screen-xl sm:mt-16">
                @if($users && $users->isNotEmpty())                   
                    <ul class="flex flex-wrap gap-4">
                        @foreach($users as $user)
                        <li class="flex-auto">
                            <footer class="mt-5 flex items-center sm:mt-7 rounded-3xl border border-gray-300/70 px-5 py-1">
                                <a href="#" class="relative mr-3 rounded-lg bg-gray-50">
                                    <img class="lazy h-7 w-7 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out lg:h-7 lg:w-7 entered loaded"
                                        data-src="{{ asset('/assets/images/author-01.jpeg') }}"
                                        alt="Author 01"
                                        data-ll-status="loaded"
                                        src="{{ asset('/assets/images/author-01.jpeg') }}">
                                </a>
                                <h5 class="text-sm font-medium text-gray-900">
                                    <a href="#"><span class="absolute inset-0" aria-hidden="true"></span> {{ $user->name }} </a>
                                </h5>
                            </footer>
                        </li>
                        @endforeach
                    </ul>                   
                @else
                    <p>No users found.</p>
                @endif
            </div>
        </div>
    </section>
    <section class="bg-gray-50 pt-12 sm:pt-16 lg:pt-20">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:flex lg:max-w-screen-2xl lg:items-start lg:px-8">
            <div class="hero-section">
                <h1 class="text-4xl font-bold">User List</h1>
                <div style="overflow-x: auto;"> 
                    @if($users && $users->isNotEmpty())
                        <table class="table-auto">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td>{{ $user->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No users found.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>

