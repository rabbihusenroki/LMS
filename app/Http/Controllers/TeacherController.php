<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\TeacherBanner;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function AllTeacher(){
        $teachers = Teacher::latest()->get();
        return view('admin.contents.teacher.teacher', compact('teachers'));
    }
    public function AddTeacher(){
        return view('admin.contents.teacher.create_teacher');
    }


    public function StoreTeacher(Request $request){
    
        $validatedData = $request->validate([
    
            'name' => 'required|min:5',
            'position' => 'required|min:5',
            'teacher_description' => 'required|min:5',
            'degree' => 'required|min:5',
            'experience' => 'required|min:5',
            'hobbies' => 'required|min:5',
            'faculty' => 'required|min:5',
            'mail' => 'required|min:5',
            'call' => 'required|min:11',
            'image' => 'required|mimes:jpg,jpeg,png',
        ],
        [
        'name.required' => 'Teacher name field does not empty',
        'position.required' => 'Teacher position field does not empty',
        'teacher_description.required' => 'Teacher Description field does not empty',
        'degree.required' => 'Degree field does not empty',
        'experience.required' => 'Experience field does not empty',
        'hobbies.required' => 'Hobbies field does not empty',
        'faculty.required' => 'Faculty name field does not empty',
        'mail.required' => 'Mail field does not empty',
        'call.required' => 'Number field does not empty',
        'image.mimes' => 'Image file format must be JPEG,JPG,PNG',
        'image.required' => 'Please choose teacher image'
    
        ]);
    
        $teacher_image = $request->file('image');
        $image_generate = hexdec(uniqid());
        $image_extension = strtolower($teacher_image->getClientOriginalExtension());
        $image_name = $image_generate.'.'.$image_extension;
        $image_upload = 'images/teacher/';
        $image = $image_upload.$image_name;
        $teacher_image->move($image_upload,$image_name);
    
        Teacher::insert([
    
        'name' => $request->name,
        'position' => $request->position,
        'description' => $request->teacher_description,
        'degree' => $request->degree,
        'experience' => $request->experience,
        'hobbies' => $request->hobbies,
        'faculty' => $request->faculty,
        'mail' => $request->mail,
        'call' => $request->call,
        'image' => $image,
        'created_at' => Carbon::now()
    
    
        ]);
        return Redirect()->back()->with('success', 'Teacher inserted successfully!');
        }

        public function EditTeacher($id){
            $teacher_edit = Teacher::find($id);
            return view('admin.contents.teacher.edit_teacher',compact('teacher_edit'));
        
        }
        public function UpdateTeacher(Request $request, $id){

            $validatedData = $request->validate([

                'name' => 'required|min:5',
                'position' => 'required|min:5',
                'teacher_description' => 'required|min:5',
                'degree' => 'required|min:5',
                'experience' => 'required|min:5',
                'hobbies' => 'required|min:5',
                'faculty' => 'required|min:5',
                'mail' => 'required|min:5',
                'call' => 'required|min:11',
                ],
                [
                    'name.required' => 'Teacher name field does not empty',
                    'position.required' => 'Teacher position field does not empty',
                    'teacher_description.required' => 'Teacher Description field does not empty',
                    'degree.required' => 'Degree field does not empty',
                    'experience.required' => 'Experience field does not empty',
                    'hobbies.required' => 'Hobbies field does not empty',
                    'faculty.required' => 'Faculty name field does not empty',
                    'mail.required' => 'Mail field does not empty',
                    'call.required' => 'Number field does not empty',
            
                ]);
                $old_image = $request->old_image;
                $teacher_image = $request->file('image');
                if($teacher_image){

                $image_generate = hexdec(uniqid());
                $image_extension = strtolower($teacher_image->getClientOriginalExtension());
                $image_name = $image_generate.'.'.$image_extension;
                $image_upload = 'images/teacher/';
                $image = $image_upload.$image_name;
                $teacher_image->move($image_upload,$image_name);
                unlink($old_image);
                Teacher::find($id)->update([
            
                    'name' => $request->name,
                    'position' => $request->position,
                    'description' => $request->teacher_description,
                    'degree' => $request->degree,
                    'experience' => $request->experience,
                    'hobbies' => $request->hobbies,
                    'faculty' => $request->faculty,
                    'mail' => $request->mail,
                    'call' => $request->call,
                    'image' => $image,
                    'created_at' => Carbon::now()
                ]);
                return Redirect()->route('all.teacher')->with('success', 'Teacher updated successfully!');



                }else{

                    Teacher::find($id)->update([
            
                        'name' => $request->name,
                        'position' => $request->position,
                        'description' => $request->teacher_description,
                        'degree' => $request->degree,
                        'experience' => $request->experience,
                        'hobbies' => $request->hobbies,
                        'faculty' => $request->faculty,
                        'mail' => $request->mail,
                        'call' => $request->call,
                        'created_at' => Carbon::now()
                    ]);
                        return Redirect()->route('all.teacher')->with('success', 'Teacher updated successfully!');
        

                }
        }



        public function DeleteTeacher($id){

        $image = Teacher::find($id);
        $old_image = $image->image;
        unlink($old_image);
        Teacher::find($id)->Delete();
        return Redirect()->back()->with('success','Teacher Permanently Deleted!');
        }

        public function AllTeachers(){

            $teachers = Teacher::latest()->paginate(6);
            $teacher_banners = TeacherBanner::latest()->get();
            return view('layouts.pages.teacher',compact('teachers','teacher_banners'));
            
            }
            public function TeacherDetails($id){
    
                $teacher_details = Teacher::find($id);
                $teacher_banners = TeacherBanner::latest()->get();
                return view('layouts.pages.teacher_details',compact('teacher_details','teacher_banners'));
                }
}
