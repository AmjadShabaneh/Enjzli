<!DOCTYPE html>
<html lang="rtl">

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
     integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('logo/file.png') }}">
    <title>الاعمال السابقة</title>
</head>

<body dir="rtl">
    @include("layouts/navigation")
<div class="grid grid-cols-4">
    
<section class=" side-bar col-span-1 w-8/12  bg-slate-100 rounded-3xl">
    <div class=' flex-row justify-center p-4 mt-32'>
        <a href="/">
        <div class=" w-full p-2 bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000 ">
        <i class="fa-solid fa-house ml-8 mr-3"></i>
            الرئيسية
        </div></a>
        <a href="/create_order">
        <div class=" w-full p-2 bg-white mx-auto my-4 rounded-lg text-sky-600 hover:bg-sky-400 hover:text-white duration-1000">
        <i class="fa-solid fa-plus ml-8 mr-3"></i> إضافة طلب خدمة 
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

        <!-- Main Content Start -->

<div class="flex  col-span-3">
        <div class="w-8/12  mt-[4rem] my-10 bg-[#c7e3f3] shadow-lg  rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="block text-[#0369A1] text-xl font-bold mb-2">إدخال الأعمال السابقة</h2>

            <form action="{{ route('ProjectGallery.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Project Description -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="work_desc">
                        وصف المشروع
                    </label>
                    <textarea id="work_desc" name="work_desc" rows="4"
                        class="shadow appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        :value="old('work_desc')" required autocomplete="work_desc"></textarea>
                    <x-input-error :messages="$errors->get('work_desc')" class="mt-2" />
                </div>

                <!-- Image Upload -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                        رفع صورة
                    </label>
                    <!--
                    <input type="file" id="image" name="image"
                        class="shadow border-1 rounded w-full py-2 px-3 text-sky-700 leading-tight focus:outline-none focus:shadow-outline"
                        :value="old('image')" required autocomplete="image">
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    -->
                     <label for="file-input" class="sr-only">Choose file</label>
                     <input type="file" id="image" name="image"
                      class="block w-full border bg-white border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 file:bg-gray-50 file:border-0   file:me-4 file:py-3 file:px-4 dark:file:bg-gray-700 dark:file:text-gray-400"
                      :value="old('image')" required autocomplete="image">
                      
                      <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <!-- Completion Date -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="completion_date">
                        تاريخ الإنهاء
                    </label>
                    <input type="date" id="completion_date" name="completion_date"
                        class="shadow  border-1 border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        :value="old('completion_date')" required autocomplete="completion_date">
                    <x-input-error :messages="$errors->get('completion_date')" class="mt-2" />
                </div>
                <x-input-label class="mb-2" for="services" :value="__('الخدمات')" />
                <select name="service_id" id="services" class="rounded-md w-full border-gray-300" required >
                    <option >اختر خدمة</option>
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('services')" class="mt-2" />
                <!-- Submit Button -->
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 mt-4 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        حفظ
                    </button>
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
            </form>
        </div>
</div>
</div>
@include("pages/footer")

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
