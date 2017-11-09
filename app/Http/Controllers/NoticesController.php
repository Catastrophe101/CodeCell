<?php

namespace App\Http\Controllers;

use App\Notices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class NoticesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("notices");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_notices(Request $request)
    {
        if(!(DB::table('notices')
            ->where('link',$request->link)
            ->first())) {
            /*$notice=new Notices;
            $notice->link=$request->link;
            $notice->platform=$request->platform;
            $notice->title=$request->title;
            $notice->start_date=$request->start_date;
            $notice->end_date=$request->end_date;
            $notice->save();
            */

            $notice=new Notices;
            $notice->title=Input::get('title');
            $notice->link=Input::get('link');
            $notice->platform=Input::get('platform');
            $notice->start_date=Input::get('start_date');
            $notice->end_date=Input::get('end_date');

            $notice->save();

            return view('notices');
        }
        else{
            dd('Already Exists');
        }
    }


}
