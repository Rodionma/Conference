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
            'country' => 'required',
            'report_subject' =>'required|min:3'
        ]);//validation

        $member = new Member();
        $member->firstname=$req['firstname'];
        $member->lastname=$req['lastname'];
        $member->birthdate=$req['birthdate'];
        $member->report_subject=$req['report_subject'];
        $member->country=$req['country'];
        $member->telephone=$req['telephone'];
        $member->email=$req['e-mail'];

        $member->save();//saving data from request


       return '/updateform/';
    }



    //----------------------------------------------------------------------------------------
    public function update(Request $req){//updating information from the second form

        $member=Member::orderby('id','desc')->first();

        if(isset($req['company'])){
         $member->company=$req['company'];}

        if(isset($req['position'])){
            $member->position=$req['position'];}

        if(isset($req['description'])){
            $member->about_me=$req['description'];}//if data is set get it

        if($req->hasFile('photo')) {
            $file = $req->file('photo');
            $file->move(public_path() . '/media',$file->getClientOriginalName());
            $member->photo=$file->getClientOriginalName();
        }//moving photo to directory

            $member->save();


        return redirect(route('social'));
    }

        public function getall(){ //getting all members
        $member=new Member();
        return view('all', ['data'=>$member->all()]);
        }


}


