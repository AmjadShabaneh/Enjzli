@extends('layout.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link rel="stylesheet" href="{{asset('../../css/landingpage/aboutus.css?v=').time()}}">
</head>
<body dir="rtl">
    <div class="container">
        <div class="contant">
            <div class="header">
                <button class="goback" onclick="goBack()">
                    <div class="opc">
                        <img src="../../img/arrow1.svg" alt="" class="arrow">
                        <span class="goback-text">رجوع</span>
                    </div>
                </button>
                <span class="header-title">فريق العمل </span>
            </div>

            <div class="team">
                <div class="member">
                    <div class="photo Azoz"></div>
                    <div class="member-info">
                            <span class="name">عز الدين العملة</span>
                            <!-- <span class="major">مصمم UX/UI</span> -->
                    </div>
                    <div class="social">
                        <a href="https://twitter.com/azozamleh" target="blank"><img src="../../img/x.svg" alt="" class="social-img x"></a>
                        <a href="https://www.linkedin.com/in/azozamleh" target="blank"><img src="../../img/linkedin.svg" alt="" class="social-img linkedin"></a>
                    </div>
                </div>

                <div class="member">
                    <div class="photo Ameen"></div>
                    <div class="member-info">
                            <span class="name">الامين نجار</span>
                            <!-- <span class="major">مصمم قواعد بيانات</span> -->
                    </div>
                    <div class="social">
                            <a href="https://x.com/Alameen_ALN" target="blank"><img src="../../img/x.svg" alt="" class="social-img x"></a>
                            <a href="http://www.linkedin.com/in/alameen-alnajjar-0b53642b2" target="blank"><img src="../../img/linkedin.svg" alt="" class="social-img linkedin"></a>
                    </div>
                </div>

                <div class="member">
                    <div class="photo Mohammed"></div>
                    <div class="member-info">
                            <span class="name">محمد سياعرة</span>
                            <!-- <span class="major">مبرمج واجهة خلفية</span> -->
                    </div>
                    <div class="social">
                            <a href="https://twitter.com/azozamleh" target="blank"><img src="../../img/x.svg" alt="" class="social-img x"></a>
                            <a href="https://www.linkedin.com/in/mohammed-sayara-8aa790305/" target="blank"><img src="../../img/linkedin.svg" alt="" class="social-img linkedin"></a>
                    </div>
                </div>

                <div class="member">
                    <div class="photo Aiman"></div>
                    <div class="member-info">
                            <span class="name">ايمن سدر</span>
                            <!-- <span class="major">مبرمج واجهة امامية</span> -->
                    </div>
                    <div class="social">
                            <a href="https://twitter.com/azozamleh" target="blank"><img src="../../img/x.svg" alt="" class="social-img x"></a>
                            <a href="https://www.linkedin.com/in/azozamleh" target="blank"><img src="../../img/linkedin.svg" alt="" class="social-img linkedin"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function goBack(){
        window.history.back();
    }
</script>
</html>