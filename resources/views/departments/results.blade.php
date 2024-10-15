<!DOCTYPE html>
<html lang="ar">
<!--page result.blade.php-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نتائج البحث</title>

    <!-- Google Fonts -->

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

        /* الحاوية */
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #444;
            font-size: 2rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #007bff;
        }

        /* الجدول */
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
            font-size: 1.1rem;
        }

        td {
            font-size: 1rem;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* زر التنزيل */
        button {
            padding: 12px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 20px;
            display: block;
            width: 100%;
            max-width: 300px;
            margin-left: auto;
            margin-right: auto;
            font-size: 1.1rem;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        button:hover {
            background-color: #218838;
            box-shadow: 0px 4px 10px rgba(33, 136, 56, 0.3);
        }

        /* الرسالة عند عدم وجود نتائج */
        .no-results {
            text-align: center;
            font-size: 1.2rem;
            color: #666;
            margin-top: 20px;
        }

        /* استجابة الهواتف */
        @media (max-width: 768px) {
            h1 {
                font-size: 1.8rem;
            }

            th, td {
                font-size: 0.9rem;
                padding: 10px;
            }

            button {
                font-size: 1rem;
                padding: 10px;
            }
        }

        /* استجابة الهواتف الأصغر */
        @media (max-width: 480px) {
            h1 {
                font-size: 1.5rem;
            }

            th, td {
                font-size: 0.8rem;
                padding: 8px;
            }

            button {
                font-size: 0.9rem;
                padding: 8px;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <h1>نتائج البحث</h1>

    @if(count($departments) > 0)
        <table>
            <thead>
            <tr>
                <th>اسم القسم</th>
                <th>المعدل المطلوب</th>
                <th>نوع الدراسة</th>
                <th>الفرع</th>
{{--                <th>الأجور</th>--}}
            </tr>
            </thead>
            <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->gpa }}</td>
                    <td>{{ $department->study_type }}</td>
                    <td>{{ $department->branch }}</td>
{{--                    <td>{{ $department->fees }}</td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>

{{--        <form action="{{ route('departments.pdf') }}" method="POST" target="_blank">--}}
{{--            @csrf--}}
{{--            <input type="hidden" name="departments" value="{{ json_encode($departments) }}">--}}
{{--            <button type="submit">تنزيل كـ PDF</button>--}}
{{--        </form>--}}
    @else
        <p class="no-results">لا توجد نتائج مطابقة.</p>
    @endif
</div>

</body>

</html>
