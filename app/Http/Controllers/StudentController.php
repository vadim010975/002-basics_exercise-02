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
    public function create($group_title): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('student.create', [
            'group_title' => $group_title,
            'back' => '/groups/' . $group_title,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if(isset($input['_token']))
        {
            unset($input['_token']);
        }
        $group_id = '';
        $group_title = '';
        if(isset($input['group_title']))
        {
            $group_title =$input['group_title'];
            $group_id = Group::all()->where('title', $group_title)->value('id');
            unset($input['group_title']);
        }
        $input['group_id'] = $group_id;
        $input['created_at'] = date('Y-m-d H:i:s');
        $input['updated_at'] = date('Y-m-d H:i:s');
        DB::table('students')->insert($input);
        return redirect('/groups/' . $group_title);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $group, string $student_surname): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $student = Student::all()->where('surname', $student_surname)->first();
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
