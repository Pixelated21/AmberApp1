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
    <body class="antialiased flex h-screen flex-col font-sans bg-gray-200">
    <x-User.Navbar.dashboard_navbar/>
<!-- component -->
<div class="container mx-auto px-4 sm:px-8">
    <div class="mt-5">
        <div>
            <h2 class="text-2xl font-semibold leading-tight">Students</h2>
        </div>

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            First Name
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Last Name
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            DOB
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Class
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Phone Number
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Email Address
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Gender
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 text-center border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)

                        <tr>
                            <td class="px-5 py-5 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$student->first_nm}}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$student->last_nm}}</p>
                            </td>
                            <td class="px-5 py-5 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$student->dob}}</p>
                            </td>
                            <td class="px-5 py-5 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$student->class}}</p>
                            </td>
                            <td class="px-5 py-5 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$student->phone_nbr}}</p>
                            </td>
                            <td class="px-5 py-5 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$student->email_addr}}</p>
                            </td>
                            <td class="px-5 py-5 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$student->gender}}</p>
                            </td>
                            <td class="px-5 py-5 bg-white text-center flex gap-5 text-sm">
{{--                                <form method="post"  action="{{route('student.destroy',[$student])}}">--}}
{{--                                    @method('delete')--}}
{{--                                    @csrf--}}
{{--                                    <button type="submit" class="bg-red-500 py-2 text-black hover:bg-red-600 duration-300 hover:text-white cursor-pointer px-4 rounded font-semibold">Delete</button>--}}
{{--                                </form>--}}
                                <a href="{{route('student.edit',[$student])}}">
                                    @csrf
                                    <button class="bg-blue-500 py-2 text-black hover:bg-blue-600 duration-300 hover:text-white cursor-pointer px-4 rounded font-semibold">Edit</button>
                                </a>
                                <a href="{{route('student.show',[$student])}}">
                                    @csrf
                                    <button class="bg-green-500 py-2 text-black hover:bg-green-600 duration-300 hover:text-white cursor-pointer px-4 rounded font-semibold">View</button>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$students->links()}}
        </div>
    </div>
</div>
</body>
</html>
