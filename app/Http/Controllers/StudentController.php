<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($groupTitle): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('student.create', [
            'group_title' => $groupTitle,
            'back' => '/groups/' . $groupTitle,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
    {
        $input = $request->except(['_token']);
        $groupTitle = $input['group_title'];
        $groupId = Group::all()->where('title', $groupTitle)->value('id');
        unset($input['group_title']);
        $input['group_id'] = $groupId;
        Student::query()->create($input);
        return redirect('/groups/' . $groupTitle);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $groupTitle, string $studentSurname): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $group = Group::all()->where('title', $groupTitle)->first();

        $students = $group->students;

        $student = $students->where('surname', $studentSurname)->first();

        return view('student.show', [
            'id' => $student->id,
            'group_id' => $student->group_id,
            'surname' => $student->surname,
            'name' => $student->name,
            'created_at' => $student->created_at,
            'updated_at' => $student->updated_at,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
