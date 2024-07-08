<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>طلباتي</title>
    <link rel="icon" href="{{ asset('logo/file.png') }}">
</head>

<body dir="rtl" class="">
    @include('layouts.navigation')<h1 class="text-5xl mr-20 mt-14 mb-10">طلباتي</h1>

    <div class=" grid grid-cols-6">
    <section class=" grid grid-cols-3 bg-slate-200 col-span-2 w-8/12 rounded-lg  mx-4">

        <div class=' flex-row justify-center p-4 mt-32'>
            <a href="/">
                <div
                    class="w-[15rem] p-2 bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000 ">
                    <i class="fa-solid fa-house ml-8 mr-3"></i>
                    الرئيسية
                </div>
            </a>
            <a href="/create_order">
                <div
                    class=" w-[15rem]  p-2 bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
                    <i class="fa-solid fa-plus ml-8 mr-3"></i> إضافة طلب خدمة
                </div>
            </a>
            <a href="/create_portfoilo">
                <div
                    class=" w-[15rem]  p-2  bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
                    <i class="fa-solid fa-plus ml-8 mr-3"></i>
                    إضافة أعمال سابقة
                </div>
            </a>
            <a href="/my_orders">
                <div
                    class=" w-[15rem] l p-2  bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
                    <i class="fa-brands fa-buffer ml-8 mr-3"></i>
                    طلباتي
                </div>
            </a>
        </div>
    </section>





    <div class="col-span-4 grid grid-cols-2 w-full">
        @foreach ($orders as $order)
            <div
                class="max-w-sm w-full max-h-[20rem] py-1 mx-4 rounded overflow-hidden shadow-xl bg-blue-100 mt-10 mr-10">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">نوع الخدمة</div>
                    <p class="text-gray-700 text-base">
                        {{ $order->service->service_name }}
                    </p>
                    

                </div>
                
                <div class="px-6 pt-4 pb-2">
                    <span
                        class="inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                        النشر: {{ $order->date_service }}</span>
                    <span
                        class="inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                        المدينة المطلوب فيها الخدمة: {{ $order->city->city_name }}</span>
                    <span
                        class="inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">حالة
                        الطلب: @if ($order->order_status == 0)
                            غير مكتمل
                        @elseif($order->order_status == 1)
                            مكتمل
                        @endif
                    </span>

                </div>
                <div class="px-6 pt-4 pb-2">
<a href="{{ url('show_offers', $order->id) }}"> <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            رؤية العروض المقدمة على الطلب
                        </button></a>

                </div>

            </div>
        @endforeach
    </div>

    </section>
</div>
    @include('pages/footer')
</body>

</html>
