<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index():View
    {
        $subjects = Subject::all();
        return view('Subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create():View
    {
        return view('Subject.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request):RedirectResponse
    {
        Subject::create([
           'subject_nm' => $request->subject_nm,
           'cost_amt' => $request->cost_amt
        ]);

        return redirect()->route('subject.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id):View
    {
        $subject = Subject::find($id);
        return view('Subject.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
//        dd($request->all());
        $subject = Subject::find($id);

        $subject->update([
           'subject_nm' => $request->subject_nm,
           'cost_amt' => $request->cost_amt
        ]);
        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id):RedirectResponse
    {
        $subject = Subject::find($id);

//        dd($subject);

        $subject->delete();

        return redirect()->route('subject.index');
    }

}
