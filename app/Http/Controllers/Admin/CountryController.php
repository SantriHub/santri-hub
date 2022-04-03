<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CountryRequest;
use Illuminate\Http\Request;
use App\Models\Country;


class CountryController extends Controller
{
    public function index()
    {
        $country = Country::latest()->filter(request(['search']));

        return view('pages.admin.countries.index', ['items' => $country->paginate(5)]);
    }

    public function create()
    {
        return view('pages.admin.countries.create');
    }

    public function store(CountryRequest $request)
    {
        $data = $request->all();

        Country::create($data);
        return redirect()->route('countries.index')->with('success', 'Add a country Success');
    }

    public function edit($id)
    {
        $item = Country::find($id);

        return view('pages.admin.countries.edit', [
            'item' => $item
        ]);
    }

    public function update(CountryRequest $request, $id)
    {
        $item = Country::find($id)->update($request->all());
        return redirect()->route('countries.index')->with('success', 'Data Updated');
    }

    public function destroy($id)
    {
        $item = Country::findorFail($id);
        $item->delete();

        return redirect()->route('countries.index')->with('success', 'Data deleted');
    }
}
