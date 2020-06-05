<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ApartmentType;

class ApartmentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Apartments Type';
        $apartmenttype = ApartmentType::latest()->paginate(15);
        return view('dashboard.property-category', compact('title'))->with('apartmenttype',$apartmenttype);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apartmenttype = new ApartmentType;
        $apartmenttype->name = $request->input('name');

        $apartmenttype->save();
        return redirect('/property-category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apartmenttype = ApartmentType::findorFail($id);
        $title = "Edit Property Type";
        return view('dashboard.property-edit', compact('title'))->with('apartmenttype',$apartmenttype);
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
        $apartmenttype = ApartmentType::find($id);
        $apartmenttype->name = $request->input('name');
        $apartmenttype->update();

        return redirect('/property-category')->with('status', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apartmenttype = ApartmentType::findorFail($id);
        $apartmenttype->delete();

        return redirect('/property-category')->with('status', 'Deleted');
    }
}
