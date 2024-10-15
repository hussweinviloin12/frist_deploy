<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>the page pdf</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@300..900&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Amiri';
            font-style: normal;
            font-weight: normal;
            src: url('{{ public_path('storage/fonts/Amiri-Regular.ttf') }}') format('truetype');
        }


        body {
            font-family: 'Amiri', sans-serif;
            direction: rtl;
            text-align: right;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>حسين علي </h1>

<table>
    <thead>
    <tr>
        <th>اسم القسم</th>
        <th>المعدل المطلوب</th>
        <th>نوع الدراسة</th>
        <th>الفرع</th>
        <th>الأجور</th>
    </tr>
    </thead>
    <tbody>
    @foreach($departments as $department)
        <tr>
            <td>{{ $department['name'] }}</td>
            <td>{{ $department['gpa'] }}</td>
            <td>{{ $department['study_type'] }}</td>
            <td>{{ $department['branch'] }}</td>
            <td>{{ $department['fees'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{--@php--}}
{{--    dd($departments);--}}
{{--@endphp--}}
</body>
</html>
