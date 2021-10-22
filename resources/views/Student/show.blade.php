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
    <div class="  shadow-md relative z-40 ">
        <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
            <div class="w-full text-gray-700 bg-black dark-mode:text-gray-200 dark-mode:bg-gray-800">
                <div class="flex flex-row  items-center justify-between p-4">

                    <x-User.logo.logo_normal/>

                    <div class="flex justify-between gap-3 ">
                        <a href="{{route('AddSubjectView',[$student->id])}}" class="font-semibold py-2 px-4 bg-white rounded-md hover:bg-gray-300 duration-300">Add Subject Choice</a>
{{--                        <a href="{{route('AddSubjectView',[$student->id])}}" class="font-semibold py-2 px-4 bg-white rounded-md hover:bg-gray-300 duration-300">Add Subject Choice</a>--}}
                        <a href="" class="font-semibold py-2 px-4 bg-white rounded-md hover:bg-gray-300 duration-300">Payment History</a>
                        {{--                        <button class="font-semibold py-2 px-4 bg-white rounded-md hover:bg-gray-300 duration-300">Add Subject</button>--}}
                    </div>
                </div>

            </div>
        </div>
    </div><!-- component -->
<body class="antialiased font-sans bg-gray-200">

<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div>
            <h2 class="text-2xl font-semibold leading-tight">{{$student->first_nm}} {{$student->last_nm}}</h2>
        </div>

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Subject Name
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Status
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Amount Due
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Outstanding
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Paid
                        </th>
                        <th
                            class="px-5 py-3 text-center border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                           Year Of Exam
                        </th>
                        <th
                            class="px-5 py-3 text-center border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                           Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($student->subject_choice_subject as $subject )
                        <tr>
                            <td class="px-5 py-5 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$subject->subject->subject_nm}}</p>
                            </td>
                            <td class="px-5 py-5 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    @if ($subject->status === 2)
                                        <span class="text-yellow-300 font-semibold">Pending</span>

                                    @elseif($subject->status === 1)
                                        <span class="text-green-500 font-semibold">Accepted</span>

                                    @else
                                        <span class="text-red-600 font-semibold">Rejected</span>
                                    @endif
                            </td>
                            <td class="px-5 py-5 text-center bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{number_format($subject->subject->cost_amt,2)}}</p>
                            </td>
                            <td class="px-5 py-5 text-center bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{number_format($subject->subject->cost_amt,2)}}</p>
                            </td>
                            <td class="px-5 py-5 text-center bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">0</p>
                            </td>
                            <td class="px-5 py-5 text-center bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{$subject->year_of_exam}}</p>
                            </td>
                            <td class="px-5 py-5 flex justify-center gap-5 text-center bg-white text-sm">
                                @if ($subject->status === 2)
                                    <a href="{{route('Action',['id' => $subject->id,'action' => 1])}}" class=" bg-green-500 rounded hover:bg-green-600 duration-300 py-2 px-4 font-semibold text-white whitespace-no-wrap">Approve</a>
                                    <a href="{{route('Action',['id' => $subject->id,'action' => 0])}}" class=" bg-red-500 rounded hover:bg-red-600 duration-300 py-2 px-4 font-semibold text-white whitespace-no-wrap">Deny</a>
                                @elseif ($subject->status === 0)
                                    <button disabled class=" bg-green-100 cursor-not-allowed rounded py-2 px-4 font-semibold text-white whitespace-no-wrap">Approve</button>
                                    <button disabled class=" bg-red-100 cursor-not-allowed rounded py-2 px-4 font-semibold text-white whitespace-no-wrap">Deny</button>
                                @else
                                    <a href="{{route('Payment',[$subject->id,$student->id])}}"  class=" bg-green-400 rounded py-2 px-4 font-semibold text-white whitespace-no-wrap">Make Payment</a>
                                @endif

                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-5 py-5 text-center bg-white text-sm">
                                    <a href="{{route('AddSubjectView',[$student->id])}}" class="text-gray-900 text-xl font-bold whitespace-no-wrap">Add Subject</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
