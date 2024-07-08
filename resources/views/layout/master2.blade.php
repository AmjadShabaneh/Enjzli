@extends('layout.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Unknown Page')</title>
    <link rel="stylesheet" href="{{asset('../css/layout/sidebar.css?v=').time()}}">
    <link rel="stylesheet" href="{{asset('../css/user/logout.css?v=').time()}}">

    <style>
        html{
            background-color: rgba(var(--clr-main));
            color: rgba(var(--clr-text));
            font-family: 'Avenir Regular';
            font-size: 20px;
            box-sizing: border-box;
        }

        #crc1{
            width: 1000px;
            height: 1000px;
            background-color: rgba(var(--clr-cta));
            border-radius: 250px;
            filter: blur(200px);
            z-index: -1;
            position: fixed;
            left: -750px; top: -600px;
        }

        #crc2{
            width: 500px;
            height: 500px;
            background-color: #ffffff;
            border-radius: 250px;
            filter: blur(200px);
            z-index: -1;
            position: fixed;
            right: -400px; bottom: 300px;
        }
    </style>
</head>
<body dir="rtl">
    <div class="sidebar">
        <div class="bg-cyc">
            <div id="crc-1"></div>
            <div id="crc-2"></div>
        </div>
        <div class="top">
            <div class="logo">
                <img src="../../img/HeroFit-icon.svg" alt="" class="site-logo">
                <span>HeroFit</span>
            </div>
            <img src="../../img/Menu-icon.svg" alt="" id="btn" >
        </div>

        <div class="user">
            <img src="{{$club->photo}}" alt="me"  class="user-img club-img">
          
            
            <div>
                <p class="bold user-name">{{$club->name}}</p>
                
            </div>
        </div>
        <hr style="opacity: 0.3; margin-bottom:16px">
        <ul>
            <div class="nav-div"><span class="nav-header">الادوات</span></div>
            <li>
                <a href="{{route('club.dashboard')}}" class="dashboard-nav">
                    <img src="../../img/sidebar/Dashboard.svg" alt="" class="side-icons dashboard-img">
                    <span class="nav-item">لوحة التحكم</span>
                </a>
                <span class="tooltip">لوحة التحكم</span>
            </li>
            <li>
                <a href="{{route('club.show_notes')}}" class="notes-nav">
                    <img src="../../img/sidebar/Notes.svg" alt="" class="side-icons notes-img">
                    <span class="nav-item">الملاحظات</span>
                </a>
                <span class="tooltip">الملاحظات</span>
            </li>

            <div class="nav-div"><span class="nav-header">المشتركين</span></div>
            <li>
                <a href="{{route('club.show_customers')}}" class="coustmers-nav">
                    <img src="../../img/sidebar/Coustmers.svg" alt="" class="side-icons coustmers-img">
                    <span class="nav-item">إدارة المشتركين</span>
                </a>
                <span class="tooltip">إدارة المشتركين</span>
            </li>

            <div class="nav-div"><span class="nav-header">النظام</span></div>
            <li>
                <a href="support" class="support-nav">
                    <img src="../../img/sidebar/Support.svg" alt="" class="side-icons support-img">
                    <span class="nav-item">الدعم الفني</span>
                </a>
                <span class="tooltip">الدعم الفني</span>
            </li>
            <li id="exit3">
                <a href="#" onclick="showLogoutModel()">
                    <img src="../../img/sidebar/Logout.svg" alt="" class="side-icons">
                    <span class="nav-item">تسجيل الخروج</span>
                </a>
                <span class="tooltip">تسجيل الخروج</span>
            </li>
        </ul>
    </div>
    <div id="crc1"></div>
    <div id="crc2"></div>
    @yield('content')
</body>

<div class="overlay" id="overlay" onclick="cancelLogout()">
    <div class="logout-div" onclick="showLogoutModel()">
        <p class="logout-info">هل أنت متاكد من إنك تريد تسجيل الخروج من الحساب؟</p>
        <div class="btns">
            <button class="logout-btn agree" onclick="cancelLogout()">الغاء</button>
           
                <a href="{{route('club.logout')}}" class="logout-btn disagree" style='text-decoration: none;' onclick="confirmLogout()">الخروج</a>
            
        </div>
    </div>
</div>

<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');

    btn.onclick = function () {
        sidebar.classList.toggle('active');
    };

    function showLogoutModel(){
        document.getElementById('overlay').style.display = 'block';
    }

    function cancelLogout(){
        document.getElementById('overlay').style.display = 'none';
    }

    function confirmLogout(){
        window.location.href = 'log-in';
    }

</script>

</html>