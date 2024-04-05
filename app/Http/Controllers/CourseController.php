<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use function toastr;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('course.index', ['courses' => Course::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'duration' => ['required'],
            'type' => ['required']
        ]);

        try {
            Course::create($request->all());
            toastr()
                ->closeButton()
                ->addSuccess('Course added successfully.');
        } catch (\Exception $exception) {
            toastr()
                ->closeButton()
                ->addError($exception->getMessage());
        }

        return Redirect::route('courses.index');
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
    public function edit(Course $course): View
    {
        return view('course.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'duration' => ['required'],
            'type' => ['required']
        ]);

        try {
            $course->update($request->all());
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
