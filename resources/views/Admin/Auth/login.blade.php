<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>كاف | تسجيل الدخول</title>
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <script src="{{asset('/js/all.min.js')}}"></script>

</head>

<body>
    <div class="login">
        <div class="logo">
            <img src="{{ asset('assets/logo/Logo_kaaf.png') }}" alt="كاف المطورة">
        </div>
        <div class="sign">
            <a href="whatsapp://send?text=Hello World!&phone=+2001140465989" style="color: rgb(107, 61, 61);">  <i class="fa-brands fa-whatsapp " style="font-size:35"> 01140465989 </i></a>

            <p class="title">تسجيل الدخول</p>
            <div class="type">
                {{--  <button id="teacher-btn" class="active">معلم</button>  --}}
                <button id="manager-btn"class="active">مدير النظام</button>
            </div>
            {{--  <div id="teacher">
                <img src="assets/img/teacher-qr.png" alt="تسجيل دخول المعلم">
            </div>  --}}
            <div id="manager">
                <form  action="{{route('admin.Submitlogin')}}" method="post">
                        @csrf
                        <input required type="text" name="username" placeholder="اسم المستخدم">
                        <div class="pass">
                            <input required type="password" name="password" placeholder="كلمة السر" id="passField">
                            <img src="{{asset('assets/img/eye-off.svg')}}" alt="إظهار \ إخفاء كلمة المرور" id="passImg">
                        </div>
                        <div class="pass" style="text-align: center;">
                            {{--  <label for="">{{$code}}</label>  --}}
                            <input style="width: 50%;margin: 10px 0px;text-align: center;" type="text" disabled name="code" value="{{$code}}">
                            <input required type="text" style="background-color: (rgb(163, 197, 255) !important;" name="user_code" placeholder="ادخل الكود">
                            <input  type="hidden" name="code" value="{{$code}}">
                        </div>
                        <a href="{{route('admin.forgetpassword')}}">هل نسيت كلمة السر؟</a>
                        <input type="submit" value="دخول">
                </form>
            </div>
        </div>
    </div>
    @if(Session::has('error'))
    <li class="text-danger">{{Session::get('error')}}</li>
@endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="banner">
        <img src="{{ asset('assets/img/sign-in.png') }}" alt="كاف المطورة">
        <div class="title">
            <p>كــــــــاف المطوّرة</p>
            <p>لتطوير الوسائل التعليمية</p>
        </div>
        <div class="copyrightes">
            <p>جميع الحقوق محفوظة منصة "كاف المطورة" © 2022 – المملكة العربية السعودية</p>
        </div>
    </div>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
