<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $images = Image::latest()->paginate(5);
        return view('Image.dashboard',compact('images'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('Image.upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            
        ]);
        // dd(round( $request->file('image')->getSize()/ 1024 / 1024,4) . 'MB');
        $input = $request->all();
        $fileSize  = $request->file('image')->getSize();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $input['file_size'] = round( $fileSize/ 1024 / 1024,4) . 'MB';
        }
        // $image = new Image;
 
        // $image->file_size = round( $request->file('image')->getSize()/ 1024 / 1024,4) . 'MB' ;
 
        // $image->save();
        
        Image::create($input);
        return redirect()->route('dashboard')
                        ->with('success','Image created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {  
        return view('Image.view',compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect()->route('dashboard')
                        ->with('success','Image deleted successfully');
    }
}
