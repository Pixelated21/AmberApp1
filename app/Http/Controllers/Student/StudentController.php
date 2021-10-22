<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $students = Student::paginate(5);

//        dd($students);

        return view('Student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('Student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
//        dd($request->all());

        Student::create([
            'first_nm' => $request->first_nm,
            'last_nm' => $request->last_nm,
            'dob' => $request->dob,
            'class' => $request->class,
            'phone_nbr' => $request->phone_nbr,
            'email_addr' => $request->email_addr,
            'gender' => $request->gender
        ]);

        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id)
    {

        $student = Student::with('subject_choice_subject')->where('id',$id)->first();

//        dd($student);
        return view('Student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory
     */
    public function edit(int $id)
    {
        $student = Student::find($id);
        return view('Student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
//        dd($request->all());
        $student = Student::find($id);

        $student->update([
            'first_nm' => $request->first_nm,
            'last_nm' => $request->last_nm,
            'dob' => $request->dob,
            'class' => $request->class,
            'phone_nbr' => $request->phone_nbr,
            'email_addr' => $request->email_addr,
            'gender' => $request->gender
        ]);

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $student = Student::find($id)->delete();

        return redirect()->route('student.index');

    }
}
