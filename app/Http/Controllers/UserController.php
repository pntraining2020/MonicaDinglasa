<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
class UserController extends Controller
{
   public function index(){
       $users=Users::all();
       return view('dashboard',compact('users'));
   }

   
   public  function store(Request $request){
    $users= new Users();
    $users->firstname= $request['firstname'];
    $users->lastname= $request['lastname'];
    $users->save();
   }
}