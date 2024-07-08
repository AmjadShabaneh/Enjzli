<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>البحث عن عامل</title>
    <link rel="icon" href="{{ asset('logo/file.png') }}">
</head>

<body dir="rtl">

  
@include('pages/navbar')

  <div class="  rounded-lg border-4 border-sky-100 bg-white mt-14 p-10 w-6/12 mx-auto">


    <h1 class=" text-3xl mb-6"> تصفح و ابحث عن العديد من العاملين في خدمات معينة </h1>

    <form action="{{url('search')}}" method="GET">

     <div class=" inline-block  w-4/12">
        <x-input-label for="cities" :value="__('المدينة')" />
        <select name="city_id" id="cities" class="rounded-md w-full border-gray-300">
          <option>اختر مدينة</option>
          @foreach($cities as $city)
          <option value="{{$city->id}}">{{$city->city_name}}</option>
          @endforeach
        </select>
        <x-input-error :messages="$errors->get('cities')" class="mt-2" />

      </div>
     <div class=" inline-block w-4/12 mx-5">
      <x-input-label for="services" :value="__('الخدمات')" />
      <select name="service_id" id="services" class="rounded-md w-full border-gray-300">
        <option>اختر خدمة</option>
        @foreach($services as $service)
        <option value="{{$service->id}}">{{$service->service_name}}</option>
        @endforeach
      </select>
      <x-input-error :messages="$errors->get('services')" class="mt-2" />
    </div>
    <button type="submit">
    <a class="relative px-10 py-3 font-medium text-white transition duration-300 bg-blue-400 rounded-md hover:bg-blue-500 ease">
<span class="absolute bottom-0 left-0 h-full -ml-2">
<svg viewBox="0 0 487 487" class="w-auto h-full opacity-100 object-stretch" xmlns="http://www.w3.org/2000/svg"><path d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z" fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path></svg>
</span>
<span class="absolute top-0 right-0 w-12 h-full -mr-3">
<svg viewBox="0 0 487 487" class="object-cover w-full h-full" xmlns="http://www.w3.org/2000/svg"><path d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z" fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path></svg>
</span>
<span class="relative">بحث</span>
</a></button>
  </div>

  </form>

  <section class=" grid grid-cols-2">
    
    @foreach($users as $user)
   
    <div
      class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">

      <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
        <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
          person
        </span>
        <div class=" col-span-1 ">
          اسم الناشر
        </div>
        <div class="col-span-1">
          {{$user->name}}
        </div>
      </div>
      <div class=" col-span-1  grid grid-cols-2 grid-rows-2">
        <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
          handyman
        </span>
        <div class="col-span-1">
          الخدمة
        </div>
        
        <div class="col-span-1">
       {{$user->user_services->first()->service->service_name}}
        </div>
       

      </div>

      <div class=" col-span-1  grid grid-cols-2 grid-rows-2">
        <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
          location_on
        </span>
        <div class="col-span-1">
          الموقع
        </div>
        <div class="col-span-1">
          {{$user->city->city_name}}
        </div>
      </div>
      <button type="submit" class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6"><a href="{{url('userById',$user->id)}}">رؤية اعماله</a></button>

    </div>

    
    
        @endforeach


    </section>



    @include("pages/footer")




</body>

</html>
