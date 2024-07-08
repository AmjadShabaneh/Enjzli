@extends('layout.main')
@extends('layout.master')
@section('title', 'Login - HeroFit Admin')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('../css/admin/login.css?v=').time()}}">
    
</head>
<body dir="rtl">
    <div id="middiv">
        <span id="Header">اهلاً بك في <span id="Lighter">هيرو فت!</span></span><br>
        <span id="Par">هذه صفحة مختصة بمسؤولين النظام وليست مختصة بالنوادي.</span>
        <form action="{{route('admin.login')}}" method='POST'>
            @csrf
            <label for="email">البريد الاكتروني</label><br>
            <input type="email" name='email' id="Email" placeholder="ادخل البريد الالكتروني" required><br>
            <label for="email">كلمة المرور</label><br>
            <input type="password" id="Pass" name='password' autocomplete="current-password"   placeholder="ادخل كلمة المرور" required>
            <input id="button" type="submit" value="تسجيل دخول">
        </form>
    </div>
</body>
</html>