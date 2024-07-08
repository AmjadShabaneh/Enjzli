@extends('layout.main')
@extends('layout.master')
@section('title', 'Homepage - HeroFit Admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('../css/admin/createadmin.css?v=').time()}}">
</head>
<body dir="rtl">
    <div class="container">
        <div class="contant">
            <div class="header">إضافة مسؤول</div>

            <form action="{{route('admin.signup')}}" method='POST' enctype="multipart/form-data">
                @csrf
                <div class="profile-pic">
                    <img src="../../img/img-profile.png" alt="">
                    <input type="file" id="img-input" name='photo' required>
                </div>
                <div style="display:flex;flex-direction: column; justify-content:flex-start;width:100%">
                    <label for="name">اسم المسؤول</label>
                    <input type="text" name='name' id="name" required>

                    <label for="phone">رقم الهاتف</label>
                    <input type="tel" name='phone' id="phone" dir="rtl" required>

                    <label for="email">البريد الالكتروني</label>
                    <input type="email" name='email' id="email">

                    <label for="password">كلمة المرور</label>
                    <input type="password" name='password' id="password" required>
                </div>

                <button class="btn" type='submit'>إنشاء حساب </button>
            </form>
        </div>
    </div>
</body>
</html>