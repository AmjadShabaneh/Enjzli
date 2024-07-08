<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('logo/file.png') }}">
    <title>Document</title>
</head>
<body dir="rtl">
<div class=" mx-auto mt-0 border-b-2 fixed w-full pt-10 text-center bg-white ">
    
    <nav class="border-gray-200 mr-[35rem] mb-4">
    <div class="container mx-auto flex flex-wrap items-center justify-between">
       
        <div class="hidden md:block w-full md:w-auto" id="mobile-menu">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li>
            <a href="/search" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-blue-700 md:p-0 rounded focus:outline-none" aria-current="page">البحث </a>
            </li>
            <li class=" mr-10">
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-700 mr-10 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">الحساب <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y  divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="/account" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">اعدادات الحساب</a>
                    </li>
                    <li>
                        <a href="/passwordpage" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">كلمة المرور</a>
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
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">اضافة طلب</a>
            </li>
            <li>
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">طلباتي</a>
            </li>
            
        </ul>
        </div>
    </div>
    </nav>

</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

<div class="main grid grid-cols-6 ">
    <section class=" side-bar col-span-1 w-full min-h-screen bg-slate-100">
    <div class=' flex-row justify-center p-4 mt-32'>
        <div class=" w-full p-2  bg-sky-600 mx-auto my-4 rounded-lg text-white ">
        <i class="fa-solid fa-house ml-8 mr-3"></i>
            الرئيسية
        </div><a href="/notes">
        <div class=" w-full p-2 bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-regular fa-bell ml-8 mr-3"></i>  الاشعارات  
        </div></a>
        <a href="/create_portfoilo">
        <div class=" w-full p-2  bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-solid fa-screwdriver-wrench ml-8 mr-3"></i>
        الأعمال 
        </div></a>
        <div class=" w-full p-2  bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-solid fa-chart-simple  ml-8 mr-3"></i>
        التحليلات
        </div>
    </div>
    </section>

    <section class=" col-span-5 w-full min-h-screen bg-sky-100 p-10">
    <div class=" mt-14">
       <h1 class=" text-sky-700 font-bold text-3xl ">   الإعدادات  </h1>
            
        <div class=" w-full mt-8 border-b-4 grid grid-cols-2">
            <a href="/account">
            <div class=" col-span-1 border-b-4 -mb-1 text-gray-400 font-semibold text-center hover:border-sky-500 hover:text-black duration-1000">معلومات الحساب</div>
            </a>
            <div class=" col-span-1 border-b-4 border-sky-700 -mb-1 text-black font-semibold text-center  hover:text-black duration-1000"> كلمة المرور </div>
        
        </div>
    </div>

<form action="" method="post">@csrf
    <div class=" flex flex-col justify-start  ml-10 mt-4" >
    <label for="password" class=" float-right  text-slate-600 mb-2"> كلمة المرور القديمة  </label>
        <input type="password" class=" border-2 border-gray-300 rounded-lg w-2/5 h-10 p-4 focus:outline-sky-700" name="password">
    </div>


    <div class=" flex flex-col justify-start  ml-4 mt-10" >
    <label for="password" class=" float-right  text-slate-600 mb-2">  كلمة المرور الجديدة </label>
        <input type="password" class=" border-2  border-gray-300 rounded-lg w-2/5 h-10 p-4 focus:outline-sky-700" name="password">
    </div>
    <div class=" flex flex-col justify-start  ml-4 mt-10" >
    <label for="password" class=" float-right  text-slate-600 mb-2"> تأكيد كلمة المرور </label>
        <input type="password" class=" border-2  border-gray-300 rounded-lg w-2/5 h-10 p-4 focus:outline-sky-700" name="password">
    </div>



<div class="flex justify-center">
    <button type=" submit ">
        <a href="" class=" rounded px-5 py-2.5 inline-block mt-10  overflow-hidden group bg-green-500 relative hover:bg-gradient-to-r hover:from-green-500 hover:to-green-400 text-white hover:ring-2 hover:ring-offset-2 hover:ring-green-400 transition-all ease-out duration-300">
        <span class="absolute right-0 w-8  h-32  transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
        <span class="relative"> حفظ </span>
        </a>
        </button>
</div>
  
</form>
    </section>
</div>
</body>
</html>