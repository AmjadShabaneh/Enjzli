<body dir="rtl">
    

<x-app-layout dir="rtl">
    <x-slot name="header">
    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('لوحة التحكم') }}
        </h2>
  <a href="/">
        <div class=" inline-block w-40 p-2 bg-slate-200 mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000 ">
        <i class="fa-solid fa-house ml-8 mr-3"></i>
            الرئيسية
        </div></a>
        <a href="/create_order">
        <div class=" inline-block w-[14rem]   p-2 bg-slate-200 mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-regular fa-bell ml-8 mr-3"></i> إضافة طلب خدمة 
        </div></a>

        <a href="/create_portfoilo">
        <div class=" inline-block w-[14rem] p-2  bg-slate-200 mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-solid fa-screwdriver-wrench ml-8 mr-3"></i>
       إضافة عمل سابق
        </div></a>
        
        <a href="/my_orders">
        <div class=" inline-block w-[9rem] p-2  bg-slate-200 mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-solid fa-screwdriver-wrench ml-8 mr-3"></i>
      طلباتي
        </div></a>

        <a href="/my_offers">
        <div class=" inline-block w-[9rem] p-2  bg-slate-200 mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-solid fa-screwdriver-wrench ml-8 mr-3"></i>
      عروضي
        </div></a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 text-gray-900">
                    {{ __("لقد قمت بتسجيل الدخول!") }}
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
</body>