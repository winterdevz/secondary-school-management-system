<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\StudentReport;
use App\Models\User;
use Illuminate\Http\Request;

class StudentReportController extends Controller
{
   public function create(){
       return view('students.create-report');
   }

   public function store_scores (Request $request){
    $student = User::findorfail($request->student_id);
    $student->student_report()->create([
        'english'  => $request->eng_lang,
        'mathematics'  => $request->mathematics,
        'biology'  => $request->biology,
         'chemistry'  => $request->chemistry,
         'physics'  => $request->physics,
         'irk'  => $request->IRK,
         'crk'  => $request->CRS,
         'agric'  => $request->agricScience,
         'lit'  => $request->literature,
         'economics'  => $request->economics,
         'commerce'  => $request->Commerce,
         'government'  => $request->government,
         'geography'  => $request->geography,
         'accountring'  => $request->accounting,
         'yoruba'  => $request->yoruba,
         'computer'  => $request->computer,
         'civic'  => $request->civic_education,
     ]);
    // $payment= StudentFee::all();

    return redirect('/home');
   }

   public function view_scores($student_id){
       $report  = StudentReport::where('student_id', $student_id)->first();
        $promotion_info = Promotion::where('student_id', $student_id)->first();
       return view('students.report-sheet', compact('report','promotion_info'));
   }
}