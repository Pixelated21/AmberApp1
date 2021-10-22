    <div class="w-full shadow-md relative z-40 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-2 lg:px-2">
        <div class="p-4 flex flex-row items-center justify-between">
            <a href="{{route('User-Dashboard')}}" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                <x-logo.amber_desk/>
            </a>
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 items-center md:pb-0 hidden md:flex md:justify-end md:flex-row">
            <a id="desk_home_btn" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  md:mt-0 md:ml-4   hover:bg-gray-200 focus:bg-blue-200 focus:outline-none duration-200 border hover:bg-blue-500 hover:text-white" href="#">Home</a>
            <a id="desk_work_btn" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  md:mt-0 md:ml-4   hover:bg-gray-200 focus:bg-blue-200 focus:outline-none duration-200 border hover:bg-blue-500 hover:text-white" href="#">Homework</a>
            <a id="desk_students" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  md:mt-0 md:ml-4   hover:bg-gray-200 focus:bg-blue-200 focus:outline-none duration-200 border hover:bg-blue-500 hover:text-white" href="#">Students</a>

            <nav :class="{'flex': open, 'hidden': !open}"
                     class="flex-col  hidden  pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                {{--                                            <a class="px-4 py-2 mt-2 text-sm text-orange-500 font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Blog</a>--}}
                {{--                                            <a class="px-4 py-2 mt-2 text-sm text-orange-500 font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Portfolio</a>--}}
                {{--                                            <a class="px-4 py-2 mt-2 text-sm text-orange-500 font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">About</a>--}}
                {{--                                            <a class="px-4 py-2 mt-2 text-sm text-orange-500 font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Contact</a>--}}
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                            class="flex bg-blue-400 hover:bg-blue-500 duration-300 flex-row text-gray-900 bg-gray-200 items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-white focus:text-gray-900  focus:bg-blue-400 focus:outline-none">
                        <span>Options</span>
                        <svg fill="currentColor" viewBox="0 0 20 20"
                             :class="{'rotate-180': open, 'rotate-0': !open}"
                             class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute right-0 bgw-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right">
                        <div
                            class="mt-5 px-2 pt-2 pb-2 z-50 bg-gray-100 rounded-md shadow-2xl dark-mode:bg-gray-700">
                            <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                                <button
                                    id="crt_homework_open_btn"
                                    class="flex flex items-center duration-300  row items-start rounded-lg bg-transparent p-2  hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">
                                    <div class="bg-blue-400 text-white rounded-lg p-3">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                             class="md:h-6 md:w-6 h-4 w-4">
                                            <path
                                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-semibold">Create Homework</p>
                                    </div>
                                </button>

                                <button
                                    id="delete_classroom_btn"
                                    class="flex flex items-center duration-300   row items-start rounded-lg bg-transparent p-2  hover:text-gray-900 focus:text-gray-900 hover:bg-red-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">
                                    <div class="bg-red-500 text-white rounded-lg p-3">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                             class="md:h-6 md:w-6 h-4 w-4">
                                            <path
                                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-semibold">Delete Classroom</p>
                                    </div>
                                </button>


                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </nav>
    </div>
</div>
