<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MentorRequest;
use App\Models\College;
use App\Models\Mentor;
use App\Models\User;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index()
    {
        $data = Mentor::all();

        return view('pages.admin.mentors.index', ["items" => $data]);
    }

    public function create()
    {
        $dataUser = User::all();
        $dataCollege = College::all();
        return view('pages.admin.mentors.create', ["users" => $dataUser, "colleges" => $dataCollege]);
    }

    public function store(MentorRequest $request)
    {
        $data = $request->all();
        $dataMentor = Mentor::find($data['user_id']);
        if ($dataMentor) {
            return redirect()->route('mentors.index')->with('error', 'Mentor name was used');
        }
        Mentor::create($data);
        return redirect()->route('mentors.index')->with('success', 'Add a Mentor Success');
    }
}
