<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovaController extends Controller
{
    public function setProject(Request $request)
    {
        session()->put('project_id', $request->get('project_id'));

        return redirect()->back();
    }
}
