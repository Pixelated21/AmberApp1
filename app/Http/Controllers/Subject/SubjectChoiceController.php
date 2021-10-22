<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Student;
use App\Models\Subject;
use App\Models\SubjectChoice;
use App\Models\Transaction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubjectChoiceController extends Controller
{
    public function subjectChoicesView($id)
    {

        $student = Student::find($id);
        $subjects = Subject::all();
        return view('Student.addChoices', compact('student', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function addSubjectChoices(Request $request, int $id): RedirectResponse
    {
        $subjectChoice = SubjectChoice::where('student_id', $id)->where('subject_id', $request->subject)->where('year_of_exam', $request->year_of_exam)->get()->toArray();


//            dd($subjectChoice);
//        dd($transaction);
//        dd($subject);

        if (!$subjectChoice) {
            SubjectChoice::create([
                'student_id' => $id,
                'subject_id' => $request->subject,
                'year_of_exam' => $request->year_of_exam,

            ]);
        }


        return redirect()->route('student.index');
    }

    public function actions(int $id, $action)
    {


        $subjectChoices = SubjectChoice::find($id);
        $subject = Subject::find($subjectChoices->subject_id);
        $transaction = Transaction::where('student_id', $subjectChoices->student_id)
            ->where('year_of_exam', $subjectChoices->year_of_exam)->first();

        //        dd($subject);

//        if (!($transaction)) {
//            dd('madeid');
//        }
//        dd($transaction);
//        dd($subjectChoices);

        $subjectChoices->update([
            'status' => $action
        ]);

        if ($action == 1) {

            Payment::create([
                'student_id' => $subjectChoices->student_id,
                'subject_id' => $subject->id,
                'balance_amt' => $subject->cost_amt,
                'date_paid' => now()
            ]);

            if (!$transaction) {
                Transaction::create([
                    'student_id' => $subjectChoices->student_id,
                    'amount_due' => $subject->cost_amt,
                    'balance_amt' => $subject->cost_amt,
                    'year_of_exam' => $subjectChoices->year_of_exam
                ]);
            } else {
                $transaction->update(
                    ['amount_due' => $transaction->amount_due + $subject->cost_amt,
                        'balance_amt' => $transaction->balance_amt + $subject->cost_amt]);
//                dd('Ok');
            }


        }
        return redirect()->route('student.index');
    }
}
