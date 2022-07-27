<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseBanner;
use Illuminate\Support\Carbon;
class CourseController extends Controller
{
    public function AllCourse(){
        $courses = Course::latest()->get();
        return view('admin.contents.course.course', compact('courses'));
    }
    public function AddCourse(){
        return view('admin.contents.course.create_course');
    }


    public function StoreCourse(Request $request){
    
        $validatedData = $request->validate([
    
        'title' => 'required|min:5',
        'course_description' => 'required|min:5',
        'about_description' => 'required|min:5',
        'apply_description' => 'required|min:5',
        'certificate_description' => 'required|min:5',
        'image' => 'required|mimes:jpg,jpeg,png',
        ],
        [
        'title.required' => 'Course name field does not empty',
        'course_description.required' => 'Course Description field does not empty',
        'about_description.required' => 'About Description field does not empty',
        'apply_description.required' => 'Apply Description field does not empty',
        'certificate_description.required' => 'Description field does not empty',
        'image.mimes' => 'Image file format must be JPEG,JPG,PNG',
        'image.required' => 'Please choose course image'
    
        ]);
    
        $course_image = $request->file('image');
        $image_generate = hexdec(uniqid());
        $image_extension = strtolower($course_image->getClientOriginalExtension());
        $image_name = $image_generate.'.'.$image_extension;
        $image_upload = 'images/course/';
        $image = $image_upload.$image_name;
        $course_image->move($image_upload,$image_name);
    
        Course::insert([
    
        'title' => $request->title,
        'course_description' => $request->course_description,
        'about_description' => $request->about_description,
        'apply_description' => $request->apply_description,
        'certificate_description' => $request->certificate_description,
        'image' => $image,
        'created_at' => Carbon::now()
    
    
        ]);
        return Redirect()->back()->with('success', 'Course inserted successfully!');
        }

        public function EditCourse($id){
            $course_edit = Course::find($id);
            return view('admin.contents.course.course_edit',compact('course_edit'));
        
        }
        public function UpdateCourse(Request $request, $id){

            $validatedData = $request->validate([

                'title' => 'required|max:255',
                ],
                [
                'title.required' => 'Course name field does not empty',
            
                ]);
                $old_image = $request->old_image;
                $course_image = $request->file('image');
                if($course_image){

                $image_generate = hexdec(uniqid());
                $image_extension = strtolower($course_image->getClientOriginalExtension());
                $image_name = $image_generate.'.'.$image_extension;
                $image_upload = 'images/course/';
                $image = $image_upload.$image_name;
                $course_image->move($image_upload,$image_name);
                unlink($old_image);
                Course::find($id)->update([
            
                'title' => $request->title,
                'course_description' => $request->course_description,
                'about_description' => $request->about_description,
                'apply_description' => $request->apply_description,
                'certificate_description' => $request->certificate_description,
                'image' => $image,
                'created_at' => Carbon::now(),
                ]);
                return Redirect()->route('all.course')->with('success', 'Course updated successfully!');



                }else{

                    Course::find($id)->update([
            
                        'title' => $request->title,
                        'course_description' => $request->course_description,
                        'about_description' => $request->about_description,
                        'apply_description' => $request->apply_description,
                        'certificate_description' => $request->certificate_description,
                        'created_at' => Carbon::now(),
                    ]);
                        return Redirect()->route('all.course')->with('success', 'Course updated successfully!');
        

                }
        }



        public function DeleteCourse($id){

        $image = Course::find($id);
        $old_image = $image->image;
        unlink($old_image);
        Course::find($id)->Delete();
        return Redirect()->back()->with('success','Course Permanently Deleted!');
        }

        public function AllCourses(){

            $courses = Course::latest()->paginate(6);
            $course_banners = CourseBanner::latest()->get();
            return view('layouts.pages.course',compact('courses','course_banners'));
            
            }
            public function CourseDetails($id){
    
                $course_details = Course::find($id);
                return view('layouts.pages.course_details',compact('course_details'));
                }
}
