<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PostImage;

class ImageUploadController extends Controller
{
    //Add image
    public function addImage(){
        return view('image.add_image');
    }
    //Store image
    public function storeImage(Request $request){
       /*Logic to store data*/
       $data= new Postimage();

            $file=$request->file('image');
            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/Image'), $filename);
                $data['image']= $filename;
                $data->save();
                return redirect()->route('images.view');
            }
           
           return redirect()->route('images.add');
    }
		//View image
    public function viewImage(){
        $data=PostImage::all();
        return view('image.view_image',compact('data'));
    }
}