<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  @vite('resources/css/app.css')
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('logo/file.png') }}">
  <title>الرئيسية</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body dir="rtl">

  <nav
    class="sticky inset-0 z-10 block h-max w-full max-w-full rounded-none border border-white/80 bg-white bg-opacity-80 py-2 px-4 text-white shadow-md backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
    <div class="flex items-center text-gray-900">
      <img src="{{ asset('logo/file.png') }}" class=" h-20 w-20"></img>
      <ul class="ml-auto mr-auto hidden items-center gap-6 lg:flex"> 
        <li
          class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
          <a class="flex items-center" href="{{route('dashboard')}}">
          لوحة التحكم
          </a>
        </li>
        <li
          class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased hover:text-sky-700 duration-700">
          <a class="flex items-center" href="/search">
          البحث
          </a>
        </li>
        <li
          class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
          <a class="flex items-center" href="#">
            الرئيسية
          </a>
        </li>
       
        
      </ul>
      <div class="flex">
        <a href="{{route('register')}}">
          <button
            class="middle none center mr-3 rounded-lg bg-sky-700 py-3 px-6 font-sans text-md font-bold uppercase text-white shadow-md shadow-sky-500/20 transition-all hover:shadow-lg hover:shadow-sky-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-light="true">
            إنشاء حساب
          </button>
          <a href="/login">
            <button
              class="middle none center mr-3 rounded-lg border border-sky-700 py-3 px-6 font-sans text-md font-bold uppercase text-sky-700 transition-all hover:opacity-75 focus:ring focus:ring-sky-400 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              data-ripple-dark="true">
              تسجيل الدخول
            </button>
          </a>
          <button
            class="middle none relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] rounded-lg text-center font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
            data-collapse-target="sticky-navar">
            <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" strokeWidth="2">
                <path strokeLinecap="round" strokeLinejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </span>
          </button>
      </div>
  </nav>

  <div class="container mt-0 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32">
      <div
        class="relative overflow-hidden bg-cover bg-no-repeat bg-[50%] bg-[url('https://img.freepik.com/free-photo/part-male-construction-worker_329181-3734.jpg?w=1380&t=st=1695915615~exp=1695916215~hmac=f40588bc05ec84a3efeaeaf2aa5e9af748ae3d2f0f47e18a47f67cc63d4838f0')] h-[500px]">
      </div>
      <div class="container mx-auto px-6 md:px-12 xl:px-32">
        <div class="text-center">
          <div
            class="mt-[-270px] block rounded-lg bg-[hsla(0,0%,100%,0.55)]  px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] backdrop-blur-[30px] dark:bg-[hsla(0,0%,5%,0.55)] dark:shadow-black/20 md:py-16 md:px-12">
            <h1 class="mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-6xl text-white">
              انشئ حسابك و قم باختيار امهر <br /><span class="text-danger dark:text-danger-400">العاملين في مجال الصيانة
                و باسعار منافسة</span>
            </h1>
            <button
              class="middle none center mr-3 w-36 rounded-lg bg-sky-500 py-3 px-6 font-sans text-md font-bold uppercase text-white shadow-md shadow-sky-500/20 transition-all hover:shadow-lg hover:shadow-sky-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              data-ripple-light="true">
              ابدأ الان
            </button>

          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
  <!-- Container for demo purpose -->

  <section class="">
    <h1 class=" self-end text-3xl font-semibold m-8">الخدمات الرئيسية</h1>

    <div class=" grid grid-rows-2 grid-cols-4">
      <div class=" grid row-span-1 col-span-4 grid-rows-1 grid-cols-4">



        <div class=" col-span-1 bg-white drop-shadow-2xl text-center m-10 p-10 rounded-lg">
          <div class=" flex items-center justify-center text-white bg-sky-700 rounded-full w-16 h-16 m-auto"><span
              class="material-symbols-outlined">
              power
            </span></div>
          <p class=" text-xl mt-4"> كهرباء </p>
        </div>

        <div class=" col-span-1 bg-white drop-shadow-2xl text-center m-10 p-10 rounded-lg">
          <div class=" flex items-center justify-center text-white bg-sky-700 rounded-full w-16 h-16 m-auto">
            <span class="material-symbols-outlined">
              water_drop
            </span>
          </div>
          <p class=" text-xl mt-4"> سباكة </p>
        </div>

        <div class=" col-span-1 bg-white drop-shadow-2xl text-center m-10 p-10 rounded-lg">
          <div class=" flex items-center justify-center text-white bg-sky-700 rounded-full w-16 h-16 m-auto">
            <span class="material-symbols-outlined">
              carpenter
            </span>
          </div>
          <p class=" text-xl mt-4"> نجارة و أثاث </p>
        </div>


        <div class=" col-span-1 bg-white drop-shadow-2xl text-center m-10 p-10 rounded-lg">
          <div class=" flex items-center justify-center text-white bg-sky-700 rounded-full w-16 h-16 m-auto ">
            <span class="material-symbols-outlined">
              format_paint
            </span>
          </div>
          <p class=" text-xl mt-4"> طلاء </p>
        </div>

      </div>
      <div class=" grid row-span-1 col-span-4 grid-rows-1 grid-cols-4">

        <div class=" col-span-1 bg-white drop-shadow-2xl text-center m-10 p-10 rounded-lg">
          <div class=" flex items-center justify-center text-white bg-sky-700 rounded-full w-16 h-16 m-auto ">
            <span class="material-symbols-outlined">
              view_module
            </span>
          </div>
          <p class=" text-xl mt-4"> بلاط و سيراميك</p>
        </div>


        <div class=" col-span-1 bg-white drop-shadow-2xl text-center m-10 p-10 rounded-lg">
          <div class=" flex items-center justify-center text-white bg-sky-700 rounded-full w-16 h-16 m-auto ">
            <span class="material-symbols-outlined">
              tv_gen
            </span>
          </div>
          <p class=" text-xl mt-4"> أجهزة كهربائية </p>
        </div>


        <div class=" col-span-1 bg-white drop-shadow-2xl text-center m-10 p-10 rounded-lg">
          <div class=" flex items-center justify-center text-white bg-sky-700 rounded-full w-16 h-16 m-auto ">
            <span class="material-symbols-outlined">
              tv_gen
            </span>
          </div>
          <p class=" text-xl mt-4"> أجهزة كهربائية </p>
        </div>

        <div class=" col-span-1 bg-white drop-shadow-2xl text-center m-10 p-10 rounded-lg">
          <div class=" flex items-center justify-center text-white bg-sky-700 rounded-full w-16 h-16 m-auto ">
            <span class="material-symbols-outlined">
              heat_pump
            </span>
          </div>
          <p class=" text-xl mt-4"> تكييف </p>
        </div>

      </div>




    </div>
  </section>

  <section class="mt-24">


    <h1 class=" self-end text-3xl font-semibold m-8"> كيفية استخدام موقعنا؟ </h1>


    <div class="grid grid-rows-1 grid-cols-4 mt-10 p-16">

      <div class=" col-span-1 drop-shadow-2xl bg-white p-6 rounded-lg m-4">
        <h1 class=" text-2xl text-bold text-right">أنشئ حسابك أو سجل الدخول</h1>
        <p class=" text-gray-600 text-right mt-10"> أذهب الى صفحة التسجيل في الموقع وأدخل المعلومات المطلوبة و ابدأ
          باستخدام خدماتنا </p>
      </div>


      <div class=" col-span-1 drop-shadow-2xl bg-white p-6 rounded-lg m-4">
        <h1 class=" text-2xl text-bold text-right">البحث عن العامل المناسب </h1>
        <p class=" text-gray-600 text-right mt-10"> هناك طريقتين للبحث عن العامل المناسب أولا من خلال إنشاء منشور للخدمة
          المطلوبة و الموافقة على طلب أو من خلال البحث اليدوي عن عامل متفرغ و التواصل معه </p>
      </div>
      <div class=" col-span-1 drop-shadow-2xl bg-white p-6 rounded-lg m-4">
        <h1 class=" text-2xl text-bold text-right"> الاتفاق و بدأ العمل </h1>
        <p class=" text-gray-600 text-right mt-10"> قم بالاتفاق مع العامل بعد اختياره على تفاصيل الخدمة من مواعيد و
          المبلغ المتفق عليه </p>
      </div>
      <div class=" col-span-1 drop-shadow-2xl bg-white p-6 rounded-lg m-4">
        <h1 class=" text-2xl text-bold text-right"> مرحلة التقييم </h1>
        <p class=" text-gray-600 text-right mt-10"> بعد إنهاء الخدمة قم بتقييم العامل على المنصة هذا يفيد كل المستخدمين
          الاخرين في اختياره في المستقبل ومن أجل مصداقية الموقع </p>
      </div>

    </div>




  </section>

  <footer class="w-full bg-white p-8">
    <div class="flex flex-row flex-wrap items-center justify-center gap-y-6 gap-x-12 bg-white  md:justify-between">

      <ul class="flex flex-wrap items-center gap-y-2 gap-x-8">
        <li>
          <a href="#"
            class="block  text-base font-normal leading-relaxed text-blue-gray-900 antialiased text-center transition-colors hover:text-sky-700 focus:text-sky-700">
            من نحن
          </a>
        </li>
        <li>
          <a href="#"
            class="block  text-base font-normal leading-relaxed text-blue-gray-900 antialiased text-center transition-colors hover:text-sky-700 focus:text-sky-700">
            الترخيصات
          </a>
        </li>
        <li>
          <a href="#"
            class="block  text-base font-normal leading-relaxed text-blue-gray-900 antialiased text-center transition-colors hover:text-sky-700 focus:text-sky-700">
            كلمة
          </a>
        </li>
        <li>
          <a href="#"
            class="block  text-base font-normal leading-relaxed text-blue-gray-900 antialiased text-center transition-colors hover:text-sky-700 focus:text-sky-700">
            تواصل معنا
          </a>
        </li>
      </ul>
    </div>
    <hr class="my-8 border-blue-gray-50" />
    <p class="block text-center font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased">
      © 2023 Material Tailwind
    </p>
  </footer>


</body>

</html>