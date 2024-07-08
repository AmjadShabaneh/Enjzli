@extends('layout.main')
@extends('layout.master')
@section('title', 'Subscriptions - HeroFit Admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('../css/admin/sub.css?v=').time()}}">

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

        <div id="Main">
            <div id="InfoDiv">
                <div id="head">
                    <span id="Header">إدارة الإشتراكات</span>
                    <img src="../../img/Arrow.svg" alt="" onclick="history.back()" style="cursor: pointer">
                </div>
                <form action="{{route('admin.store_update')}}" method='POST'>
                @method('PUT')
                    @csrf
                    
                    <div id="Lg">
                        <div class="Lg">
                            <label for="Payment">النادي الرياضي</label><br>
                            <select id="Payment" name='club_id' class="Lginput">
                              <option></option>
                              @foreach($clubs as $club)
                              <option value="{{$club->id}}">{{$club->name}}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>

                    <div id="Sm">
                        <label for="Subs">مدة التمديد</label>
                        <div class="Sm" id="Subs">
                            <input type="radio" id="One" value='1' name="dur" class="Sub2">
                            <div class="Sub"><label for="One" class="Sub3">شهر واحد</label></div>
                            
                            <input type="radio" id="Three" value='2' name="dur" class="Sub2">
                            <div class="Sub"><label for="Three" class="Sub3">3 اشهر</label></div>
                        
                            <input type="radio" id="Six" value='3' name="dur" class="Sub2">
                            <div class="Sub"><label for="Six" class="Sub3">6 اشهر</label></div>
                        
                            <input type="radio" id="Year" value='4' name="dur" class="Sub2">
                            <div class="Sub"><label for="Year" class="Sub3">سنة واحدة</label></div>
                        </div>
                    </div>

                   

                    <button type='submit'>تطبيق</button>
                </form>
            </div>
            <div id="SidePhoto"></div>
        </div>
    </div>
</body>
</html>