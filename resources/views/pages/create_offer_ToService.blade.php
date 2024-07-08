<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('logo/file.png') }}">
    <title>تقديم عرض</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body dir="rtl" class="bg-slate-100">
    @include('layouts.navigation')


    <h1 class=" text-3xl font-bold mr-10 mt-4 ">{{ $order->service->service_name }} </h1>
    <div class=" w-screen grid grid-rows-1 grid-cols-12">
        <div
            class=" bg-[#acdaf2] h-[20rem] mt-10 rounded mr-10 w-full drop-shadow-xl px-10 pt-4 text-right col-span-8 break-words">
            <div class=" border-b-sky-700 border-b-2 w-full pb-3 mb-5">
                <div class=" text-sky-700 text-xl font-bold  "> وصف طلب الخدمة </div>
            </div>
            {{ $order->order_desc }}
        </div>
        <div class=" bg-white rounded drop-shadow-xl w-full h-[17rem] ml-24 col-span-2 mr-20 mt-10 ">
            <div class=" border-b-sky-700 border-b-2 w-52 pb-3 mb-10 mt-2 mr-5">
                <div class=" text-sky-700 text-xl font-bold "> عن الطلب </div>
            </div>
            <div class="mr-10">

                <div class="text-gray-700">
                    <i class="fa-solid fa-user" class="text-blue-500"></i>
                    <div class="mr-3 inline"> حالة الطلب:

                        @if ($order->order_status == 0)
                            غير مكتمل
                        @elseif($order->order_status == 1)
                            مكتمل
                        @endif
                    </div>
                </div>
                <div class="text-gray-700 mt-4"><i class="fa-solid fa-calendar"></i>
                    <div class="mr-3 inline">تاريخ النشر: {{ $order->date_service }}
                    </div>
                </div>
                <div class="text-gray-700 mt-4"><i class="fa-solid fa-calendar"></i>
                    <div class="mr-3 inline"> مدة التسليم: {{ $order->duration_work }}
                    </div>
                </div>
                <div class="text-gray-700 mt-4"><i class="fa-solid fa-location-dot"></i>
                    <div class="mr-3 inline"> {{ $order->city->city_name }}</div>
                </div>
            </div>
        </div>
    </div>




    <div class=" bg-gray-200 h-[27rem] mb-10 mt-10 rounded mr-10 w-8/12 drop-shadow-2xl px-10 pt-4 text-right ">
        <div class=" border-b-sky-700 border-b-2 w-full pb-3 mb-10">
            <div class=" text-sky-700 text-xl font-bold ">قدم عرض للزبون </div>
        </div>
        <form action="{{ url('create_OfferTo_order') }}" method="POST">
            @csrf
            <label for="offer_desc">اكتب تفصايل العرض</label>
            <input type="hidden" value="{{ $order->id }}" name="service_order_id" id="service_order_id">
            <textarea name="offer_desc" id="offer_desc" cols="30" rows="10"
                class=" mt-3 w-full h-24 rounded-md border-2 border-gray-300"></textarea>

            <label for="offer_cost" class="text-slate-600 mb-2 block">قيمة العرض</label>
            <input type="number" class=" border-2 rounded-lg w-64 h-10 p-4 focus:outline-blue-600 block"
                id="offer_cost" name="offer_cost">

            <label for="duration_work" class="text-slate-600 mb-2 block ">مدة التسليم</label>
            <input type="number" class=" border-2 rounded-lg w-64 h-10 p-4 focus:outline-blue-600 block"
                id="duration_work" name="duration_work">
            <div class="flex justify-end">
                <!--<a href="#_"
                    class="relative px-10 py-2 font-medium text-white transition duration-300 bg-blue-600 rounded-md hover:bg-blue-500 ease">
                    <span class="absolute bottom-0 left-0 h-full -ml-2">
                        <svg viewBox="0 0 487 487" class="w-auto h-full opacity-100 object-stretch"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z"
                                fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path>
                        </svg>
                    </span>
                    <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                        <svg viewBox="0 0 487 487" class="object-cover w-full h-full"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z"
                                fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path>
                        </svg>
                    </span>
                    <span class="relative">أضف عرض</span>
                </a>-->
                <button type="submit">
                    <a
                        class="relative px-10 py-3 font-medium text-white transition duration-300 bg-blue-400 rounded-md hover:bg-blue-500 ease">
                        <span class="absolute bottom-0 left-0 h-full -ml-2">
                            <svg viewBox="0 0 487 487" class="w-auto h-full opacity-100 object-stretch"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z"
                                    fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path>
                            </svg>
                        </span>
                        <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                            <svg viewBox="0 0 487 487" class="object-cover w-full h-full"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z"
                                    fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path>
                            </svg>
                        </span>
                        <span class="relative"> إضافة </span>
                    </a></button>
            </div>
    </div>
    </form>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @include('pages/footer')
</body>

</html>
