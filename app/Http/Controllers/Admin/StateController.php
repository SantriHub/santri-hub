<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StateRequest;
use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function index()
    {
        $state = State::latest()->filter(request(['search']));

        return view('pages.admin.states.index', ['items' => $state->paginate(5)]);
    }

    public function create()
    {
        return view('pages.admin.states.create');
    }


    public function store(StateRequest $request)
    {
        $data = $request->all();

        State::create($data);
        return redirect()->route('states.index')->with('success', 'Add a state');
    }

    public function edit($id)
    {
        $item = State::find($id);

        return view('pages.admin.states.edit', [
            'item' => $item
        ]);
    }

    public function update(StateRequest $request, $id)
    {
        $item = State::find($id)->update($request->all());
        return redirect()->route('states.index')->with('success', 'Data Updated');
    }

    public function destroy($id)
    {
        $item = State::findorFail($id);
        $item->delete();

        return redirect()->route('states.index')->with('success', 'Data deleted');
    }
}
