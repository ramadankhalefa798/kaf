<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>كاف | نسيت كلمة المرور</title>
    <link rel="stylesheet" href="{{asset('/css/global.css')}}">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('/css/forget.css')}}">
</head>

<body>
    <div class="login">
        <div class="logo">
            <img src="../assets/logo/Logo_kaaf.png" alt="كاف المطورة">
        </div>
        <div class="forget">
            <div class="title">
                <div class="text">
                    <p>نسيت كلمة السر؟</p>
                    <p>يرجى إدخال عنوان البريد الإلكتروني</p>
                </div>
                <div class="progress">
                    <p>2/1</p>
                </div>
            </div>
            <form action="{{route('admin.reciveemail')}}" method="post">
                @csrf
                <div class="email">
                    <p>البريد الإلكتروني</p>
                    <input type="email" name="email" id="email" placeholder="البريد الإلكتروني">
                </div>
                <input type="submit" value="إرسال">
            </form>
        </div>
    </div>
    <div class="banner">
        <img src="../assets/img/sign-in.png" alt="كاف المطورة">
        <div class="title">
            <p>كــــــــاف المطوّرة</p>
            <p>لتطوير الوسائل التعليمية</p>
        </div>
        <div class="copyrightes">
            <p>جميع الحقوق محفوظة منصة "كاف المطورة" © 2022 – المملكة العربية السعودية</p>
        </div>
    </div>
</body>

</html>
