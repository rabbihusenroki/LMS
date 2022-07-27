<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function AllTestimonial(){
        $tests = Testimonial::latest()->get();
        return view('admin.contents.testimonial.testimonial', compact('tests'));
    }
    public function AddTestimonial(){
        return view('admin.contents.testimonial.create_testimonial');
    }


    public function StoreTestimonial(Request $request){
    
        $validatedData = $request->validate([
        'name' => 'required|min:2',
        'study' => 'required',
        'description' => 'required|min:5',
        'image' => 'required|mimes:jpg,jpeg,png',
        'bg_image' => 'required|mimes:jpg,jpeg,png',
        ],
        [
        'name.required' => 'Name field does not empty',
        'study.required' => 'Study field does not empty',
        'description.required' => 'Description name field does not empty',
        'image.mimes' => 'Image file format must be JPEG,JPG,PNG',
        'image.required' => 'Please choose testimonial image',
        'bg_image.mimes' => 'Image file format must be JPEG,JPG,PNG',
        'bg_image.required' => 'Please choose background image',
    
        ]);
    
        $test_image = $request->file('image');
        $image_generate = hexdec(uniqid());
        $image_extension = strtolower($test_image->getClientOriginalExtension());
        $image_name = $image_generate.'.'.$image_extension;
        $image_upload = 'images/testimonial/';
        $image = $image_upload.$image_name;
        $test_image->move($image_upload,$image_name);

        $test_bg_image = $request->file('bg_image');
        $image_generate = hexdec(uniqid());
        $image_extension = strtolower($test_bg_image->getClientOriginalExtension());
        $image_name = $image_generate.'.'.$image_extension;
        $image_upload = 'images/testimonial/';
        $bg_image = $image_upload.$image_name;
        $test_bg_image->move($image_upload,$image_name);
    
        Testimonial::insert([
        'name' => $request->name,
        'study_at' => $request->study,
        'description' => $request->description,
        'image' => $image,
        'bg_image' => $bg_image,
        'created_at' => Carbon::now()
    
    
        ]);
        return Redirect()->back()->with('success', 'Testimonial inserted successfully!');
        }

        public function EditTestimonial($id){

            $test_edit = Testimonial::find($id);
            return view('admin.contents.testimonial.edit_testimonial',compact('test_edit'));
        
        }
        public function UpdateTestimonial(Request $request, $id){

            $validatedData = $request->validate([
                'name' => 'required|min:2',
                'study' => 'required',
                ],
                [
                'name.required' => 'Name field does not empty',
                'study.required' => 'Study field does not empty',
            
                ]);
                $old_image = $request->old_image;
                $test_image = $request->file('image');
                $old_bg_image = $request->old_bg_image;
                $test_bg_image = $request->file('bg_image');
                if($test_image && $test_bg_image){

                $image_generate = hexdec(uniqid());
                $image_extension = strtolower($test_image->getClientOriginalExtension());
                $image_name = $image_generate.'.'.$image_extension;
                $image_upload = 'images/testimonial/';
                $image = $image_upload.$image_name;
                $test_image->move($image_upload,$image_name);
                unlink($old_image);
                $image_generate = hexdec(uniqid());
                $image_extension = strtolower($test_bg_image->getClientOriginalExtension());
                $image_name = $image_generate.'.'.$image_extension;
                $image_upload = 'images/testimonial/';
                $bg_image = $image_upload.$image_name;
                $test_bg_image->move($image_upload,$image_name);
                unlink($old_bg_image);
                Testimonial::find($id)->update([
                'name' => $request->name,
                'study_at' => $request->study,
                'description' => $request->description,
                'image' => $image,
                'bg_image' => $bg_image,
                'created_at' => Carbon::now(),
                ]);
                return Redirect()->route('all.testimonial')->with('success', 'Testimonial updated successfully!');



                }else{

                    Testimonial::find($id)->update([
                        'name' => $request->name,
                        'study_at' => $request->study,
                        'description' => $request->description,
                        'created_at' => Carbon::now(),
                        ]);
                        return Redirect()->route('all.testimonial')->with('success', 'Testimonial updated successfully!');
        

                }
        }



        public function DeleteTestimonial($id){

        $image = Testimonial::find($id);
        $old_image = $image->image;
        unlink($old_image);
        $bg_image = Testimonial::find($id);
        $old_bg_image = $bg_image->bg_image;
        unlink($old_bg_image);
        Testimonial::find($id)->Delete();
        return Redirect()->back()->with('success','Testimonial Permanently Deleted!');
        }

}
