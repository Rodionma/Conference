<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function create(Request $req){
        $valid = $req->validate([
            'firstname' => 'required',
            'lastname' => 'required',

            'date' => 'required',
            '' => 'required|min:5',
        ]);

        $member = new Member();


        $member->save();

        return redirect()->route('main');
    }
}
