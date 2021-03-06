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
            <a id="desk_home_btn" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  md:mt-0 md:ml-4  focus:bg-blue-200 focus:outline-none duration-200 border hover:bg-blue-500 hover:text-white" href="#">Home</a>
            <a id="desk_work_btn" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  md:mt-0 md:ml-4  focus:bg-blue-200 focus:outline-none duration-200 border hover:bg-blue-500 hover:text-white" href="#">Classwork</a>
{{--            <a id="task_submit" class="px-4 py-2 mt-2 hidden text-sm font-semibold bg-transparent rounded-lg  md:mt-0 md:ml-4  focus:bg-blue-200 focus:outline-none duration-200 border hover:bg-green-500  hover:text-white" href="#">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />--}}
{{--                </svg>--}}
{{--            </a>--}}

            <a id="desk_settings" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  md:mt-0 md:ml-4   hover:bg-gray-200 focus:bg-blue-200 focus:outline-none duration-200 border hover:bg-red-500  hover:text-white" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </a>

        </nav>
    </div>
</div>
