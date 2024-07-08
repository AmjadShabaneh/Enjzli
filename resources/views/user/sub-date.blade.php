@extends('layout.main')
@extends('layout.master2')
@section('title', 'الملاحظات | هيرو فت')
@section('content')

<link rel="stylesheet" href="{{asset('../css/user/sub-date.css?v=').time()}}">
<div class="main-content notes-page">
    <div class="container">
        <div id="Main">
            <div id="InfoDiv">
                <div id="head">
                    <span id="Header">إدارة الإشتراكات</span>
                    <img src="../../img/Arrow.svg" alt="" onclick="history.back()" style="cursor: pointer">
                </div>
                <form action="{{route('club.store_sub_date')}}" method='POST'>
                @csrf
                @method('PUT')
                    <input type="hidden" name="id" value='{{$id}}'>
                    <div id="Sm">
                        <label for="Subs">مدة التمديد</label>
                        <div class="Sm" id="Subs">
                            <input type="radio" id="One" name="dur" value='1' class="Sub2">
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
</div>
@endsection