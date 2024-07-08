<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>العروض</title>
    <link rel="icon" href="{{ asset('logo/file.png') }}">
</head>

<body dir="rtl" class=" bg-gray-100 ">
    @include('layouts/navigation')

    <h1 class=" text-3xl font-bold mr-10 ">{{ $order->service->service_name }}</h1>
    <div class=" w-screen grid grid-rows-1 grid-cols-12">
        <div
            class=" shadow-xl bg-white h-[20rem] mt-10 rounded mr-10 w-full drop-shadow-xl px-10 pt-4 text-right col-span-8">
            <div class=" border-b-blue-400 border-b-2 w-full pb-3 mb-5">
                <div class=" text-blue-400 text-xl font-bold "> وصف الخدمة </div>
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

        @foreach ($offers as $offer)
            <div
                class="max-w-2xl rounded overflow-hidden shadow-lg bg-gradient-to-br text-white from-sky-500 to-blue-300 mt-10 mr-10 break-words p-4">
                @php
                    $userId = $offer->user_id;
                    $user = \App\Models\User::find($userId);
                @endphp


                @if ($offer->offer_status == 0)
                    <div
                        class="max-w-2xl rounded overflow-hidden shadow-lg bg-gradient-to-br from-sky-500 to-blue-300 mt-10 mr-10 break-words">
                        <div class="font-bold text-xl mb-2"> اقبل العرض لرؤية تفاصيل مقدم العرض</div>


                        <div class="px-6 py-4 text-white">

                            <p class=" text-base text-white">
                                وصف العرض :
                                {{ $offer->offer_desc }}
                            </p>
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
                                حالة العرض: قيد المراجعة
                            </span>
                        </div>
                        <div class="px-6 pb-4">

                            <a href="{{ url('accept_offer', $offer->id) }}">
                                <button
                                    class="bg-white hover:bg-blue-700 hover:text-white duration-1000 text-blue-700 font-bold py-2 px-4 rounded">
                                    قبول العرض
                                </button>
                            </a>
                            <a href="{{ url('reject_offer', $offer->id) }}">
                                <button
                                    class="bg-white hover:bg-blue-700 hover:text-white duration-1000 text-blue-700 font-bold py-2 px-4 rounded">
                                    رفض العرض
                                </button>
                            </a>
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

                        </div>
                    </div>
                @elseif($offer->offer_status == 1)
                    <div
                        class="max-w-2xl rounded overflow-hidden shadow-lg bg-gradient-to-br from-sky-500 to-blue-300 mt-10 mr-10 break-words">
                        <div class="font-bold text-xl mb-2">اسم مقدم العرض : {{ $user->name }}</div>

                        <p>رقم الهاتف {{ $user->phone }}</p>
                        <p>الايميل {{ $user->email }}</p>

                        <div class="px-6 py-4 text-white">

                            <p class=" text-base text-white">
                                وصف العرض :
                                {{ $offer->offer_desc }}
                            </p>
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
                                class="inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-green-700 mr-2 mb-2">
                                حالة العرض: مقبول
                            </span>
                        </div>

                        <div class="px-6 pb-4">


                            <a href="{{ url('reviewing_page', $offer->id) }}">
                                <button
                                    class="bg-white hover:bg-blue-700 hover:text-white duration-1000 text-blue-700 font-bold py-2 px-4 rounded">
                                    تقييم العمل
                                </button>
                            </a>


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

                        </div>
                    </div>
            </div>
        @elseif($offer->offer_status == 2)
            <div class="px-6 py-4 text-white">

                <p class=" text-base text-white">
                    وصف العرض :
                    {{ $offer->offer_desc }}
                </p>
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
                <span class="inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-red-700 mr-2 mb-2">
                    حالة العرض: مرفوض

                </span>
            </div>

            <div class="px-6 pb-4">

                <a href="{{ url('accept_offer', $offer->id) }}">
                    <button
                        class="bg-white hover:bg-blue-700 hover:text-white duration-1000 text-blue-700 font-bold py-2 px-4 rounded">
                        قبول العرض
                    </button>
                </a>



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

            </div>
            </div>
        @endif

    </section>
    @endforeach
    @include('pages/footer')
</body>

</html>
