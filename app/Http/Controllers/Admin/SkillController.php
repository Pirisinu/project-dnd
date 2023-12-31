<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\http\Requests\SkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();

        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Skill $skill)
    {
        $skills = Skill::all();

        $title = "Inserimento nuova skill";
        $method = "POST";
        $route = route("admin.skills.store");
        $skill = null;
        return view('admin.skills.create-edit', compact("title", "method", "route", "skill", "skills"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillRequest $request)
    {
        $form_data_skill = $request->all();

        $form_data_skill['slug'] = Skill::generateSlug($form_data_skill['name']);

        $new_skill= Skill::create($form_data_skill);

        return redirect()->route('admin.skills.index', $new_skill);
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
    public function edit(Skill $skill)
    {
        $skills = Skill::all();

        $title = "Modifica skill";
        $method = "PUT";
        $route = route("admin.skills.update", $skill);
        return view('admin.skills.create-edit', compact("title", "method", "route", "skill", "skills"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillRequest $request, Skill $skill)
    {
        $form_data_skill = $request->all();
        if($form_data_skill["name"] != $skill->name){
            $form_data_skill["slug"] = Skill::generateSlug($form_data_skill['name']);
        }else{
            $form_data_skill["slug"] = $skill->slug;
        }

        $skill->update($form_data_skill);
        return redirect()->route('admin.skills.index', $skill);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route("admin.skills.index")->with("success", "La skill è stata eliminata correttamente");
    }
}
