<?php

namespace App\Http\Controllers;
use App\Models\Choose;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ChooseController extends Controller
{
    public function AllChoose(){
        $chooses = Choose::latest()->get();
        return view('admin.contents.choose.choose', compact('chooses'));
    }
    public function AddChoose(){
        return view('admin.contents.choose.create_choose');
    }


    public function StoreChoose(Request $request){
    
        $validatedData = $request->validate([
    
        'title' => 'required|min:5',
        'description' => 'required|min:5',
        'image' => 'required|mimes:jpg,jpeg,png',
        ],
        [
        'title.required' => 'Title field does not empty',
        'description.required' => 'Description name field does not empty',
        'image.mimes' => 'Image file format must be JPEG,JPG,PNG',
        'image.required' => 'Please choose image'
    
        ]);
    
        $choose_image = $request->file('image');
        $image_generate = hexdec(uniqid());
        $image_extension = strtolower($choose_image->getClientOriginalExtension());
        $image_name = $image_generate.'.'.$image_extension;
        $image_upload = 'images/choose/';
        $image = $image_upload.$image_name;
        $choose_image->move($image_upload,$image_name);
    
        Choose::insert([
    
        'title' => $request->title,
        'description' => $request->description,
        'image' => $image,
        'created_at' => Carbon::now()
    
    
        ]);
        return Redirect()->back()->with('success', 'Choose inserted successfully!');
        }
        public function EditChoose($id){

            $choose_edit = Choose::find($id);
            return view('admin.contents.choose.edit_choose',compact('choose_edit'));
        
        }
        public function UpdateChoose(Request $request, $id){

            $validatedData = $request->validate([

                'title' => 'required|max:255',
                ],
                [
                'title.required' => 'Slider title name field does not empty',
            
                ]);
                $old_image = $request->old_image;
                $choose_image = $request->file('image');
                if($choose_image){

                $image_generate = hexdec(uniqid());
                $image_extension = strtolower($choose_image->getClientOriginalExtension());
                $image_name = $image_generate.'.'.$image_extension;
                $image_upload = 'images/choose/';
                $image = $image_upload.$image_name;
                $choose_image->move($image_upload,$image_name);
                unlink($old_image);
                Choose::find($id)->update([
            
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image,
                'created_at' => Carbon::now(),
                ]);
                return Redirect()->route('all.choose')->with('success', 'Choose updated successfully!');



                }else{

                    Choose::find($id)->update([
            
                        'title' => $request->title,
                        'description' => $request->description,
                        'created_at' => Carbon::now(),
                        ]);
                        return Redirect()->route('all.choose')->with('success', 'Choose updated successfully!');
        

                }
        }



        public function DeleteChoose($id){

        $image = Choose::find($id);
        $old_image = $image->image;
        unlink($old_image);
        Choose::find($id)->Delete();
        return Redirect()->back()->with('success','Choose Permanently Deleted!');
        }


}
