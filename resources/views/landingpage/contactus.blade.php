@extends('layout.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تواصل معنا | هيرو فت</title>
    <link rel="stylesheet" href="{{asset('../../css/landingpage/contactus.css?v=').time()}}">
</head>
<body dir="rtl">
    <div class="container">
        <div class="contant main-info">
            <button class="goback" onclick="goBack()">
                <div class="opc">
                    <img src="../../img/arrow1.svg" alt="" class="arrow">
                    <span class="goback-text">رجوع</span>
                </div>
            </button>
            
            <div class="header">
                <span class="header-1">تواصل معنا</span>
                <span class="header-3">إذا كنت ترغب في طرح أي أسئلة أو تحتاج إلى مساعدة في أي شيء ، فلا تتردد في الاتصال بنا. نحن هنا لمساعدتك بكل ما نستطيع!</span>
            </div>

            <div class="email">
                <form action="">
                    @csrf
                    <label for="name">الاسم :</label>
                    <input type="text" id="name" name="name">

                    <label for="email">البريد الالكتروني :</label>
                    <input type="email" id="email" name="email">

                    <label for="phone">رقم الهاتف :</label>
                    <input type="tel" id="phone" name="phone">

                    <label for="desc">استفسار :</label>
                    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                
                    <button class="submit">إرسال</button>
                </form>
            </div>
        </div>
        
        <div class="contant side-info">
            <div class="phone">
                <span class="header-2">الهاتف</span>
                <span class="header-3">جوال: <span>0591234567</span></span>
                <span class="header-3">اوريدو: <span>0561234567</span></span>
            </div>
            <div class="emails">
                <span class="header-2">البريد الإلكتروني</span>
                <span class="header-3">contactus@herofit.com</span>
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