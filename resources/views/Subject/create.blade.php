<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
<!-- component -->
<div class="h-screen bg-gray-100 flex flex-col justify-center">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow-2xl rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
                <div class="divide-y divide-gray-200">
                    <form action="{{route('subject.store')}}" method="post" class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            @csrf
                        <div class="flex items-center justify-between space-x-4">
                            <div class="flex flex-col">
                                <label class="leading-loose">Subject Name</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <input type="text" name="subject_nm" class="pr-4 pl-10  py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Subject Name">
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Subject Cost</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <input type="text" name="cost_amt"  class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Subject Amount">

                                </div>
                            </div>
                        </div>


                        <div class="pt-4 flex items-center space-x-4">
                            <a href="{{route('subject.index')}}" class="flex bg-red-500 text-white justify-center items-center w-full  px-4 py-3 rounded-md focus:outline-none">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
                            </a>
                            <button type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
