<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clock;
class TimeInController extends Controller
{
   private $totalhours=9;
    public function getTime(){
        $someTime = Carbon::createFromFormat('H:i:s', '18:15:10')->addHours(10)->addMinutes(15)->addSeconds(20)->toTimeString();

        echo $someTime;
        
        
    }
   public function index(){
    $clock=Clock::get();
       return view('dashboard',compact('clock'));
   }
   public function storeclockin(Request $request){
    $clock= new clock();
    $clock->userid=$request['userid'];
    $clock->starttime= $request['starttime'];;
    $clock->save();
   }
   public function startbreak(){
    $clock=new Clock();
    $clock->userid=$request['userid'];
    $clock->startbreak=$request['startbreak'];
    $clock->endbreak=$request['endbreak'];
    $clock->save();
   }
   public function totalhours(){
     $this->totalhours;  
   }
  
}