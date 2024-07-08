<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>تفاصيل الخدمة</title>
    <link rel="icon" href="{{ asset('logo/file.png') }}">
</head>
<body dir="rtl">
    @include('layouts/navigation')

    <h1 class=" text-3xl font-bold mr-10 ">{{ $order->service->service_name }}</h1>
    <div class=" w-screen grid grid-rows-1 grid-cols-12">
        <div
            class=" shadow-xl bg-white h-[20rem] mt-10 rounded mr-10 w-full drop-shadow-xl px-10 pt-4 text-right col-span-8">
            <div class=" border-b-blue-400 border-b-2 w-full pb-3 mb-5">
                <div class=" text-blue-400 text-xl font-bold "> وصف العرض   : {{$offer->offer_desc}}</div>
                
            </div>
            <div class=" break-words ">
                {{ $order->order_desc }}
            </div>
        </div>
        <div class=" bg-white rounded drop-shadow-xl w-full h-[11rem] ml-24 col-span-2 mr-20 mt-10 ">
            <div class=" border-b-blue-400 border-b-2 w-52 pb-3 mb-3 mt-2 mr-5">
                <div class=" text-blue-400 text-xl font-bold "> عن الخدمة </div>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span
                    class="inline-block bg-blue-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">تاريخ
                    تاريخ نشر:{{ $order->date_service }}</span>
                <span
                    class="inline-block bg-blue-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                    المدينة: {{ $order->city->city_name }} </span>
            </div>
            
        </div>
    </div>

    <section class="grid grid-cols-2 ">

    
            <div
                class="max-w-2xl rounded overflow-hidden shadow-lg bg-gradient-to-br text-white from-sky-500 to-blue-300 mt-10 mr-10 break-words p-4">
                @php
                    $userId = $offer->user_id;
                    $user = \App\Models\User::find($userId);
                @endphp


                
                    <div
                        class="max-w-2xl rounded overflow-hidden shadow-lg bg-gradient-to-br from-sky-500 to-blue-300 mt-10 mr-10 break-words">
                        @if ($offer->offer_status == 0)
                        <div class="font-bold text-xl mb-2"> اذا تم قبول العرض الخاص بك سوف تظهر المعلومات الشخصية  لطالب  الخدمة</div>
                        @endif 

                        <div class="px-6 py-4 text-white">

                            <p class=" text-base text-white">
                                وصف العرض :
                                {{ $offer->offer_desc }}
                            </p>
                            @if ($offer->offer_status == 1)
                            <p class="mt-2 text-gray-500 green:text-gray-400">
                                @php 
                                $userid=$offer->service_order->user_id;
                                $user = \App\Models\User::find($userid);
                                @endphp
                                اسم طالب  الخدمة : {{ $user->name . $userid}}
                            </p>
                            <p class=" text-base text-white">
                                الهاتف : {{$user->phone}}
                            </p>
                            <p class=" text-base text-white">
                                الايميل : {{$user->email}}
                            </p>
                            @endif
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-blue-700 mr-2 mb-2">قيمة
                                العرض: {{ $offer->offer_cost }} </span>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-blue-700 mr-2 mb-2">
                                مدة التسليم: {{ $offer->duration_work }} </span>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-gray-950 -700 mr-2 mb-2">
                                حالة العرض: 
                                @if($offer->offer_status == 0)
                                قيد المراجعة 
                                @elseif($offer->offer_status == 1)
                                مقبول
                                @elseif($offer->offer_status == 2)
                                مرفوض
                                @endif
                            </span>
                        </div>
                       

                           

                        </div>
                    </div>
             

    </section>

    @include('pages/footer')
</body>
</html>