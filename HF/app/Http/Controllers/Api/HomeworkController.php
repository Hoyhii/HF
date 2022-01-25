<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeworkRequest;
use App\Models\Homework;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homework = Homework::all();
        return response()->json($homework);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeworkRequest $request)
    {
        $homework = new Homework();
        $homework->fill($request->all());
        $homework->save();
        return response()->json($homework, 201);
    }

    
    public function show(Homework $homework)
    {
        return response()->json($homework);
    }

    
    public function edit(Homework $Homework)
    {
        //
    }

    
    public function update(HomeworkRequest $request, Homework $homework)
    {
        $homework->fill($request->all());
        $homework->save();
        return response()->json($homework, 200);
    }

    
    public function destroy(int $id)
    {
        Homework::destroy($id);
        return response()->noContent();
    }
}
