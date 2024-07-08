<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('logo/file.png') }}">
    <title>الاعمال المنجزة</title>
</head>

<body dir="rtl">
    <div class=" mx-auto mt-0 border-b-2 fixed w-full pt-10 text-center bg-white ">

        <nav class="border-gray-200 mr-[35rem] mb-4">
            <div class="container mx-auto flex flex-wrap items-center justify-between">

                <div class="hidden md:block w-full md:w-auto" id="mobile-menu">
                    <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
                        <li>
                            <a href="/search"
                                class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-blue-700 md:p-0 rounded focus:outline-none"
                                aria-current="page">البحث </a>
                        </li>
                        <li class=" mr-10">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="text-gray-700 mr-10 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">الحساب
                                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="hidden bg-white text-base z-10 list-none divide-y  divide-gray-100 rounded shadow my-4 w-44">
                                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/account"
                                            class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">اعدادات
                                            الحساب</a>
                                    </li>
                                    <li>
                                        <a href="/passwordpage"
                                            class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">كلمة
                                            المرور</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">احصائيات</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#"
                                        class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">تسجيل الخروج</a>
                                </div>
                            </div>

                        </li>

                        <li>
                            <a href="#"
                                class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">اضافة
                                طلب</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">طلباتي</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>


    <div class=" bg-sky-600 h-[15rem] m-0  ">



    </div>

    <!--<img src="{{ asset('uploads/users_images/' . $user->image) }}" alt="{{ $user->name }}" class=" bg-sky-200 rounded-full h-40 w-40 -mt-28 mr-16 text-center ">-->
        
        <h1 class=" text-white font-bold text-3xl -mt-24 mr-80 absolute">
            {{$user->name}}
        </h1>
        
    </img>


    <div class=" border-b-4 w-3/4 mx-auto mt-10 ">
        <a href="{{ url('profile-2') }}">
            <div
                class=" text-2xl border-b-4  text-gray-400  -mb-1 w-6/12  -mr-2  p-2 text-center inline-block hover:border-sky-400 hover:text-sky-400 transition-all duration-1000">

                <a href="{{ url('userById', $user->id) }}">التفاصيل</a>
            </div>
        </a>
        <div class="text-2xl border-b-4 border-sky-700  text-center  -mb-1 w-6/12 p-2 font-bold inline-block ">


            الأعمال المنجزة


        </div>

        <div>

        </div>
    </div>

    <div>


    </div>








    <div class="grid grid-cols-3 w-9/12 mx-auto text-center mt-12">
        
    </div>





    <div class=" mr-24">

        @foreach ($projects as  $project)
            <div
                class=" bg-white h-72 w-5/12 inline-grid mb-10 hover:shadow-2xl shadow-lg rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10  grid-cols-3 grid-rows-3 col-span-1">

                <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
                    <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
                        person
                    </span>
                    <div class=" col-span-1 ">
                        اسم الناشر
                    </div>
                    <div class="col-span-1">
                        {{ $user->name }}
                    </div>
                </div>
                <div class=" col-span-1  grid grid-cols-2 grid-rows-2">
                    <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
                        handyman
                    </span>
                    <div class="col-span-1">
                        الخدمة
                    </div>
                    {{ $project->service_order->service->service_name }}
                </div>

                <div class=" col-span-1  grid grid-cols-2 grid-rows-2">
                    <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
                        location_on
                    </span>
                    <div class="col-span-1">
                        الموقع
                    </div>
                    <div class="col-span-1">
                        {{$project->service_order->city->city_name}}
                    </div>
                </div>


                <div class="  mt-3 grid grid-cols-2 grid-rows-2 ">
                    <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
                        schedule
                    </span>
                    <div class=" col-span-1 ">
                        تاريخ اكتمال العمل
                    </div>
                    <br>
                    {{ $project->updated_at}}
                    <div class="col-span-1  ">
                       
                    </div>
                </div>

                <div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
                    <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 text-yellow-400">
                        star
                    </span>
                    <div class=" col-span-1 text-sky-500 ">
                        تقييم الزبون
                    </div>

                    <div class="col-span-1 text-sky-500 ">
                        {{$project->rating}}
                    </div>
                </div>
              <!--  <img class="w-20 h-20" src="{ asset('uploads/projects_images/' . $project->image) }}" alt="{ $user->name }}">-->
            </div>
        @endforeach
    </div>
    </div>
    </div>

    </div>
    @if(Session::has('success'))
    <script>
      swal("Message","{{Session::get('success')}}",'success',{
        button: true,
        button: "OK",
        timer:5000,
        });
      </script>
    @endif

    @include('pages/footer')
</body>

</html>
