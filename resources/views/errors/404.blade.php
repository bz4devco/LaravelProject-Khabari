<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-reboot.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <title>صفحه ای پیدا نشد | صفحه 404</title>

    <style>
        /*======================
    404 page
=======================*/
        body{
             direction: rtl;
        }
        @font-face {
            font-family: "IRANSans";
            src: url({{asset('defaults/images/errors/fonts/IRANSans/IRANSansWeb.woff2')}});
        }

        .page_404 {
            padding: 40px 0 0 0;
            background: #fff;
            font-family: 'IRANSans', serif;
        }

        .page_404 img {
            width: 100%;
        }

        .four_zero_four_bg {
            background-image: url({{asset('defaults/images/errors/404/dribbble_1.gif')}});
            height: 400px;
            background-position: center;
        }


        .four_zero_four_bg h1 {
            font-size: 80px;
        }

        .four_zero_four_bg h3 {
            font-size: 80px;
        }

        .link_404 {
            color: #fff !important;
            padding: 10px 20px;
            background: #39ac31;
            margin: 20px 0;
            display: inline-block;
        }

        .contant_box_404 {
            margin-top: -50px;
        }
    </style>
</head>

<body>
    <section class="page_404">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="four_zero_four_bg">
                        <h1 class="text-center ">404</h1>
                    </div>

                    <div class="contant_box_404 text-center">
                        <h3 class="h2">
                            به نظر می رسد گم شده اید
                        </h3>

                        <p>صفحه ای که بدنبال آن هستید در دسترس نیست!</p>
                        @if(request()->is('admin/*'))
                        <a href="{{ route('admin.home') }}" class="link_404 text-decoration-none">بازگشت به صفحه قبل</a>
                        @else
                        <a href="{{ url()->previous() }}" class="link_404 text-decoration-none">بازگشت به صفحه قبل</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        </div>
    </section>
</body>

</html>