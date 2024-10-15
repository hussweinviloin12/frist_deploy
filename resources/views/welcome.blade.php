{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}


{{--        <!-- Styles -->--}}

{{--    </head>--}}
{{--   <body>--}}
{{--<h2>موقع جامعة المستقل </h2>--}}
{{--<img src="{{ asset('public/mus.png') }}" alt="">--}}

{{--   <a href="{{ route('departments.search') }}">--}}
{{--   </a>--}}
{{--   <a href="{{ route('admin.view-departments') }}">--}}
{{--       <button class="btn btn-primery">صفحه جميع الاقسام</button>--}}
{{--   </a>--}}


{{--   <a href="{{ route('departments.search') }}">--}}
{{--       <button>صفحه صفحه البحث </button>--}}
{{--   </a>--}}
{{--</br>--}}

{{--       <a href="{{ route('admin.departments') }}">--}}
{{--           <button>صفحه الانشاء للاقسام </button>--}}
{{--       </a>--}}



{{--    </body>--}}


{{--</html>--}}
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>جامعة المستقل</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('{{ asset('storage/cc.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* خلفية شفافة */
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }

        .header {
            text-align: center;
        }

        .header h2 {
            font-size: 2.5rem;
            color: #2c3e50;
            font-weight: bold;
        }

        .header img {
            width: 120px;
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .buttons a button {
            font-size: 1.1rem;
            padding: 10px 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            width: 100%;
            bottom: 0;
        }

        footer a {
            color: #ffcc00;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container text-center">
    <div class="header">
        <h2>موقع جامعة المستقبل</h2>
        <img src="{{ asset('storage/mus.png') }}" alt="شعار الجامعة">
    </div>

    <!-- الأزرار الرئيسية -->
    <div class="buttons">

{{--        <a href="{{ route('admin.view-departments') }}">--}}
{{--            <button class="btn btn-primary">صفحه جميع الاقسام</button>--}}
{{--        </a>--}}

        <a href="{{ route('departments.search') }}">
            <button class="btn btn-secondary">صفحه البحث</button>
        </a>

{{--        <a href="{{ route('admin.departments') }}">--}}
{{--            <button class="btn btn-success">صفحه الانشاء للاقسام</button>--}}
{{--        </a>--}}
    </div>
</div>

<footer>
    &copy; 2024 جميع الحقوق محفوظة | المصمم <a href="#">حسين علي</a>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

