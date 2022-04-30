<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required|max:255',
        ]);
        $this->validate($request, [
            'birthdate' => 'required',
        ]);
        $this->validate($request, [
            'avatar' => 'required',
        ]);

        $data = (object) $request->all();
        $path = $request->file('avatar')->store('public/authors');

        $author = new Author;
        $author->fullname = $data->fullname;
        $author->birthdate = $data->birthdate;
        $author->avatar = $path;
        $author->save();

        return redirect()->route('news');
    }
}
