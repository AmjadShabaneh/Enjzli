@extends('layout.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الترخيص | هيرو فت</title>
    <link rel="stylesheet" href="{{asset('../../css/landingpage/license.css?v=').time()}}">
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

            <span class="header">الترخيص</span>
            <div class="par-div">
                <span class="par">آخر تحديث: [4/5/2024]</span>
                <p class="par">مرحبًا بك في صفحة تراخيص HeroFit.</p>
                <p class="par">توضح هذه الصفحة التراخيص المختلفة التي تنطبق على استخدام موقع HeroFit وخدماته. يرجى قراءة هذه التراخيص بعناية قبل استخدام منصتنا.</p>
            </div>

            <div class="par-div">
                <span class="header2">1. ترخيص البرنامج</span>
                <p class="par">تمنحك HeroFit ترخيصًا محدودًا وغير حصري وغير قابل للتحويل لاستخدام منصة وخدمات HeroFit لغرض وحيد هو إدارة المشتركين في صالة الألعاب الرياضية الخاصة بك. يخضع هذا الترخيص للشروط والأحكام التالية:</p>
                <p class="par">
                    <ul>
                        <li>لا يجوز لك استخدام منصة HeroFit وخدماتها إلا للأغراض القانونية ووفقًا لهذه الشروط.</li>
                        <li>لا يجوز لك ترخيص منصة أو خدمات HeroFit أو بيعها أو تأجيرها أو نقلها أو التنازل عنها أو توزيعها.</li>
                        <li>لا يجوز لك إجراء هندسة عكسية أو فك ترجمتها أو تفكيكها أو محاولة اشتقاق الكود المصدري لمنصة أو خدمات HeroFit.</li>
                    </ul>
                </p>
            </div>

            <div class="par-div">
                <span class="header2">2. ترخيص المحتوى</span>
                <p class="par">جميع المحتويات الموجودة على موقع HeroFit، بما في ذلك على سبيل المثال لا الحصر، النصوص والرسومات والشعارات والصور والبرامج، هي ملك لشركة HeroFit أو الجهات المرخصة لها ومحمية بموجب حقوق الطبع والنشر وقوانين الملكية الفكرية الأخرى. تمنحك HeroFit ترخيصًا محدودًا وغير حصري وقابل للإلغاء للوصول إلى هذا المحتوى واستخدامه لاستخدامك الشخصي وغير التجاري. يخضع هذا الترخيص للقيود التالية:</p>
                <p class="par">
                    <ul>
                        <li>لا يجوز لك تعديل أو إعادة إنتاج أو توزيع أو إنشاء أعمال مشتقة بناءً على أي محتوى موجود في HeroFit دون الحصول على موافقة كتابية صريحة من HeroFit.</li>
                        <li>لا يجوز لك استخدام أي وسيلة آلية، مثل استخراج البيانات، أو الروبوتات، أو أدوات مماثلة لجمع البيانات واستخراجها، للوصول إلى المعلومات أو جمعها من موقع HeroFit.</li>
                    </ul>
                </p>
            </div>

            <div class="par-div">
                <span class="header2">3. تراخيص الطرف الثالث</span>
                <p class="par">قد تستخدم HeroFit برامج أو خدمات تابعة لجهة خارجية في توفير نظامها الأساسي وخدماتها. قد يخضع استخدامك لـ HeroFit لشروط وأحكام إضافية يفرضها مقدمو الطرف الثالث. وتقع على عاتقك مسؤولية مراجعة أي من هذه الشروط والأحكام والامتثال لها.</p>
                <p class="par">باستخدام موقع وخدمات HeroFit، فإنك توافق على الالتزام بشروط هذه التراخيص. إذا كنت لا توافق على هذه التراخيص، فيرجى عدم استخدام HeroFit.</p>
            </div>

            <p class="par">باستخدام موقع وخدمات HeroFit، فإنك توافق على الالتزام بشروط هذه التراخيص. إذا كنت لا توافق على هذه التراخيص، فيرجى عدم استخدام HeroFit.</p>
        </div>
    </div>
</body>

<script>
    function goBack(){
        window.history.back();
    }
</script>

</html>