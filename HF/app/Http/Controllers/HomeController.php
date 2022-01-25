<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homework;

class HomeController extends Controller
{
    public function index() {
        $homeworkCount = Homework::count();
        $homeworkAvg = Homework::avg('points');

        return view('stats', [
            'homeworkCount' => $homeworkCount,
            'homeworkAvg' => $homeworkAvg,
        ]);
    }
}
