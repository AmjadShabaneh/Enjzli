@extends('layout.main')
@extends('layout.master')
@section('title', 'Homepage - HeroFit Admin')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('../css/admin/homepage.css?v=').time()}}">

</head>
<body dir="rtl">
    <div id="container">
        <div id="menu">
            <div id="profile">
                <div id="pic" style='background-image: url("{{$admin->photo}}");'></div>
                <div id="info">
                    <span id="name"> {{$admin->name}} </span><br>
                   
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
        
        <div id="boxes">
            <a href="{{route('admin.add_club')}}"><div class="navbox">
                <div class="image">
                    <img src="../img/AddGym.svg" alt="" class="ico">
                </div>
                <div class="text">
                    <span class="textheader">إضافة نادي جديد</span><br>
                    <span class="desc">إضافة نادي جديد ، وإضافة مسؤولين بداخله ، وإختيار الباقة المناسبة.</span>    
                </div>
            </div></a>

            <a href="{{route('admin.show_clubs')}}"><div class="navbox">
                <div class="image">
                    <img src="../img/gyms.svg" alt=""id="multigym">
                </div>
                <div class="text">
                    <span class="textheader">إدارة النوادي</span><br>
                    <span class="desc">تعديل بيانات النوادي ، إضافة مشتركين جدد .</span>    
                </div>
            </div></a>

            <a href="{{route('admin.update_sub')}}"><div class="navbox">
                <div class="image">
                    <img src="../img/challenge 1.svg" alt="" class="ico">
                </div>
                <div class="text">
                    <span class="textheader">إدارة الاشتراكت</span><br>
                    <span class="desc">تمديد إشتراكات النوادي ، وتعديل الباقات الخاصة بالنوادي المسجلة.</span>    
                </div>
            </div></a>
        </div>
    </div>
</body>
</html>