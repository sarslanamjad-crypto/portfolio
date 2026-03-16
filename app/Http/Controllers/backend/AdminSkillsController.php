<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class AdminSkillsController extends Controller
{
    public function index()
    {
        $Name = session('first_name') . " " . session('last_name');
        return view('backend.skills', ['skills' => Skill::all(), 'Name' => $Name]);
    }

    public function addSkill()
    {
        $Name = session('first_name') . " " . session('last_name');
        return view('backend.skill-add', ['Name' => $Name]);
    }

    public function submitSkillRecord(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'percent' => 'required|numeric|min:0|max:100',
        ]);

        Skill::create($request->all());
        return back()->withSuccess('Skill Record Added Successfully');
    }

    public function editSkill($id)
    {
        $skill = Skill::findOrFail($id);
        $Name = session('first_name') . " " . session('last_name');
        return view('backend.skill-edit', ['skill' => $skill, 'Name' => $Name]);
    }

    public function updateSkill(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2',
            'percent' => 'required|numeric|min:0|max:100',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->update($request->all());
        return back()->withSuccess('Skill Record Updated Successfully');
    }

    public function deleteSkill($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();
        return back()->withSuccess('Skill Record Deleted Successfully');
    }
}
