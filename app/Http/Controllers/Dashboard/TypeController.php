<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
    public function index()
    {
        $title = "All Property Type";
        $type = Type::latest()->paginate(15);
        return view('dashboard.property-type', compact('type', 'title'));
    }

    public function store (Request $request)
    {
        $type = new Type;
        $type->name = $request->input('name');

        $type->save();
        return redirect('/dashboard/property-type');
    }

    public function edit($id)
    {
        $type = Type::findorFail($id);
        $title = "Edit Property Type";
        return view('dashboard.type-edit', compact('title','type'));
    }

    public function update(Request $request, $id)
    {
        $type = Type::find($id);
        $type->name = $request->input('name');
        $type->update();

        return redirect('/dashboard/property-type')->with('status', 'Updated');
    }

    public function destroy($id)
    {
        $type = Type::findorFail($id);
        $type->delete();

        return redirect('/dashboard/property-type')->with('status', 'Deleted');
    }
}
