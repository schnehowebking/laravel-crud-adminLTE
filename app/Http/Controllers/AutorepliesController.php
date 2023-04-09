<?php

namespace App\Http\Controllers;

use App\Models\Autoreplies;
use Illuminate\Http\Request;

class AutorepliesController extends Controller
{public function index()
    {
        $autoreplies = Autoreplies::all();
        return view('backend.userlist.autoreplies.index', compact('autoreplies'));
    }

    public function create()
    {
        return view('backend.userlist.autoreplies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'keyword' => 'required|unique:autoreplies',
            'status' => 'required',
        ]);

        Autoreplies::create([
            'keyword' => $request->input('keyword'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('autoreplies.index')
            ->with('success', 'Autoreplies created successfully.');
    }

    public function edit(Autoreplies $autoreply)
    {
        return view('backend.userlist.autoreplies.edit', compact('autoreply'));
    }

    public function update(Request $request, Autoreplies $autoreply)
    {
        $request->validate([
            'keyword' => 'required|unique:autoreplies,keyword,' . $autoreply->id,
            'status' => 'required',
        ]);

        $autoreply->keyword = $request->input('keyword');
        $autoreply->status = $request->input('status');
        $autoreply->save();

        return redirect()->route('autoreplies.index')
            ->with('success', 'Autoreplies updated successfully.');
    }

    public function destroy(Autoreplies $autoreply)
    {
        $autoreply->delete();
        return redirect()->route('autoreplies.index');
    }
}
