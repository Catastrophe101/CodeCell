<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;
class profiledetails extends Controller
{
    public function submit(Request $request){
$this->validate( $request,[
  'name'=>'required',
'Class'=>'required'
]);


$profile = new profiles;
$message->name=$request->import('name');
$message->class=$request->import('class');
$message->platform=$request->import('platform');
return redirect('/');
    }
}
