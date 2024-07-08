@extends('layout.main')
@extends('layout.master2')
@section('title', 'الملاحظات | هيرو فت')
@section('content')

<link rel="stylesheet" href="{{asset('../css/user/food-program.css?v=').time()}}">

    <div class="main-content notes-page">
        <div class="container">
            <div class="main">
                <div class="header">
                    <span id="head">البرنامج التدريبي</span>
                    <img src="../../img/Arrow.svg" class="back" alt="" onclick="history.back()">
                </div>

                <img src="../../img/Workout-program.png" alt="" width="70%">

                <form action="{{ route('club.store_training_program') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $id }}">

    <div class="input-div">
        <label for="photo">صورة البرنامج التدريبي</label>
        <input type="file" name="photo" id="photo" required>
    </div>

    <div class="input-div">
        <label for="goal">الهدف من هذا البرنامج</label>
        <input type="text" id="goal" name="goal" placeholder="مثال: تنشيف عضلات" required>
    </div>

    <div class="input-div">
        <label for="password">كلمة المرور</label>
        <input type="password" id="password" name="password" placeholder="ادخل كلمة المرور للتاكد من انك صاحب النادي" required>
    </div>

    <button type="submit">اضافة البرنامج التدريبي</button>
</form>

            </div>
        </div>
    </div>
@endsection