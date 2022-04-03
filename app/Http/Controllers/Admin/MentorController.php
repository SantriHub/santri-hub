<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index()
    {
        return view('pages.admin.mentors.index');
    }

    public function create()
    {
        return view('pages.admin.mentors.create');
    }
}
