<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userlist;

class UserlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Userlist::all();

        return view('backend.userlist.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.userlist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'list_name' => 'required',
            'provider' => 'required',
            'api_key' => 'required',
            'api_password' => 'required',
            'phone_number' => 'required',
            'url' => 'required',
        ]);

        $list = new UserList;
        $list->list_name = $request->list_name;
        $list->provider = $request->provider;
        $list->api_key = $request->api_key;
        $list->api_password = $request->api_password;
        $list->phone_number = $request->phone_number;
        $list->url = $request->url;
        $list->save();

        return redirect()->route('lists.index')->with('success', 'List created successfully.');
    }

    public function destroy($id)
    {
        $list = Userlist::findOrFail($id);
        $list->delete();
        return redirect()->route('lists.index')->with('success', 'List deleted successfully');
    }
    public function edit($id)
    {
        $list = Userlist::findOrFail($id);
        return view('backend.userlist.edit', compact('list'));
    }

    public function update(Request $request, $id)
    {
        $list = Userlist::findOrFail($id);
        $list->update($request->all());
        return redirect()->route('lists.index')->with('success', 'List updated successfully');
    }
}
