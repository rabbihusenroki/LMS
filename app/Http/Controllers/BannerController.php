<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\CourseBanner;
use App\Models\TeacherBanner;
use App\Models\BlogBanner;
use App\Models\ContactBanner;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function AllBanner(){
        $banners = Banner::latest()->get();
        $course_banners = CourseBanner::latest()->get();
        $teacher_banners = TeacherBanner::latest()->get();
        $blog_banners = BlogBanner::latest()->get();
        $contact_banners = ContactBanner::latest()->get();
        return view('admin.contents.banner.banner', compact('banners','course_banners','teacher_banners','blog_banners','contact_banners'));
    }
    public function AddBanner(){
        return view('admin.contents.banner.create_banner');
    }

    public function StoreBanner(Request $request){
    
        $banner_image = $request->file('about_banner');
        $image_generate = hexdec(uniqid());
        $image_extension = strtolower($banner_image->getClientOriginalExtension());
        $image_name = $image_generate.'.'.$image_extension;
        $image_upload = 'images/banner/';
        $about_image = $image_upload.$image_name;
        $banner_image->move($image_upload,$image_name);

        Banner::insert([

            'about_banner' => $about_image,
            'created_at' => Carbon::now()
        
        
            ]);
            return Redirect()->back()->with('success', 'About Banner inserted successfully!');
}
public function DeleteAboutBanner($id){

    $image = Banner::find($id);
    $old_image = $image->about_banner;
    unlink($old_image);
    Banner::find($id)->Delete();
    return Redirect()->back()->with('success','About Banner Permanently Deleted!');
    }


//CourseBanner
    public function StoreCourseBanner(Request $request){
    
    



        $banner_image = $request->file('course_banner');
        $image_generate = hexdec(uniqid());
        $image_extension = strtolower($banner_image->getClientOriginalExtension());
        $image_name = $image_generate.'.'.$image_extension;
        $image_upload = 'images/banner/course/';
        $course_image = $image_upload.$image_name;
        $banner_image->move($image_upload,$image_name);

        CourseBanner::insert([

            'course_banner' => $course_image,
            'created_at' => Carbon::now()
        
        
            ]);
            return Redirect()->back()->with('success', 'Course Banner inserted successfully!');
}



public function DeleteCourseBanner($id){

    $image = CourseBanner::find($id);
    $old_image = $image->course_banner;
    unlink($old_image);
    CourseBanner::find($id)->Delete();
    return Redirect()->back()->with('success','Course Banner Permanently Deleted!');
    }


    //TeacherBanner
    public function StoreTeacherBanner(Request $request){
    
    



        $banner_image = $request->file('teacher_banner');
        $image_generate = hexdec(uniqid());
        $image_extension = strtolower($banner_image->getClientOriginalExtension());
        $image_name = $image_generate.'.'.$image_extension;
        $image_upload = 'images/banner/teacher/';
        $teacher_image = $image_upload.$image_name;
        $banner_image->move($image_upload,$image_name);

        TeacherBanner::insert([

            'teacher_banner' => $teacher_image,
            'created_at' => Carbon::now()
        
        
            ]);
            return Redirect()->back()->with('success', 'Teacher Banner inserted successfully!');
}



public function DeleteTeacherBanner($id){

    $image = TeacherBanner::find($id);
    $old_image = $image->teacher_banner;
    unlink($old_image);
    TeacherBanner::find($id)->Delete();
    return Redirect()->back()->with('success','Teacher Banner Permanently Deleted!');
    }


    //BlogBanner
    public function StoreBlogBanner(Request $request){
    
    



        $banner_image = $request->file('blog_banner');
        $image_generate = hexdec(uniqid());
        $image_extension = strtolower($banner_image->getClientOriginalExtension());
        $image_name = $image_generate.'.'.$image_extension;
        $image_upload = 'images/banner/blog/';
        $blog_image = $image_upload.$image_name;
        $banner_image->move($image_upload,$image_name);

        BlogBanner::insert([

            'blog_banner' => $blog_image,
            'created_at' => Carbon::now()
        
        
            ]);
            return Redirect()->back()->with('success', 'Blog Banner inserted successfully!');
}



public function DeleteBlogBanner($id){

    $image = BlogBanner::find($id);
    $old_image = $image->blog_banner;
    unlink($old_image);
    BlogBanner::find($id)->Delete();
    return Redirect()->back()->with('success','Blog Banner Permanently Deleted!');
    }



//ContactBanner
public function StoreContactBanner(Request $request){
    
    



    $banner_image = $request->file('contact_banner');
    $image_generate = hexdec(uniqid());
    $image_extension = strtolower($banner_image->getClientOriginalExtension());
    $image_name = $image_generate.'.'.$image_extension;
    $image_upload = 'images/banner/contact/';
    $contact_image = $image_upload.$image_name;
    $banner_image->move($image_upload,$image_name);

    ContactBanner::insert([

        'contact_banner' => $contact_image,
        'created_at' => Carbon::now()
    
    
        ]);
        return Redirect()->back()->with('success', 'Contact Banner inserted successfully!');
}



public function DeleteContactBanner($id){

$image = ContactBanner::find($id);
$old_image = $image->contact_banner;
unlink($old_image);
ContactBanner::find($id)->Delete();
return Redirect()->back()->with('success','Contact Banner Permanently Deleted!');
}


}
