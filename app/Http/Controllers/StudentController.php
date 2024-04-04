<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use function toastr;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('student.index', [
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'address' => ['required', 'string'],
            'date_of_birth' => ['required', 'date'],
            'gender' => ['required', 'string']
        ]);

        try {
            Student::create($request->all());
            toastr()
                ->closeButton()
                ->addSuccess('Student added successfully.');
        } catch (\Exception $exception) {
            toastr()
                ->closeButton()
                ->addError($exception->getMessage());
        }

        return Redirect::route('students.index');
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
    public function edit(Student $student): View
    {
        return view('student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'address' => ['required'],
            'date_of_birth' => ['required', 'date'],
            'gender' => ['required']
        ]);

        try {
            $student->update($request->all());
            toastr()
                ->closeButton()
                ->addSuccess('Changes has been saved.');
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
