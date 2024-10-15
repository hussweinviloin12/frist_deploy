{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>عرض الأقسام</title>--}}
{{--    <style>--}}
{{--        table {--}}
{{--            width: 100%;--}}
{{--            border-collapse: collapse;--}}
{{--        }--}}
{{--        table, th, td {--}}
{{--            border: 1px solid black;--}}
{{--        }--}}
{{--        th, td {--}}
{{--            padding: 10px;--}}
{{--            text-align: left;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}

{{--<h1>عرض الأقسام</h1>--}}

{{--<form method="GET" action="{{ route('departments.filter') }}">--}}
{{--    <label for="search">ابحث عن:</label>--}}
{{--    <input type="text" name="search" id="search" placeholder="اسم القسم أو المعدل">--}}
{{--    <button type="submit">بحث</button>--}}
{{--</form>--}}

{{--@if(count($departments) > 0)--}}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <th>اسم القسم</th>--}}
{{--            <th>المعدل</th>--}}
{{--            <th>نوع الدراسة</th>--}}
{{--            <th>الفرع</th>--}}
{{--            <th>الأجور</th>--}}
{{--        </tr>--}}
{{--        @foreach($departments as $department)--}}
{{--            <tr>--}}
{{--                <td>{{ $department->name }}</td>--}}
{{--                <td>{{ $department->gpa }}</td>--}}
{{--                <td>{{ $department->study_type }}</td>--}}
{{--                <td>{{ $department->branch }}</td>--}}
{{--                <td>{{ $department->fees }}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}
{{--@else--}}
{{--    <p>لا توجد أقسام مُدخلة بعد.</p>--}}
{{--@endif--}}

{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الأقسام</title>
    <style>
        /* تنسيق للجسم */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* تنسيق للحاوية */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #444;
        }

        /* تنسيق نموذج البحث */
        form {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 300px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
            font-size: 16px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #218838;
        }

        /* تنسيق الجدول */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* الرسالة عند عدم وجود أقسام */
        .no-departments {
            text-align: center;
            font-size: 18px;
            color: #666;
            margin-top: 20px;
        }

        .pagination-links {
            text-align: center;
            margin-top: 20px;
        }

        .pagination-links nav ul {
            display: inline-flex;
            list-style-type: none;
            padding: 0;
        }

        .pagination-links nav ul li {
            margin: 0 5px;
        }

        .pagination-links nav ul li a {
            padding: 10px 15px;
            color: #00b303;
            background-color: #f9f9f9;
            border-radius: 5px;
            text-decoration: none;
            border: 1px solid #ddd;
        }

        .pagination-links nav ul li a:hover {
            background-color: #27604c;
            color: white;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>عرض الأقسام</h1>

    <!-- نموذج البحث -->
    <form method="GET" action="{{ route('departments.filter') }}">
        <label for="search">ابحث عن:</label>
        <input type="text" name="search" id="search" placeholder="اسم القسم أو الفرع">
        <button type="submit">بحث</button>
    </form>

    <!-- عرض الجدول إذا كان هناك أقسام -->
    @if(count($departments) > 0)
        <table>
            <thead>
            <tr>
                <th>اسم القسم</th>
                <th>المعدل</th>
                <th>نوع الدراسة</th>
                <th>الفرع</th>
                <th>الأجور</th>
            </tr>
            </thead>
            <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->gpa }}</td>
                    <td>{{ $department->study_type }}</td>
                    <td>{{ $department->branch }}</td>
                    <td>{{ $department->fees }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
{{--        <div class="pagination-links">--}}
{{--            {{ $departments->links('pagination::bootstrap-4') }}--}}
{{--        </div>--}}
    @else
        <p class="no-departments">لا توجد أقسام مُدخلة بعد.</p>
    @endif
</div>

</body>
</html>
