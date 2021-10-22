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
<div class="  shadow-md relative z-40 ">
    <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
        <div class="w-full text-gray-700 bg-black dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div class="flex flex-row  items-center justify-between p-4">

                <x-User.logo.logo_normal/>

                <div class="flex justify-between gap-3 ">
                    <a href="{{route('subject.create')}}" class="font-semibold py-2 px-4 bg-white rounded-md hover:bg-gray-300 duration-300">Add Subject</a>
                    {{--                        <button class="font-semibold py-2 px-4 bg-white rounded-md hover:bg-gray-300 duration-300">Add Subject</button>--}}
                </div>
            </div>

        </div>
    </div>
</div>
<!-- component -->
<body class="antialiased font-sans bg-gray-200">
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div>
            <h2 class="text-2xl font-semibold leading-tight">Subject</h2>
        </div>

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Subject Name
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Subject Cost
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 text-center border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subjects as $subject)
                        <tr>

                            <td class="px-5 py-5 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$subject->subject_nm}}</p>
                            </td>
                            <td class="px-5 py-5 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{number_format($subject->cost_amt,2)}}</p>
                            </td>
                            <td class=" py-5 bg-white flex justify-center text-center flex gap-5 text-sm">
                                <form method="post"  action="{{route('subject.destroy',[$subject])}}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="bg-red-500 py-2 w-40 text-black hover:bg-red-600 duration-300 hover:text-white cursor-pointer px-4 rounded font-semibold">Delete</button>
                                </form>

                                <a href="{{route('subject.edit',[$subject])}}">
                                    @csrf
                                    <button class="bg-blue-500 py-2 w-40 text-black hover:bg-blue-600 duration-300 hover:text-white cursor-pointer px-4 rounded font-semibold">Edit</button>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
