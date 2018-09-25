<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Image;
use Illuminate\Support\Facades\Storage;


class UploadfileController extends Controller
{
    function index(){
    	return view('upload');

    }
    function upload(Request $request){

    	$this->validate($request,[
    		'select_file'=>'required|image|mimes:jpeg,png,jpg,gif']);

    	$path = $request->file('select_file')->store('public/images');  
        $new_image = new Image();
        $url = Storage::url($path);
        $new_image->image_path = $url;  
        $new_image->save();	
    	return back()->with('success','Enregistrer')->with('path',$url);
    }


    public function getAllImages(){
        $images = Image::all();
        
        return view('images-views', compact('images'));

    }
}
