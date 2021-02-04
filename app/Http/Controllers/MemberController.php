<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller //creating new conference member
{
    public function create(Request $req){
        $valid = $req->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'birthdate' => 'required|before:2003-01-01',
            'telephone' => 'required|numeric',
            'e-mail' => 'required|email',
            'report_subject' =>'required|min:3'
        ]);

        $member = new Member();
        $member->firstname=$req['firstname'];
        $member->lastname=$req['lastname'];
        $member->birthdate=$req['birthdate'];
        $member->report_subject=$req['report_subject'];
        $member->telephone=$req['telephone'];
        $member->email=$req['e-mail'];

        $member->save();

        $id=$member->id;

        return view('second',['id'=>$id]);
    }
}


