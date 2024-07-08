@extends('layout.main')
@extends('layout.master2')
@section('title', 'الملاحظات | هيرو فت')
@section('content')

<link rel="stylesheet" href="{{asset('../css/user/food-program.css?v=').time()}}">

    <div class="main-content notes-page">
        <div class="container">
            <div class="main">
                <div class="header">
                    <span id="head">البرنامج الغذائي</span>
                    <img src="../../img/Arrow.svg" class="back" alt="" onclick="history.back()">
                </div>

                <img src="../../img/food-program.png" alt="" width="70%">

                <form action="{{route('club.store_food_program')}}"  enctype="multipart/form-data" method='POST'>
                    @csrf
                    <input type="hidden" name="id" value='{{$id}}'>
                    <div class="input-div">
                        <label for="photo">صورة البرنامج الغذائي</label>
                        <input type="file" name='photo' id="photo">
                    </div>

                    <div class="input-div">
                        <label for="goal">الهدف من هذا البرنامج</label>
                        <input type="text" id="goal" name='goal' placeholder="مثال: تنشيف عضلات">
                    </div>

                    <div class="input-div">
                        <label for="password">كلمة المرور</label>
                        <input type="password" name='password' id="password" placeholder="ادخل كلمة المرور للتاكد من انك صاحب النادي">
                    </div>

                    <button>إضافة البرنامج الغذائي</button>

                </form>
            
            </div>
        </div>
    </div>
@endsection