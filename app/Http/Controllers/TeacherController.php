<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('teacher.index', ['teachers' => Teacher::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
           'name' => ['required', 'min:3'],
            'address' => ['required', 'string'],
            'date_of_birth' => ['required', 'date'],
            'employment_type' => ['required'],
            'gender' => ['required']
        ]);

        try {
            Teacher::create($request->all());
            toastr()
                ->closeButton()
                ->addSuccess('Teacher added successfully.');
        } catch (\Exception $exception) {
            toastr()
                ->closeButton()
                ->addError($exception->getMessage());
        }

        return Redirect::route('teachers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher): View
    {
        return view('teacher.edit', ['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'address' => ['required'],
            'date_of_birth' => ['required', 'date'],
            'employment_type' => ['required'],
            'gender' => ['required']
        ]);

        try {
            $teacher->update($request->all());
            toastr()
                ->closeButton()
                ->addSuccess('Changes has been saved');
        } catch (\Exception $exception) {
            toastr()
                ->closeButton()
                ->addError($exception->getMessage());
        }

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
