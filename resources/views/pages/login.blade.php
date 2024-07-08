<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class=" bg-slate-100" dir="rtl">


<nav class="sticky inset-0 z-10 block h-max w-full max-w-full rounded-none border border-white/80 bg-white bg-opacity-80 py-2 px-4 text-white shadow-md backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
    <div class="flex items-center text-gray-900">
      <a
        href="#"
        class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-medium leading-relaxed text-inherit antialiased"
      >
        Material Tailwind
      </a>
      <ul class="ml-auto mr-auto hidden items-center gap-6 lg:flex">
        <li class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased hover:text-sky-700 duration-700">
          <a class="flex items-center" href="#">
            تواصل معنا
          </a>
        </li>
        <li class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
          <a class="flex items-center" href="#">
            الرئيسية
          </a>
        </li>
        <li class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
          <a class="flex items-center" href="#">
            من نحن
          </a>
        </li>
        <li class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
          <a class="flex items-center" href="#">
            خدماتنا
          </a>
        </li>
      </ul>
      <div class="flex">
        <button
          class="middle none center mr-3 rounded-lg bg-sky-700 py-3 px-6 font-sans text-md font-bold uppercase text-white shadow-md shadow-sky-500/20 transition-all hover:shadow-lg hover:shadow-sky-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
          data-ripple-light="true"
        >
          إنشاء حساب
        </button>
        <a href="/login">
      <button
      class="middle none center mr-3 rounded-lg border border-sky-700 py-3 px-6 font-sans text-md font-bold uppercase text-sky-700 transition-all hover:opacity-75 focus:ring focus:ring-sky-400 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      data-ripple-dark="true"
    >
      تسجيل الدخول
    </button>
  </a>
      <button
        class="middle none relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] rounded-lg text-center font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
        data-collapse-target="sticky-navar"
      >
        <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            stroke="currentColor"
            strokeWidth="2"
          >
            <path
              strokeLinecap="round"
              strokeLinejoin="round"
              d="M4 6h16M4 12h16M4 18h16"
            ></path>
          </svg>
        </span>
      </button>
    </div>
    
   
  </nav>


    <div class=" bg-white drop-shadow-xl m-auto my-32 rounded-lg text-center p-6 max-w-sm">
    <h1 class=" text-center text-4xl text-slate-600"> .اهلاً بك </h1>
    <button class=" bg-slate-100 p-3 mt-4 rounded w-full "> تسجيل الدخول بحساب جوجل <i class="fa-brands fa-google" style="color: #0369a1;"></i> </button>
    
    <div
            class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
            <p
              class="mx-4 mb-0 text-center text-slate-600">
              أو تسجيل الدخول باستخدام
            </p>
          </div>
          <label for="email" class=" float-right text-slate-600 mb-2"> البريد الإلكتروني</label>
        <input type="email" class=" border-2 rounded-lg w-full h-10 p-4 focus:outline-sky-700" name="email">
        <label for="email" class=" float-right text-slate-600 my-2">  كلمة المرور </label>
        <input type="email" class=" border-2 rounded-lg w-full h-10 p-4 focus:outline-sky-700" name="email">

        <div class="inline-flex items-center mt-4">
  <label
    class="relative flex cursor-pointer items-center rounded-full p-3"
    for="checkbox"
    data-ripple-dark="true"
  >
    <input
      type="checkbox"
      class="before:content[''] peer relative h-5 w-5 cursor-pointer  appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-sky-500 checked:bg-sky-500 checked:before:bg-sky-500 hover:before:opacity-10"
      id="checkbox"
      
    />
    <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-3.5 w-3.5"
        viewBox="0 0 20 20"
        fill="currentColor"
        stroke="currentColor"
        stroke-width="1"
      >
        <path
          fill-rule="evenodd"
          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
          clip-rule="evenodd"
        ></path>
      </svg>
    </div>
  </label>
  <label for="" class=" text-slate-500 ml-44"> تذكر كلمة المرور </label>


</div>







 <button
  class="middle none center w-full rounded-lg bg-sky-700 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-sky-500/20 transition-all hover:shadow-lg hover:shadow-sky-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
  data-ripple-light="true"
>
  تسجيل الدخول
</button>



<p class=" text-slate-600 mt-4">  هل تريد إنشاء حساب؟<a href="/signup" class="text-sky-600">إنشاء حساب</a>   </p>
    </div>

   
    



</body>
</html>