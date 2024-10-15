<?php

use Illuminate\Support\Facades\Route;
use App\Models\Department;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/departments', function () {
    return view('admin.departments');
});

Route::post('/admin/departments', function (Request $request) {
    Department::create($request->all());
    return redirect('/admin/departments')->with('success', 'تم إضافة القسم بنجاح');
})->name('admin.departments');
Route::get('/departments/search', function () {
    return view('departments.search');
});


Route::post('/departments/search', function (Request $request) {
    // التحقق من استقبال القيم
    $validated = $request->validate([
        'gpa' => 'required|numeric',
        'study_type' => 'required|string',
        'branch' => 'required|string'
    ]);

    // البحث عن الأقسام بناءً على المدخلات
    $departments = Department::where('gpa', '<=', $validated['gpa'])
//        ->where('study_type', 'LIKE', "%{$validated['study_type']}%") // استخدام LIKE للبحث
        ->whereIn('study_type', ['صباحي', 'مسائي'])
        ->where(function($query) use ($validated) {
            // تحقق إذا كانت قيمة الفرع هي "علمي" لعرض "الأحيائي" و "التطبيقي"
            if (stripos($validated['branch'], 'علمي') !== false) {
                $query->whereIn('branch', ['احيائي', 'تطبقي']);
            }elseif (stripos($validated['branch'], 'صناعة') !== false) {
                // إذا كانت كلمة "صناعة" موجودة، عرض جميع الأقسام المتعلقة بالصناعة
                $query->where('branch', 'LIKE', '%صناعة%');
            }

            else {
                $query->where('branch','LIKE',"%{$validated['branch']}%");
            }})
        ->get();

    // عرض النتائج
    return view('departments.results', compact('departments'));
})->name('departments.search');










Route::get('/admin/view-departments', function () {
//    $departments = Department::all(); // جلب جميع الأقسام من قاعدة البيانات
    $departments = Department::all();
    return view('admin.view-departments', compact('departments'));
})->name('admin.view-departments');


//filter
Route::get('/departments/filter', function (Request $request) {
    $search = $request->input('search');

    // البحث عن الأقسام التي تحتوي على اسم القسم أو التي معدلها يساوي أو أقل من المدخل
    $departments = Department::where('name', 'LIKE', "%{$search}%")
        ->orWhere('branch', 'LIKE', "%{$search}%")
        ->orWhere(function($query) use ($search) {
            if (is_numeric($search)) {
                $query->where('gpa', '<=', $search);
            }
        })
        ->get();

    return view('admin.view-departments', compact('departments'));
})->name('departments.filter');

// Route لتوليد ملف PDF

use App\Http\Controllers\DepartmentController;

Route::post('/departments/pdf', [DepartmentController::class, 'downloadPDF'])->name('departments.pdf');
