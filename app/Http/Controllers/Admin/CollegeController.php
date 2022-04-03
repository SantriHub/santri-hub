<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CollegeRequest;
use App\Models\City;
use App\Models\College;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index()
    {
        $colleges = College::latest()->filter(request(['search']));
        return view('pages.admin.colleges.index', ["items" => $colleges->paginate(5)]);
    }

    public function create()
    {
        $countries = Country::all()->where('active');
        $states = State::all()->where('active');
        $cities = City::all()->where('active');

        return view('pages.admin.colleges.create', [
            "countries" => $countries,
            "states" => $states,
            "cities" => $cities
        ]);
    }

    public function store(CollegeRequest $request)
    {
        $data = $request->all();

        College::create($data);
        return redirect()->route('colleges.index')->with('success', 'Add a college');
    }

    public function edit($id)
    {
        $item = College::find($id);
        $countries = Country::all()->where('active');
        $states = State::all()->where('active');
        $cities = City::all()->where('active');
        return view('pages.admin.colleges.edit', [
            'item' => $item,
            "countries" => $countries,
            "states" => $states,
            "cities" => $cities
        ]);
    }

    public function update(CollegeRequest $request, $id)
    {
        $item = College::find($id)->update($request->all());
        return redirect()->route('colleges.index')->with('success', 'Data Updated');
    }

    public function destroy($id)
    {
        $item = College::findorFail($id);
        $item->delete();

        return redirect()->route('colleges.index')->with('success', 'Data deleted');
    }
}
