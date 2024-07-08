<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="">
    <title>حدث خطأ</title>
</head>
<body>
<html class="h-full">
  <body class="flex h-full bg-blue-50">
    <div class="max-w-[50rem] flex flex-col mx-auto w-full h-full">
      <header class="mb-auto flex justify-center z-50 w-full py-4">
        <nav class="px-4 sm:px-6 lg:px-8" aria-label="Global">
          <a class="flex-none text-xl font-semibold sm:text-3xl dark:text-white" href="#" aria-label="Brand"></a>
        </nav>
      </header>

      <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="block text-7xl font-bold text-blue-800 sm:text-9xl dark:text-white">404</h1>
        <h1 class="block text-2xl font-bold text-white"></h1>
        <p class="mt-3 text-gray-600 dark:text-gray-400">عذراً ربما تطلب الوصول الى صفحة غير موجودة</p>
        <p class="text-gray-600 dark:text-gray-400">يمكنك الذهاب الى الصفحات التالية :</p>
        <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
          <a href="{{url('/')}}" class="w-full shadow-md shadow-blue-300 sm:w-auto inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800" href="https://github.com/htmlstreamofficial/preline/tree/main/examples/html">
            
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 20 22"><path d="M21 19.9997C21 20.552 20.5523 20.9997 20 20.9997H4C3.44772 20.9997 3 20.552 3 19.9997V9.48882C3 9.18023 3.14247 8.88893 3.38606 8.69947L11.3861 2.47725C11.7472 2.19639 12.2528 2.19639 12.6139 2.47725L20.6139 8.69947C20.8575 8.88893 21 9.18023 21 9.48882V19.9997ZM19 18.9997V9.97791L12 4.53346L5 9.97791V18.9997H19ZM7 14.9997H17V16.9997H7V14.9997Z"></path></svg>
            الصفحة الرئيسية 
          </a>
          
        </div>
      </div>

      <footer class="mt-auto text-center py-5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <p class="text-sm text-gray-500">© جميع حقوق النشر محفوظة Enjzli 2023</p>
        </div>
      </footer>
    </div>
  </body>
</html>
</body>
</html>