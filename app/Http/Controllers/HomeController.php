<?php

namespace App\Http\Controllers;

use App\Models\TextData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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

        return redirect('/home')->with('status', 'Blog has been added!');
    }
    public function edit($id)
    {
        // Get the blog post with the given ID
        $blogPost = TextData::findOrFail($id);

        // Return the edit view with the blog post data
        return view('edit', ['blogPost' => $blogPost]);
    }

    // public function update(Request $request, $id)
    // {
    //     $validatedData = $request->validate([
    //         'edit-title' => 'required',
    //         'edit-body' => 'required',
    //     ]);

    //     $textData = TextData::find($id);
    //     $textData->title = $validatedData['title'];
    //     $textData->body = $validatedData['body'];
    //     $textData->save();

    //     return redirect()->route('home')->with('status', 'Blog updated successfully!');


    // }
    public function update(Request $request, $id)
{
    // Validate the input fields
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
    ]);

    // Update the blog post with the given ID
    $blogPost = TextData::findOrFail($id);
    $blogPost->title = $validatedData['title'];
    $blogPost->body = $validatedData['body'];
    $blogPost->save();

    // Redirect back to the homepage
        return redirect()->route('home')->with('status', 'Blog updated successfully!');
}


    public function delete($id)
    {
        $textData = TextData::find($id);
        $textData->delete();
        return redirect()->route('home')->with('status', 'Blog deleted successfully!');
    }

}
