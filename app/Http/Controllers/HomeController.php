<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TextData;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $textData = TextData::oldest()->get();

        return view('home', compact('textData'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        TextData::create($validatedData);

        return redirect('/home')->with('success', 'Text data has been added!');
    }

}
