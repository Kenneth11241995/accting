<?php

namespace App\Http\Controllers;

use App\Leader;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;

class LeaderController extends Controller
{

    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('leaderslist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $userLevel = \Auth::user()->id;
        if($userLevel == 1){
            return view('addLeader');  
        }else{
            return view('noAccess');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'first_name'=>'required',
            'last_name'=> 'required',
            'email_address' => 'required',
            'contact_number' => 'required',
            'home_address' => 'required',
            'image' => 'required',
            'percentage' => 'required',
            'schedules' => 'required'
        ]);



        $leader = new Leader;

        $leader->leader_id = '1';
        $leader->first_name = $request->get('first_name');
        $leader->last_name = $request->get('last_name');
        $leader->email_address = $request->get('email_address');
        $leader->contact_number = $request->get('contact_number');
        $leader->home_address = $request->get('home_address');
        $leader->percentage = $request->get('percentage');
        $leader->schedules = $request->get('schedules');

        if ($request->has('image')) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
            $leader->image = $imageName;
        }else{
            $leader->image = 'default.jpg';
        }

        $leader->save();
        $id = $leader->id;
        $pr_id = $id;
        $pr_id = sprintf("%05d", $pr_id);
        
        $leader->leader_id = 'FX'.$pr_id;
        $leader->save();
        return redirect('/dashboard/leaders')->with('success', 'Leader Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function show(Leader $leader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function edit(Leader $leader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leader $leader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leader $leader)
    {
        //
    }
}
