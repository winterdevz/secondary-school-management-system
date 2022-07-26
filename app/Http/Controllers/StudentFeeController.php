<?php

namespace App\Http\Controllers;

use App\Models\StudentFee;
use App\Models\User;
use Illuminate\Http\Request;

class StudentFeeController extends Controller
{
    public function store(Request $request, $student_id){
    $student = User::findorfail($request->student_id);

    $student->student_payment()->create([
        'amount2pay' => $request->amount2pay,
        'amount_paid' => $request->amount_paid,
        'payment_type' => $request->payment_type,
    ]);

    // $payment= StudentFee::all();

    return redirect()->back();

    }

    public function list($student_id){
        $receipt  = StudentFee::where('student_id', $student_id)->sum("amount_paid");
        $payment_id  = StudentFee::select("amount_paid", "student_id", "amount2pay", "payment_type")->where('student_id', $student_id)->first();
        // dd($payment_id);
        $student = User::findorfail($student_id);
        $data = [
            'receipt' => $receipt,
            'student' => $student,
            'payment_id' => $payment_id,
        ];
        
        return view('students.pay-receipt', $data);
    }


}