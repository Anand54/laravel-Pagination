<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class memberController extends Controller
{
    function show(){
        $data = Member::paginate(5);
        return view('memberView',['members'=>$data]);
    }
}
