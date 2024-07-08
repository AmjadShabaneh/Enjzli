<!-- index.html -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" href="{{ asset('logo/file.png') }}">
    <title> التقييم</title>
    <meta name="viewport" content="width=device-width, 
				initial-scale=1" />
    <style>
        /* style.css */





        .card {
            max-width: 33rem;
            background: #fff;

            padding: 3rem;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            width: 100%;
            border-radius: 0.5rem;
        }

        .star {
            float: right;
            margin-top: 10px;
            font-size: 4vh;
            cursor: pointer;
        }

        .one {
            color: rgb(0, 80, 239);
        }

        .two {
            color: rgb(0, 80, 239);
        }

        .three {
            color: rgb(0, 80, 239);
        }

        .four {
            color: rgb(0, 80, 239);
        }

        .five {
            color: rgb(0, 80, 239);
        }

        .title {
            float: right;
        }

        .input {
            display: block;
            width: 100%;
            height: 6rem;
        }
    </style>
</head>

<body dir="rtl">
    @include('layouts.navigation')
    <div class="w-10/12 mx-auto  bg-white shadow-2xl mt-10 border-2 break-words rounded-lg p-4">
        @php
            $userId = $offer->user_id;
            $user = \App\Models\User::find($userId);
        @endphp
        @if ($offer->offer_status == 0)
            يرجى تقييم العرض 
        @elseif($offer->offer_status == 1)
        <h1 class=" text-2xl">تفاصيل العرض </h1>
        <div class="px-6 pt-4 pb-2">

            وصف العرض :  {{ $offer->offer_desc }}
            <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                  اسم  مقدم العرض : {{$user->name}}
            </span>
            <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                قيمة  العرض: {{ $offer->offer_cost }}
            </span>


        </div>

    </div>
    <div class="card text-start mt-10 mx-auto mb-10">
        <form action="{{url('reviewing_offer')}}" method="POST">
            @csrf
            <h1 class="title">التقييم</h1>
            <br />
            <div class=" block ">
                <span onclick="gfg(1)" class="star">★
                </span>
                <span onclick="gfg(2)" class="star">★
                </span>
                <span onclick="gfg(3)" class="star">★
                </span>
                <span onclick="gfg(4)" class="star">★
                </span>
                <span onclick="gfg(5)" class="star">★
                </span>
            </div> <br> <br><br>
            <div class="block text-start "> ملاحظات </div>
            <textarea name="comment" id="comment" class="border-2 w-full h-[6rem] block"></textarea>
            <h3 id="output" class="mt-4">
                التقييم: 0/5
            </h3>

            <input type="number" name="rating" id="rating" value="" class="hidden">
            <input type="hidden" name="offer_id" id="offer_id" value="{{$offer->id}}" >
            <button type="submit"
                class=" mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">إرسال
                التقييم</button>
        </form>
    </div>
    <script>
        // script.js

        // To access the stars
        let stars =
            document.getElementsByClassName("star");
        let output =
            document.getElementById("output");
        let rating = document.getElementById("rating");
        // Funtion to update rating
        function gfg(n) {
            remove();
            for (let i = 0; i < n; i++) {
                if (n == 1) cls = "one";
                else if (n == 2) cls = "two";
                else if (n == 3) cls = "three";
                else if (n == 4) cls = "four";
                else if (n == 5) cls = "five";
                stars[i].className = "star " + cls;
            }

            output.innerText = "التقييم: " + n + "/5";
            rating.value = n;
        }

        // To remove the pre-applied styling
        function remove() {
            let i = 0;
            while (i < 5) {
                stars[i].className = "star";
                i++;
            }
        }
    </script>
        @elseif($offer->offer_status == 2)
        يرجى تقييم العرض
        @endif
       
</body>

</html>
