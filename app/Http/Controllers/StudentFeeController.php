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

    $payment= StudentFee::all();

    return view('students.payment', compact('payment'));

    }


}