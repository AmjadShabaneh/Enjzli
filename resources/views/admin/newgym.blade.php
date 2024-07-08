@extends('layout.main')
@extends('layout.master')
@section('title', 'Add New Gym - HeroFit Admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('../css/admin/newgym.css?v=').time()}}">

</head>
<body dir="rtl">
    <div id="Container">
        <div id="menu">
        <div id="profile">
                <div id="pic" style='background-image: url("{{$admin->photo}}");'></div>
                <div id="info">
                <span id="name"> {{$admin->name}} </span>
                   
                   <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style=' background-color: inherit;'>
   @csrf
  
   <button id='logout' type="submit" style='background-color:inherit;border:none;'>
       تسجيل الخروج
   </button>
</form>
                </div>
            </div>
            <div id="landmark"><span >HeroFit</span></div>
        </div>

        <div class="contant">
            <div id="Main">
                <div class="head">
                    <span class="header">اضافة نادي جديد</span>
                    <div class="goback" onclick="history.back()" style="cursor: pointer">
                        <img src="../../img/Arrow.svg" alt="" class="goback-img">
                    </div>
                </div>

                <form action="{{route('admin.store_club')}}" method='POST' enctype="multipart/form-data">
                    @csrf

                    <input type="file" name='photo' class="img-input" title="يجب ارفاق صورة للنادي الرياضي" required>

                    <div class="input-div">
                        <label for="gym-name">اسم النادي</label>
                        <input type="text" name='name' class="gym-name" id="gym-name" title="يجب كتابة اسم النادي" required>
                    </div>

                    <div class="input-div sm">
                        <label for="country">الدولة</label>
                        <select name="country" id="country" title="يجب اختيار الدولة التي يقع بها النادي" required>
                            <option value=""></option>
                           @foreach($countries as $c)
                           <option value="{{$c->id}}">{{$c->name}}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="input-div sm">
                        <label for="city">العنوان</label>
                        <input type="text" name='address' class="city" id="city" title="يجب كتابة عنوان النادي" required>
                    </div>

                    <div class="input-div">
                        <label for="plan">الباقة</label>
                        <select name="type" id="plan" title="يجب اختيار الباقة" required >
                            <option value=""></option>
                            <option value="Standard">الاساسية - 159 شيكل</option>
                            <option value="Bussines">الاعمال - 169 شيكل</option>
                            <option value="Gold">الذهبية - 219 شيكل</option>
                        </select>
                    </div>

                    <div class="input-div">
                        <label for="dur"> المدة </label>
                        <select name="dur" id="dur" title="يجب اختيار المدة" required >
                            <option ></option>
                            <option value="1">شهر</option>
                            <option value="2">3أشهر</option>
                            <option value="3">6أشهر</option>
                            <option value="4">12 شهر</option>
                        </select><br>
                    </div>

                    <hr style="opacity:0.15; width:100%">

                    <h3>معلومات النادي</h3>
                    <div class="input-div">
                        <label for="phone">رقم الهاتف</label>
                        <input type="tel" class="phone" name='phone' id="phone" pattern="[0-9].{6,14}" title="يجب ادخال رقم الهاتف" dir="rtl" required>
                    </div>

                    <div class="input-div">
                        <label for="email">البريد الالكتروني</label>
                        <input type="email" class="email" name='email' id="email" title="يجب ادخال البريد الالكتروني " required>
                    </div>

                    <div class="input-div">
                        <label for="password">كلمة المرور</label>
                        <input type="password" class="password" name='password' id="myInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="يجب ان تحتوي كلمة المرور على حرف صغير، حرف كبير، رقم، وأن تحتوي على 8 حروف على الاقل" required>
                        <br>
                    </div>

                    <hr style="opacity:0.15; width:100%">

                    <h3>معلومات المالك</h3>
                    <div class="input-div">
                        <label for="owner_name"> اسم المالك</label>
                        <input type="text" class="owner_name" name='owner_name' id="owner_name"  dir="rtl" required>
                    </div>

                    <div class="input-div">
                        <label for="owner_email"> بريد المالك</label>
                        <input type="email" name='owner_email' class="email" id="email" title="يجب ادخال البريد الالكتروني " required>
                    </div>
                      
                    <div class="input-div">
                        <label for="owner_phone">  هاتف المالك </label>
                        <input type="tel" class="owner_phone" id="owner_phone" name='owner_phone' pattern="[0-9].{6,14}" title="هاتف المالك" dir="rtl" required>
                    </div>
                    <hr style="opacity:0.15; width:100%;margin-block:20px">
                    

                  
                   

                    <button type='submit'>اضافة نادي</button>
                </form>
            </div>

            <div class="sidephoto"></div>
        </div>
    </div>

    <script>
        const inputElements = document.querySelectorAll('input, select');

        inputElements.forEach((inputElement) => {
            inputElement.addEventListener('blur', () => {
                if (!inputElement.checkValidity()) {
                inputElement.style.borderColor = 'red';
                }
            });
            

            inputElement.addEventListener('input', () => {
                if (inputElement.checkValidity()) {
                inputElement.style.borderColor = '';
                }
            });
        });
    </script>
</body>
</html>