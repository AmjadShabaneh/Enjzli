@extends('layout.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HeroFit</title>
    <link rel="stylesheet" href="{{asset('../../css/landingpage/landingpage.css?v=').time()}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body dir="rtl">
    <div class="container">
        <div id="burgar-menu">
            <a href="log-in" class="burgar-links">تسجيل دخول</a>
            <a href="#price" class="burgar-links" onclick="hideMenu()">الأسعار</a>
            <a href="#FAQ" class="burgar-links" onclick="hideMenu()">أسئلة شائعة</a>
            <a href="about-us" class="burgar-links">من نحن</a>
        </div>

        <div id="contactus-div">
            <span id="contactus-header">تواصل معنا على الواتس اب للحصول على هيرو فت!</span>
            <a href="#" id="whatsapp-link">
                <div id="whatsapp-button">
                    <img src="../../img/Whatsapp-logo.png" alt="" height="80%">
                    <span id="whatsapp-text" dir="ltr">+972 566818616</span>
                </div>
            </a>
        </div>
        <div id="overlay" onclick="hideForm(), hideMenu()"></div>

        <div class="contant menu" id="menu">
            <a href="log-in" class="profile-link hide-menu">
                <div class="profile">
                    <div class="profilepic"></div>
                    <span class="login">تسجيل دخول</span>
                </div>
            </a>

            <div class="menu-info">
                <a href="#price" class="menu-link"><span class="menu-element hide-menu">الأسعار</span></a>
                <a href="#FAQ" class="menu-link"><span class="menu-element hide-menu">أسئلة شائعة</span></a>
                <a href="/about-us" class="menu-link"><span class="menu-element hide-menu">من نحن</span></a>
                <img src="../../img/burger-bar.png" alt="" id="Burger-icon" height="48px" onclick="showMenu()">
            </div>

            <a href=""><div class="logo">
                <span class="logo-img" id="logo">HeroFit</span>
            </div></a>
        </div>

        <div class="contant header">
            <div class="header-info">
                <div class="badge">
                    <img src="../img/badge2.svg" alt="">
                </div>

                <div class="header-title">
                    <span class="header-title-align">
                        <span class="header-title-info">قم بإدارة النادي الرياضي الخاص بك <span class="header-title-info title-box">باحترافية!<div class="box"></div></span></span>
                    </span>
                    <span class="header-subtitle-info">ابدأ رحلتك نحو حياة أكثر صحة ونشاطاً مع تطبيقنا! احصل على خطط تدريبية مخصصة ، تتبع تقدمك ، وحقق أهدافك الرياضية بطريقة ممتعة وفعالة. كن مستعدًا للتحول إلى الأفضل ، فالنجاح يبدأ بخطوة!</span>
                </div>

                <div class="header-desc">
                    <button class="btn" onclick="showForm()">أحصل على هيرو فت</button>
                    <!-- <div style="display: flex; align-items:center; margin-top:8px">
                        <img src="../img/gift2.svg" alt="" width="24px">
                        <span class="desc"><span style="color: #5F9944">₪50 </span>خصم لأول 20 مشترك (متبقي 7)</span>
                    </div> -->
                </div>

                <div class="review">
                    <div class="users">
                        <div class="user" id="user1"></div>
                        <div class="user" id="user2"></div>
                        <div class="user" id="user3"></div>
                        <div class="user" id="user4"></div>
                        <div class="user" id="user5"></div>
                    </div>

                    <div class="review-info">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span style="font-family: 'avenir heavy'">13<span style="opacity: 0.5"> نادي يقومون باستخدام هيرو فت</span></span>
                    </div>
                </div>
            </div>
            <div class="header-photo">
                <img src="../img/bar-chart.png" alt="" width="100%">
            </div>
        </div>
        
        <div class="contant sponser">
            <span class="sponser-info">كما شوهد على</span>
            <div class="sponsers-imgs">
                <img src="../img/x.svg" alt="" class="sponser-img x">
                <img src="../img/facebook.svg" alt="" class="sponser-img facebook" >
                <img src="../img/instagram.svg" alt="" class="sponser-img instagram">
            </div>
        </div>

        <hr class="site-line">

        <div class="contant about">

            <div class="about-header">
                <span class="about-header-main">أحصل على ميزات كثيرة</span>
                <span class="about-header-submain">تمتع بميزات هيرو فت المتعددة التي تدعمك في إتمام مهامك بكفاءة.</span>
            </div>

            <div class="about-block" style="margin-top: 48px;">
                <div class="about-block-img img1">
                    <video src="../video/Coustmers.mp4" height="100%" autoplay muted loop>
                    </video>
                </div>

                <div class="about-block-info">
                    <span class="about-block-info-badge">حسابك</span>
                    <div class="about-block-info-main">
                        <span class="block-main1">أنشئ حسابك الخاص!</span>
                        <span class="block-main2">احصل على حساب هيرو فت المخصص لناديك بالتواصل معنا. يمكنك تخصيص ملف النادي ، إضافة المدربين ، إضافة مشتركين ، والتمتع بالمزيد من الميزات الفريدة.</span>
                    </div>

                    <div class="about-block-info-CTA">
                        <button class="btn" onclick="showForm()">أحصل على هيرو فت</button>
                    </div>
                </div>
            </div>

            <div class="about-block">
                <div class="about-block-img img2"></div>

                <div class="about-block-info">
                    <span class="about-block-info-badge">لوحة التحكم</span>
                    <div class="about-block-info-main">
                        <span class="block-main1">أبقى على إطلاع على بيانات النادي الخاص بك!</span>
                        <span class="block-main2">مع هيرو فت، لديك القدرة على التحكم في بياناتك من أي موقع وفي أي وقت ، مما يتيح لك إدارة ناديك ومتابعته بكل سهولة وراحة.</span>
                    </div>

                    <div class="about-block-info-CTA">
                        <button class="btn" onclick="showForm()">أحصل على هيرو فت</button>
                    </div>
                </div>
            </div>

            <div class="about-block">
                <div class="about-block-img img3"></div>

                <div class="about-block-info">
                    <span class="about-block-info-badge">إدارة المشتركين</span>
                    <div class="about-block-info-main">
                        <span class="block-main1">قم بإدراة المشتركين بإحترافية!</span>
                        <span class="block-main2">تطبيق هيرو فت للنوادي الرياضة يجعل إدارة المشتركين سهلة وفعالة. يمكن للمشرفين إضافة وتحديث معلومات المشتركين، وتتبع حالة الأشتراكات، وتنظيم الجداول الزمنية بكل سهولة وسرعة.</span>
                    </div>

                    <div class="about-block-info-CTA">
                        <button class="btn" onclick="showForm()">أحصل على هيرو فت</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="contant apps">
            <div class="apps-main">
                <span class="apps-header">متوفر على</span>
                <div class="apps-imgs">
                    <img src="../img/Apple.svg" alt="" class="apple">
                    <img src="../img/Google-Play.svg" alt="" class="googleplay">
                </div>
            </div>
        </div>

        <div class="contant price" id="price">
            <div class="price-header">
                <span class="about-block-info-badge">الأسعار</span>
                <span class="header-main">يتوفر لدينا العديد من الباقات المميزة ، إختر ما يناسبك</span>
                <!-- <span class="desc"><span style="color: #5F9944">₪50 </span>خصم لأول 20 مشترك (متبقي 7)</span> -->
            </div>
            <div class="price-cards">
                <div class="price-card card1">
                    <span class="price-card-badge">الاساسية</span>

                    <div class="price-price">
                        <span class="price2">مجانية</span>
                    </div>

                    <div class="price-feature">
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">إضافة حتى 3 مشتركين</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">وصول إشعارات بدء وإنتهاء الإشتراك</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">إضافة برامج تدريبية</span>
                        </div>
                        <div class="feature">
                            <img src="../img/cross.svg" alt="" class="feature-img">
                            <span class="feature-desc">إضافة برامج غذائية</span>
                        </div>
                        <div class="feature">
                            <img src="../img/cross.svg" alt="" class="feature-img">
                            <span class="feature-desc">تتبع حضور المشترك</span>
                        </div>
                        <div class="feature">
                            <img src="../img/cross.svg" alt="" class="feature-img">
                            <span class="feature-desc">جدولة مواعيد التدريب</span>
                        </div>
                        <div class="feature">
                            <img src="../img/cross.svg" alt="" class="feature-img">
                            <span class="feature-desc">تصنيف الحزمة الخاصة بالمشترك</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">إصدار فاتورة إلكترونية</span>
                        </div>
                    </div>

                    <div class="price-btn">
                        <button class="btn price-btn-btn" onclick="showForm()">أحصل على هيرو فت</button>
                    </div>
                </div>

                <div class="price-card card2">

                    <div class="top-badge-parent">
                        <div class="top-badge">المفضلة</div>
                    </div>

                    <span class="price-card-badge">الأعمال</span>

                    <div class="price-price">
                        <del><span class="price1">269₪</span></del>
                        <span class="price2">169₪</span>
                        <span class="price3">شيكل</span>
                    </div>

                    <div class="price-feature">
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">إضافة حتى 100 مشترك</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">وصول إشعارات بدء وإنتهاء الإشتراك</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">إضافة برامج تدريبية</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">إضافة برامج غذائية</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">تتبع حضور المشترك</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">جدولة مواعيد التدريب</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">تصنيف المشتركين ل5 حزم</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">إصدار فاتورة إلكترونية</span>
                        </div>
                    </div>

                    <div class="price-btn">
                        <button class="btn price-btn-btn" onclick="showForm()">أحصل على هيرو فت</button>
                    </div>
                </div>

                <div class="price-card card3">
                    <span class="price-card-badge">الذهبية</span>

                    <div class="price-price">
                        <del><span class="price1">329₪</span></del>
                        <span class="price2">229₪</span>
                        <span class="price3">شيكل</span>
                    </div>

                    <div class="price-feature">
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">إضافة عدد لانهائي من المشتركين</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">وصول إشعارات بدء وإنتهاء الإشتراك</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">إضافة برامج تدريبية</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">إضافة برامج غذائية</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">تتبع حضور المشترك</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">جدولة مواعيد التدريب</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">تصنيف الحزمة الخاصة بالمشترك</span>
                        </div>
                        <div class="feature">
                            <img src="../img/Tick1.svg" alt="" class="feature-img">
                            <span class="feature-desc">إصدار فاتورة إلكترونية</span>
                        </div>
                    </div>

                    <div class="price-btn">
                        <button class="btn price-btn-btn" onclick="showForm()">أحصل على هيرو فت</button>
                    </div>
                </div>
            </div>

            <div class="background prico"></div>
        </div>

        <div class="contant sponser">
            <span class="sponser-info">كما شوهد على</span>
            <div class="sponsers-imgs">
                <img src="../img/x.svg" alt="" class="sponser-img x">
                <img src="../img/facebook.svg" alt="" class="sponser-img facebook" >
                <img src="../img/instagram.svg" alt="" class="sponser-img instagram">
            </div>
            <div class="background"></div>
        </div>

        <hr class="site-line">

        <div class="contant FAQ" id="FAQ">
            <div class="FAQ-header">
                <span class="FAQ-main" id="Question">أسئلة يتكرر طرحها</span>
            </div>

            <div class="FAQ-container">

                <div class="faq-question">
                    <input id="q1" type="checkbox" class="panel">
                    <div class="plus">+</div>
                    <label for="q1" class="panel-title">ما هو تطبيق هيرو فت؟</label>
                    <div class="panel-content">هو تطبييق لإدارة النادي الرياضي الخاص بك ، يتيح لك العديد من المميزات التي توفر عليك الوقت والجهد وتجعل ناديك مميزاً   .</div>
                </div>

                <div class="faq-question">
                    <input id="q2" type="checkbox" class="panel">
                    <div class="plus">+</div>
                    <label for="q2" class="panel-title">كيف يمكنني الحصول على على تطبيق هيرو فت ؟</label>
                    <div class="panel-content">تواصل معنا من خلال صفحة التواصل وسوف نرد عليك بأسرع وقت ممكن.</div>
                </div>

                <div class="faq-question">
                    <input id="q3" type="checkbox" class="panel">
                    <div class="plus">+</div>
                    <label for="q3" class="panel-title">ما هي مميزات تطبيق هيرو فت؟</label>
                    <div class="panel-content">هيرو فت يوفر لك العديد من المميزات وأهمها : يمكنك إضافة مشتركينك ، متابعة تقدمهم ، وإضافة البرنامج التدريبي والغذائي الخاص بكل مشترك ، والعديد من المميزات الاخرى.</div>
                </div>

                <div class="faq-question">
                    <input id="q4" type="checkbox" class="panel">
                    <div class="plus">+</div>
                    <label for="q4" class="panel-title">ما هي أسعار تطبيق هيرو فت؟</label>
                    <div class="panel-content">هناك العديد من الباقات المتوفرة لدينا ، يمكنك التواصل معنا لمساعدتك في إختيار الباقة المناسبة لك.</div>
                </div>

                <div class="faq-question">
                    <input id="q5" type="checkbox" class="panel">
                    <div class="plus">+</div>
                    <label for="q5" class="panel-title">كيف أضيف المشتركين إلى حساب النادي الخاص بي؟</label>
                    <div class="panel-content">عن الطريق الذهاب الى صفحة إضافة المشتركين ، وتعبة البيانات المطلوبة ، تواصل معنا في حال واجهت اي مشكلة او صعوبة.</div>
                </div>
            </div>
            <div class="background faq-background"></div>
        </div>

        <div class="contant buyCTA">
            <div class="CTA-main">
                <div class="CTA-desc">
                    <span class="CTA-header">خليك مميز معنا</span>
                    <span class="CTA-subheader">أدر ناديك باحترافية عالية</span>
                </div>

                <div class="CTA-btn">
                    <button class="btn CTA-btn-btn" onclick="showForm()">أحصل على هيرو فت</button>
                </div>
                <div class="background shine"></div>
            </div>
        </div>
        
        <hr class="site-line">

        <div class="contant footer">
            <div class="footer-content">
                <div class="links">
                    <a href="#logo"><span class="link-header" style="font-family: 'avenir black'">هيرو فت</span></a>
                    <span class="link link-desc">قم بإدارة النادي الرياضي باحترافية!</span>
                    <span class="link link-cop">حقوق النشر © 2024 - جميع الحقوق محفوظة</span>
                </div>

                <div class="links">
                    <span class="link-header">روابط</span>
                    <a href="#price"><span class="link link-desc">الأسعار</span></a>
                    <a href="#FAQ"><span class="link link-desc"onclick="flash()">أسئلة شائعة</span></a>
                    <a href="about-us"><span class="link link-desc">من نحن</span></a>
                    <a href="contact-us"><span class="link link-desc">تواصل معنا</span></a>

                </div>
                <div class="links">
                    <span class="link-header">القانون</span>
                    <a href="privacy-policy"><span class="link link-desc">سياسة الخصوصية</span></a>
                    <a href="tos"><span class="link link-desc">الأحكام والشروط</span></a>
                    <a href="license"><span class="link link-desc">الترخيص</span></a>
                </div>
                <div class="links">
                    <span class="link-header">صفحاتنا</span>
                    <div class="linko">
                        <a href=""><img src="../img/facebookIcon.svg" alt="" class="link link-social"></a>
                        <a href=""><img src="../img/instagramIcon.svg" alt="" class="link link-social"></a>
                        <a href=""><img src="../img/tiktokIcon.svg" alt="" class="link link-social"></a>
                    </div>
                </div>
            </div>
            <div class="background bg-footer"></div>
        </div>
    </div>
</body>


<script>
    function flash(){
        const faq = document.getElementById('Question');
        faq.style.filter = 'brightness(0.5)';
        setTimeout(()=>{
            faq.style.filter = 'brightness(1)';
        },100);
    }


    function showForm(){
        const form = document.getElementById('contactus-div');
        const overlay = document.getElementById('overlay');

        form.style.display = "block";
        overlay.style.display = "flex";
    }

    function hideForm(){
        const form = document.getElementById('contactus-div');
        const overlay = document.getElementById('overlay');

        form.style.display = "none";
        overlay.style.display = "none";
    }


    function showMenu(){
        const menu = document.getElementById('burgar-menu');
        const overlay = document.getElementById('overlay');

        overlay.style.display = "flex";
        menu.style.top = '0';
    }

    function hideMenu(){
        const menu = document.getElementById('burgar-menu');
        const overlay = document.getElementById('overlay');

        overlay.style.display = "none";
        menu.style.top = '-300px';
    }
</script>
</html>