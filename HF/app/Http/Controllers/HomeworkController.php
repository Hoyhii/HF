<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeworkRequest;
use App\Http\Requests\HomeUpdateRequest;
use App\Models\Homework;


class HomeworkController extends Controller
{
    public function index()
    {
        $homework = Homework::orderBy('name')->get();
        return view('homework.index', [ 'homework' => $homework ]);
    }

    public function create()
    {
        return view('homework.create');
    }

    public function store(HomeworkRequest $request)
    {
        $adatok = $request->only(['name', 'class', 'url','evaluation','points']);

        $homework = new Homework();
        $homework->fill($adatok);
        $homework->save();
        return redirect()->route('homework.index');
    }

    public function show(Homework $homework)
    {
        return view('homework.show', ['homework' => $homework]);
    }

    public function edit(Homework $homework)
    {
        return view('homework.edit', ['homework' =>$homework]);
    }

    public function update(HomeUpdateRequest $request, Homework $homework)
    {
        $adatok = $request->only(['evaluation','points']);
        $homework->fill($adatok);
        $homework->save();
        return redirect()->route('homework.show', $homework->id);
    }

    public function destroy(Homework $homework)
    {
        $homework->delete();
        return redirect()->route('homework.index');
    }
}
