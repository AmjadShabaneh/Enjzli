@extends('layout.main')
@extends('layout.master2')
@section('title', 'ادارة المشتركين | هيرو فت')
@section('content')
<link rel="stylesheet" href="{{asset('../css/user/add-coustmers.css?v=').time()}}">

<div class="main-content">
    <div class="container">
        <div class="main">
        <div id="Main">
            <div id="InfoDiv">
                <div id="Coustmers">
                        <div class="header">
                            <span id="header-h1">إضافة مشترك</span>
                            <img src="../../img/Arrow.svg" alt="" class="back"  onclick="history.back()">
                        </div>
                    <div class="form-div">
                        <form action="{{route('club.store_customer')}}" method='POST' enctype="multipart/form-data">
                            @csrf
                            <div class="input-div profilePic">
                                <input type="file" name='photo' required required>
                                <img src="../../img/img-profile.png" alt="" width="120px">
                            </div>

                            <div class="input-div " id='name'>
                                <label for="firstName" > الاسم</label><br>
                                <input type="text" name='name' id="firstName" required>
                            </div>
                            <div class="input-div " id='name'>
                                <label for="trainer_name" > اسم المدرب </label><br>
                                <input type="text" name='trainer_name' id="trainer_name" required>
                            </div>
                                

                            <div class="input-div">
                                <label for="date">سنة الميلاد</label><br>
                                <input type="date" name='birth_date' id="date" required>
                            </div>

                            <div class="input-div">
                                <label for="gender">الجنس</label><br>
                                <select name="gender" id="gender" required>
                                    <option value=""></option>
                                    <option value="true">ذكر</option>
                                    <option value="false">انثى</option>
                                </select>
                            </div>

                            <div class="input-div">
                                <label for="height">الطول(سم)</label><br>
                                <input type="tel" name='height' id="height" placeholder="cm" dir="rtl" required>
                            </div>

                            <div class="input-div">
                                <label for="weight">الوزن(كغم)</label><br>
                                <input type="tel" id="weight" name='weight' placeholder="kg" dir="rtl" required>
                            </div>

                            <hr>

                            <div class="input-div lg">
                                <label for="phone">رقم الهاتف</label><br>
                                <input type="tel" name='phone' id="phone" dir="rtl" required>
                            </div>

                            <div class="input-div lg">
                                <label for="email">البريد الالكتروني</label><br>
                                <input type="email" name='email' id="email" required>
                            </div>

                            <div class="input-div lg">
                                <label for="password">كلمة المرور</label><br>
                                <input type="password" name='password' id="password" required>
                            </div>

                            <div class="input-div lg">
                                <label for="note">ملاحظة</label><br>
                                <input type="text" name='notes' id="note" placeholder="ملاحظة عن المشترك" required>
                            </div>

                            <div class="input-div lg">
                                <label for="dur">مدة الاشتراك</label><br>
                                <select name="dur" id="dur" required>
                                    <option value=""></option>
                                    <option value="1">شهر</option>
                                    <option value="2">3 أشهر</option>
                                    <option value="3">6 أشهر</option>
                                    <option value="4">سنة</option>
                                </select>
                            </div>

                           
                            <div class="input-div btn">
                                <button type='submit'>تسجيل المشترك</button>
                               
                            </div>




                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>        
        </div>
    </div>
</div>

@endsection