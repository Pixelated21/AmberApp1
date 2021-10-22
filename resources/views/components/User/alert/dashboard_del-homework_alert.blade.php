<div
    id="alert_dialog"
    class="my-3 z-20 bg-opacity-60 block text-sm text-left text-white bg-blue-400 h-12 flex items-center p-4 rounded-md relative"
    role="alert"
>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        class="w-6 h-6 mx-2 stroke-current"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
        ></path>
    </svg>
    <div class="flex items-center flex-col md:flex-row  md:w-11/12 justify-between">

        <div class="text-black font-semibold">
            Whoops, Restore {{$undoDeletion->homework_nm}}?
        </div>
        <div>
            <form method="post" action="{{route('Restore-Homework',[$undoDeletion])}}">
                @csrf
                <button class="bg-blue-500 hover:bg-blue-600 duration-300 rounded-md md:py-2 px-4">Undo</button>
            </form>
        </div>

    </div>
    <button
        id="alert_close_btn"
        class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-2 mr-6 outline-none focus:outline-none"
    >
        <span>×</span>
    </button>
</div>
