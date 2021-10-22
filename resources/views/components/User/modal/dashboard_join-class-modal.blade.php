<div id="join_classroom_modal"
     class="h-screen w-screen z-50 hidden fixed  bg-blue-50  inset-0  items-center px-5 py-12 lg:px-20">
    <div class="w-full px-5 mx-auto border bg-white  rounded-lg shadow-xl lg:px-0 text-blueGray-500 lg:w-1/2"
         aria-hidden="false" aria-describedby="modalDescription" role="dialog">
        <div class="flex items-center justify-end px-6 py-4 ">
            <button id="join_classroom_close_btn"
                    class="p-1 transition-colors duration-200 transform rounded-md hover:bg-opacity-25 hover:bg-blueGray-600 focus:outline-none"
                    type="button" aria-label="Close" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x"
                     width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M10 10l4 4m0 -4l-4 4"></path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col w-full mx-auto text-left lg:px-20 lg:text-center">
            <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">
                Changing The World, One Desk At A Time </h2>
            <h1 class="text-2xl font-semibold leading-none tracking-tighter text-black title-font">
                Join Desk </h1>
        </div>
        <form
            id="join_classroom_form"
            method="post" action="{{route('Join-Classroom')}}"
            class="flex flex-col w-full mx-auto mb-8 lg:px-20 md:mt-0">
            @csrf
            <div class="relative mt-4">
                <label for="class_id" class="text-base leading-7 font-medium text-sm text-blueGray-500">Classroom
                    ID</label>@error('class_id') {{$message}} @enderror
                <input
                    autocomplete="false"
                    required
                    type="text" name="class_id" placeholder="Classroom ID"
                    class="@error('class_id') border-red-600  @enderror w-full px-4 py-3 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">

            </div>
            <div class="relative mt-4">
                <label for="password" class="text-base leading-7 font-medium text-sm text-blueGray-500">Classroom
                    Password</label>

                <div class="flex items-center">
                    <input
                        required
                        type="password" name="class_password" placeholder="Classroom Password"
                        class="w-full px-4 py-3 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">

                </div>
            </div>
            <button
                class="w-full my-6 mt-4 px-16 py-3 mr-2 text-base font-medium text-white transition duration-300 ease-in-out transform bg-orange-500 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-orange-400 ">
                Join Classroom
            </button>
            <p class="mx-auto mt-3 text-xs text-blueGray-500"> ...</p>
        </form>
    </div>
</div>
