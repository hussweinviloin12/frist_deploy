<!DOCTYPE html>
<html>
<head>
    <title>إضافة قسم جديد</title>
</head>
<body>
<h1>إضافة قسم جديد</h1>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="/admin/departments" method="POST">
    @csrf
    <label>اسم القسم:</label>
    <input type="text" name="name" value="{{ old('name') }}" required><br>

    <label>المعدل:</label>
    <input type="number" step="0.01" value="{{ old('number') }}" name="gpa" required><br>

    <label>نوع الدراسة:</label>
    <input type="text" name="study_type" vlaue="{{old('study_type')}}"  required><br>

    <label>الفرع:</label>
    <textarea rows="2" cols="10" type="text" name="branch" value="{{ old('text') }}" required>
    </textarea><br>
    <label>الأجور:</label>
    <input type="number" step="0.01" name="fees" value="{{ old('fees') }}" required><br>

    <button type="submit">إضافة</button>
</form>
</body>
</html>
