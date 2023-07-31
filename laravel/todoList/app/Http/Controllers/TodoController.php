<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use Termwind\Components\Li;

class TodoController extends Controller
{
    public function index()
    {
        return view('welcome', ['listItems' => ListItem::all()]);
    }

    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|max:255'
        ]);

        if (auth->attempt($incomingFields)) {
            $request->session()->regenerate();
            return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function createItem(Request $request)
    {
        $incomingFields = $request->validate([
            'todo' => 'required|max:255'
        ]);

        ListItem::create($incomingFields);

        return view('createItem');
    }
    //
    public function saveItem(Request $request)
    {

        \Log::info(json_encode($request->all()));

        $listItem = new ListItem();
        $listItem->name = $request->todo;
        $listItem->is_complete = 0;
        $listItem->save();

        return redirect('/');
    }

    public function markComplete($id)
    {
        \Log::info($id);
        $listItem = ListItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();
        return redirect('/');
    }
}
