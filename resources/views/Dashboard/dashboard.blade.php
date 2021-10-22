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
<div class="h-screen">
<div class="  shadow-md relative z-40 ">
    <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
        <div class="w-full text-gray-700 bg-black dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div class="flex flex-row  items-center justify-between p-4">

                <x-User.logo.logo_normal/>

                <div class="flex justify-between gap-3 ">
                    <a href="{{route('student.index')}}" class="font-semibold py-2 px-4 bg-white rounded-md hover:bg-gray-300 duration-300">Students</a>
                    <a href="{{route('subject.index')}}" class="font-semibold py-2 px-4 bg-white rounded-md hover:bg-gray-300 duration-300">Subjects</a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="" style="background: url('https://source.unsplash.com/random'); background-size: cover;">

</div>
</div>
</body>
</html>
