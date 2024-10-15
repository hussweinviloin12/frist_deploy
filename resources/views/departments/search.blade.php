
    <!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>البحث عن قسم</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@300..900&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Amiri';
            src: url('{{ asset('storage/fonts/Amiri/Amiri-Regular.ttf') }}') format('truetype');
        }

        body {
            font-family: 'Amiri', serif;
            direction: rtl;
            text-align: right;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        /* الحاوية الأساسية */
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        h1 {
            text-align: center;
            color: #444;
            font-size: 2rem;
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .help-link {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #555;
        }

        .help-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .help-link a:hover {
            color: #00b303;
            font-size: 15px;
            text-decoration: underline;
        }

        /* تنسيق النموذج */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="number"],
        input[type="text"] {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input[type="number"]:focus,
        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        button {
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
            box-shadow: 0px 4px 10px rgba(0, 91, 179, 0.3);
        }

        /* استجابة الهواتف */
        @media (max-width: 600px) {
            .container {
                margin: 20px;
                padding: 15px;
            }

            h1 {
                font-size: 1.5rem;
            }

            button {
                font-size: 1rem;
                padding: 10px;
            }

            input[type="number"],
            input[type="text"] {
                font-size: 0.9rem;
                padding: 10px;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <h1>البحث عن قسم</h1>

    <form action="/departments/search" method="POST">
        @csrf
        <label for="gpa">المعدل:</label>
        <input type="number" step="0.01" name="gpa" id="gpa" required>

        <label for="study_type">نوع الدراسة:</label>
        <input type="text" name="study_type" id="study_type" required>

        <label for="branch">الفرع:</label>
        <input type="text" name="branch" id="branch" required>

        <button type="submit">بحث</button>
{{--        <div class="help-link">--}}
{{--            <label>إذا لم يكن التخصص المطلوب واضحًا، يمكنك الاطلاع على هذا الملف:</label><br>--}}
{{--            <a href="{{ asset('storage/husseinali.pdf') }}" target="_blank">عرض الملف</a>--}}
{{--        </div>--}}
    </form>
</div>

</body>
</html>

