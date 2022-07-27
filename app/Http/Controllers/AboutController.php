<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Teacher;
use App\Models\Testimonial;
use App\Models\Notice;
use App\Models\Banner;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AllAbout(){
        $abouts = About::latest()->get();
        return view('admin.contents.about.about', compact('abouts'));
        return view('layouts.pages.about', compact('abouts'));
    }
    public function AddAbout(){
        return view('admin.contents.about.create_about');
    }


    public function StoreAbout(Request $request){
    
        $validatedData = $request->validate([
    
        'name' => 'required|min:5',
        'description' => 'required|min:5',
        'image' => 'required|mimes:jpg,jpeg,png',
        ],
        [
        'name.required' => 'Name field does not empty',
        'description.required' => 'Description name field does not empty',
        'image.mimes' => 'Image file format must be JPEG,JPG,PNG',
        'image.required' => 'Please choose image'
    
        ]);
    
        $about_image = $request->file('image');
        $image_generate = hexdec(uniqid());
        $image_extension = strtolower($about_image->getClientOriginalExtension());
        $image_name = $image_generate.'.'.$image_extension;
        $image_upload = 'images/about/';
        $image = $image_upload.$image_name;
        $about_image->move($image_upload,$image_name);
    
        About::insert([
    
        'name' => $request->name,
        'description' => $request->description,
        'image' => $image,
        'created_at' => Carbon::now()
    
    
        ]);
        return Redirect()->back()->with('success', 'About inserted successfully!');
        }
        public function EditAbout($id){

            $about_edit = About::find($id);
            return view('admin.contents.about.edit_about',compact('about_edit'));
        
        }
        public function UpdateAbout(Request $request, $id){

            
                $old_image = $request->old_image;
                $about_image = $request->file('image');
                if($about_image){

                $image_generate = hexdec(uniqid());
                $image_extension = strtolower($about_image->getClientOriginalExtension());
                $image_name = $image_generate.'.'.$image_extension;
                $image_upload = 'images/about/';
                $image = $image_upload.$image_name;
                $about_image->move($image_upload,$image_name);
                unlink($old_image);
                About::find($id)->update([
            
                'name' => $request->name,
                'description' => $request->description,
                'image' => $image,
                'created_at' => Carbon::now(),
                ]);
                return Redirect()->route('all.about')->with('success', 'About updated successfully!');



                }else{

                    About::find($id)->update([
            
                        'name' => $request->name,
                        'description' => $request->description,
                        'created_at' => Carbon::now(),
                        ]);
                        return Redirect()->route('all.about')->with('success', 'About updated successfully!');
        

                }
        }



        public function DeleteAbout($id){

        $image = About::find($id);
        $old_image = $image->image;
        unlink($old_image);
        About::find($id)->Delete();
        return Redirect()->back()->with('success','About Permanently Deleted!');
        }
        public function About(){
            $abouts = About::latest()->get();
            $testimonials = Testimonial::latest()->get();
            $notices = Notice::latest()->inRandomOrder()->take(3)->get();
            $teachers = Teacher::latest()->inRandomOrder()->take(4)->get();
            $banners = Banner::latest()->get();
            return view('layouts.pages.about', compact('abouts','teachers','testimonials','notices','banners'));
        }
        
}
