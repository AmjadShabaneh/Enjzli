@extends('layout.main')
@extends('layout.master2')
@section('title', 'الملاحظات | هيرو فت')
@section('content')

<link rel="stylesheet" href="{{asset('../css/user/programs.css?v=').time()}}">

    <div class="main-content notes-page">
        <div class="container">
            <div class="programs">
                <a href="{{route('club.food_program',['id'=>$id])}}" class="a-programs">
                    <div class="program food-program">
                        <img src="../../img/food-program.png" alt="" width="80%">
                        <div class="program-info">
                            <span class="head">البرامج الغذائية</span>
                            <span class="subhead">قم بإضافة برامج غذائية للمشتركين.</span>
                        </div>
                    </div>
                </a>

                <a href="{{route('club.training_program',['id'=>$id])}}" class="a-programs">
                    <div class="program train-program">
                        <img src="../../img/Workout-program.png" alt="" width="80%">
                        <div class="program-info">
                            <span class="head">البرامج التدريبية</span>
                            <span class="subhead">قم بإضافة برامج تدريبية للمشتركين.</span>
                        </div>
                    </div>
                </a>

                <a href="{{route('club.sub_date',['id'=>$id])}}" class="a-programs">
                    <div class="program sub-date">
                        <img src="../../img/calendar.png" alt="" width="80%">
                        <div class="program-info">
                            <span class="head">تمديد الإشتراك</span>
                            <span class="subhead">قم بتمديد إشتراك المشترك.</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection