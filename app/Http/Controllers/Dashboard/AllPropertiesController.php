<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\Category;
use App\User;
use App\Location;
use App\Type;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Storage;
use Carbon\Carbon;
use Image;

class AllPropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'All Properties';
        $property = Auth::user()->property()->latest()->paginate(15); 
        $allp = Property::count();
        $apartmenttypes = Category::all();
        $location = Location::all();
        return view('dashboard.all-properties', ['title'=>$title,'property' => $property, 'apartmenttypes' => $apartmenttypes, 'location' => $location, 'allp'=>$allp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartmenttype = Category::all();
        $location = Location::all();
        $type = Type::all();
        $title = "Create New Property";
        return view('dashboard.create', compact('title'))->with(['apartmenttype'=>$apartmenttype,'location'=>$location, 'type'=>$type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|min:10',
            'description' => 'required|min:20',
            'apartmenttype' => 'required',
            'type' => 'required'

        ]);

        $post=auth()->user()->property()->create($request->all());
        $post->apartmenttype()->attach($request->apartmenttype);
        $post->location()->attach($request->location);
        $post->type()->attach($request->type);

        $this->storeFeaturedImage($post);
        

        return redirect('/dashboard/all-properties')->with('success', 'Updated');
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
        if (Auth::user()->id == Property::find($id)->user->id)
        {

            $property = Property::findorFail($id);
            $title = "Edit Property Post";
            return view('dashboard.all-property-edit', compact('property', 'title'));

        }

        else

        {

            return redirect('/dashboard/all-properties');

        }
        
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
        $property = Property::findorFail($id);

        $user = auth()->user();
        $oldPicture = $user->featured_image; 

        $property->title = $request->input('title');
        $property->description = $request->input('description');
        $property->price = $request->input('price');

        $property->update($request->all());

        Storage::disk('local')->delete($oldPicture);

        $this->storeFeaturedImage($property);
        
        return redirect('/dashboard/all-properties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::findorFail($id);
        $property->delete();

        return redirect('/dashboard/all-properties')->with('status', 'Deleted');
    }

    public function trashed()
    {
        $property = Property::onlyTrashed()->paginate(15);
        $title = 'Trashed Bin';
        return view('dashboard.properties-bin',compact('title'))->with('property', $property);
    }

    public function restore($id)
    {
        $property = Property::withTrashed()->where('id', $id)->first();

        $property->restore();

        return redirect('/dashboard/properties-bin')->with('status', 'Deleted');
    }

     public function delete($id)
    {
        $property = Property::withTrashed()->where('id', $id)->first();
        
        $property->forceDelete();

        return redirect('/dashboard/properties-bin')->with('status', 'Deleted');
    }

    private function storeFeaturedImage($post)
    {
        
        if (request()->has('featured_image')){

            $original = request()->file('featured_image')->getClientOriginalName();

            $post->update([
                'featured_image' => request()->file('featured_image')->storeAs('uploads', $original),
            ]);

            $image = Image::make(request()->file('featured_image'));
            Storage::disk('s3')->put('uploads', $image->stream(), 'public');
            $image = Storage::disk('s3')->temporaryUrl("uploads", Carbon::now()->addMinutes(5));
            
            
            
        }
    }
}
