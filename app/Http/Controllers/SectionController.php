<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'section-name' => 'required|max:255',
        ]);


        $section = new Section;
        $section->name = $request->input('section-name');
        $section->save();

        return redirect()->route('news');
    }
}
