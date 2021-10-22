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
    <div class="relative py-3  sm:mx-auto">
        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow-2xl rounded-3xl sm:p-10">
            <div class=" mx-auto">
                <div class="divide-y divide-gray-200">
                    <form action="{{route('AddSubject',$student->id)}}" method="post" class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        @csrf
                        <div class="flex items-center justify-between space-x-4">
                            <div class="flex flex-col">
                                <label class="leading-loose">Subject</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <select name="subject" class="pr-4 pl-10  py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                    @foreach ($subjects as $subject)
                                            <option value="{{$subject->id}}">{{$subject->subject_nm}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Exam Year</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <select name="year_of_exam" class="pr-4 pl-10  py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        @for ($i = date('Y'); $i < 2030 ; $i++)
                                            <option value="{{$i}}" name="year_of_exam"  class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                            {{$i}}
                                            </option>
                                        @endfor
                                    </select>

                                </div>
                            </div>
                        </div>


                        <div class="pt-4 flex items-center space-x-4">
                            <a href="{{route('student.index')}}" class="flex bg-red-500 text-white justify-center items-center w-full  px-4 py-3 rounded-md focus:outline-none">
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

