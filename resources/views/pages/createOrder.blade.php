<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
     integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="icon" href="{{ asset('logo/file.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> إنشاء طلب الخدمة </title>
</head>

<body dir="rtl" class="bg-gray-100">
    @include('layouts.navigation')


    <section class="">
        <br>
        <div class=" text-3xl mr-10 mb-4 font-bold"> إنشاء طلب الخدمة</div>
            <section class="grid grid-cols-4">
<section class=" side-bar col-span-1 w-10/12  bg-slate-200 rounded-3xl">
    <div class=' flex-row justify-center p-4 mt-32'>
        <a href="/">
        <div class=" w-full p-2 bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000 ">
        <i class="fa-solid fa-house ml-8 mr-3"></i>
            الرئيسية
        </div></a>
        <a href="/create_order">
        <div class=" w-full p-2 bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-solid fa-plus ml-8 mr-3"></i>  إضافة طلب خدمة 
        </div></a>
        <a href="/create_portfoilo">
        <div class=" w-full p-2  bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-solid fa-plus ml-8 mr-3"></i>
        إضافة أعمال سابقة
        </div></a>
        <a href="/my_orders">
        <div class=" w-full p-2  bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-brands fa-buffer ml-8 mr-3"></i>
        طلباتي
        </div></a>
    </div>
    </section>
        <form action="{{ url('service_order_store') }}" method="POST"
            class=" bg-blue-100 h-[33rem] col-span-3 w-8/12 mx-auto my-10 rounded-lg shadow-2xl p-10">
            @csrf
            <div class="w-full grid grid-cols-3 grid-rows-2 mt-5">
                <div class="col-span-1 w-full">

                    <x-input-label for="services" class=" mb-2" :value="__('الخدمات')" />
                    <select name="service_id" id="services" class="rounded-md w-52 border-gray-300" required>
                        <option>اختر خدمة</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('services')" class="mt-2" />
                </div>
                <div class="col-span-1 w-full">
                    <x-input-label for="cities"  class=" mb-2" :value="__('المدينة')" />
                    <select name="city_id" id="cities" class="rounded-md w-52 border-gray-300" required>
                        <option>اختر مدينة</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('cities')" class="mt-2" />
                </div>
                <div class="col-span-1 w-full">
                    <x-input-label for="order_status"  class=" mb-2" :value="__('حالة الطلب')" />
                    <select name="order_status" id="order_status" class="rounded-md w-52  border-gray-300 "
                        required>
                        <option value="">اختر </option>
                        <option value="1">مكتمل </option>
                        <option value="0">غير مكتمل</option>
                    </select>
                </div>
                <div class="col-span-1 w-full mt-2">
                    <x-input-label for="duration_work"  class=" mb-2" :value="__('عدد ايام العمل')" />
                    <input type="number" name="duration_work" id="duration_work" class="rounded-md border-gray-300" required>
                </div>
            </div>
            <div class="mt-10"> وصف الطلب </div>
            <textarea name="order_desc" id="order_desc" cols="30" rows="5" class="w-full h-6/12 mb-10 border-gray-300 rounded-md"></textarea>
           <!-- <button type="submit">
                <a href="#_"
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
                    <span class="relative">إضافة الطلب</span>
                </a> </button>-->
                <button type="submit">
    <a class="relative px-10 py-3 font-medium text-white transition duration-300 bg-blue-400 rounded-md hover:bg-blue-500 ease">
<span class="absolute bottom-0 left-0 h-full -ml-2">
<svg viewBox="0 0 487 487" class="w-auto h-full opacity-100 object-stretch" xmlns="http://www.w3.org/2000/svg"><path d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z" fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path></svg>
</span>
<span class="absolute top-0 right-0 w-12 h-full -mr-3">
<svg viewBox="0 0 487 487" class="object-cover w-full h-full" xmlns="http://www.w3.org/2000/svg"><path d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z" fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path></svg>
</span>
<span class="relative">إضافة </span>
</a></button>
        </form>
       
    </section>
</section>
    @include('pages/footer')


    @if(Session::has('success'))
    <script>
      swal("Message","{{Session::get('success')}}",'success',{
        button: true,
        button: "OK",
        timer:5000,
        });
      </script>
    @endif
</body>

</html>
