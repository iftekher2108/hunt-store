<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catagories = catagory::paginate(10);
        return view('dashboard.catagories.index',compact('catagories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.catagories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        $request->validate([
            'catagory_title' => 'required|string|unique:catagories,catagory_title',
            'catagory_picture' => 'nullable|mimes:png,jpg',
            'catagory_slug' => 'required|string|unique:catagories,catagory_slug',
            'status' => 'required'
        ]);

        $catagory = new catagory;

        $catagory->catagory_title = $request->catagory_title;
        $catagory->catagory_slug = $request->catagory_slug;
         if(isset($request->catagory_picture)) {
            $dir_path = 'catagory';
            $img_name = time().'cat'.'.'.$request->catagory_picture->extension();

            $request->catagory_picture->storeAs($dir_path,$img_name,'public');

            $catagory->catagory_picture = $img_name;
         }


         $catagory->status = $request->status;
         $catagory->save();

         return redirect()->route('catagory.index')->with('success','Catagory Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function delete($id)
    {
        $catagory = catagory::FindOrFail($id);

        if(!$catagory->catagory_picture == '' || !$catagory->catagory_picture == null) {
            Storage::delete('public/catagory/'.$catagory->picture);
        }

        $catagory->delete();

        return redirect()->route('catagory.index')->with('delete','Catagory Delete Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(catagory $catagory)
    {
        //
    }
}
