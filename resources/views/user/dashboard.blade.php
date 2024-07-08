@extends('layout.main')
@extends('layout.master2')
@section('title', 'لوحة التحكم | هيرو فت')
@section('content')
<link rel="stylesheet" href="{{asset('../css/user/dashboard.css?v=').time()}}">

    <script>
    </script>

<div class="main-content">
    <div class="container">
        <div class="fill message" style="background-color: rgba(58, 59, 61, 0.8)">

            <div class="title-div" style="opacity: 0.5">
                <img src="../../img/dashboard-message.svg" alt="" class="title-img">
                <span class="title-text">التواصل</span>
            </div>

            <div class="dash-content">
                <div class="soon">قريبًا</div>
            </div>
        </div>

        <div class="half-main">
            <div class="half">
                Chart
            </div>

            <div class="half">
                <div class="title-div">
                    <img src="../../img/deashboard-notes.svg" alt="" class="title-img">
                    <span class="title-text">الملاحظات</span>
                </div>

                <div class="notes">

                    <!--<div class="note">
                        <span class="note-title">ملاحظة 1</span>
                        <span class="note-subtitle">محتوى الملاحظة رقم 1 وهنا يكتمل السطر</span>
                    </div>-->
            @foreach($notes as $note)
            <div class="note">
                        <span class="note-title"> {{$note->title}} </span>
                        <span class="note-subtitle"> {{$note->content}} </span>
                    </div>
            @endforeach
                   
                </div>
            </div>
        </div>

        <div class="fill">

            <div class="title-div">
                <img src="../../img/fire.png" alt="" class="title-img">
                <span class="title-text">المشتركين</span>
            </div>

            <div class="dash-content">
                <!--<div class="user">
                    <div class="user-img"></div>
                    <span class="user-name">محمد احمد</span>
                </div>-->
                @foreach($customers as $c)
                <div class="user">
                    <div class="user-img" style='background-image: url("/storage/customers/{{ $c->photo }}");margin-top:10px;'></div>
                    <span class="user-name"> {{$c->name}} </span>
                </div>
                @endforeach
                

            </div>

        </div>























































    </div>
</div>

<script>
    const config = {
  type: 'doughnut',
  data: data,
};

const data = {
  labels: [
    'Red',
    'Blue',
    'Yellow'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};

</script>

    
@endsection