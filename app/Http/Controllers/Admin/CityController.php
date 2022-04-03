<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        // $city = City::latest()->filter(request(['search']));
        $city = City::latest();

        return view('pages.admin.cities.index', ['items' => $city->paginate(5)]);
    }

    public function create()
    {
        return view('pages.admin.cities.create');
    }

    public function store(CityRequest $request)
    {
        $data = $request->all();

        City::create($data);
        return redirect()->route('cities.index')->with('success', 'Add a city');
    }

    public function edit($id)
    {
        $item = City::find($id);

        return view('pages.admin.cities.edit', [
            'item' => $item
        ]);
    }

    public function update(CityRequest $request, $id)
    {
        $item = City::find($id)->update($request->all());
        return redirect()->route('cities.index')->with('success', 'Data Updated');
    }

    public function destroy($id)
    {
        $item = City::findorFail($id);
        $item->delete();

        return redirect()->route('cities.index')->with('success', 'Data deleted');
    }
}
