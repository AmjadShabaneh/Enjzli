@extends('layout.main')
@extends('layout.master2')
@section('title', 'الدعم الفني | هيرو فت')
@section('content')
<link rel="stylesheet" href="{{asset('../css/user/support.css?v=').time()}}">

<div class="main-content notes-page">
    <div class="container">
        <div class="main">
            <div class="contant">
                <span class="header">تواصل معنا</span><br>

                <label for="phone" class="contact">الهاتف</label>
                <div class="infoDiv" id="phone">
                    <span class="info">0560000000 | 0590000000</span>
                </div>

                <label for="email" class="contact">البريد الإلكتروني</label>
                <div class="infoDiv" id="email">
                    <span class="info">contactus@herofit.co</span>
                </div>

                <label for="facebook" class="contact">الفيسبوك</label>
                <a href="https://www.facebook.com/profile.php?id=61557227078835">
                    <div class="infoDiv" id="facebook">
                        <img src="../../img/facebook-icon.svg" alt="" class="facebook">
                        <span class="info">الإنتقال الى صفحتنا على الفيسبوك</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<style>
</style>
@endsection