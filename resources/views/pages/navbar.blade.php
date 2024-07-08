<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    
</head>
<body>
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
          class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
          <a class="flex items-center" href="/">
            الرئيسية
          </a>
        </li>
        
        <li
          class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
          
          <a href="{{url('search_orders')}}"
            class="px-6 py-3 font-sans text-base font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            >
            بحث عن طلبات
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
</body>
</html>