<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Support\Facades\DB;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $groups = DB::table('groups')->get();
        return view('group.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('group.create', ['back' => '/groups']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $input = $request->all();
        if(isset($input['_token']))
        {
            unset($input['_token']);
        }
        if(isset($input['is_active']))
        {
            $input['is_active'] = true;
        } else {
            $input['is_active'] = false;
        }
        $input['created_at'] = date('Y-m-d H:i:s');
        $input['updated_at'] = date('Y-m-d H:i:s');
        DB::table('groups')->insert($input);
        return redirect('/groups');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $group_title): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $group = Group::all()->where('title', $group_title)->first();

        $students = $group->students;

        return view('group.show', [
            'id' => $group->id,
            'title' => $group->title,
            'start_from' => $group->start_from,
            'is_active' => $group->is_active,
            'created_at' => $group->created_at,
            'updated_at' => $group->updated_at,
            'students' => $students
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
