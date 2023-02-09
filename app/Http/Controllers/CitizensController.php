<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;

class CitizensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $citizens =  Citizen::all();

        return view('citizens.index', compact('citizens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('citizens.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        // dd($r->all());

        $r->validate([
            'full_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'ward_id' => 'required'
        ]);

        $citizen = new Citizen();
        $citizen->create([
            'full_name' => $r->full_name,
            'address' => $r->address,
            'phone' => $r->phone,
            'gender' => $r->gender,
            'ward_id' => $r->ward_id

        ]);


        return redirect()->route('citizens.create')->with('success', 'Citizens Registration successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citizen = Citizen::with('Ward')->where('id', $id)->first();
        // dd($citizen);
        return view('citizens.show', compact('citizen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
