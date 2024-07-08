@extends('layout.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>سياسة الخصوصية | هيرو فت</title>
    <link rel="stylesheet" href="{{asset('../../css/landingpage/privacy-policy.css?v=').time()}}">
</head>
<body dir="rtl">
    <div class="container">
        <div class="contant">
            <button class="goback" onclick="goBack()">
                <div class="opc">
                    <img src="../../img/arrow1.svg" alt="" class="arrow">
                    <span class="goback-text">الرجوع</span>
                </div>
            </button>

            <span class="header">سياسة الخصوصية</span>
            <div class="par-div">
                <span class="par">مرحبا بك في HeroFit!</span>
                <p class="par">تحدد هذه الشروط والأحكام القواعد واللوائح الخاصة باستخدام موقع وخدمات HeroFit.</p>
                <p class="par">من خلال الدخول إلى هذا الموقع واستخدام خدماتنا، فإنك توافق على هذه الشروط والأحكام بالكامل. لا تستمر في استخدام HeroFit إذا كنت لا تقبل جميع الشروط والأحكام المذكورة في هذه الصفحة.</p>
            </div>

            <div class="par-div">
                <span class="header2">1. الترخيص</span>
                <p class="par">تمنحك HeroFit ترخيصًا محدودًا وغير حصري وغير قابل للتحويل لاستخدام منصة وخدمات HeroFit لغرض وحيد هو إدارة المشتركين في صالة الألعاب الرياضية الخاصة بك.</p>
            </div>

            <div class="par-div">
                <span class="header2">2. تسجيل الحساب</span>
                <p class="par">أ. من أجل الوصول إلى ميزات معينة في HeroFit، قد يُطلب منك التسجيل للحصول على حساب. أنت توافق على تقديم معلومات دقيقة وحديثة وكاملة أثناء عملية التسجيل.</p>
                <p class="par">ب. أنت مسؤول عن الحفاظ على أمان حسابك وكلمة المرور. لا يمكن لشركة HeroFit ولن تكون مسؤولة عن أي خسارة أو ضرر ناتج عن فشلك في الامتثال لهذا الالتزام الأمني.</p>
            </div>

            <div class="par-div">
                <span class="header2">3. بيانات المشترك</span>
                <p class="par">أ. يسمح لك HeroFit بإدارة معلومات المشترك، بما في ذلك التفاصيل الشخصية ومعلومات الدفع. أنت توافق على التعامل مع هذه البيانات وفقًا لقوانين ولوائح الخصوصية المعمول بها.</p>
                <p class="par">ب. لا تتحمل HeroFit مسؤولية دقة أو اكتمال أو شرعية بيانات المشترك التي تقدمها.</p>
            </div>

            <div class="par-div">
                <span class="header2">4. الرسوم والمدفوعات</span>
                <p class="par">أ. قد يخضع استخدام خدمات HeroFit لدفع الرسوم. أنت توافق على دفع جميع الرسوم والمصاريف المتكبدة فيما يتعلق باستخدامك لخدمات HeroFit.</p>
                <p class="par">ب. جميع الرسوم غير قابلة للاسترداد ما لم ينص على خلاف ذلك.</p>
            </div>

            <div class="par-div">
                <span class="header2">5. الملكية الفكرية</span>
                <p class="par">أ. جميع المحتويات الموجودة على HeroFit، بما في ذلك على سبيل المثال لا الحصر، النصوص والرسومات والشعارات والصور والبرامج، هي ملك لشركة HeroFit أو الجهات المرخصة لها ومحمية بموجب حقوق النشر وقوانين الملكية الفكرية الأخرى.</p>
                <p class="par">ب. لا يجوز لك تعديل أو إعادة إنتاج أو توزيع أو إنشاء أعمال مشتقة بناءً على أي محتوى موجود في HeroFit دون الحصول على موافقة كتابية صريحة من HeroFit.</p>
            </div>

            <div class="par-div">
                <span class="header2">6. حدود المسؤولية</span>
                <p class="par">لن تتحمل HeroFit بأي حال من الأحوال المسؤولية عن أي أضرار غير مباشرة أو عرضية أو خاصة أو تبعية أو تأديبية، بما في ذلك على سبيل المثال لا الحصر خسارة الأرباح أو البيانات أو الشهرة، والتي تنشأ عن أو فيما يتعلق باستخدامك لموقع HeroFit أو خدماته.</p>
            </div>

            <div class="par-div">
                <span class="header2">7. القانون الحاكم</span>
                <p class="par">تخضع هذه الشروط والأحكام وتفسر وفقًا لقوانين [الولاية القضائية الخاصة بك]، وتخضع بشكل لا رجعة فيه للولاية القضائية الحصرية للمحاكم في تلك الولاية القضائية.</p>
            </div>

            <div class="par-div">
                <p class="par">باستخدام موقع وخدمات HeroFit، فإنك تشير إلى موافقتك على هذه الشروط والأحكام. إذا كنت لا توافق على هذه الشروط والأحكام، يرجى عدم استخدام HeroFit.</p>
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