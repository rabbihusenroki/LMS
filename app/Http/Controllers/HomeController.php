<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{
    public function AllSlider(){
        $sliders = Slide::latest()->get();
        return view('admin.contents.slider.slider', compact('sliders'));
    }
    public function AddSlider(){
        return view('admin.contents.slider.create_slider');
    }


    public function StoreSlider(Request $request){
    
        $validatedData = $request->validate([
    
        'title' => 'required|min:5',
        'description' => 'required|min:5',
        'image' => 'required|mimes:jpg,jpeg,png',
        ],
        [
        'title.required' => 'Brand name field does not empty',
        'description.required' => 'Description name field does not empty',
        'image.mimes' => 'Image file format must be JPEG,JPG,PNG',
        'image.required' => 'Please choose brand image'
    
        ]);
    
        $slider_image = $request->file('image');
        $image_generate = hexdec(uniqid());
        $image_extension = strtolower($slider_image->getClientOriginalExtension());
        $image_name = $image_generate.'.'.$image_extension;
        $image_upload = 'images/slider/';
        $image = $image_upload.$image_name;
        $slider_image->move($image_upload,$image_name);
    
        Slide::insert([
    
        'title' => $request->title,
        'description' => $request->description,
        'image' => $image,
        'created_at' => Carbon::now()
    
    
        ]);
        return Redirect()->back()->with('success', 'Slider inserted successfully!');
        }

        public function EditSlider($id){

            $slide_edit = Slide::find($id);
            return view('admin.contents.slider.slider_edit',compact('slide_edit'));
        
        }
        public function UpdateSlider(Request $request, $id){

            $validatedData = $request->validate([

                'title' => 'required|max:255',
                ],
                [
                'title.required' => 'Slider title name field does not empty',
            
                ]);
                $old_image = $request->old_image;
                $slider_image = $request->file('image');
                if($slider_image){

                $image_generate = hexdec(uniqid());
                $image_extension = strtolower($slider_image->getClientOriginalExtension());
                $image_name = $image_generate.'.'.$image_extension;
                $image_upload = 'images/slider/';
                $image = $image_upload.$image_name;
                $slider_image->move($image_upload,$image_name);
                unlink($old_image);
                Slide::find($id)->update([
            
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image,
                'created_at' => Carbon::now(),
                ]);
                return Redirect()->route('all.slider')->with('success', 'Slider updated successfully!');



                }else{

                    Slide::find($id)->update([
            
                        'title' => $request->title,
                        'description' => $request->description,
                        'created_at' => Carbon::now(),
                        ]);
                        return Redirect()->route('all.slider')->with('success', 'Slider updated successfully!');
        

                }
        }



        public function DeleteSlider($id){

        $image = Slide::find($id);
        $old_image = $image->image;
        unlink($old_image);
        Slide::find($id)->Delete();
        return Redirect()->back()->with('success','Brand Permanently Deleted!');
        }

}
