@extends('layout.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الدخول | ادمن هيرو فت</title>
    <link rel="stylesheet" href="{{asset('../css/user/login.css?v=').time()}}">
    
</head>
<body dir="rtl">
    <div id="middiv">
        <span id="Header">اهلاً بك في <span id="Lighter">هيرو فت!</span></span><br>
        <span id="Par">سجل دخول للمتابعة.</span>
        <form action="{{route('club.login')}}" method='POST'>
            @csrf
            <label for="email">البريد الاكتروني</label><br>
            <input type="email" id="Email" name='email' placeholder="ادخل البريد الالكتروني" required><br>
            <label for="email">كلمة المرور</label><br>
            <input type="password" id="Pass" name='password' autocomplete="current-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="يجب ان تحتوي كلمة المرور على الاقل على حرف صغير وحرف كبير ورقم والا تقل عن 8" placeholder="ادخل كلمة المرور" required>
            <input id="button" type="submit" value="تسجيل دخول">
        </form>
    </div>

    <div class="bg-cyc">
        <div id="crc-1"></div>
        <div id="crc-2"></div>
    </div>
</body>
</html>