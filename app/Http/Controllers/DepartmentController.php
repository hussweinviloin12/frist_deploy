<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{


    public function downloadPDF(Request $request)
    {
        // Decode the JSON-encoded departments data
        $departments = json_decode($request->input('departments'), true);

        // Check if departments data is not empty
        if (empty($departments)) {
            return back()->with('error', 'لا توجد بيانات لتحميلها.');
        }
        if (!file_exists(public_path('storage\fonts\Amiri-Regular.ttf'))) {
            die('خط Amiri غير موجود!');
        }
        // Instantiate Dompdf with options
        $pdf = PDF::loadView('pdf.departments', compact('departments'))
            ->setOptions(['defaultFont' => 'Amiri']); // تأكد من استخدام اسم الخط الصحيح

        PDF::loadView('pdf.departments', compact('departments'))
            ->setOptions([

                'defaultFont' => 'Amiri',
                'isHtml5ParserEnabled' => true,
                'isRemoteEnabled' => true,
            ]);

        // Set the paper size and orientation
        $pdf->setPaper('A4', 'portrait');

        // Render the PDF and stream it to the browser
        return $pdf->stream('departments.pdf');
    }


}
