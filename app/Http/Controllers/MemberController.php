<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller //creating new conference member
{
    public function create(Request $req){
         $req->validate([
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



    //----------------------------------------------------------------------------------------
    public function update(Request $req){//updating information from the second form
         $member=Member::find($req['id']);

        if(isset($req['company'])){
         $member->company=$req['company'];}

        if(isset($req['position'])){
            $member->position=$req['position'];}

        if(isset($req['description'])){
            $member->about_me=$req['description'];}

        if($req->hasFile('photo')) {
            $file = $req->file('photo');
            $file->move(public_path() . '/media',$file->getClientOriginalName());
            $member->photo=$file->getClientOriginalName();
        }

            $member->save();


        return redirect('social');
    }

        public function getall(){
        $member=new Member();
        return view('all', ['data'=>$member->all()]);
        }


}


