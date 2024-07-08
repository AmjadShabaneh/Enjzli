<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="icon" href="{{ asset('logo/file.png') }}">
  <title>التفاصيل</title>
</head>

<body dir="rtl">
  <!-- component -->
  <!-- This is an example component -->
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
                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbar"
                class="hidden bg-white text-base z-10 list-none divide-y  divide-gray-100 rounded shadow my-4 w-44">
                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="/account" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">اعدادات
                      الحساب</a>
                  </li>
                  <li>
                    <a href="/passwordpage" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">كلمة
                      المرور</a>
                  </li>
                  <li>
                    <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">احصائيات</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">تسجيل الخروج</a>
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

  <img src="{{ asset('uploads/users_images/' . $user->image) }}" alt="{{ $user->name }}" class=" bg-sky-200 rounded-full h-40 w-40 -mt-28 mr-16 text-center ">


    <h1 class=" text-white text-3xl -mt-24 mr-80 font-bold absolute">
     {{$user->name}}
    </h1>
    
  </div>


  <div class=" border-b-4 w-3/4 mx-auto mt-10 ">

    <div class=" text-2xl border-b-4 border-sky-700  text-center  -mb-1 w-6/12 p-2 font-bold inline-block">
     التفاصيل 
    </div>
    <a href="/portfoilo">
      <div class="text-2xl border-b-4  text-gray-400  -mb-1 w-6/12  -mr-2  p-2 text-center inline-block hover:border-sky-400 hover:text-sky-400 transition-all duration-1000">
       <a href="{{url('portfoilo',$user->id)}}">الأعمال المنجزة</a> 
      </div>
    </a>
    <div>

    </div>
  </div>

  <div>


  </div>

  <div class=" container">
    <div class=" grid grid-cols-2 grid-rows-2 mr-[12rem] mt-10">

      <div class=" col-span-1  text-gray-500"> الاسم: <span class=" text-gray-600"> {{$user->name}}</span> </div>


      <div class=" col-span-1  text-gray-500"> المدينة: <span class=" text-gray-600">{{$user->city->city_name}}</span>
      </div>
      <div class=" col-span-1  text-gray-500 mt-4"> التخصص: <span class=" text-gray-600">
          @foreach($user->user_services  as $UsersServices)
          <tr> {{$UsersServices->service->service_name}}/ </tr>
          @endforeach
        </span> </div>

      <div class=" col-span-1  text-gray-500 mt-4"> التقييم العام: <span class=" text-gray-600"> 4.5/5 </span> </div>
    </div>


  </div>

  <div class=" mt-24 grid grid-rows-1 grid-cols-2 mr-[16rem] text-center mb-10">




  </div>

</body>

</html>