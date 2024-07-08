<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="icon" href="{{ asset('logo/file.png') }}">
    <title>عروضي</title>
</head>

<body dir="rtl" class="bg-gray-100">
    @include('layouts.navigation')
    @include('pages.sidebar')
    <div class=" m-10">


        @foreach ($offers as $offer)
          <!--  @ php
              
                $user = \App\Models\User::find($userId);
            @ endphp-->

            <div
                class="flex w-[37rem] flex-col bg-gradient-to-r from-blue-200 to-gray-100   shadow-sm  hover:shadow-lg rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7] border-b-blue-500  border-2">
                <div class="p-4 md:p-7">

                    @if ($offer->offer_status == 1)
                        <p class="mt-2 text-gray-500 dark:text-gray-400">
                            @php 
                            $userid=$offer->service_order->user_id;
                            $user = \App\Models\User::find($userid);
                            @endphp
                            اسم طالب  الخدمة : {{ $user->name . $userid}}
                        </p>
                    @endif
                    <div class="flex flex-row">
                        <div class="mr-5">

                            <p class="ml-10">
                                حالة العرض
                                @if ($offer->offer_status == 0)
                                    قيد المراجعة
                                @elseif($offer->offer_status == 1)
                                    مقبول
                                @elseif($offer->offer_status == 2)
                                    مرفوض
                                @endif
                            </p>
                            <p>وصف العرض {{ $offer->offer_desc }} </p>
                            <p> مدة التسليم : {{ $offer->duration_work }} يوم </p>
                        </div>
                        <div class="mr-40 ">
                            @if ($offer->offer_status == 1)
                                <p>نتيجة التقييم العرض {{ $offer->review->rating }} </p>
                            @endif
                        </div>
                    </div>
                    <a class="mt-3 inline-flex text-end underline items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="{{ url('show_orders', $offer->id) }}">
                        تفاصيل الخدمة
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
            </div>
    </div>
    @endforeach


</body>

</html>
